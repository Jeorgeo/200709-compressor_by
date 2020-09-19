<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>

<main class="main main-page main__main-page">
  <section class="main-slider">
    <img src="<?=SITE_TEMPLATE_PATH?>/img/bg/bg_main.jpg" alt="">
  </section>
  <section class="main-filter">
    <div class="container main-filter__container">
      <div class="tab-box main-filter__tab-box active">
        <span class="btn-icon btn-icon--white">
          <svg width="36" height="32" viewBox="0 0 36 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36 18.1634V19.4416C35.9933 20.5167 35.7435 21.5763 35.2691 22.5411C34.7948 23.5059 34.1082 24.3509 33.2609 25.0127C32.8222 23.9415 32.0365 23.0487 31.0298 22.4773C30.0231 21.9059 28.8538 21.689 27.7091 21.8613C26.5645 22.0337 25.5109 22.5854 24.7171 23.4279C23.9234 24.2704 23.4355 25.3551 23.3316 26.5079L7.0939 26.4149C5.20322 26.3985 3.39587 25.6345 2.06668 24.2899C0.737485 22.9452 -0.00550221 21.1291 3.06817e-05 19.2383V17.9601C0.0164058 16.0691 0.780276 14.2614 2.12486 12.9317C3.46945 11.6019 5.28553 10.8582 7.17659 10.8628L28.9061 10.9868C30.7971 11.0023 32.6049 11.766 33.9343 13.1109C35.2637 14.4558 36.0064 16.2724 36 18.1634Z" fill="#001535"/>
          <path d="M32.7641 25.2568C32.3619 24.3056 31.6546 23.5153 30.7536 23.0105C29.8527 22.5057 28.8093 22.3151 27.7881 22.4688C26.7668 22.6224 25.8258 23.1116 25.1132 23.8592C24.4007 24.6068 23.9573 25.5703 23.8528 26.5977C23.8377 26.7449 23.8301 26.894 23.8291 27.0456C23.8255 27.7358 23.9756 28.4181 24.2685 29.0431C24.5613 29.6681 24.9896 30.22 25.5222 30.659C26.0548 31.0979 26.6785 31.4128 27.3479 31.5808C28.0173 31.7488 28.7158 31.7657 29.3925 31.6304C30.0693 31.495 30.7075 31.2107 31.2607 30.7981C31.814 30.3854 32.2685 29.8549 32.5913 29.2448C32.9141 28.6348 33.0971 27.9605 33.127 27.271C33.1568 26.5814 33.0329 25.8939 32.7641 25.2582V25.2568ZM28.4706 28.6629C28.0483 28.6603 27.6444 28.4902 27.3475 28.1899C27.0506 27.8896 26.8852 27.4837 26.8875 27.0615C26.8875 27.0318 26.8875 27.0012 26.8909 26.9716C26.8909 26.9488 26.894 26.9247 26.8971 26.9026C26.9002 26.871 26.904 26.8396 26.9092 26.8079C26.912 26.7881 26.9159 26.7684 26.9209 26.749C26.9301 26.7042 26.9416 26.6599 26.9553 26.6163L26.9729 26.5588C26.9737 26.5552 26.975 26.5517 26.9767 26.5485C26.9826 26.5302 26.9894 26.5123 26.9974 26.494C27.0053 26.4758 27.0129 26.4551 27.0215 26.4351C27.0378 26.396 27.0562 26.3579 27.0766 26.3207C27.0863 26.3014 27.0969 26.2835 27.1076 26.2653L27.1335 26.2225C27.1941 26.1265 27.2647 26.0372 27.3443 25.9562C27.356 25.9438 27.3674 25.9325 27.3788 25.9218C27.3963 25.9049 27.4132 25.8873 27.4329 25.8725C27.4616 25.8459 27.492 25.8212 27.5238 25.7984C27.5403 25.786 27.5583 25.774 27.5748 25.7616C27.5917 25.7491 27.6093 25.7376 27.6275 25.7271C27.8199 25.6046 28.0365 25.5253 28.2625 25.4946C28.2835 25.4918 28.3045 25.489 28.3266 25.4873C28.3486 25.4856 28.3762 25.4828 28.4013 25.4822C28.4035 25.4817 28.4057 25.4817 28.4079 25.4822C28.4347 25.4822 28.4623 25.4822 28.4892 25.4822C28.5161 25.4822 28.5415 25.4821 28.5674 25.4846C28.5709 25.4841 28.5745 25.4841 28.5781 25.4846C28.6018 25.4846 28.6249 25.4877 28.6487 25.4908C28.6725 25.4939 28.7042 25.4966 28.7317 25.5008C28.7593 25.5049 28.7776 25.5087 28.8006 25.5135C28.8237 25.5183 28.8406 25.5221 28.8606 25.5273C28.8806 25.5314 28.9004 25.5365 28.9198 25.5428C28.9648 25.5554 29.0091 25.5703 29.0525 25.5876C29.0714 25.5945 29.0907 25.602 29.1086 25.61C29.1266 25.6179 29.1469 25.6262 29.1648 25.6351C29.1772 25.6406 29.1889 25.6465 29.2013 25.6534C29.2193 25.6617 29.2368 25.671 29.2537 25.6813C29.2881 25.7006 29.3226 25.7209 29.3553 25.743C29.3726 25.7536 29.3898 25.7654 29.4049 25.7774C29.4201 25.7895 29.4373 25.8005 29.4525 25.8119C29.4843 25.8355 29.5147 25.8608 29.5438 25.8877C29.562 25.9032 29.5782 25.9197 29.5951 25.9359L29.6296 25.9703C29.6571 25.9993 29.6837 26.0282 29.7081 26.0589L29.7453 26.1051C29.7577 26.1213 29.7691 26.1368 29.7798 26.1529C29.8032 26.1857 29.8253 26.2191 29.8452 26.2529C29.8559 26.2696 29.8657 26.2868 29.8745 26.3045C29.8849 26.3218 29.8935 26.339 29.9028 26.3573C29.9208 26.3908 29.9369 26.4253 29.951 26.4606C29.9593 26.4806 29.9679 26.502 29.9744 26.5219C29.981 26.5419 29.9903 26.566 29.9972 26.5881C30.0027 26.6043 30.0082 26.6205 30.012 26.6367L30.0206 26.6656C30.0241 26.6801 30.0272 26.6942 30.0306 26.7087C30.0354 26.7287 30.0403 26.749 30.0437 26.769C30.0471 26.789 30.0502 26.8034 30.053 26.8244C30.0548 26.831 30.056 26.8377 30.0568 26.8444C30.0606 26.8692 30.0633 26.8933 30.0651 26.9182C30.0651 26.9343 30.0675 26.9499 30.0685 26.965C30.0703 26.9793 30.0712 26.9937 30.0713 27.0081C30.0713 27.0329 30.0713 27.0567 30.0713 27.0815C30.0682 27.5033 29.8979 27.9066 29.5978 28.2031C29.2978 28.4995 28.8924 28.6649 28.4706 28.6629Z" fill="#001535"/>
          <path d="M9.46079 30.6805L4.48923 30.6529L6.21532 26.8906L11.1869 26.9182L9.46079 30.6805Z" fill="#001535"/>
          <path d="M27.4556 1.34022V1.83635C27.4528 2.17506 27.3161 2.49893 27.0753 2.73715C26.8345 2.97537 26.5092 3.10858 26.1705 3.10766L22.6149 3.10077C22.3008 3.09762 21.9987 2.9795 21.7657 2.76874C21.5327 2.55799 21.385 2.26919 21.3505 1.95693L17.2609 1.93281L17.2127 10.4565H15.4901L15.5452 0.97502C15.5423 0.723821 15.6375 0.481405 15.8106 0.299321C15.9837 0.117238 16.2209 0.00985262 16.472 0H16.5271L26.1739 0.0551261H26.2394C26.5681 0.0727783 26.8776 0.215924 27.1039 0.45504C27.3302 0.694156 27.4561 1.011 27.4556 1.34022Z" fill="#001535"/>
          <path d="M34.1739 6.15327L34.1498 10.3359C34.1471 10.6746 34.0104 10.9984 33.7696 11.2367C33.5287 11.4749 33.2034 11.6081 32.8647 11.6072H32.8371C31.6733 10.8122 30.2982 10.3839 28.8888 10.3772L19.4521 10.3359C19.4521 10.3152 19.4521 10.2911 19.4521 10.267L19.4763 6.07747C19.4799 5.73903 19.6169 5.41569 19.8575 5.17766C20.0981 4.93963 20.4229 4.80613 20.7614 4.80615L32.906 4.87506C33.243 4.87868 33.5649 5.01484 33.8022 5.25406C34.0395 5.49328 34.173 5.81632 34.1739 6.15327Z" fill="#001535"/>
          <path d="M19.4832 10.9355L28.9061 10.9872C30.3163 10.9955 31.692 11.4237 32.8578 12.2172" fill="#001535"/>
          </svg>
        </span>
        <a class="tab-box__title-link tab-box__title-link--with-icon" href="#">Подобрать поршневой компрессор</a>
      </div>
      <div class="filter-box filter-box--mobile">
        <form class="filter-form filter-box__filter-form" action="" method="post">
          <fieldset class="filter-box__slide">
            <figure>
              <img src="<?=SITE_TEMPLATE_PATH?>/pics/catalog/catalog_001.png" alt="">
            </figure>
            <div class="check-fields">
              <span class="filter-box__title">
                Питание B:
              </span>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                12В
              </label>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                24В
              </label>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                220В
              </label>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                380В
              </label>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                Бензин
              </label>
              <label class="filter-form__checkbox checkbox">
                <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                <span class="checkbox__check"></span>
                Дизель
              </label>
            </div>
          </fieldset>
          <fieldset class="filter-box__runners">
            <span class="filter-box__title">
              Мощность, кВт:
            </span>
            <label class="filter-form__label">
              от
              <input class="filter-form__input" type="text" name="" value="5.3">
            </label>
            <label class="filter-form__label">
              до
              <input class="filter-form__input" type="text" name="" value="40.55">
            </label>
            <span class="filter-form__runner runner">
              <span class="runner__area-runner"></span>
            </span>
            <span class="filter-box__title">
              Давление, Атм:
            </span>
            <label class="filter-form__label">
              от
              <input class="filter-form__input" type="text" name="" value="3.3">
            </label>
            <label class="filter-form__label">
              до
              <input class="filter-form__input" type="text" name="" value="10.55">
            </label>
            <span class="filter-form__runner runner">
              <span class="runner__area-runner"></span>
            </span>
          </fieldset>
          <fieldset class="filter-box__checklist">
            <div class="filter-box__checklist-column">
              <span class="filter-box__title">
                Бренд:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter active js-accordeon-btn"></i>
              <div class="filter-box__checklist-list active">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Абак
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Aircast
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Атлас
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Копко
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Аврора
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Бежецкий
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Blue
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Air
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ceccato
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Comprag
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Elitech
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Фиак
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Fini
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Fubag
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Kaeser
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Kraftmann
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ремеза
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ударник
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column">
              <span class="filter-box__title">
                Для чего нужен компрессор:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Покрасить заборv
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Покрасить авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать легковые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать грузовые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гараж
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Дача
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Шиномонтаж / мастерская
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Автосервис
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Прокачка водоснабжения
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Промывка системы отопления
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Продувка мелких деталей
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  дымогенератор коптильни
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Производство
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Медицина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Стамотология
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пищевая промышленность
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column">
              <span class="filter-box__title">
                Совместим с инструментом:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Аэрограф
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гайковерт для легковых авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гайковерт для грузовых авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать грузовые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Дрель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Краскораспылитель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ножницы по металлу
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Отбойный молоток
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пескоструйный аппарат
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пескоструйный пистолет
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пистолет для накачки шин
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Плазморез
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Полировальная машина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Продувочный пистолет
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Скобозабиватель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Шлифмашина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Углошлифмашина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Хоппер-ковш
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column">
              <span class="filter-box__title">
                Страна бренд:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Беларусь
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Германия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Италия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Швеция
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Россия
                </label>
              </div>
              <span class="filter-box__title">
                Страна изготовитель:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Китай
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Италия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Беларусь
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Швеция
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Германия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Россия
                </label>
              </div>
            </div>
          </fieldset>
          <a href="#" class="btn btn--transparent filter-form__btn">
            Подобрать на инфографике
          </a>
          <a href="#" class="btn filter-form__btn">
            Подобрать
          </a>
        </form>
      </div>
      <div class="tab-box main-filter__tab-box">
        <span class="btn-icon btn-icon--white">
          <svg width="36" height="30" viewBox="0 0 36 30" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 17.5171V20.085C0.00545854 21.9328 0.741642 23.7034 2.0479 25.0103C3.35416 26.3172 5.1244 27.0543 6.97218 27.0607H29.0278C30.8759 27.0552 32.6466 26.3184 33.9531 25.0113C35.2595 23.7042 35.9954 21.9331 36 20.085V17.5171C35.9953 15.7167 35.2961 13.9875 34.048 12.6899C32.8 11.3924 31.0993 10.6264 29.3005 10.5518H29.0278H6.97218C5.12619 10.5581 3.35754 11.2938 2.05157 12.5985C0.745602 13.9031 0.00818542 15.6711 0 17.5171ZM7.51752 23.1052C7.51752 22.9675 7.57195 22.8355 7.66895 22.7379C7.76594 22.6402 7.89763 22.5849 8.03526 22.584H13.4266C13.5536 22.5987 13.6708 22.6595 13.7559 22.755C13.841 22.8505 13.8879 22.9739 13.8879 23.1017C13.8879 23.2296 13.841 23.353 13.7559 23.4484C13.6708 23.5439 13.5536 23.6048 13.4266 23.6195H8.05253C7.98339 23.6218 7.9145 23.6102 7.84991 23.5854C7.78532 23.5607 7.72632 23.5232 7.67645 23.4753C7.62657 23.4273 7.58682 23.3699 7.55953 23.3063C7.53223 23.2427 7.51794 23.1743 7.51752 23.1052ZM7.51752 21.2103C7.51843 21.0735 7.57338 20.9427 7.67038 20.8464C7.76738 20.75 7.89854 20.696 8.03526 20.696H13.4266C13.5633 20.696 13.6946 20.75 13.7915 20.8464C13.8885 20.9427 13.9435 21.0735 13.9444 21.2103C13.9444 21.3479 13.8899 21.4799 13.7929 21.5776C13.6959 21.6752 13.5643 21.7305 13.4266 21.7314H8.05253C7.9149 21.7305 7.78322 21.6752 7.68622 21.5776C7.58922 21.4799 7.53479 21.3479 7.53479 21.2103H7.51752ZM7.51752 19.3222C7.51752 19.1846 7.57195 19.0526 7.66895 18.9549C7.76594 18.8573 7.89763 18.802 8.03526 18.801H13.4266C13.5536 18.8157 13.6708 18.8766 13.7559 18.9721C13.841 19.0675 13.8879 19.1909 13.8879 19.3188C13.8879 19.4466 13.841 19.57 13.7559 19.6655C13.6708 19.761 13.5536 19.8218 13.4266 19.8365H8.05253C7.98339 19.8388 7.9145 19.8273 7.84991 19.8025C7.78532 19.7777 7.72632 19.7403 7.67645 19.6923C7.62657 19.6444 7.58682 19.5869 7.55953 19.5234C7.53223 19.4598 7.51794 19.3914 7.51752 19.3222Z" fill="white"/>
          <path d="M26.1112 27.0602V27.8333C26.1112 27.9828 26.1704 28.1263 26.2758 28.2324C26.3812 28.3384 26.5243 28.3985 26.6738 28.3994H27.7093C27.8588 28.3985 28.0019 28.3384 28.1073 28.2324C28.2127 28.1263 28.2719 27.9828 28.2719 27.8333V27.0498L26.1112 27.0602Z" fill="white"/>
          <path d="M26.0042 29.6182H28.3962C28.5925 29.6182 28.7517 29.459 28.7517 29.2627V29.1591C28.7517 28.9628 28.5925 28.8036 28.3962 28.8036H26.0042C25.8078 28.8036 25.6487 28.9628 25.6487 29.1591V29.2627C25.6487 29.459 25.8078 29.6182 26.0042 29.6182Z" fill="white"/>
          <path d="M9.5919 27.0602V27.8333C9.59191 27.9823 9.53322 28.1252 9.42855 28.2312C9.32388 28.3371 9.18168 28.3976 9.03275 28.3994H7.99727C7.84774 28.3985 7.70465 28.3384 7.59924 28.2324C7.49382 28.1263 7.43466 27.9828 7.43466 27.8333V27.0498" fill="white"/>
          <path d="M7.31043 29.6182H9.7024C9.89874 29.6182 10.0579 29.459 10.0579 29.2627V29.1591C10.0579 28.9628 9.89874 28.8036 9.7024 28.8036H7.31043C7.11409 28.8036 6.95491 28.9628 6.95491 29.1591V29.2627C6.95491 29.459 7.11409 29.6182 7.31043 29.6182Z" fill="white"/>
          <path d="M6.06441 9.95117H8.32521C8.42434 9.95117 8.5047 9.87081 8.5047 9.77169V9.43688C8.5047 9.33776 8.42434 9.2574 8.32521 9.2574H6.06441C5.96528 9.2574 5.88492 9.33776 5.88492 9.43688V9.77169C5.88492 9.87081 5.96528 9.95117 6.06441 9.95117Z" fill="white"/>
          <path d="M18.7283 1.25657V7.4142C18.7292 7.51187 18.7684 7.60529 18.8374 7.67435C18.9065 7.74342 18.9999 7.78262 19.0976 7.78352H28.9656C29.0379 7.78593 29.1092 7.76689 29.1707 7.72881C29.2321 7.69072 29.2808 7.6353 29.3108 7.56952V1.1047C29.2801 1.03948 29.2312 0.984558 29.1699 0.946577C29.1087 0.908596 29.0377 0.88919 28.9656 0.890708H19.0976C19.0005 0.89159 18.9076 0.930311 18.8386 0.998638C18.7696 1.06697 18.7301 1.15951 18.7283 1.25657ZM20.1089 6.18889C20.1098 6.11044 20.1414 6.03546 20.1968 5.97999C20.2523 5.92451 20.3273 5.89295 20.4057 5.89205H22.594C22.6728 5.89205 22.7483 5.92333 22.8039 5.97899C22.8596 6.03466 22.8909 6.11016 22.8909 6.18889C22.8909 6.26761 22.8596 6.34312 22.8039 6.39878C22.7483 6.45445 22.6728 6.48573 22.594 6.48573H20.4057C20.3267 6.48666 20.2504 6.45637 20.1936 6.40144C20.1367 6.34652 20.1038 6.27138 20.102 6.19234L20.1089 6.18889ZM20.1089 5.00154C20.1098 4.9231 20.1414 4.84811 20.1968 4.79264C20.2523 4.73716 20.3273 4.7056 20.4057 4.70471H22.594C22.6728 4.70471 22.7483 4.73598 22.8039 4.79165C22.8596 4.84732 22.8909 4.92282 22.8909 5.00154C22.8909 5.08027 22.8596 5.15577 22.8039 5.21144C22.7483 5.26711 22.6728 5.29838 22.594 5.29838H20.4057C20.3267 5.29931 20.2504 5.26903 20.1936 5.2141C20.1367 5.15917 20.1038 5.08404 20.102 5.005L20.1089 5.00154Z" fill="white"/>
          <path d="M29.335 1.25591C29.3358 1.20215 29.324 1.14897 29.3005 1.10059V7.57231C29.324 7.52393 29.3358 7.47074 29.335 7.41698V1.25591Z" fill="white"/>
          <path d="M18.1898 0H15.7461C15.4488 0 15.2077 0.24107 15.2077 0.538446V8.13884C15.2077 8.43621 15.4488 8.67728 15.7461 8.67728H18.1898C18.4872 8.67728 18.7283 8.43621 18.7283 8.13884V0.538446C18.7283 0.24107 18.4872 0 18.1898 0Z" fill="white"/>
          <path d="M29.3005 1.03897V7.6384C29.3014 7.78033 29.3579 7.91625 29.458 8.01694C29.558 8.11762 29.6936 8.17504 29.8355 8.17685H31.5613C31.7041 8.17595 31.8409 8.11904 31.9422 8.01836C32.0436 7.91767 32.1014 7.78124 32.1032 7.6384V1.03897C32.1023 0.895528 32.0449 0.758218 31.9435 0.656788C31.842 0.555358 31.7047 0.497975 31.5613 0.49707H29.8355C29.693 0.498886 29.5569 0.556778 29.4567 0.658208C29.3566 0.759637 29.3005 0.896437 29.3005 1.03897Z" fill="white"/>
          <path d="M18.7283 7.41699V10.5441H20.1089V9.02198C20.1089 8.93044 20.1453 8.84265 20.21 8.77792C20.2747 8.71319 20.3625 8.67682 20.4541 8.67682C20.5456 8.67682 20.6334 8.71319 20.6981 8.77792C20.7628 8.84265 20.7992 8.93044 20.7992 9.02198V10.5441H21.1444V9.95046C21.1444 9.85891 21.1807 9.77112 21.2455 9.70639C21.3102 9.64166 21.398 9.6053 21.4895 9.6053C21.5811 9.6053 21.6688 9.64166 21.7336 9.70639C21.7983 9.77112 21.8347 9.85891 21.8347 9.95046V10.5441H22.1799V9.95046C22.1799 9.85891 22.2162 9.77112 22.2809 9.70639C22.3457 9.64166 22.4335 9.6053 22.525 9.6053C22.6166 9.6053 22.7043 9.64166 22.7691 9.70639C22.8338 9.77112 22.8702 9.85891 22.8702 9.95046V10.5441H29.0174H29.2901V7.57232C29.2601 7.63809 29.2114 7.69352 29.1499 7.7316C29.0885 7.76969 29.0172 7.78872 28.945 7.78631H19.0976C18.9999 7.78541 18.9065 7.74621 18.8374 7.67715C18.7684 7.60808 18.7292 7.51466 18.7283 7.41699Z" fill="white"/>
          <path d="M13.5337 7.52832H14.0341C14.3125 7.52832 14.5381 7.3027 14.5381 7.02439V5.36073C14.5381 5.08241 14.3125 4.85679 14.0341 4.85679H13.5337C13.2554 4.85679 13.0297 5.08241 13.0297 5.36073V7.02439C13.0297 7.3027 13.2554 7.52832 13.5337 7.52832Z" fill="white"/>
          <path d="M10.0614 10.5447H8.68073V9.2952C8.68164 8.21071 9.11287 7.17091 9.87972 6.40406C10.6466 5.63721 11.6864 5.20599 12.7709 5.20508H13.0332V6.58571H12.7709C12.0526 6.58663 11.3639 6.87238 10.856 7.38031C10.3481 7.88824 10.0623 8.57688 10.0614 9.2952V10.5447Z" fill="white"/>
          <path d="M15.4804 6.59905C15.3596 6.59905 14.8729 6.59905 14.7141 6.59905H14.5381V5.21842H14.7072C15.0528 5.20439 15.399 5.21708 15.7427 5.25638L15.4804 6.59905Z" fill="white"/>
          </svg>
        </span>
        <a class="tab-box__title-link tab-box__title-link--with-icon" href="#">Подобрать Винтовой компрессор</a>
      </div>
      <div class="tab-box main-filter__tab-box">
        <span class="btn-icon btn-icon--white">
          <svg width="40" height="34" viewBox="0 0 40 34" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M36.2188 25.2682C33.7427 23.4112 31.2667 23.2131 28.8649 24.7916C27.975 25.3441 27.2568 26.1339 26.7909 27.0721C26.3251 28.0104 26.1301 29.0599 26.2279 30.1028C26.2712 31.118 26.3021 31.118 25.2622 31.118C21.6595 31.118 18.0506 31.118 14.4479 31.118C13.9094 31.118 13.7856 31.0251 13.8289 30.437C14.0036 29.2742 13.815 28.0859 13.2887 27.0344C12.7624 25.9829 11.9241 25.1195 10.8886 24.5625C9.94936 23.9711 8.85595 23.6714 7.74647 23.7012C6.63698 23.7309 5.5612 24.0888 4.65504 24.7297C4.41362 24.8906 4.15984 25.0392 3.82557 25.2435C3.63368 22.7674 3.68939 20.3842 5.64549 18.5519C6.16547 18.0628 6.19642 17.8029 5.64549 17.2705C5.3673 16.938 5.01207 16.6785 4.61076 16.5145C4.20944 16.3505 3.77415 16.2871 3.34272 16.3296C2.44514 16.4225 1.52898 16.3296 0.619019 16.3296C0.173325 16.3296 0 16.1934 0 15.7106C0.0495215 14.3178 -0.241396 14.4726 1.18235 14.4726C2.2842 14.4726 3.38603 14.4726 4.48789 14.4726C4.76737 14.4452 5.0493 14.4874 5.30851 14.5954C5.56773 14.7034 5.79619 14.8739 5.97355 15.0916C6.97636 16.3296 8.09061 17.3819 9.89195 16.6267C16.6516 16.6267 23.4134 16.6267 30.1772 16.6267C30.5701 16.597 30.9649 16.6519 31.3348 16.7877C31.4534 16.85 31.5831 16.8881 31.7165 16.9C31.8499 16.912 31.9843 16.8974 32.1121 16.8571C32.2398 16.8168 32.3583 16.7516 32.4608 16.6653C32.5632 16.5791 32.6476 16.4734 32.709 16.3543C33.177 15.6382 33.8486 15.0787 34.6375 14.7477C35.4263 14.4167 36.2962 14.3295 37.135 14.4973C37.8928 14.5654 38.6552 14.5654 39.413 14.4973C39.8711 14.4973 40.032 14.6644 39.9949 15.1163C39.9949 16.5834 40.0753 16.2925 38.8435 16.3172C37.9149 16.3172 36.9864 16.3544 36.0517 16.3172C34.9375 16.2553 34.5722 17.2272 33.9037 17.7781C33.7366 17.9143 33.9037 18.0257 34.0028 18.131C36.2312 20.8051 36.5778 21.9627 36.2188 25.2682ZM33.8789 20.8299C33.5146 20.1011 32.946 19.494 32.2425 19.0829C31.539 18.6718 30.731 18.4744 29.9172 18.5148C26.9769 18.5148 24.0365 18.5148 21.0962 18.5148C17.444 18.5148 13.7979 18.5148 10.1457 18.5148C9.40799 18.4963 8.6775 18.6641 8.02182 19.0028C7.36614 19.3414 6.80643 19.84 6.39448 20.4523C6.12211 20.8299 6.25211 20.9042 6.62971 20.9042H32.5047C32.9637 20.9566 33.4283 20.9315 33.8789 20.8299Z" fill="white"/>
          <path d="M14.6584 14.918C12.9871 14.918 11.3219 14.918 9.65055 14.918C9.19247 14.918 8.98201 14.8313 9.03153 14.299C9.08105 13.7666 9.03153 13.1662 9.03153 12.6029C9.06248 11.761 9.44627 11.2967 10.2696 11.2596C10.7648 11.2596 10.8453 11.0429 10.7896 10.6405C10.7338 10.2382 10.9505 9.743 10.6162 9.3654C10.2819 8.9878 10.1272 8.58545 9.71863 9.22923C9.57006 9.46446 9.44008 9.35923 9.26056 9.22923C8.1649 8.23261 8.15872 8.23878 9.19867 7.19883C10.8948 5.50272 12.5971 3.8128 14.2684 2.09812C14.5965 1.76385 14.7079 1.85048 14.9927 2.14142C16.8126 3.99847 18.6449 5.85553 20.502 7.63211C20.8981 8.0221 21.0034 8.2883 20.5329 8.65971C20.3224 8.82684 20.1553 9.04353 19.9572 9.22923C19.7591 9.41494 19.7467 9.49541 19.5425 9.30971C19.3382 9.124 19.2639 8.78968 18.9854 9.02491C18.7068 9.26013 18.3663 9.45825 18.422 9.91014C18.422 10.2506 18.422 10.591 18.422 10.9377C18.422 11.2843 18.4963 11.2905 18.8058 11.2967C19.7715 11.2967 20.18 11.7424 20.1986 12.6895C20.1986 12.9805 20.1986 13.3085 20.1986 13.5747C20.1986 14.9303 20.1986 14.918 18.8739 14.9118C17.5492 14.9056 16.0698 14.918 14.6584 14.918ZM12.5537 8.25113C12.5471 8.52353 12.5951 8.79452 12.6948 9.0481C12.7945 9.30169 12.9439 9.53276 13.1343 9.72773C13.3246 9.92269 13.552 10.0776 13.8032 10.1834C14.0543 10.2891 14.324 10.3435 14.5965 10.3434C15.1393 10.3503 15.6635 10.1453 16.0576 9.77201C16.4518 9.39867 16.6849 8.88642 16.7074 8.344C16.7277 8.06288 16.6906 7.7806 16.5985 7.51423C16.5064 7.24787 16.3611 7.00298 16.1714 6.79449C15.9817 6.586 15.7517 6.41821 15.4952 6.30136C15.2387 6.18451 14.9611 6.12102 14.6794 6.11472C14.3976 6.10842 14.1175 6.15944 13.856 6.26471C13.5946 6.36998 13.3572 6.52736 13.1584 6.72716C12.9596 6.92696 12.8035 7.16505 12.6996 7.42703C12.5956 7.68902 12.546 7.96939 12.5537 8.25113Z" fill="white"/>
          <path d="M27.2925 14.9308C26.2155 14.9308 25.1384 14.9308 24.0551 14.9308C23.8869 14.9457 23.7182 14.91 23.5704 14.8284C23.4226 14.7468 23.3026 14.623 23.2256 14.4727C22.5758 13.4829 22.3022 12.2929 22.4544 11.1187C22.6066 9.94441 23.1745 8.8636 24.0551 8.07208C24.279 7.91297 24.455 7.69554 24.5642 7.44346C24.6733 7.19139 24.7113 6.91426 24.6741 6.64211C24.5813 6.09737 24.8474 5.98595 25.3303 6.02309C26.6797 6.05198 28.0292 6.05198 29.3786 6.02309C29.8367 6.02309 30.0719 6.10975 29.9977 6.64211C29.9535 6.89949 29.9844 7.16412 30.0864 7.40447C30.1885 7.64483 30.3575 7.85074 30.5733 7.99773C31.5237 8.78713 32.1401 9.90706 32.2986 11.1323C32.457 12.3576 32.1459 13.5975 31.4276 14.6027C31.3492 14.7255 31.2382 14.8241 31.107 14.8875C30.9759 14.9509 30.8297 14.9766 30.6848 14.9617C29.521 14.9184 28.3944 14.9308 27.2925 14.9308ZM27.3606 13.148C28.1654 13.148 28.9763 13.148 29.781 13.148C29.8981 13.1709 30.0194 13.1484 30.1205 13.0852C30.2216 13.022 30.295 12.9227 30.3258 12.8075C30.4948 12.3445 30.5526 11.8482 30.4946 11.3587C30.4366 10.8692 30.2642 10.4003 29.9916 9.98966C29.7189 9.57902 29.3536 9.23817 28.9249 8.99471C28.4963 8.75126 28.0165 8.61199 27.5242 8.58811C27.0318 8.56423 26.5408 8.65644 26.0907 8.85726C25.6405 9.05809 25.2439 9.3619 24.9328 9.74423C24.6216 10.1266 24.4048 10.5767 24.2996 11.0583C24.1945 11.5399 24.204 12.0394 24.3275 12.5166C24.4513 12.9994 24.637 13.2037 25.1631 13.1356C25.8626 13.1109 26.5992 13.148 27.3297 13.148H27.3606Z" fill="white"/>
          <path d="M32.1334 33.9346C31.5827 33.9362 31.0372 33.8284 30.5285 33.6173C30.0199 33.4062 29.5583 33.0961 29.1706 32.705C28.783 32.3139 28.4769 31.8495 28.2704 31.339C28.0638 30.8285 27.9608 30.2821 27.9674 29.7315C27.9556 29.1638 28.0583 28.5995 28.2694 28.0724C28.4804 27.5453 28.7955 27.0661 29.1958 26.6634C29.596 26.2607 30.0733 25.9428 30.5992 25.7285C31.125 25.5143 31.6886 25.4082 32.2563 25.4165C32.8241 25.4248 33.3843 25.5474 33.9036 25.7769C34.4229 26.0065 34.8907 26.3383 35.279 26.7525C35.6673 27.1668 35.9682 27.655 36.1637 28.1881C36.3592 28.7211 36.4454 29.2882 36.417 29.8552C36.4074 30.4055 36.2886 30.9485 36.0674 31.4524C35.8462 31.9564 35.527 32.4113 35.1285 32.7909C34.7299 33.1705 34.2599 33.467 33.7457 33.6634C33.2315 33.8597 32.6835 33.9519 32.1334 33.9346ZM29.7749 29.7253C29.7708 30.0425 29.8298 30.3573 29.9483 30.6515C30.0669 30.9458 30.2427 31.2135 30.4655 31.4392C30.6884 31.665 30.9539 31.8442 31.2466 31.9665C31.5393 32.0888 31.8533 32.1518 32.1705 32.1518C32.8125 32.1522 33.4295 31.9033 33.8914 31.4575C34.3534 31.0117 34.6241 30.4039 34.6466 29.7624C34.6285 29.1188 34.3677 28.5059 33.9165 28.0466C33.4652 27.5874 32.857 27.3157 32.2139 27.2863C31.5689 27.2943 30.9526 27.5536 30.4959 28.0091C30.0393 28.4646 29.7784 29.0804 29.7687 29.7253H29.7749Z" fill="white"/>
          <path d="M7.9296 33.9345C7.37645 33.9427 6.82716 33.8411 6.31351 33.6357C5.79987 33.4302 5.3321 33.125 4.93719 32.7375C4.54229 32.3501 4.22811 31.8883 4.01286 31.3787C3.79761 30.869 3.68553 30.3218 3.68314 29.7686C3.68314 28.6489 4.12794 27.5751 4.91966 26.7833C5.71139 25.9916 6.78518 25.5469 7.90485 25.5469C9.02452 25.5469 10.0983 25.9916 10.89 26.7833C11.6818 27.5751 12.1266 28.6489 12.1266 29.7686C12.1299 30.3192 12.0234 30.865 11.8133 31.374C11.6032 31.883 11.2937 32.3449 10.9028 32.7328C10.512 33.1208 10.0478 33.4268 9.53729 33.6332C9.02677 33.8395 8.48019 33.942 7.9296 33.9345ZM7.86771 32.1271C8.5033 32.1454 9.12038 31.9116 9.58426 31.4767C10.0481 31.0419 10.3212 30.4412 10.3438 29.8057C10.3443 29.1658 10.0971 28.5506 9.65393 28.089C9.21078 27.6274 8.60615 27.3552 7.96678 27.3297C7.32894 27.329 6.71544 27.5745 6.25416 28.015C5.79288 28.4555 5.5194 29.0571 5.4907 29.6943C5.4798 30.012 5.5334 30.3286 5.64829 30.625C5.76317 30.9214 5.93693 31.1914 6.1591 31.4188C6.38126 31.6462 6.64722 31.8262 6.94088 31.9479C7.23455 32.0696 7.54984 32.1306 7.86771 32.1271Z" fill="white"/>
          <path d="M8.90766 1.16416C9.00616 0.994648 9.11796 0.833181 9.24195 0.681311C9.51432 0.408942 9.75573 0.0189693 10.1643 0.613228C10.3995 0.959878 10.7338 0.7989 11.0185 0.501771C11.2661 0.251138 11.5887 0.0883229 11.9374 0.0380356C12.2861 -0.0122518 12.6416 0.0527749 12.9499 0.223243C13.2099 0.390378 13.3956 0.538942 13.0613 0.842262C11.6623 2.21029 10.2881 3.60306 8.90766 4.98966C8.36292 5.5344 7.81199 6.07915 7.27964 6.63627C7.04441 6.89007 6.90825 6.85914 6.72874 6.58058C6.53012 6.24066 6.44465 5.84641 6.4847 5.45476C6.52476 5.0631 6.68826 4.6943 6.95158 4.40162C7.2487 4.07973 7.32299 3.87544 6.95158 3.60926C6.58016 3.34308 6.82158 3.10167 7.02586 2.92216C7.46536 2.53837 7.57678 2.1917 7.02586 1.82648C6.7473 1.64697 6.85872 1.47367 7.02586 1.31272C7.11908 1.23297 7.20793 1.14823 7.29203 1.0589C8.02866 0.29132 8.02246 0.291347 8.90766 1.16416Z" fill="white"/>
          <path d="M17.1965 0.0247849C17.5185 -0.00226071 17.8389 0.0927096 18.094 0.290921C18.515 0.631381 18.8554 0.990391 19.3754 0.346611C19.6107 0.0618626 19.8892 0.544752 20.0378 0.711887C20.3287 1.04616 20.4958 1.15758 20.7868 0.711887C21.0777 0.266193 21.3315 0.297144 21.6348 0.711887C21.7951 0.92892 21.9847 1.12262 22.1982 1.28753C22.4891 1.51038 22.5015 1.6899 22.1982 1.90655C21.7586 2.20987 21.7463 2.52561 22.1982 2.87226C22.65 3.21891 22.7243 3.42933 22.2353 3.75122C21.8639 3.99263 22.1053 4.16596 22.2972 4.37024C22.5592 4.66205 22.7271 5.02611 22.779 5.41483C22.8309 5.80355 22.7644 6.19886 22.5881 6.5492C22.4396 6.81537 22.3343 6.97635 22.0124 6.65446C20.1554 4.7974 18.2983 2.94034 16.4722 1.08328C16.2865 0.903768 15.9584 0.588035 16.008 0.507562C16.0979 0.362221 16.2212 0.240374 16.3676 0.15211C16.514 0.0638461 16.6793 0.0117336 16.8498 0L17.1965 0.0247849Z" fill="white"/>
          </svg>
        </span>
        <a class="tab-box__title-link tab-box__title-link--with-icon" href="#">Подобрать Передвижной компрессор</a>
      </div>
      <div class="tab-box main-filter__tab-box">
        <span class="btn-icon btn-icon--white">
          <svg width="40" height="32" viewBox="0 0 40 32" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.48181 23.5504C2.6315 25.2127 4.98704 26.5677 6.1924 25.9138C7.93347 24.9763 9.40667 25.5671 9.82421 27.5839C10.0972 28.8752 10.9922 28.8604 11.8101 28.8468C11.8655 28.8459 11.9205 28.845 11.9749 28.8445C12.0643 28.8437 12.157 28.845 12.2518 28.8463C13.0674 28.8579 14.0349 28.8716 14.3384 27.5447C14.8032 25.5751 16.2764 24.9841 18.0175 26.0162C19.1706 26.7323 19.7898 26.0878 20.4255 25.4261C20.4891 25.3599 20.5529 25.2935 20.6174 25.2283C20.67 25.1751 20.7231 25.1225 20.7758 25.0702C21.4339 24.4178 22.0446 23.8124 21.1767 22.6601C20.934 22.3554 20.7779 21.991 20.7249 21.6051C20.6719 21.2192 20.724 20.826 20.8756 20.4672C21.0272 20.1084 21.2727 19.797 21.5863 19.5659C21.9 19.3349 22.2701 19.1927 22.6578 19.1543C24.0676 18.9068 24.0711 18.0241 24.075 17.0496C24.0752 17.0004 24.0754 16.9509 24.0758 16.9013L24.0765 16.8149C24.0855 15.8071 24.095 14.7347 22.5632 14.459C22.18 14.4073 21.8178 14.2532 21.5148 14.0131C21.2117 13.773 20.979 13.4557 20.8411 13.0945C20.7033 12.7333 20.6653 12.3415 20.7313 11.9605C20.7973 11.5795 20.9648 11.2234 21.2161 10.9296C22.0493 9.82885 21.4362 9.23246 20.8089 8.62228L20.7512 8.56611C20.6604 8.47747 20.5698 8.38149 20.4777 8.28383C19.9147 7.68714 19.2921 7.02732 18.175 7.58923C16.0086 8.66854 14.8427 8.24318 14.3148 6.07669C13.9995 4.80225 13.1802 4.84249 12.3777 4.88191C12.2177 4.88976 12.0585 4.89758 11.9041 4.89496C11.8489 4.89403 11.7938 4.89276 11.7388 4.8915C10.8683 4.87146 10.0451 4.85251 9.80056 6.17901C9.45392 8.08552 7.84683 8.72357 6.12152 7.6679C5.002 6.98526 4.40297 7.58618 3.80683 8.18419C3.71497 8.27634 3.62319 8.36841 3.52957 8.45571L3.46023 8.52024C2.78471 9.14818 2.16724 9.72216 2.87572 10.8192C3.9314 12.4893 3.32477 14.1124 1.48916 14.522C0.0044162 14.8487 0.00270348 15.8119 0.000857258 16.8514L0.000857258 16.8517C0.000742823 16.9152 0.000628387 16.979 0.000174444 17.043C-0.00770281 18.1538 0.244357 18.9731 1.63091 19.178C1.97681 19.2695 2.29743 19.4384 2.56856 19.6719C2.83969 19.9054 3.0543 20.1972 3.19616 20.5257C3.33802 20.8542 3.40347 21.2107 3.38753 21.5682C3.3716 21.9256 3.27465 22.2747 3.10413 22.5893C3.02015 22.7417 2.90671 22.8806 2.80114 23.0098L2.80111 23.0099C2.63929 23.208 2.49594 23.3835 2.50547 23.5504L2.48181 23.5504ZM35.8537 15.6722C35.7509 15.3924 35.7297 15.0891 35.7923 14.7977C35.855 14.5062 35.9991 14.2386 36.2078 14.0258C36.4165 13.813 36.6812 13.6637 36.9714 13.5954C37.2615 13.527 37.5651 13.5423 37.8469 13.6396C39.0114 13.8711 39.2861 13.3056 39.622 12.6139C39.652 12.5522 39.6824 12.4895 39.714 12.4263C39.8401 12.2553 39.9275 12.0589 39.9702 11.8507C40.0128 11.6425 40.0097 11.4276 39.961 11.2208C39.9122 11.0139 39.8191 10.8201 39.688 10.6528C39.557 10.4855 39.3911 10.3487 39.2019 10.252C38.9743 10.1029 38.7875 9.89964 38.6582 9.66032C38.5288 9.42101 38.4611 9.15319 38.4611 8.88116C38.4611 8.60914 38.5288 8.34151 38.6582 8.10219C38.7875 7.86288 38.9743 7.65942 39.2019 7.51037C40.3126 6.81179 40.0172 6.11322 39.7219 5.41464C39.6841 5.3254 39.6464 5.23616 39.6116 5.14692C39.5715 4.95729 39.4919 4.77823 39.3779 4.62146C39.2639 4.46468 39.1181 4.33381 38.9501 4.23717C38.7821 4.14052 38.5957 4.08029 38.4028 4.0606C38.21 4.0409 38.0152 4.06205 37.8311 4.12272C36.413 4.35907 35.641 3.47684 35.8695 2.0824C36.0585 0.908558 35.4361 0.553973 34.5617 0.238846L34.4926 0.215313C33.739 -0.0419077 33.1646 -0.237972 32.5606 0.664298C32.431 0.930529 32.2308 1.15603 31.9817 1.31613C31.7327 1.47623 31.4443 1.56481 31.1483 1.57213C30.8523 1.57945 30.5601 1.50527 30.3034 1.35768C30.0467 1.21008 29.8355 0.994773 29.6929 0.73527C28.9616 -0.263383 28.2931 -0.00627606 27.4759 0.308051L27.4713 0.309819C27.2646 0.354547 27.0695 0.44218 26.8987 0.566976C26.7279 0.691772 26.5852 0.85098 26.4798 1.03436C26.3744 1.21773 26.3086 1.42118 26.2867 1.63156C26.2648 1.84195 26.2872 2.05454 26.3526 2.2557C26.405 2.51949 26.3908 2.79221 26.3111 3.04909C26.2315 3.30598 26.089 3.53888 25.8964 3.7267C25.7039 3.91452 25.4675 4.05135 25.2087 4.12465C24.95 4.19795 24.677 4.20534 24.4146 4.14638C23.2407 3.93367 22.8862 4.37501 22.5159 5.29676C22.1456 6.2185 21.996 6.76193 22.9571 7.4946C23.2117 7.6415 23.4219 7.85451 23.5654 8.11104C23.7089 8.36757 23.7803 8.65812 23.7723 8.95194C23.7642 9.24577 23.6769 9.53189 23.5195 9.78015C23.3622 10.0284 23.1407 10.2297 22.8784 10.3624C21.856 11.049 22.1636 11.7283 22.5132 12.5004L22.5475 12.5762L22.5637 12.6123C22.9162 13.3945 23.1318 13.8729 24.2492 13.6711C25.7697 13.3954 26.6126 14.3172 26.2975 15.8692C26.0887 16.9131 26.7155 17.1872 27.3422 17.4612L27.3422 17.4612C27.4012 17.487 27.4603 17.5128 27.5186 17.5393C28.1961 17.8465 28.9682 18.0671 29.5827 17.1611C30.4966 15.814 31.5994 15.9323 32.5606 17.1061C32.9072 17.5 36.2161 17.6181 35.8773 15.6801L35.8537 15.6722ZM12.1326 10.6222C13.3549 10.6408 14.5445 11.02 15.5522 11.712C16.5599 12.404 17.3408 13.378 17.7972 14.512C18.2535 15.6461 18.3649 16.8897 18.1173 18.0868C17.8698 19.2839 17.2743 20.3813 16.4056 21.2414C15.5369 22.1014 14.4336 22.6857 13.2341 22.9212C12.0345 23.1568 10.7921 23.0329 9.66272 22.5652C8.53331 22.0975 7.56718 21.3068 6.88536 20.2922C6.20354 19.2776 5.83645 18.0842 5.8301 16.8618C5.82474 16.0356 5.98455 15.2165 6.30017 14.453C6.6158 13.6894 7.08083 12.9966 7.66799 12.4154C8.25514 11.8341 8.95257 11.3762 9.71927 11.0682C10.486 10.7603 11.3065 10.6085 12.1326 10.6222ZM27.6785 5.44358C26.7927 6.34267 26.299 7.55602 26.3053 8.81815C26.2884 9.46279 26.4012 10.1042 26.637 10.7044C26.8728 11.3046 27.2268 11.8512 27.678 12.312C28.1292 12.7727 28.6684 13.1382 29.2635 13.3866C29.8587 13.6349 30.4976 13.7612 31.1425 13.7578C32.4337 13.7431 33.6663 13.2161 34.569 12.2927C35.4717 11.3693 35.9707 10.1252 35.956 8.83392C35.9414 7.54265 35.4144 6.30994 34.491 5.40723C33.5676 4.50451 32.3234 4.00565 31.0322 4.02028C29.7701 4.03276 28.5643 4.54449 27.6785 5.44358Z" fill="white"/>
          <path d="M9.01749 19.0562C9.19382 19.4473 9.44818 19.799 9.76546 20.0902C9.92909 20.2125 10.072 20.3562 10.25 20.4669C10.7592 20.8144 11.3464 21.0351 11.9618 21.1105C12.5771 21.1859 13.2027 21.1136 13.7856 20.8998C13.8924 20.8499 14.0115 20.8323 14.128 20.8492C14.2446 20.8662 14.3532 20.9169 14.4402 20.9949C16.3416 22.3256 18.2479 23.6524 20.1589 24.9753C21.6216 25.9943 23.0839 27.0302 24.5664 28.0238C24.8224 28.2192 25.1275 28.3423 25.4495 28.3802C25.7714 28.418 26.0983 28.3693 26.3955 28.239C26.4845 28.2032 26.5609 28.1421 26.615 28.0636C26.8649 27.722 27.0901 27.3651 27.3562 27.0575C27.468 26.9066 27.5368 26.7291 27.5554 26.5435C27.5739 26.3578 27.5416 26.1709 27.4618 26.0024C27.3028 25.5769 27.0046 25.2166 26.6142 24.9785C23.3495 22.718 20.0854 20.4602 16.8219 18.2051C16.6601 18.1129 16.5292 17.9762 16.4451 17.8113C16.3611 17.6465 16.3275 17.4607 16.3486 17.2767C16.3669 16.4735 16.1146 15.6886 15.6315 15.0452C15.2515 14.5304 14.7449 14.1199 14.1592 13.8523C13.6773 13.6114 13.147 13.4785 12.606 13.4632C12.0649 13.4479 11.5264 13.5505 11.0287 13.7637C10.8154 13.8539 10.9116 13.9034 11.0213 13.975C11.7229 14.4661 12.4197 14.9541 13.1277 15.4354C13.2089 15.4739 13.2751 15.5377 13.316 15.617C13.357 15.6963 13.3704 15.7867 13.3545 15.8746C13.2867 16.4768 13.236 17.0793 13.1853 17.6819C13.1874 17.7214 13.1756 17.7606 13.1519 17.7927C13.1282 17.8248 13.094 17.8479 13.0552 17.8581C12.484 18.113 11.8956 18.3676 11.3321 18.6376C11.2664 18.6818 11.1875 18.7024 11.1086 18.6958C11.0296 18.6892 10.9556 18.6558 10.899 18.6013C10.2112 18.1155 9.50728 17.6334 8.81728 17.1564C8.75152 17.0988 8.67076 17.0604 8.58401 17.0456C8.53205 17.7433 8.67649 18.4404 9.0013 19.0599L9.01749 19.0562Z" fill="white"/>
          </svg>
        </span>
        <a class="tab-box__title-link tab-box__title-link--with-icon" href="#">Подобрать запчасти</a>
      </div>
    </div>
    <div class="container">
      <div class="filter-box filter-box--desktop">
        <form class="filter-form filter-box__filter-form" action="" method="post">
          <div class="filter-box__aside xl-24">
            <fieldset class="filter-box__slide">
              <figure>
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/catalog/catalog_001.png" alt="">
              </figure>
              <div class="check-fields">
                <span class="filter-box__title">
                  Питание B:
                </span>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  12В
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  24В
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  220В
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  380В
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Бензин
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Дизель
                </label>
              </div>
            </fieldset>
            <fieldset class="filter-box__runners">
              <span class="filter-box__title">
                Мощность, кВт:
              </span>
              <label class="filter-form__label">
                от
                <input class="filter-form__input" type="text" name="" value="5.3">
              </label>
              <label class="filter-form__label">
                до
                <input class="filter-form__input" type="text" name="" value="40.55">
              </label>
              <span class="filter-form__runner runner">
                <span class="runner__area-runner"></span>
              </span>
              <span class="filter-box__title">
                Давление, Атм:
              </span>
              <label class="filter-form__label">
                от
                <input class="filter-form__input" type="text" name="" value="3.3">
              </label>
              <label class="filter-form__label">
                до
                <input class="filter-form__input" type="text" name="" value="10.55">
              </label>
              <span class="filter-form__runner runner">
                <span class="runner__area-runner"></span>
              </span>
            </fieldset>
          </div>

          <fieldset class="filter-box__checklist">
            <div class="filter-box__checklist-column xl-21">
              <span class="filter-box__title">
                Бренд:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter active js-accordeon-btn"></i>
              <div class="filter-box__checklist-list active">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Абак
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Aircast
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Атлас
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Копко
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Аврора
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Бежецкий
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Blue
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Air
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ceccato
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Comprag
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Elitech
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Фиак
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Fini
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Fubag
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Kaeser
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Kraftmann
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ремеза
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ударник
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column xl-24">
              <span class="filter-box__title">
                Для чего нужен компрессор:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Покрасить заборv
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Покрасить авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать легковые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать грузовые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гараж
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Дача
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Шиномонтаж / мастерская
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Автосервис
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Прокачка водоснабжения
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Промывка системы отопления
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Продувка мелких деталей
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  дымогенератор коптильни
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Производство
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Медицина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Стамотология
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пищевая промышленность
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column xl-24">
              <span class="filter-box__title">
                Совместим с инструментом:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Аэрограф
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гайковерт для легковых авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Гайковерт для грузовых авто
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Накачать грузовые шины
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Дрель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Краскораспылитель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Ножницы по металлу
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Отбойный молоток
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пескоструйный аппарат
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пескоструйный пистолет
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Пистолет для накачки шин
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Плазморез
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Полировальная машина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Продувочный пистолет
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Скобозабиватель
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Шлифмашина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Углошлифмашина
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Хоппер-ковш
                </label>
              </div>
            </div>
            <div class="filter-box__checklist-column xl-21">
              <span class="filter-box__title">
                Страна бренд:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Беларусь
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Германия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Италия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Швеция
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Россия
                </label>
              </div>
              <span class="filter-box__title">
                Страна изготовитель:
              </span>
              <i class="filter-box__btn-accordeon btn-accordeon btn-accordeon--filter js-accordeon-btn"></i>
              <div class="filter-box__checklist-list">
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Китай
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Италия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Беларусь
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Швеция
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Германия
                </label>
                <label class="filter-form__checkbox checkbox">
                  <input class="input checkbox__input visually-hidden" name="" type="checkbox">
                  <span class="checkbox__check"></span>
                  Россия
                </label>
              </div>
            </div>
          </fieldset>
          <div class="filter-box__btn-box">
            <a href="#" class="btn btn--transparent filter-form__btn">
              Подобрать на инфографике
            </a>
            <a href="#" class="btn filter-form__btn">
              Подобрать
            </a>
          </div>
        </form>
      </div>
    </div>
  </section>
  <section class="main-reviews section section--gray">
    <div class="container">
      <h3 class="section-title">
        отзывы о нас
      </h3>
      <div class="reviews-slider">
        <article class="slide-type01 reviews-slider__slide-type01">
          <a class="slide-type01__aside" href="#" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/review-001.jpg" alt="">
          </a>
          <div class="slide-type01__bside">
            <h4 class="slide-type01__title">
              <figure class="slide-type01__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/reviews_logo-001.png" alt="">
              </figure>
              <span>
                ООО «Алюнин Техно»
              </span>

            </h4>
            <p>
              Имеется спорная точка зрения, гласящая примерно следующее: интерактивные прототипы лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы.
            </p>
            <a href="" class="btn slide-type01__btn">
              Читать
            </a>
          </div>
        </article>
        <article class="slide-type01 reviews-slider__slide-type01 active">
          <a class="slide-type01__aside" href="#" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/review-001.jpg" alt="">
          </a>
          <div class="slide-type01__bside">
            <h4 class="slide-type01__title">
              <figure class="slide-type01__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/reviews_logo-002.png" alt="">
              </figure>
              <span>
                ОАО «Кондитерская фарбика Слодыч»
              </span>
            </h4>
            <p>
              Имеется спорная точка зрения, гласящая примерно следующее: интерактивные прототипы лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы.
            </p>
            <a href="" class="btn slide-type01__btn">
              Читать
            </a>
          </div>
        </article>
        <article class="slide-type01 reviews-slider__slide-type01">
          <a class="slide-type01__aside" href="#" target="_blank">
            <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/review-001.jpg" alt="">
          </a>
          <div class="slide-type01__bside">
            <h4 class="slide-type01__title">
              <figure class="slide-type01__logo">
                <img src="<?=SITE_TEMPLATE_PATH?>/pics/reviews/reviews_logo-003.png" alt="">
              </figure>
              <span>
                ЖКХ «Дятлово»
              </span>

            </h4>
            <p>
              Имеется спорная точка зрения, гласящая примерно следующее: интерактивные прототипы лишь добавляют фракционных разногласий и функционально разнесены на независимые элементы.
            </p>
            <a href="" class="btn slide-type01__btn">
              Читать
            </a>
          </div>
        </article>
        <span class="btn-slider reviews-slider__btn-slider btn-slider--prev reviews-slider__btn-slider--prev">
        </span>
        <span class="btn-slider reviews-slider__btn-slider btn-slider--next reviews-slider__btn-slider--next"></span>
        <ul class="dots reviews-slider__dots">
          <li class="dots__dot active"></li>
          <li class="dots__dot"></li>
          <li class="dots__dot"></li>
          <li class="dots__dot"></li>
          <li class="dots__dot"></li>
        </ul>
      </div>
    </div>
  </section>
  <section class="main-projects section">
    <div class="container">
      <h3 class="section-title">
        Завершенные проекты
      </h3>
      <?$APPLICATION->IncludeComponent(
      	"bitrix:news.list",
      	"cm_news-list-projects-slider",
      	Array(
      		"ACTIVE_DATE_FORMAT" => "d.m.Y",
      		"ADD_SECTIONS_CHAIN" => "Y",
      		"AJAX_MODE" => "N",
      		"AJAX_OPTION_ADDITIONAL" => "",
      		"AJAX_OPTION_HISTORY" => "N",
      		"AJAX_OPTION_JUMP" => "N",
      		"AJAX_OPTION_STYLE" => "Y",
      		"CACHE_FILTER" => "N",
      		"CACHE_GROUPS" => "Y",
      		"CACHE_TIME" => "36000000",
      		"CACHE_TYPE" => "A",
      		"CHECK_DATES" => "Y",
      		"DETAIL_URL" => "",
      		"DISPLAY_BOTTOM_PAGER" => "Y",
      		"DISPLAY_DATE" => "Y",
      		"DISPLAY_NAME" => "Y",
      		"DISPLAY_PICTURE" => "Y",
      		"DISPLAY_PREVIEW_TEXT" => "Y",
      		"DISPLAY_TOP_PAGER" => "N",
      		"FIELD_CODE" => array("",""),
      		"FILTER_NAME" => "",
      		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
      		"IBLOCK_ID" => "3",
      		"IBLOCK_TYPE" => "projects",
      		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
      		"INCLUDE_SUBSECTIONS" => "Y",
      		"MESSAGE_404" => "",
      		"NEWS_COUNT" => "5",
      		"PAGER_BASE_LINK_ENABLE" => "N",
      		"PAGER_DESC_NUMBERING" => "N",
      		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
      		"PAGER_SHOW_ALL" => "N",
      		"PAGER_SHOW_ALWAYS" => "N",
      		"PAGER_TEMPLATE" => ".default",
      		"PAGER_TITLE" => "Новости",
      		"PARENT_SECTION" => "",
      		"PARENT_SECTION_CODE" => "",
      		"PREVIEW_TRUNCATE_LEN" => "",
      		"PROPERTY_CODE" => array("",""),
      		"SET_BROWSER_TITLE" => "Y",
      		"SET_LAST_MODIFIED" => "N",
      		"SET_META_DESCRIPTION" => "Y",
      		"SET_META_KEYWORDS" => "Y",
      		"SET_STATUS_404" => "N",
      		"SET_TITLE" => "Y",
      		"SHOW_404" => "N",
      		"SORT_BY1" => "ACTIVE_FROM",
      		"SORT_BY2" => "SORT",
      		"SORT_ORDER1" => "DESC",
      		"SORT_ORDER2" => "ASC",
      		"STRICT_SECTION_CHECK" => "N"
      	)
      );?>
    </div>
  </section>
  <section class="main-certificates section section--gray">
    <div class="container">
      <h3 class="section-title">
        Сертификаты
      </h3>
      <div class="images-slider">
        <a class="certificate slide-type03 images-slider__certificate" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/certificates/certificate_002.jpg" alt="">
        </a>
        <a class="certificate images-slider__certificate" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/certificates/certificate_001.jpg" alt="">
        </a>
        <a class="certificate images-slider__certificate" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/certificates/certificate_003.jpg" alt="">
        </a>
        <span class="btn-slider images-slider__btn-slider btn-slider--prev images-slider__btn-slider--prev">
        </span>
        <span class="btn-slider images-slider__btn-slider btn-slider--next images-slider__btn-slider--next"></span>
      </div>
    </div>
  </section>
  <section class="main-brands section">
    <div class="container">
      <h3 class="section-title">
        Бренды
      </h3>
      <div class="images-slider">
        <a class="brand images-slider__brand" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/brands/brand-1.png" alt="">
        </a>
        <a class="brand images-slider__brand" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/brands/brand-2.png" alt="">
        </a>
        <a class="brand images-slider__brand" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/brands/brand-1.png" alt="">
        </a>
        <a class="brand images-slider__brand" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/brands/brand-3.png" alt="">
        </a>
        <a class="brand images-slider__brand" href="#">
          <img src="<?=SITE_TEMPLATE_PATH?>/pics/brands/brand-3.png" alt="">
        </a>
        <span class="btn-slider images-slider__btn-slider btn-slider--prev images-slider__btn-slider--prev">
        </span>
        <span class="btn-slider images-slider__btn-slider btn-slider--next images-slider__btn-slider--next"></span>
      </div>
    </div>
  </section>
</main>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>
