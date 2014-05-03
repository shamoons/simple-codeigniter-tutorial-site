<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->model('Stock_model');
    $stocks = $this->Stock_model->get_stocks();

    $this->template->set('stocks', $stocks);

    $this->template->build('home');
  }
}