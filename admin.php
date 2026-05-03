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
            <!-- 修正：將 href 導向實際處理登出的 PHP 檔案 -->
            <a href="logout.php">登出</a> 
        </div>
    </header>
    <nav>
        <!-- 修正：將 btn-btn-light 改為 btn-light -->
        <span class="m-btn btn btn-light" data-btn="routes" onclick="loadpage(this)">路線管理</span>
        <span class="m-btn btn btn-light" data-btn="buses" onclick="loadpage(this)">車輛管理</span>
        <span class="m-btn btn btn-light" data-btn="stations" onclick="loadpage(this)">站點管理</span>
        <span class="m-btn btn btn-light" data-btn="forms" onclick="loadpage(this)">表單管理</span>
    </nav>
    <main>
        
    </main>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/vue.3.5.13.js"></script>
    <script src="js/bootstrap.js"></script>
    <script>
        // 確保 DOM 完全載入後再執行初始化
        $(function() {
            // 修正：加上 [0] 提取原生 DOM 元素，保持傳參型別與 onclick 觸發時一致
            loadpage($("span[data-btn='routes']")[0]);
        });

        // 保持在全域範圍，讓 onclick 屬性能夠呼叫
        function loadpage(dom){
            // 防護機制：若傳入為空，則終止執行以防報錯
            if(!dom) return; 

            let btn = $(dom).data('btn');
            let page = "back/" + btn + "_manage.php";
            
            $.get(page, function(r){
                $("main").html(r);
                $(".m-btn").removeClass("active");
                $(dom).addClass('active');
            });
        }
    </script>
</body>
</html>