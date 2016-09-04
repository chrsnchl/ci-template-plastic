<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index() {
        $css_path = base_url('assets/dist/css/');
        $this->data['css'][] = $css_path . 'responsive-grid.css';
        $this->data['css'][] = $css_path . 'navigation.css';
        $this->data['css'][] = '//maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css';
        render($this, 'main');
    }

}
