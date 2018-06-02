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
    <?php if (get_the_ID() == 9) { ?>
        <link rel="stylesheet" type="text/css"
              href="https://edge.www.casinotoplists.com/assets/_combinedfiles/casinotoplists_CasinoGuideOverviewPage.css?m=1524131373"/>
    <?php } elseif (get_the_ID() == 11) { ?>
        <link rel="stylesheet" type="text/css"
              href="https://edge.www.casinotoplists.com/assets/_combinedfiles/casinotoplists_SuperPage.css?m=1524131659"/>
    <?php } elseif (get_the_ID() == 216) { ?>
        <link rel="stylesheet" type="text/css"
              href="https://edge.www.casinotoplists.com/assets/_combinedfiles/casinotoplists_FlashGamePage.css?m=1524133608"/>
    <?php } elseif (is_single()) { ?>
        <link rel="stylesheet" type="text/css"
              href="https://edge.www.casinotoplists.com/assets/_combinedfiles/casinotoplists_LandingPage.css?m=1524130800"/>
    <?php } else { ?>
        <link rel="stylesheet" type="text/css"
              href="https://edge.www.casinotoplists.com/assets/_combinedfiles/casinotoplists_IndexPage.css?m=1524129476"/>
    <?php } ?>
    <?php wp_head(); ?>
</head>

<body id="IndexPage">


<div id="mainWrapper">

    <div class="trustbadges">
        <div class="pageCenterLayout en_US">
            <img src="https://edge.www.casinotoplists.com/themes/casinotoplists/images/header/en_US.png?t=1517840952"/>
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

                <form class="input_form" id="Form_AlgoliaSiteSearchForm" action="/search" method="get"
                      enctype="application/x-www-form-urlencoded">

                    <input placeholder="" class="input_box search_box placeholder" name="Search" type="text"
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
                    echo str_replace('menu-item', 'drop-down', wp_nav_menu(array(
                            'echo' => false,
                            'theme_location' => 'menu-1',
                            'items_wrap' => '<ul class="dropdown_menu">%3$s</ul>',
                            'container' => 'false'
                        ))
                    );
                    ?>
                </div>
            </div>
        </div>

    </div>