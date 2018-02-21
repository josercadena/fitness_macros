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
        $county = "nassau-county-fl";
        $base_url = "https://www.zillow.com/homes/for_sale/";
        $url = $base_url . $county . "/";
        $html = file_get_html($url);

        $data['price'] = array(); 
        foreach($html->find('.zsg-photo-card-caption') as $price_tag){
            $data['price'][] = $price_tag->children(1)->children(1);
        }
        
        $data['page_nums'] = array(); 
        $data['page_nums'] = $html->find('li[class=zsg-pagination_active]');
        foreach($html->find('a[onClick*=SearchMain.changePage] ') as $page_num){
            $data['page_nums'][] = $page_num->children(1);
        }

        $data_temp = ($data['page_nums'][sizeof($data['page_nums'])-2]);
        $data['max_page'] = $data_temp; 


        //$data['page_num'] = end($data_temp['page_nums']);

        $this->load->view('results', $data);
    }
}
?>