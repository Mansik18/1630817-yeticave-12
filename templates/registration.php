<main>
    <nav class="nav">
        <ul class="nav__list container">
            <?php foreach ($categories as $category) : ?>
                <li class="nav__item">
                    <a href="all-lots.html"><?= strip_tags($category['translation']); ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    </nav>
    <form action="./registration.php" autocomplete="off"
          class="form container <?= ! empty(array_filter($errors)) ? 'form--invalid' : '' ?> "
          method="post">
        <h2>Регистрация нового аккаунта</h2>
        <div class="form__item  <?= ! empty($errors['email']) ? 'form__item--invalid' : '' ?>">
            <label for="email">E-mail <sup>*</sup></label>
            <input id="email" name="email" placeholder="Введите e-mail" type="text">
            <span class="form__error"> <?= $errors['email'] ?? '' ?></span>
        </div>
        <div class="form__item  <?= ! empty($errors['password']) ? 'form__item--invalid' : '' ?>">
            <label for="password">Пароль <sup>*</sup></label>
            <input id="password" name="password" placeholder="Введите пароль" type="password">
            <span class="form__error"> <?= $errors['password'] ?? '' ?></span>
        </div>
        <div class="form__item  <?= ! empty($errors['name']) ? 'form__item--invalid' : '' ?>">
            <label for="name">Имя <sup>*</sup></label>
            <input id="name" name="name" placeholder="Введите имя" type="text">
            <span class="form__error"> <?= $errors['name'] ?? '' ?></span>
        </div>
        <div class=" form__item  <?= ! empty($errors['message']) ? 'form__item--invalid' : '' ?>">
            <label for="message">Контактные данные <sup>*</sup></label>
            <textarea id="message" name="message" placeholder="Напишите как с вами связаться"></textarea>
            <span class="form__error"> <?= $errors['message'] ??  '' ?></span>
        </div>
        <span class="form__error form__error--bottom"><?= ! empty(array_filter($errors)) ? 'Пожалуйста, исправьте ошибки в форме.' : '' ?></span>
        <button class="button" type="submit">Зарегистрироваться</button>
        <a class="text-link" href="#">Уже есть аккаунт</a>
    </form>
</main>

