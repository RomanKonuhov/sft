<?php

class Css
{
    const DEFAULT_VALUE = 'default';
    
    protected $_data = array(
        'width' => 0,
        'height' => 0,
        'border_color' => '#333',
        'border_width' => 0,
        'border_style' => 'none',
        'position' => 'relative',
        'float' => 'none',
        'display' => 'block',
        'left' => 0,
        'top' => 0,
        'margin_left' => 0,
        'margin_right' => 0,
        'margin_top' => 0,
        'margin_bottom' => 0,
        'padding_left' => 0,
        'padding_right' => 0,
        'padding_top' => 0,
        'padding_bottom' => 0,
        'color' => self::DEFAULT_VALUE,
        'font_size' => self::DEFAULT_VALUE,
        'font_weight' => self::DEFAULT_VALUE,
        'font_face' => self::DEFAULT_VALUE,
        'background_color' => self::DEFAULT_VALUE,
        'overflow' => 'hidden',
    );



    public function getEncoded(array $cssData)
    {
        return json_encode($cssData);
    }


    public function getDecoded($cssString)
    {
        return json_decode($cssString);
    }


    public function encode(array $cssData)
    {
        foreach ($cssData as $key => $value) {
            $this->setData($key, $value);
        }
        return $this->getEncoded($cssData);
    }


    public function decode($cssString)
    {
        $cssData = $this->getDecoded($cssString);
        foreach ($cssData as $key => $value) {
            $this->setData($key, $value);
            //call_user_func(array($this, 'set'.ucfirst($key)), $value);
        }
        return $cssData;
    }


    public function __call($method, $arguments)
    {
        if (in_array($verb = substr($method, 0, 3), array('set', 'get'))) {
            $accessor = substr($method, 0, 3);
            $key = Tools::underscore(substr($method, 3));
            switch ($accessor) {
                case 'get' :
                    if ($key == 'data') {
                        return $this->_data;
                    }
                    if (isset($this->_data[$key])) {
                        return $this->_data[$key];
                    }
                    break;
                case 'set' :
                    if ($key == 'data') {
                        $key = $arguments[0];
                        $value = $arguments[1];
                    } else {
                        $value = $arguments[0];
                    }
                    if (in_array($key, $this->_data)) {
                        $this->_data[$key] = $value;
                    }
                    break;
            }
        }
        return false;
    }
    
    
    public function __toString()
    {        
        $style = array();

        foreach ($this->_data as $key => $value) {
            if (($value != self::DEFAULT_VALUE) && ($value !== 0)) {
                $key = Tools::hyphenize($key);
                $style[] = $key.":".$value;
            }
        }

        return implode(';', $style);
    }


    public function getPositionValues()
    {
        return array('absolute', 'relative');
    }


    public function getFloatValues()
    {
        return array('none', 'left', 'right');
    }


    public function getDisplayValues()
    {
        return array('block', 'inline', 'inline-block');
    }


    public function getBorderStyleValues()
    {
        return array('none', 'solid', 'dashed', 'dotted');
    }


    public function getOverflowValues()
    {
        return array('hidden', 'visible', 'auto', 'inherit');
    }

}