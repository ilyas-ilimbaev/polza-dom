<div class="popup popup-login">
    <div class="popup-wrapper">
        <span class="popup-title">ДОБРО ПОЖАЛОВАТЬ</span>
        <form action="" class="popup-form auth-form">
            <input type="email" name="email" placeholder="Введите ваш e-mail" class="popup-form__field">
            <div class="popup-form__item">
                <input type="password" name="password" placeholder="Введите пароль" class="popup-form__field">
                <a class="form-reminder-show-password-link" href="">Забыли пароль?</a>
            </div>
            <button class="popup-form__btn" type="submit">войти</button>
        </form>
        <div class="popup-line"></div>
        <div class="popup-socialNetworks">
            <div class="socialNetworks-item socialNetworks-google">
                <div class="socialNetworks-icon">
                    <svg class="icon search-icon">
                        <use xlink:href="img/sprite.svg#google-icon"></use>
                    </svg>
                </div>
                <a href="" class="socialNetworks-link">Войти с помощью Google</a>
            </div>
            <div class="socialNetworks-item socialNetworks-vk">
                <div class="socialNetworks-icon">
                    <svg class="icon search-icon">
                        <use xlink:href="img/sprite.svg#vk-icon"></use>
                    </svg>
                </div>
                <a href="" class="socialNetworks-link">Войти с помощью Вконтакте</a>
            </div>
        </div>
        <div class="popup-link-register">Создать новый аккаунт</div>
    </div>
</div>
<div class="popup popup-register">
    <div class="popup-wrapper">
        <span class="popup-title">РЕГИСТРАЦИЯ</span>
        <form action="" class="popup-form auth-form">
            <input type="text" name="name" placeholder="Введите имя" class="popup-form__field">
            <input type="email" name="email" placeholder="Введите ваш e-mail" class="popup-form__field">
            <input type="password" name="password" placeholder="Введите пароль" class="popup-form__field">
            <div class="popup-form__item">
                <input type="text" name="name" placeholder="Введите пароль" class="popup-form__field">
                <a class="form-reminder-show-password-link" href="">Повторите пароль</a>
            </div>
            <input type="tel" name="tel" placeholder="Введите номер телефона" class="popup-form__field">
            <button class="popup-form__btn" type="submit">регистрация</button>
        </form>
    </div>
</div>
<div id="overlay" class="overlay"></div>