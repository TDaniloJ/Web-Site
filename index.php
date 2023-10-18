<?php
  include("global");

  if((!isset ($_SESSION['login']) == true) and (!isset ($_SESSION['senha']) == true))
  {
    header('location:login.php');
  }