<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>56選手練習培訓(全國賽)</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <?php include_once("inc/header_nav.php") ?>
    <main>
        <div id="PageContent"></div>   <!-- 內容區 -->
        <div id="Modal"></div>         <!-- Modal 容器，永遠存在 -->
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/vue.3.5.13.js"></script>
    <script src="js/bootstrap.js"></script>
    <!-- ✅ 修復 Bug 2：JS 已在 header_nav.php 中，不需要重複寫，把註解移除即可 -->
</body>
</html>