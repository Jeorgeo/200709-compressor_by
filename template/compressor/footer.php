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
        <? /* Меню каталога */?>
        <?$APPLICATION->IncludeComponent(
          "bitrix:menu",
          "cm_footer-catalog-menu",
          Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "footer_catalog",
            "USE_EXT" => "N"
          )
        );?>
        <div class="link-more footer__link-more link-more--white">
          <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/link-catalog.php"
                    )
                  );
           ?>
        </div>
        <div class="link footer__link">
          <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/site-map.php"
                    )
                  );
           ?>
        </div>
        <div class="link footer__link">
          <? $APPLICATION->IncludeComponent(
                  "bitrix:main.include",
                  "",
                  Array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/include/link-policy.php"
                    )
                  );
           ?>
        </div>
      </div>
      <div class="footer__coll">
        <h4 class="footer__title">
          Покупателям
        </h4>
        <? /* Меню покупателям */?>
        <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "cm_footer-info-menu",
                Array(
                  "ALLOW_MULTI_SELECT" => "N",
                  "CHILD_MENU_TYPE" => "tree_menu",
                  "DELAY" => "N",
                  "MAX_LEVEL" => "2",
                  "MENU_CACHE_GET_VARS" => array(""),
                  "MENU_CACHE_TIME" => "3600",
                  "MENU_CACHE_TYPE" => "N",
                  "MENU_CACHE_USE_GROUPS" => "Y",
                  "ROOT_MENU_TYPE" => "footer_info",
                  "USE_EXT" => "N"
                )
              );?>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/slick/slick.min.js"></script>
  <script src="<?=SITE_TEMPLATE_PATH?>/assets/js/script.js"></script>


  </body>
</html>
