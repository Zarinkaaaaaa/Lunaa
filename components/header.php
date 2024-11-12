<div class="header-block">
    <div class="before-header">
        <p>Пройдите опрос и получите скидку 20% на первый приём</p>
    </div>

    <header>
        <div class="content">
            <div class="head">
                <ul class="menu">
                    <div class="head-block">
                        <li><a class="logo menuItem" href="index.php">Лу&#x301;на</a></li>
                        <nav>
                            <li><a class="menuItem" href="#">Бестселлеры</a></li>
                            <li><a class="menuItem" href="?page=catalog-face">Лицо</a></li>
                            <li><a class="menuItem" href=" ?page=catalog-hair">Волосы</a></li>
                            <li><a class="menuItem" href=" ?page=catalog-body">Тело</a></li>
                        </nav>
                    </div>
                    <div class="links">
                        <li><a class="menuItem" href="?page=search"><img src="assets/media/header/search.png"
                                    alt="#"></a></li>
                        <li><button class="menuItem" id="openModal"><img src="assets/media/header/person.png"
                                    alt="#"></button></li>
                        <li><a class="menuItem" href=""><img src="assets/media/header/like.png" alt="#"></a></li>
                        <li><a class="menuItem" href=""><img src="assets/media/header/basket.png" alt="#"></a></li>
                    </div>
                </ul>
                <button class="burger">
                    <i class="menuIcon material-icons">menu</i>
                    <i class="closeIcon material-icons">close</i>
                </button>
            </div>
        </div>
    </header>
</div>

<div id="myModal" class="modal">
    <div class="modal-content">
        <span class="close"><img src="assets/media/modal/close.png" alt="#"></span>
        <div class="modals">
            <div id="loginModal" class="login">
                <div class="modal-content-title">
                    <h2>Войти /</h2>
                    <a class="login" href="" id="toRegister">Зарегистрироваться</a>
                </div>
                <form id="loginForm">
                    <div class="form-inputs">
                        <div class="form-inputs-part">
                            <label for="phone">Номер телефона:</label>
                            <input type="tel" id="phone" placeholder="+7" onfocus="addPrefix()" name="phone" required>
                        </div>
                        <div class="form-inputs-part">
                            <label for="password">Пароль:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                    </div>
                    <a class="enter" href="?page=profile">Войти</a>
                    <p>Нажимая на кнопку Войти, я принимаю условия политики обработки персональных данных</p>
                </form>
            </div>

            <div id="registerModal" class="registration">
                <div class="modal-content-title">
                    <h2>Зарегистрироваться /</h2>
                    <a class="login" href="" id="toLogin">Войти</a>
                </div>
                <form action="actions/register.php" id="registerForm" method="post">
                    <div class="form-inputs">
                        <div class="form-inputs-part">
                            <label for="phone">Имя и фамилия:</label>
                            <input type="text" id="name" name="name" required value="
                            <?php
                            if (isset($_SESSION['name'])) {
                                echo $_SESSION['name'];
                                unset($_SESSION['name']);
                            }
                            ?>
                            ">
                            <?php
                            // Вывод ошибок
                            if (isset($_SESSION['errors']['name'])) {
                                ?>
                                <p style="color: red"><?= $_SESSION['errors']['name']; ?></p><?php
                                  unset($_SESSION['errors']['name']);
                            }
                            ?>
                        </div>
                        <div class="form-inputs-part">
                            <label for="phone">Номер телефона:</label>
                            <input type="tel" id="phonee" placeholder="+7" onfocus="addPrefiy()" name="phone" required
                                value="<?php
                                if (isset($_SESSION['phone'])) {
                                    echo $_SESSION['phone'];
                                    unset($_SESSION['phone']);
                                }
                                ?>">
                            <?php
                            // Вывод ошибок
                            if (isset($_SESSION['errors']['phone'])) {
                                ?>
                                <p style="color: red"><?= $_SESSION['errors']['phone']; ?></p><?php
                                  unset($_SESSION['errors']['phone']);
                            }
                            ?>

                        </div>
                        <div class="form-inputs-part">
                            <label for="password">Пароль:</label>
                            <input type="password" id="password" name="password" required value="<?php
                            if (isset($_SESSION['password'])) {
                                echo $_SESSION['password'];
                                unset($_SESSION['password']);
                            }
                            ?>">
                            <?php
                            // Вывод ошибок
                            if (isset($_SESSION['errors']['password'])) {
                                ?>
                                <p style="color: red"><?= $_SESSION['errors']['password']; ?></p><?php
                                  unset($_SESSION['errors']['password']);
                            }
                            ?>
                        </div>
                        <div class="form-inputs-part">
                            <label for="password_rep">Повторите пароль:</label>
                            <input type="password" id="password_rep" name="password_rep" required value="<?php
                            if (isset($_SESSION['password_rep'])) {
                                echo $_SESSION['password_rep'];
                                unset($_SESSION['password_rep']);
                            }
                            ?>">
                            <?php
                            // Вывод ошибок
                            if (isset($_SESSION['errors']['password_rep'])) {
                                ?>
                                <p style="color: red"><?= $_SESSION['errors']['password_rep']; ?></p><?php
                                  unset($_SESSION['errors']['password_rep']);
                            }
                            ?>
                        </div>
                    </div>
                    <button type="submit" class="enter">Зарегистрироваться</button>
                    <p>Нажимая на кнопку Войти, я принимаю условия политики обработки персональных данных</p>
                </form>
            </div>
        </div>
    </div>
</div>
</div>