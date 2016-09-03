<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->band = 'ACDC';
    }
    public function index() {
        render($this, 'main');
    }

    public function christopherme() {                
        render($this);
    }

}
