<?php

namespace Del\Css;

class Css
{
    public static function include()
    {
        $style = '<style>';
        $style . = include(__DIR__.'/karate.css');
        $style .= '</style>';
        return $style;
    }
}
