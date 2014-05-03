<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $stocks = array(
      array(
        'symbol'    =>  'BBY',
        'name'      =>  'Best Buy',
        'last'      =>  '42.12'
      ),
      array(
        'symbol'    =>  'GOOG',
        'name'      =>  'GOOGLE INC',
        'last'      =>  '420'
      ),      
    );

    $this->template->set('stocks', $stocks);

    $this->template->build('home');
  }
}