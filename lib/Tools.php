<?php
/**
 * Created by JetBrains PhpStorm.
 * User: artrid
 * Date: 1/17/13
 * Time: 5:26 PM
 * To change this template use File | Settings | File Templates.
 */
class Tools
{
    static public function urlencode($text)
    {
        $text = trim(preg_replace('#[^_\\pL\d]+#u', '-', $text), '-');

        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        $text =  trim(strtolower(preg_replace('/[^-_\w]+/', '-', $text)), '-');

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }


    static public function underscore($text)
    {
        return strtolower(preg_replace('/([a-z]+)([A-Z])/', '\1_\2', $text));
    }


    static public function hyphenize($text)
    {
        return str_replace('_', '-', $text);
    }
}
