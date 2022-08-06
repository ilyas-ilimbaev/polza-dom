<div class="popup popup-login">
    <div class="popup-wrapper">
        <span class="popup-title">ДОБРО ПОЖАЛОВАТЬ</span>
        <form action="" class="popup-form auth-form">
            <input type="email" name="email" placeholder="Введите ваш e-mail" class="popup-form__field popup-form__field-login-email">
            <div class="popup-form__item">
                <input type="password" name="password" placeholder="Введите пароль" class="popup-form__field popup-form__field-login-password">
                <a class="form-reminder-show-password-link" href="">Забыли пароль?</a>
            </div>
            <button class="popup-form__btn popup-form__btn-login" type="submit">войти</button>
        </form>
        <div class="popup-line"></div>
        <div class="popup-socialNetworks">
            <div class="socialNetworks-item socialNetworks-google">
                <div class="socialNetworks-icon">
                    <svg class="icon search-icon">
                        <use xlink:href="/img/sprite.svg#google-icon"></use>
                    </svg>
                </div>
                <a href="" class="socialNetworks-link">Войти с помощью Google</a>
            </div>
            <div class="socialNetworks-item socialNetworks-vk">
                <div class="socialNetworks-icon">
                    <svg class="icon search-icon">
                        <use xlink:href="/img/sprite.svg#vk-icon"></use>
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
            <input type="text" name="name" placeholder="Введите имя" class="popup-form__field popup-form__btn-registration-name">
            <input type="email" name="email" placeholder="Введите ваш e-mail" class="popup-form__field popup-form__btn-registration-email">
            <input type="password" name="password" placeholder="Введите пароль" class="popup-form__field popup-form__btn-registration-pass1">
            <div class="popup-form__item">
                <input type="text" name="name" placeholder="Введите пароль" class="popup-form__field popup-form__btn-registration-pass2">
                <a class="form-reminder-show-password-link" href="">Повторите пароль</a>
            </div>
            <input type="tel" name="tel" placeholder="Введите номер телефона" class="popup-form__field popup-form__btn-registration-tel">
            <button class="popup-form__btn popup-form__btn-registration" type="submit">регистрация</button>
        </form>
    </div>
