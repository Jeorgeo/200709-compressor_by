<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
  <footer class="footer">
    <div class="container footer__container">
      <div class="footer__coll footer__coll--form">
        <h4 class="footer__title">
          обратная связь
        </h4>
        <form action="" class="footer-form">
          <label class="footer-form__label label">
            <input class="footer-form__input" name="" type="text" placeholder="Имя">
          </label>
          <label class="footer-form__label label">
            <input class="footer-form__input" name="" type="text" placeholder="E-mail">
          </label>
          <label class="footer-form__label label">
            <textarea class="footer-form__input" name="name" rows="2" cols="80" placeholder="Ваше сообщение"></textarea>
          </label>
          <label class="footer-form__checkbox checkbox">
            <input class="checkbox__input visually-hidden" name="" type="checkbox" checked>
            <span class="checkbox__check checkbox__check--white"></span>
            Я принимаю Условия политики конфиденциальности
          </label>
          <button type="submit" name="submit" class="btn footer-form__btn">
            Отправить
          </button>
        </form>
        <hr>
      </div>
      <div class="footer__coll">
        <h4 class="footer__title">
          Контактная информация
        </h4>
        <? $APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                  "AREA_FILE_SHOW" => "file",
                  "PATH" => "/include/company_info.php"
                  )
                );
         ?>
        <div class="icons-box footer__icons-box">
          <p>
            <i class="icon-box icon-box--geo"></i>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/include/company_geo.php"
                      )
                    );
             ?>
          </p>
          <p>
            <i class="icon-box icon-box--wapp"></i>
            <i class="icon-box icon-box--telegram"></i>
            <i class="icon-box icon-box--viber"></i>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/include/company_phone1.php"
                      )
                    );
             ?>
          </p>
          <p>
            <i class="icon-box icon-box--phone"></i>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/include/company_phone2.php"
                      )
                    );
             ?>
          </p>
          <p>
            <i class="icon-box icon-box--mail"></i>
            <? $APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                      "AREA_FILE_SHOW" => "file",
                      "PATH" => "/include/company_mail.php"
                      )
                    );
             ?>
          </p>
          <p>
            <i class="icon-box icon-box--clock"></i>
            <span>
              <? $APPLICATION->IncludeComponent(
											"bitrix:main.include",
											"",
											Array(
												"AREA_FILE_SHOW" => "file",
												"PATH" => "/include/company_shedule.php"
												)
											);
							 ?>
            </span>
          </p>
        </div>
      </div>
      <div class="footer__coll">
        <h4 class="footer__title">
          Каталог товаров
        </h4>
        <ul class="footer__catalog-menu">
          <li><a href="#">Поршневые компрессоры</a></li>
          <li><a href="#">Ременные компрессоры</a></li>
          <li><a href="">Коаксиальные компрессоры</a></li>
          <li><a href="">Винтовые компрессоры</a></li>
          <li><a href="">Передвижные компрессоры</a></li>
          <li><a href="">Дожимные компрессоры</a></li>
          <li><a href="">Подготовка воздуха</a></li>
          <li><a href="">Пневмоинструмент и оснастка</a></li>
          <li><a href="">Запчасти</a></li>
        </ul>
        <a href="" class="link-more footer__link-more link-more--white">
          Посмотреть все товары
        </a>
        <a class="link footer__link" href="#">
          Карта сайта
        </a>
        <a class="link footer__link" href="#">
          Политика конфиденциальности
        </a>
      </div>
      <div class="footer__coll">
        <h4 class="footer__title">
          Покупателям
        </h4>
        <ul class="footer__site-menu">
          <li><a href="#">Бренды</a></li>
          <li><a href="#">Полезно знать</a></li>
          <li><a href="#">Частые вопросы</a></li>
          <li>
            <a href="#">Оплата и доставка</a>
            <ul class="child">
              <li><a href="">Как заказать</a></li>
              <li><a href="">Гарантия качества</a></li>
              <li><a href="">Кредит и рассрочка</a></li>
            </ul>
          </li>
          <li>
            <a href="">О компании</a>
            <ul class="child">
              <li><a href="">Интернет магазин</a></li>
              <li><a href="">Реквизиты</a></li>
              <li><a href="">Система рейтинга</a></li>
            </ul>
          </li>
          <li><a href="">Новости</a></li>
          <li><a href="">Контакты</a></li>
        </ul>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js"></script>


  </body>
</html>
