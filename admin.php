<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>56選手練習培訓(全國賽)</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>
<body>
    <header class="d-flex justify-content-between p-4 border">
        <div>
            <!-- <img src="icon/logo.png" alt=""> -->
           <a href="index.php">大眾運輸查詢系統</a>
        </div>
        <div>
            <a href="admin.php">系統管理</a>
            <a href="admin.php">登出</a>
        </div>
    </header>
    <nav>
        <span class="m-btn btn btn-btn-light" data-btn="routes" onclick="loadpage(this)">路線管理</span>
        <span class="m-btn btn btn-btn-light" data-btn="buses" onclick="loadpage(this)">車輛管理</span>
        <span class="m-btn btn btn-btn-light" data-btn="stations" onclick="loadpage(this)">站點管理</span>
        <span class="m-btn btn btn-btn-light" data-btn="forms" onclick="loadpage(this)">表單管理</span>
    </nav>
    <main>
        
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/vue.3.5.13.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        loadpage($("span[data-btn='routes']"))
        // $("body").html("HI")  // JQUERY 測試語句
        function loadpage(dom){
            console.log($(dom).data('btn'))
            let btn=$(dom).data('btn')
            let page="back/"+ btn + "_manage.php"
            $.get(page,function(r){
                $("main").html(r)
                $(".m-btn").removeClass("active")
                $(dom).addClass('active')
            })
        }
    </script>
</body>
</html>