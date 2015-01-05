<?php

namespace Del\Css;

class Css
{
    public static function add()
    {
        $style = '<style>';
        $style .= include(__DIR__.'/karate.css');
        $style .= '</style>';
        return $style;
    }
}
