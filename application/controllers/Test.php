<?php
require(APPPATH.'/libraries/REST_Controller.php');
class Test extends REST_Controller
{
  public function index_get()
  {
    // Display all books
        echo "hello world";
  }

  public function index_post()
  {
    // Create a new book
  }
}




?>
