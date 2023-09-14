<!DOCTYPE html>
<html lang="pt-br" class="no-js">
<head>
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />

    <meta property="fb:app_id" content="603759040326810" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400;1,700&family=Red+Hat+Display:wght@400;700&display=swap" rel="stylesheet">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="img/touch/apple-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#222222">
</head>
<body <?php body_class() ?>>
    <?php wp_body_open(); ?>
    <div class="container">
        <!-- HEADER -->
        <div class="header-logo">
            <div id="logoSelosCabecalho">
                <a title="Página inicial" href="<?= esc_url(home_url('/')); ?>">
                      <?php
                        $urlLogo = get_template_directory_uri() . '/img/logo.png';
                        if (has_custom_logo()) {
                            $custom_logo_id = get_theme_mod('custom_logo');
                            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                            $urlLogo = $logo[0];
                        } 
                        $retVal = (preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"])) ? "180" : "275" ; 
                        ?>
                        <img id="logoSite" src="<?= $urlLogo; ?>" alt="Logo" width="<?= $retVal?>" height="auto" />
                    <!--
                    <img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt="Logo Escoteiros do Brasil" class="logo" />
                    -->
                </a>
                <?php $linkSelo = get_field('link_selo', 'option');
                if($linkSelo){
                    $link_url = $linkSelo['url'] ?? '/';
                    $link_title = $linkSelo['title'];
                    $link_target = $linkSelo['target'] ? $linkSelo['target'] : '_self';
                ?>
                    <a class="selo-link noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title; ?>">
                        <img src="<?= get_template_directory_uri(); ?>/img/selo2021.png" alt="Melhores ONGs 2021" width="50" />
                    </a>
                <?php }
                unset($linkSelo);
                $linkSelo2 = get_field('link_selo_2', 'options');
                if ($linkSelo2):
                    $link_url = $linkSelo2['url'] ?? get_home_url();
                    $link_title = $linkSelo2['title'] ?? 'Instituto Doar';
                    $link_target = $linkSelo2['target'] ? $linkSelo2['target'] : '_self';
                ?>
                <a class="selo-link noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title; ?>">
                    <img src="<?= get_template_directory_uri(); ?>/img/doar.png" alt="Instituto Doar" width="50" />
                </a>
                <?php endif; ?>
            </div>
            <a href="javascript:void(0)" class="menu-mobile menu-mobile-js">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/menu.svg" alt="">
            </a>
            <a href="javascript:void(0)" class="menu-mobile menu-mobile--search search-mobile-js">
                <img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="">
            </a>

            <ul class="nav-icon-wrapper float-right">
                <?php $linkDoe = get_field('link_doe', 'option');
                if ($linkDoe) {
                    $link_url = $linkDoe['url'];
                    $link_title = $linkDoe['title'];
                    $link_target = $linkDoe['target'] ? $linkDoe['target'] : '_self';
                ?>
                    <li class="nav-icon__item">
                        <a class="nav-link nav-link--icon nav-link--donation noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title ?>">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/doe2.svg" alt="">
                            <?= esc_html($link_title); ?>
                        </a>
                    </li>
                <?php }
                $linkIngles = get_field('link_ingles', 'option');
                if ($linkIngles) {
                    $link_url = $linkIngles['url'];
                    $link_title = $linkIngles['title'];
                    $link_target = $linkIngles['target'] ? $linkIngles['target'] : '_self';
                ?>
                    <li class="nav-icon__item">
                        <a class="nav-link nav-link--icon nav-link--donation noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title; ?>">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/english.svg" alt="">
                            <?= esc_html($link_title); ?>
                        </a>
                    </li>
                <?php }
                $linkLoja = get_field('link_loja', 'option');
                if($linkLoja){
                    $link_url = $linkLoja['url'];
                    $link_title = $linkLoja['title'];
                    $link_target = $linkLoja['target'] ? $linkLoja['target'] : '_self';
                ?>
                    <li class="nav-icon__item">
                        <a class="nav-link nav-link--icon nav-link--store noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title; ?>">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/sacola.svg" alt="">
                            <?= esc_html($link_title); ?>
                        </a>
                    </li>
                <?php }
                $linkLogin = get_field('link_login', 'option');
                if ($linkLogin) {
                    $link_url = $linkLogin['url'];
                    $link_title = $linkLogin['title'];
                    $link_target = $linkLogin['target'] ? $linkLogin['target'] : '_self';
                ?>
                    <li class="nav-icon__item">
                        <a class="nav-link nav-link--icon nav-link--login noprint" href="<?= esc_url($link_url); ?>" target="<?= esc_attr($link_target); ?>" title="<?= $link_title; ?>">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/login.svg" alt="">
                            <?= esc_html($link_title); ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- FIM DE HEADER -->
        <!-- MENU MOBILE -->
        <div class="menu-mobile-bg mobile-bg-js"></div>
        <div>
            <ul class="nav-mobile">
                <li>
                    <a class="nav-mobile__link nav-mobile-js" href="javascript:void(0);" data-target="menu-1">
                        <?php $menuName = get_term(get_nav_menu_locations()['MovimentoEscoteiro'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <li>
                    <a class="nav-mobile__link nav-mobile-js" href="javascript:void(0);" data-target="menu-2">
                        <?php $menuName = get_term(get_nav_menu_locations()['OQueFazemos'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <li>
                    <a class="nav-mobile__link nav-mobile-js" href="javascript:void(0);" data-target="menu-3">
                        <?php $menuName = get_term(get_nav_menu_locations()['Informacoes'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <li>
                    <a class="nav-mobile__link nav-mobile-js" href="javascript:void(0);" data-target="menu-4">
                        <?php $menuName = get_term(get_nav_menu_locations()['FaleConosco'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
            </ul>
            <ul class="nav-mobile-sub-menu" id="menu-1">
                <li>
                    <a href="javascript:void(0);" class="nav-mobile-sub-js nav-mobile-sub-menu__section-title nav-mobile-sub-menu__section-title--movimento">
                        <?php $menuName = get_term(get_nav_menu_locations()['MovimentoEscoteiro'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'MovimentoEscoteiro',
                    'container_class' => '',
                    'add_li_class' => '',
                    'menu_class' => 'menu-wrapper',
                ));
                ?>
            </ul>
            <ul class="nav-mobile-sub-menu" id="menu-2">
                <li>
                    <a href="javascript:void(0);" class="nav-mobile-sub-js nav-mobile-sub-menu__section-title nav-mobile-sub-menu__section-title--fazemos">
                        <?php $menuName = get_term(get_nav_menu_locations()['OQueFazemos'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'OQueFazemos',
                    'container_class' => '',
                    'add_li_class' => '',
                    'menu_class' => 'menu-wrapper',
                ));
                ?>
            </ul>
            <ul class="nav-mobile-sub-menu" id="menu-3">
                <li>
                    <a href="javascript:void(0);" class="nav-mobile-sub-js nav-mobile-sub-menu__section-title nav-mobile-sub-menu__section-title--informacoes">
                        <?php $menuName = get_term(get_nav_menu_locations()['Informacoes'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'Informacoes',
                    'container_class'   => '',
                    'add_li_class'      => '',
                    'menu_class'        => 'menu-wrapper',
                ));
                ?>
            </ul>
            <ul class="nav-mobile-sub-menu" id="menu-4">
                <li>

                    <a href="javascript:void(0);" class="nav-mobile-sub-js nav-mobile-sub-menu__section-title nav-mobile-sub-menu__section-title--fale">
                        <?php $menuName = get_term(get_nav_menu_locations()['FaleConosco'], 'nav_menu')->name;
                        echo $menuName; ?>
                    </a>
                </li>
                <?php
                wp_nav_menu(array(
                    'theme_location'    => 'FaleConosco',
                    'container_class'   => '',
                    'add_li_class'      => '',
                    'menu_class'        => 'menu-wrapper',
                ));
                ?>
            </ul>
            <div class="search-form-wrapper search-form-wrapper--mobile"><?php get_search_form(); ?></div>
        </div>
        <!-- FIM DE MENU MOBILE -->
        <!-- MENU DESKTOP -->
        <nav class="navbar navbar-expand-lg navbar--scouts noprint">
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link nav-link--movimento dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $menuName = get_term(get_nav_menu_locations()['MovimentoEscoteiro'], 'nav_menu')->name;
                            echo $menuName;
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-super-menu">
                            <div class="">
                                <div class="row">
                                    <div class="dropdown-super-menu__title-section dropdown-super-menu__title-section--movimento">
                                        <img src="<?= get_template_directory_uri(); ?>/img/icons/movimento.svg" alt="Ilustração" class="super-menu-icon super-menu-icon--movimento">
                                        <?= $menuName; ?>
                                    </div>
                                    <div class="col-md-10 col-sm-12">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => 'MovimentoEscoteiro',
                                            'container_class'   => 'super-menu-container',
                                            'add_li_class'      => 'col',
                                            'menu_class'        => 'row',
                                        ));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link--fazemos dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $menuName = get_term(get_nav_menu_locations()['OQueFazemos'], 'nav_menu')->name;
                            echo $menuName;
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-super-menu">
                            <div class="">
                                <div class="row">
                                    <div class="dropdown-super-menu__title-section dropdown-super-menu__title-section--fazemos">
                                        <img src="<?= get_template_directory_uri(); ?>/img/icons/fazemos.svg" alt="Ilustração" class="super-menu-icon super-menu-icon--fazemos">
                                        <?= $menuName; ?>
                                    </div>
                                    <div class="col-md-10 col-sm-12">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => 'OQueFazemos',
                                            'container_class'   => 'super-menu-container',
                                            'add_li_class'      => 'col',
                                            'menu_class'        => 'row',
                                        ));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link--informacoes dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $menuName = get_term(get_nav_menu_locations()['Informacoes'], 'nav_menu')->name;
                            echo $menuName;
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-super-menu">
                            <div class="">
                                <div class="row">
                                    <div class="dropdown-super-menu__title-section dropdown-super-menu__title-section--informacoes">
                                        <img src="<?= get_template_directory_uri(); ?>/img/icons/informacoes.svg" alt="Ilustração" class="super-menu-icon super-menu-icon--informacoes">
                                        <?= $menuName; ?>
                                    </div>
                                    <div class="col-md-10 col-sm-12">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => 'Informacoes',
                                            'container_class'   => 'super-menu-container',
                                            'add_li_class'      => 'col',
                                            'menu_class'        => 'row',
                                        ));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link--fale dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php
                            $menuName = get_term(get_nav_menu_locations()['FaleConosco'], 'nav_menu')->name;
                            echo $menuName;
                            ?>
                        </a>
                        <div class="dropdown-menu dropdown-super-menu">
                            <div class="">
                                <div class="row">
                                    <div class="dropdown-super-menu__title-section dropdown-super-menu__title-section--fale">
                                        <img src="<?= get_template_directory_uri(); ?>/img/icons/fale-conosco.svg" alt="Ilustração" class="super-menu-icon super-menu-icon--fale">
                                        <?= $menuName; ?>
                                    </div>
                                    <div class="col-md-10 col-sm-12">
                                        <?php
                                        wp_nav_menu(array(
                                            'theme_location'    => 'FaleConosco',
                                            'container_class'   => 'super-menu-container',
                                            'add_li_class'      => 'col',
                                            'menu_class'        => 'row',
                                        ));
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link--fale dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        </a>
                    </li>
                    <li class="nav-item nav-item--search d-none d-sm-block">
                        <a class="nav-link nav-link--search search-link-js" href="javascript:void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="">
                        </a>
                    </li>
                </ul>
            </div>
            <div class="search-form-wrapper"><?php get_search_form(); ?></div>
        </nav>
    </div>
