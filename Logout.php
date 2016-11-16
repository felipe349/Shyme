<?php
require 'Usuario.php';
class Logout {
    function index(){
    session_destroy();
    header("Location:Login");
    }
}
