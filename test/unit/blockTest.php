<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';

$t = new lime_test();

$cssData = '{"width":"660px","float":"left","margin_left":"10px","margin_right":"10px","margin_top":"10px","margin_bottom":"10px"}';
$css = new Css();
$css->decode($cssData);
$css->setMarginTop('40px');

$t->comment('CSS tests');
$t->is($css->getWidth(), '660px', 'test width from DB');
$t->is($css->getFloat(), 'left', 'test float from DB');
$t->is($css->getMarginLeft(), '10px', 'test margin-left from DB');
$t->is($css->getMarginTop(), '40px', 'test margin-top from user');