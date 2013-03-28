<?php
// auto-generated by sfViewConfigHandler
// date: 2013/03/25 16:21:26
$response = $this->context->getResponse();


  $templateName = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_template', $this->actionName);
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (null !== $layout = sfConfig::get('symfony.view.'.$this->moduleName.'_'.$this->actionName.'_layout'))
  {
    $this->setDecoratorTemplate(false === $layout ? false : $layout.$this->getExtension());
  }
  else if (null === $this->getDecoratorTemplate() && !$this->context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('' == 'layout' ? false : 'layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);

  $response->addStylesheet('main.css', '', array ());
  $response->addJavascript('http://code.jquery.com/jquery-1.9.0.js', '', array ());
  $response->addJavascript('http://documentcloud.github.com/underscore/underscore-min.js', '', array ());
  $response->addJavascript('https://raw.github.com/douglascrockford/JSON-js/master/json2.js', '', array ());
  $response->addJavascript('http://backbonejs.ru/backbone-min.js', '', array ());
  $response->addJavascript('apps/view/block.js', '', array ());
  $response->addJavascript('apps/model/block.js', '', array ());
  $response->addJavascript('menu.js', '', array ());


