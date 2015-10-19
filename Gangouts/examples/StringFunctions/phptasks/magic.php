<?php
class Animal{

  public function __construct() {
    $this->created = time();
    $this->logfile_handle = fopen('/var/www/kapil.com/log.txt', 'w');
  }

} ?>

