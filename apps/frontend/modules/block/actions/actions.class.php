<?php

/**
 * block actions.
 *
 * @package    sft.loc
 * @subpackage block
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class blockActions extends sfActions
{
    public function executeIndex(sfWebRequest $request)
    {
        $this->blocks = Doctrine_Core::getTable('Block')
            ->createQuery('a')
            ->execute();
    }


    public function executeShow(sfWebRequest $request)
    {
        $block = $this->getRoute()->getObject();

        $page = Doctrine_Query::create()
            ->select()
            ->from('Page p')
            ->leftJoin('p.Blocks b')
            ->where('b.id = ?', $block->getId())
            ->fetchOne();

        $result = array();
        if ($block->getType() != Block::TYPE_TEXT) {
            foreach ($block->getContent() as $c) {
                $data = $c->getData();
                $data['date'] = $c->getDateTimeObject('created_at')->format('d/m/Y');
                $data['link_block_view'] = '#'.Tools::urlencode($page->getName()).'/block/'.$block->getId().'/view/'.$c->getId();//$this->generateUrl('page', $b);
                $result[] = $data;
            }
        } else {
            $result['content'] = $block->getContent();
        }

        $this->getResponse()->setHttpHeader('Content-type', 'application/json; charset=utf8');
        return $this->renderText(json_encode($result));
    }


    public function executeView(sfWebRequest $request)
    {
        $block = Doctrine_Core::getTable('Block')->find($request->getParameter('block_id'));
        $this->forward404Unless($block);
        $content = $block->getContent($request->getParameter('id'))->getData();
        $content['link_block_view'] = '';
        $this->getResponse()->setHttpHeader('Content-type', 'application/json; charset=utf8');
        return $this->renderText(json_encode($content));
    }


    public function executeNew(sfWebRequest $request)
    {
        $this->form = new BlockForm();
    }


    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));

        $this->form = new BlockForm();

        $this->processForm($request, $this->form);

        $this->setTemplate('new');
    }

    public function executeEdit(sfWebRequest $request)
    {
        $this->forward404Unless($block = Doctrine_Core::getTable('Block')->find(array($request->getParameter('id'))), sprintf('Object block does not exist (%s).', $request->getParameter('id')));
        $this->form = new BlockForm($block);
    }

    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $this->forward404Unless($block = Doctrine_Core::getTable('Block')->find(array($request->getParameter('id'))), sprintf('Object block does not exist (%s).', $request->getParameter('id')));
        $this->form = new BlockForm($block);

//        $put_str = json_decode($request->getContent());
//        $data = array();
//        foreach ($put_str as $k => $v) {
//            $data['block['.$k.']'] = $v;
//        }

        return $this->processForm($request, $this->form);
    }

    public function executeDelete(sfWebRequest $request)
    {
        //$request->checkCSRFProtection();
var_dump('here');exit;
        $this->forward404Unless($block = Doctrine_Core::getTable('Block')->find(array($request->getParameter('id'))), sprintf('Object block does not exist (%s).', $request->getParameter('id')));
        //$block->delete();

        //$this->redirect('block/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $this->getResponse()->setHttpHeader('Content-type', 'application/json; charset=utf8');
        $formName = $form->getName();
        $params = $request->getParameter($formName);
        $form->bind($params, $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $block = $form->save();
            return $this->renderText(json_encode(array('success' => true, 'data' => $block->getFullData($this))));
            //$this->redirect('block/edit?id=' . $block->getId());
        }
        return $this->renderText(json_encode(array('success' => false, 'data' => "Can't save the block")));
    }
}
