<div class="form-cover">
    <div class="entrance-form">
        <header>
            <h2>Авторизируйтесь</h2>
        </header>
        <form action="" method="POST" >
            <?
            if (!empty($error)) {
                echo $error ;
            }
            ?>
            <label for="">Логин</label>
            <input type="text" required tabindex="1"
                   onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                   onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                   placeholder="Введите логин"
                   title="Введите логин"
                   >
            <label for="">Пароль</label>
            <input type="text" required tabindex="2"
                   onblur="this.placeholder = (this.placeholder === '') ? this.title : this.placeholder;"
                   onfocus="this.placeholder = (this.placeholder === this.title) ? '' : this.placeholder;"
                   placeholder="Введите пароль"
                   title="Введите пароль"
                   >
            <input name="enter" type="submit" value="Войти" tabindex="2">
        </form>
    </div>
</div>