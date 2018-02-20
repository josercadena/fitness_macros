<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crawler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }


    public function index()
    {
       $this->finder();  
    }

    public function finder()
    {
        $url = "http://play.google.com/";
        $html = file_get_html($url);

        $data['price'] = array(); 
        foreach($html->find('.price-container') as $price_tag){
            $data['price'][] = $price_tag->children(1)->children(1)->children(0);
        }
        
        $this->load->view('results', $data);
    }
}
?>