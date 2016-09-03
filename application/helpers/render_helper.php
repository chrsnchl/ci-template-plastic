<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

if (!function_exists('render')) {

    function render($object, $parent = '') {
        $ci = & get_instance();
        $class = $ci->router->class; // gets class name (controller)
        $method = $ci->router->method; // gets function name (controller function)

        if ($parent != ''):
            $ci->data['child'] = $ci->load->view($class . '/' . $method, $object->data, TRUE);
            $ci->load->view('_parent_templates/' . $parent, $ci->data);
        else:
            $ci->load->view($class . '/' . $method, $object->data);
        endif;

        //return $stylesheets;
    }

}