</div>
<div id="overlay" class="overlay"></div>
<div class="popup-calculate-cost">
    <div class="popup-close"></div>
    <div class="popup-item-title">Какой стиль домов вам нравится?</div>
    <div class="calculate-cost-item calculate-cost-item-1">
    <p class="popup-item-subtitle">Поможем определиться с выбором и посчитать стоимость дома по вашим критериям!</p>
    <div class="popup-label__style-house">
        <label for="" class="form-item__label-img">
            <img src="/img/classic-house.png" alt="" class="form-item__custom-radio-img">
            <input type="radio" name="area-house" class="form-item__real-radio"/>
            <div class="form-item__label-text">до 100 кв.м.</div>
        </label>
        <label for="" class="form-item__label-img">
            <img src="/img/modern-house.png" alt="" class="form-item__custom-radio-img">
            <input type="radio" name="area-house" class="form-item__real-radio"/>
            <div class="form-item__label-text">до 100 кв.м.</div>
        </label>
    </div>
    </div>
    <div class="calculate-cost-item calculate-cost-item-2">
    <!-- <span class="popup-item-title"></span> -->
    <label for="" class="form-item__label">
        <input type="radio" name="area-house" class="form-item__real-radio"/>
        <div class="form-item__custom-radio"></div>
        до 100 кв.м.
    </label>
    <label for="" class="form-item__label">
        <input
        type="radio"
        name="area-house"
        class="form-item__real-radio"
        />
        <div class="form-item__custom-radio"></div>
        от 100 до 150 кв.м.
    </label>
    <label for="" class="form-item__label">
        <input
        type="radio"
        name="area-house"
        class="form-item__real-radio"
        />
        <div class="form-item__custom-radio"></div>
        от 150 до 250 кв.м.
    </label>
    </div>
    <div class="calculate-cost-item calculate-cost-item-3">
    <!-- <span class="popup-item-title"></span> -->
    <div class="popup-label__style-house">
        <label for="" class="form-item__label-img">
        <img src="/img/floor-house-1.png" alt="" class="form-item__custom-radio-img">
        <input type="radio" name="area-house" class="form-item__real-radio"/>
        <div class="form-item__label-text">1 этаж</div>
        </label>
        <label for="" class="form-item__label-img">
        <img src="/img/modern-house.png" alt="" class="form-item__custom-radio-img">
        <input type="radio" name="area-house" class="form-item__real-radio"/>
        <div class="form-item__label-text">2 этажа</div>
        </label>
    </div>
    </div>
    <div class="calculate-cost-item calculate-cost-item-4">
    <!-- <span class="popup-item-title"></span> -->
    <label for="" class="form-item__label">
        <input type="radio" name="area-house" class="form-item__real-radio"/>
        <div class="form-item__custom-radio"></div>
        В ближайшее время
    </label>
    <label for="" class="form-item__label">
        <input
        type="radio"
        name="area-house"
        class="form-item__real-radio"
        />
        <div class="form-item__custom-radio"></div>
        В этом году
    </label>
    <label for="" class="form-item__label">
        <input
        type="radio"
        name="area-house"
        class="form-item__real-radio"
        />
        <div class="form-item__custom-radio"></div>
        В следующем году
    </label>
    </div>
    <div class="calculate-cost-item calculate-cost-item-5">
    <!-- <span class="popup-item-title"></span> -->
    <label for="" class="form-item__label">
        <input type="radio" name="area-house" class="form-item__real-radio"/>
        <div class="form-item__custom-radio"></div>
        Да
    </label>
    <label for="" class="form-item__label">
        <input
        type="radio"
        name="area-house"
        class="form-item__real-radio"
        />
        <div class="form-item__custom-radio"></div>
        Планирую купить
    </label>
    </div>
    <div class="calculate-cost-item calculate-cost-item-6">
    <!-- <span class="popup-item-title"></span> -->
    <label for="" class="form-item__label form-item__label-input">
        <span class="form-item__icon-input">
        <svg class="icon">
            <use xlink:href="/img/sprite.svg#icon-input-username"></use>
        </svg>
        </span>
        <input type="text" name="first-name" placeholder="Введите ваше имя" class="form-item__input"/>
    </label>
    <label for="" class="form-item__label form-item__label-input">
        <span class="form-item__icon-input">
        <svg class="icon">
            <use xlink:href="/img/sprite.svg#icon-input-number"></use>
        </svg>
        </span>
        <input type="text" name="first-name" placeholder="Введите ваше имя" class="form-item__input"/>
    </label>
    <button class="form-item__item-button">Отправить</button>
    </div>
    <div class="form-item__button-wrapper">
    <span class="form-item__question-number">
        Вопрос
        <span id="active-number" class="question-number-active">1</span>
        из 5
    </span>
    <button class="form-item__button-prev" disabled>
        <span class="button-prev">
        <svg class="icon arrow-prev">
            <use xlink:href="/img/sprite.svg#arrow-prev"></use>
        </svg>
        </span>
    </button>
    <button class="form-item__button-next">Далее
        <span class="button-next">
            <svg class="icon arrow-next">
                <use xlink:href="/img/sprite.svg#arrow-next"></use>
            </svg>
        </span>
    </button>
    </div>
</div>
<script>
    document.querySelector(".popup-form__btn-registration").addEventListener("click", (e)=>{
        e.preventDefault()
        let name = document.querySelector(".popup-form__btn-registration-name").value
        let email = document.querySelector(".popup-form__btn-registration-email").value
        let password = document.querySelector(".popup-form__btn-registration-pass1").value
        let tel = document.querySelector(".popup-form__btn-registration-tel").value

        ajaxPost("/query/user_existence_check.php",`email=${email}`,(result)=>{
            result = JSON.parse(result)
            if (!result.success) {
                alert("Произошла серверная ошибка. " + result.description)
                return
            }
            if (result.userIsset) {
                alert("Пользователь с таким email'ом уже существует!")
                return
            }
            ajaxPost("/query/added_user.php",`name=${name}&email=${email}&password=${password}&tel=${tel}`, (result)=>{
                result = JSON.parse(result)
                if (!result.success){
                    alert('Ошибка' . result.description)
                    return
                }
                document.cookie = `hash=${result.hash};max-age=31556926;path=/`;
                document.cookie = `id=${result.id};max-age=31556926;path=/`;
                location.reload()
            })
        })


    })

    document.querySelector(".popup-form__btn-login").addEventListener("click", (e)=>{
        e.preventDefault()
        let email = document.querySelector(".popup-form__field-login-email").value
        let password = document.querySelector(".popup-form__field-login-password").value
        console.log(email,password)
        ajaxPost("/query/account_login.php",`email=${email}&password=${password}`, (result)=>{
            console.log(result)
            result = JSON.parse(result)
            console.log(result)
            if (!result.success){
                if (result.userIsset){
                    alert('Ошибка ' + result.description + ". Серверная ошибка")
                } else {
                    alert('Ошибка ' + result.description + ". Неправильные данные")
                }
                return
            }
            document.cookie = `hash=${result.hash};max-age=31556926;path=/`;
            document.cookie = `id=${result.id};max-age=31556926;path=/`;
            location.reload()
        })
    })
</script>