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
            <!-- 修復 1：加上執行括號，並阻擋 a 標籤的預設跳轉 -->
            <a href="javascript:void(0)" onclick="login()">系統管理</a>
        </div>
    </header>
    <nav class="d-flex justify-content-start p-3">
        <!-- 保持原樣，透過 data-btn 傳遞目標名稱 -->
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
        loadpage('./front/route_maps.php')
function loadpage(page){
     $.get(page,function(r){
        $("main").html(r)

    })
}

function login(){
    //1. 檢查是否已登入
    $.get("./api/check_login.php",(r)=>{
        if(parseInt(r)){
            location.href='admin.php';
        }
    })

    //2. 載入登入表單
    $.get("./front/login.php",(r)=>{
        $("main").html(r)
    })


}

function getForm(){
    let acc=$("#LoginForm input[name='acc']").val()
    let pw=$("#LoginForm input[name='pw']").val()
    //3. 送出表單登入
    $.post("./api/login.php",{acc,pw},(r)=>{
        console.log(acc,pw,r)
        if(parseInt(r)==1){
            location.href='admin.php';
        }else{
            alert("帳號或密碼錯誤,請重新登入")
            login();
        }
    })
}
    </script>
</body>
</html>