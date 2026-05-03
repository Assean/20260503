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
            <img style='width:35px' src=".//icon/logo.png" alt="">
           <a href="index.php">大眾運輸查詢系統</a>
        </div>
        <div>
            <a href="index.php" onclick="login">系統管理</a>
            <!-- <a href="logout.php" class="ml-3">登出</a>  -->
        </div>
    </header>
    <nav class="d-flex justify-content-start p-3">
        <span class="m-btn btn btn-light m-2 p-2" data-btn="routes" onclick="loadpage(this)">路線管理</span>
        <span class="m-btn btn btn-light m-2 p-2" data-btn="buses" onclick="loadpage(this)">車輛管理</span>
        <span class="m-btn btn btn-light m-2 p-2" data-btn="stations" onclick="loadpage(this)">站點管理</span>
        <span class="m-btn btn btn-light m-2 p-2" data-btn="forms" onclick="loadpage(this)">表單管理</span>
    </nav>
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
        loadpage($("span[data-btn='routes']")[0]);
        function loadpage(page){
            $.get(page,function(r){
                $("main").html(r)
            })
        }
        
        function login(){
            // 檢查是否已登入
            $.get("./api/check_login.php"){
                    if(parseInt(r)){
                        location.href='admin.php'
                    }
            }
            // 載入登入表單
            $.get("./front/login.php",(r)=>{
                $("main").html(r)
            })
        }
        // 送出表單
        $.post("./api/login.php",{acc,pw},(r)=>{
                console.log(acc,pw,r)
                if(parseInt(r)==1){
                    location.href='admin.php';
                }else{
                    alert("帳號或密碼錯誤,請重新登入")
                    login();
                }
            })
    </script>
</body>
</html>