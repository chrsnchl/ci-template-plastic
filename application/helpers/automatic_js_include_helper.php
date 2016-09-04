<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('auto_js') && !function_exists('js_safe_include')) {

    function auto_js($this) {
        $ci = & get_instance();
        $class = $ci->router->class; // gets class name (controller)
        $method = $ci->router->method; // gets function name (controller function)
        //$stylesheets = Array();
        $javascripts = js_safe_include($class, $method);

        return $javascripts;
    }

    function js_safe_include($class, $method) {
        $list = Array();

        //Include stylesheet, but only if it exists
        $path = './assets/dist/js/';

        if ($method != 'index'):
            $file = $class . '/index.js';
            if (file_exists($path.$file)): //global index js
                $list[] = base_url($path.$file);
            endif;
        endif;

        $file = $class . '/' . $method . '.js';
        if (file_exists($path.$file)): //method specific js
            $list[] = base_url($path.$file);
        endif;

        return $list;
    }

}