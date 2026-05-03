<h2 class="text-center">網站管理</h2>
<form id="LoginForm">
    <div class="form-group">
        <label for="acc">帳號</label>
        <input type="text" class="form-control" name="acc">
    </div>
    <div class="form-group">
        <label for="pw">密碼</label>
        <input type="password" class="form-control" name="pw">
    </div>
    <div class="form-group">
        <label for="num_ver">驗證碼</label>
        <input type="text" class="form-control" name="num_ver">
        <input type="text" class="btn btn-warning" value="4567">
        <input type="text" class="btn btn-secondary" value="重新產生驗證碼">
    </div>
    <div class="form-group">
        <input type="button" class="btn btn-primary" value="登入" onclick="getForm()">
    </div>
</form>
<!-- 登入表單區塊 -->