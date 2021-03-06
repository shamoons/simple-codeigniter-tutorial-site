<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_model extends CI_Model {

  public function get_stocks($user_symbols)
  {
    if($user_symbols == '') {
      return [];
    }

    $without_spaces = str_replace(' ', '', $user_symbols);
    $with_pluses = str_replace(',', '+', $without_spaces);

    $stocks_csv = file_get_contents("http://finance.yahoo.com/d/quotes.csv?s=$with_pluses&f=snl1");
    $stocks_csv = substr($stocks_csv, 0, -1);

    $quote_array = explode("\n", $stocks_csv);

    $stocks = array();
    foreach ($quote_array as $quote) {
      $stock_quote = str_getcsv($quote, ',', '"');
      $stocks[] = $stock_quote;
    }

    return $stocks;
  }
}