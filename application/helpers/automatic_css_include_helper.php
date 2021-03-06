<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('auto_css') && !function_exists('css_safe_include')) {

    function auto_css($this) {
        $ci = & get_instance();
        $class = $ci->router->class; // gets class name (controller)
        $method = $ci->router->method; // gets function name (controller function)
        //$stylesheets = Array();
        $stylesheets = css_safe_include($class, $method);

        return $stylesheets;
    }

    function css_safe_include($class, $method) {
        $list = Array();

        //Include stylesheet, but only if it exists
        $path = './assets/dist/css/';

        if ($method != 'index'):
            $file = $class . '/index.css';
            if (file_exists($path.$file)): //global index style
                $list[] = base_url($path.$file);
            endif;
        endif;

        $file = $class . '/' . $method . '.css';
        if (file_exists($path.$file)): //global index style
            $list[] = base_url($path.$file);
        endif;

        return $list;
    }

}