<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Авторизация</h2>
            <form action="Main/selectUser" method="post">
                <div class="mb-3">
                    <label for="form-control">Логин</label>
                    <input type="text" name="login" id="form-control" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="form-control">Пароль</label>
                    <input type="password" name="password" id="form-control" class="form-control" >
                </div>

                <button type="submit" class="btn btn-primary">Авторизироваться</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>