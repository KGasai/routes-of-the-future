<div class="container">
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h2>Регистрация</h2>
            <form action="Main/insertUser" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="form-control">ФИО</label>
                    <input type="text" name="fio" id="form-control" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="form-control">Логин</label>
                    <input type="text" name="login" id="form-control" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="form-control">Email</label>
                    <input type="email" name="email" id="form-control" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="form-control">Аватар</label>
                    <input type="file" name="avatar" id="form-control" class="form-control" accept="image/*">
                </div>
                <div class="mb-3">
                    <label for="form-control">Пароль</label>
                    <input type="password" name="password" id="form-control" class="form-control" >
                </div>
                <div class="mb-3">
                    <label for="form-control">Подтверждение пароля</label>
                    <input type="password" name="repeatPassword" id="form-control" class="form-control" >
                </div>
                <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
            </form>
        </div>
        <div class="col-1"></div>
    </div>
</div>