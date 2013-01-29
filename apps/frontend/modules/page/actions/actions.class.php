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
        $this->forward('page', 'show');
    }


    public function executeShow(sfWebRequest $request)
    {
        $pageName = $request->getParameter('name');
        if (!$pageName) {
            $indexPage = Doctrine_Core::getTable('Page')->getIndexPage();
            $pageId = $indexPage->getId();
        } else {
            $page = Doctrine_Core::getTable('Page')->getPageByName($pageName);
            $pageId = $page->getId();
        }

        $this->blocks = Doctrine_Core::getTable('Block')->get($pageId);
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
