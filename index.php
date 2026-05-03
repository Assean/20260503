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
        <div class="form-group mt-3">
            <select name="route" id="" class="d-block m-auto col-6 form-control">
                <option value="1">路線1</option>
                <option value="2">路線2</option>
                <option value="3">路線3</option>
                <option value="4">路線4</option>
                <option value="5">路線5</option>
            </select>
        </div>
        <div class="w-full bg-light m-5 border" id="RouteMap">路網圖</div>
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/vue.3.5.13.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        // $("body").html("HI")  // JQUERY 測試語句
    </script>
</body>
</html>