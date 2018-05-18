<?php
  class PagesController {
    public function home() {
      $first_name = 'Arjun';
      $last_name  = 'Araneta';
      require_once('views/pages/home.php');
    }

    public function error() {
      require_once('views/pages/error.php');
    }
  }
?>