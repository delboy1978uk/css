<?php

namespace Del;

class Css
{
    public static function add()
    {
        $style = '<style type="text/css">';
        $style .= file_get_contents(__DIR__.'/karate.css');
        $style .= '</style>';
        return $style;
    }
}
