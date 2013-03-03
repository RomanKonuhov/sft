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

        $result = array();
        if ($block->getType() != Block::TYPE_TEXT) {
            foreach ($block->getContent() as $c) {
                $data = $c->getData();
                $data['date'] = $c->getDateTimeObject('created_at')->format('d/m/Y');
                $data['link_block_view'] = '/block/view/'.$c->getId();//$this->generateUrl('page', $b);
                $result[] = $data;
            }
        } else {
            $result['content'] = $block->getContent();
        }

        $this->getResponse()->setHttpHeader('Content-type', 'application/json; charset=utf8');
        return $this->renderText(json_encode($result));
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

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }

    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $this->forward404Unless($block = Doctrine_Core::getTable('Block')->find(array($request->getParameter('id'))), sprintf('Object block does not exist (%s).', $request->getParameter('id')));
        $block->delete();

        $this->redirect('block/index');
    }

    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $block = $form->save();

            $this->redirect('block/edit?id=' . $block->getId());
        }
    }
}
