<?php

class user_operation {

  private static $user_info;
  
  public function __construct() {
    self::$user_info = $_SESSION['user_info'];
  }
}
