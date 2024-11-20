<?php
// app/controllers/MembersController.php

class HomeController {
private $home;

    public function __construct()
    {
      require_once '../app/views/home/index.php';
    }

}