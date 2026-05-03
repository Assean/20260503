<?php
session_start();

$acc = $_POST['acc'] ?? '';
$pw  = $_POST['pw']  ?? '';

if ($acc === 'admin' && $pw === '1234') {
    $_SESSION['users'] = 'admin';
    echo 1;
} else {
    echo 0;
}