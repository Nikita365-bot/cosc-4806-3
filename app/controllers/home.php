<?php
session_start();
class Home extends Controller {

    public function index() {
      if (!isset($_SESSION['auth']) || $_SESSION['auth'] != 1) {
      header('Location: /login');
      exit;
			
	    $this->view('home/index');
	    die;
    }

}
