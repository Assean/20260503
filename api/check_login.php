<?php
session_start();
if(!isset($_SESSION['users'])){
    echo 0;
}else{
    echo 1;
}