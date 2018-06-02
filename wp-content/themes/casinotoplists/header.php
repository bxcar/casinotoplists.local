<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package casinotoplists
 */

?>
<!DOCTYPE html>
<!--[if lt IE 10]>
<html lang="en-US" class="yesie">
<![endif]-->

<!--[if gt IE 9]><!-->
<html lang="en-US" class="noie">
<!--<![endif]-->

<head>
    <title><?php bloginfo('name'); ?></title>

    <meta name="viewport" content="width=device-width, user-scalable=yes">

    <meta charset="utf-8"/>
    <meta name="description"
          content="<?php bloginfo('description'); ?>"/>


    <meta property="og:image" content="themes/casinotoplists/images/logo/ctl_sitelogo_en_US.png"/>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">

    <link rel="shortcut icon" href="https://www.casinotoplists.com/favicon.ico"/>
    <?php if (is_search()) { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_AlgoliaSiteSearchPage.css"/>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/algoliasitesearch.css"/>
    <?php } elseif (get_the_ID() == 11) { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_SuperPage.css"/>
    <?php } elseif (get_the_ID() == 216) { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_FlashGamePage.css"/>
    <?php } elseif (is_single()) { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_LandingPage.css"/>
    <?php } elseif (get_the_ID() == 9) { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_CasinoGuideOverviewPage.css"/>
    <?php } else { ?>
        <link rel="stylesheet" type="text/css"
              href="<?= get_template_directory_uri(); ?>/assets/css/casinotoplists_IndexPage.css"/>
    <?php } ?>
    <?php wp_head(); ?>
</head>

<body id="IndexPage">


<div id="mainWrapper">

    <div class="trustbadges">
        <div class="pageCenterLayout en_US">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/en_US.png"/>
        </div>
    </div>

    <div id="aboveMenu">
        <div class="pageCenterLayout">
            <div class="mainLogo fl">
                <a href="/">
                    <img src="<?php the_field('header_img', 'option') ?>"/>
                </a>
            </div>

            <div class="search_container fr">

                <form class="input_form searchform"
                      role="search"
                      method="get"
                      id="searchform"
                      action="<?php echo esc_url(home_url('/')); ?>">

                    <input class="input_box search_box placeholder" name="s" type="text"
                           id="searchBox" value=""/>
                    <input class="search_button" type="submit" value="Поиск"/>

                </form>


            </div>

        </div>
    </div>


    <div id="top">
        <div id="menu" class="dropdownMenu">
            <div class="pageCenterLayout">
                <div class="navigation_button_container">
                    <?php
                    echo str_replace(array('menu-item-has-children', 'sub-menu'), array('drop-down', 'fallback'), wp_nav_menu(array(
                            'echo' => false,
                            'theme_location' => 'menu-1',
                            'items_wrap' => '<ul class="dropdown_menu">%3$s</ul>',
                            'container' => 'false'
                        ))
                    );
                    ?>
                    <!--<ul class="dropdown_menu">
                        <li class="drop-down">

                            <a href="/casino-reviews">Casino Reviews</a>

                            <ul class="fallback">
                                <li>
                                    <a href="/usa-online-casinos">Online Casino USA</a>
                                </li>

                                <li>
                                    <a href="/uk-online-casinos">Online Casino UK</a>
                                </li>

                                <li>
                                    <a href="/canadian-online-casinos">Online Casino Canada</a>
                                </li>

                                <li>
                                    <a href="/australia-online-casinos">Online Casino Australia</a>
                                </li>
                            </ul>
                        </li>
                    </ul>-->
                </div>
            </div>
        </div>

    </div>