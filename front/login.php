<h2 class="text-center">網站管理</h2>
<form action="./api/login.php" method="post">
    <div class="form-group">
        <label for="acc">帳號</label>
        <input type="text" class="form-control" name="acc">
    </div>
    <div class="form-group">
        <label for="">密碼</label>
        <input type="text" class="form-control" name="pw">
    </div>
    <div class="form-group">
        <label for="">驗證碼</label>
        <input type="text" class="form-control" name="num_ver">
        <input type="text" class="btn btn-warning" value="4567">
        <input type="text" class="btn btn-secondary" value="重新產生驗證碼">
    </div>
    <div class="form-group">
        <input type="button" value="登入" >
    </div>
</form>