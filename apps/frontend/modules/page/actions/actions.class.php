<?php

/**
 * page actions.
 *
 * @package    sft.loc
 * @subpackage page
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class pageActions extends sfActions
{
    protected function getQuery($alias = 'p')
    {
        return Doctrine_Core::getTable('Page');
    }


    public function executeIndex(sfWebRequest $request)
    {
        $this->setTemplate('show');
        //$this->forward('page', 'show');
    }


    public function executeShow(sfWebRequest $request)
    {
//        $data = array(
//            'title' => 'SNews_1',
//            'date' => date('d-m-Y', time()),
//            'content' => 'Server default content'
//        );
//
//        return $this->renderText(json_encode($data));


        $pageName = $request->getParameter('name');
        if (!$pageName) {
            $indexPage = Doctrine_Core::getTable('Page')->getIndexPage();
            $pageId = $indexPage->getId();
        } else {
            $page = Doctrine_Core::getTable('Page')->getPageByName($pageName);
            $pageId = $page->getId();
        }
        $this->blocks = Doctrine_Core::getTable('Block')->get($pageId);

        $result = array();
        foreach ($this->blocks as $b){
            $data = $b->getData();
            $data['css'] = json_decode($b->getCss());
            $data['template'] = $this->getPartial('page/'.$b->getType());
            $result[] = $data;
        }
//            $r = array();
//            $r['block'] = $b->getData();
//            $r['template'] = $this->getPartial('page/'.$b->getType());
//            $content = array();
//            if ($b->getType() != Block::TYPE_TEXT) {
//                foreach ($b->getContent() as $c) {
//                    $data = $c->getData();
//                    $data['date'] = $c->getDateTimeObject('created_at')->format('d/m/Y');
//                    $data['link_block_view'] = '/block/view/'.$c->getId();//$this->generateUrl('page', $b);
//                    $content[] = $data;
//                }
//            } else {
//                $content = $b->getContent();
//            }
//            $r['bid'] = $b->getParentId();
//            $r['content'] = $content;
//            $result[] = $r;
//        }

        $this->getResponse()->setHttpHeader('Content-type', 'application/json; charset=utf8');
        return $this->renderText(json_encode($result));
    }


    public function executeNew(sfWebRequest $request)
    {
        $this->form = new PageForm();
    }


    public function executeCreate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST));
        $this->form = new PageForm();
        $this->processForm($request, $this->form);
        $this->setTemplate('new');
    }


    public function executeEdit(sfWebRequest $request)
    {
        $page = $this->getRoute()->getObject();
        $this->form = new PageForm($page);
    }


    public function executeUpdate(sfWebRequest $request)
    {
        $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
        $page = $this->getRoute()->getObject();
        $this->form = new PageForm($page);

        $this->processForm($request, $this->form);

        $this->setTemplate('edit');
    }


    public function executeDelete(sfWebRequest $request)
    {
        $request->checkCSRFProtection();

        $page = $this->getRoute()->getObject();
        $page->delete();

        $this->redirect('page/index');
    }


    protected function processForm(sfWebRequest $request, sfForm $form)
    {
        $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
        if ($form->isValid()) {
            $page = $form->save();

            $this->redirect('page/edit?id=' . $page->getId());
        }
    }
}
