<?php
session_start();
if(!isset($_SESSION['users'])){
    echo 1;
}else{
    echo 0;
}