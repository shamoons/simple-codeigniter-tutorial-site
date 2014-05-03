<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_model extends CI_Model {

  public function get_stocks()
  {
    $stocks_csv = file_get_contents('http://finance.yahoo.com/d/quotes.csv?s=MSFT+GOOG+TSLA+MSFT+AAPL+GLD+MU&f=snl1');
    $quote_array = explode("\n", $stocks_csv);

    $stocks = array();
    foreach ($quote_array as $quote) {
      $quote = str_replace('"', '', $quote);
      $stock_quote = explode(',', $quote);
      $stocks[] = $stock_quote;
    }

    return $stocks;
  }
}