<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header">    
      <div class="container">
        <div class="wrap">
          <div class="header__top">
            <div class="logo">
              <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo.png" alt="" class="logo-img">
              <div class="logo__heading">
                Авторские туры и экскурсии по Армении
              </div>
            </div>
            <div class="contacts">
              <div class="contacts__text">
                <div class="contacts__phone">
                  +374 (77) 533 561
                </div>
                <div class="contacts__email">
                  ladatravelarmenia@yandex.ru
                </div>
              </div>
              <button class="contacts__button btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" type="button">
                Заказать звонок
              </button>
            </div>
          </div>      
          <nav class="header__menu">
            <ul class="header-menu">
              <li class="header-menu__element">
                <a href="">Главная</a>
              </li>
              <li class="header-menu__element has-submenu">
                <span>О нас</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element has-submenu">
                <span>Туры</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element has-submenu">
                <span>Экскурсии</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element has-submenu">
                <span>Направления</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element has-submenu">
                <span>Проживание</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element has-submenu">
                <span>Об армении</span>
                <ul class="header-menu__submenu">
                  <li class="header-menu__submenu-element">
                    Пункт 1
                  </li>
                  <li class="header-menu__submenu-element">
                    Пункт 2
                  </li>
                </ul>
              </li>
              <li class="header-menu__element">
                <a href="">Контакты</a></li>
            </ul>
          </nav>  
        </div>
      </div>
    </header>