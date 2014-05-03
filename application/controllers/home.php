<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->model('Stock_model');

    $user_symbols = $this->input->post('symbols');

    $stocks = $this->Stock_model->get_stocks($user_symbols);

    $this->template->set('stocks', $stocks);

    $this->template->build('home');
  }
}