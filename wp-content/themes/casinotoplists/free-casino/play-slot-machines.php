<?php
/* Template Name: play-slot-machines*/
?>
<?php get_header(); ?>
<div id="middle">
    <div class="pageCenterLayout clearfix">


        <div class="breadcrumbs clearfix">
        
            <span>
                <span>
                    <a href="/" class="brdc_home fl"></a>
                    <span class="brdc_links fl">
                        <span class="gtsign"> &gt; </span>
                    </span>
                </span>

                <span>
                    <span class="brdc_links fl"><?php the_title(); ?></span>
                </span>


        </div>


        <div class="internalResponsive grid_layout">
            <div class="nine sectionContentWrapper">


                <img src="<?php the_field('fs_block_1_img'); ?>"/>


                <div class="other_info_buttons">
                    <a href="<?= get_field('fs_block_1_link')['url']; ?>"
                       target="<?= get_field('fs_block_1_link')['target']; ?>"
                       class="rose-red"><?= get_field('fs_block_1_link')['title']; ?></a>
                </div>


                <div id="emptyCTAcontainer">
                    <a id="empty_cta" rel="nofollow" href="/goto/casino-com" data-label=""
                       data-id="523" data-tracker=""></a>
                </div>
                <div id="outclickContainer" class="hide">
                    <a id="popup_cta" rel="nofollow" href="/goto/casino-com"
                       data-id="523" data-label=""
                       data-tracker=""
                       class="play_button_arrow with_hover"
                       style="color: #FFF;padding: 15px 30px 15px 40px;font-size: 14px;border-radius: 3px;">
                        Play Now
                    </a>
                </div>


                <div id="htmlContent" class="hide">

                    <div class="htmlContent_wrapper"
                         style="text-align:center; width: 100%;padding: 5px 0px;background:url(https://edge.www.casinotoplists.com/themes/casinotoplists/images/green_bg.jpg?t=1476780053);height:100px;position:relative;">
                        <span class="header_decor left_decor"></span>


                        <div style="width:80%; margin:auto; display:table; position: relative; background:url(https://edge.www.casinotoplists.com/themes/casinotoplists/images/purple_square_bg.jpg?t=1491804717);padding: 10px; padding-bottom: 13px; border: 1px solid #FFF; ">
                            <div style="display:table-cell; width:100px;" class="cta_logo">

                                <img src="assets/ll_placeholder.jpg" id="casinoLogo"
                                     data-src="https://edge.www.casinotoplists.com/assets/Uploads/casinocom-200x69.png?t=1490709972"
                                     alt="Casino.com" style="vertical-align:middle;"/>

                            </div>
                            <div style="display:table-cell;vertical-align: middle;">
                                <p id="casinoBonus" style="color: #f7f7f4;font-size: 18px;text-align:center;">
                                    Get

                                    $400

                                    Bonus for free
                                </p>
                            </div>
                            <div style="display:table-cell;text-align: right;" id="cta_holder"></div>

                            <div style="position: absolute; bottom: 3px; right: 13px; margin: 0; color: white;"
                                 class="terms-and-conditions terms-and-conditions-short">Terms and conditions apply to
                                this offer.
                            </div>

                        </div>


                        <p style="color:#fff;padding-top: 3px;">
                            <span class="fa fa-angle-double-right"></span>
                            Are you interested in more Games?
                            <a href="/free-games" style="color:#ffef42;">Click Here</a>
                            <span class="fa fa-angle-double-left"></span>
                        </p>
                        <span class="header_decor right_decor"></span>
                    </div>


                    <iframe id="game_iframe" height="500"></iframe>

                </div>

                <div class="article_body">
                    <h1><?php the_field('fs_block_1_title'); ?></h1>
                    <hr/>
                    <p><strong>
                    <p><span id="docs-internal-guid-b7cfdf1c-e5ec-999b-c8f0-8e27b76329b7"><span><?php the_field('fs_block_1_desc'); ?></span></span>
                    </p></strong></p><br/><br/>

                </div>


                <div class="widget_area">


                    <!-- No_Deposit_Casinos - en_US -  -->
                    <div class="widget_container">
                        <div class="widget_title orange">
                            <h3><?php the_field('fs_block_2_title'); ?></h3>
                        </div>
                        <div class="widget_content no_deposit_toplist">
                            <table class="toplist_widget">
                                <thead>
                                <tr>
                                    <th class="rank"></th>
                                    <th class="left_content">Сайт</th>
                                    <th>Бонус</th>
                                    <th>Описание</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php if (get_field('fs_block_2_table')) {
                                    $i = 0;
                                    foreach (get_field('fs_block_2_table') as $item) {
                                        $i++; ?>
                                        <tr>
                                            <td class="position no_dep_pos"><?= $i ?>.</td>
                                            <td class="logo left_content">

                                                <a target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   rel="nofollow"
                                                   title="Go to Sloto Cash Casino"
                                                   data-id="565"
                                                   data-label=""
                                                   data-tracker="274895, 941370">
                                                    <img src="<?= $item['img']; ?>" class="partner_logo"/>
                                                </a>

                                            </td>
                                            <td class="bonus">
                                                <a target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   rel="nofollow"
                                                   title="Go to Sloto Cash Casino"
                                                   data-id="565"
                                                   data-label=""
                                                   data-tracker="274895, 941370">
                                                    <?= $item['bonus']; ?>
                                                </a>
                                            </td>
                                            <td class="bonus text_bonus">
                                                <a target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   rel="nofollow"
                                                   title="Go to Sloto Cash Casino"
                                                   data-id="565"
                                                   data-label=""
                                                   data-tracker="274895, 941370">

                                                    <?= $item['text']; ?>

                                                </a>
                                            </td>
                                            <td class="playNow">
                                                <a target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   rel="nofollow"
                                                   title="Go to Sloto Cash Casino"
                                                   data-id="565"
                                                   data-label=""
                                                   data-tracker="274895, 941370"
                                                   class="play_button with_hover"><?= $item['link']['title']; ?>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php }
                                } ?>

                                <!--<tr class="footer">
                                    <td colspan="5">
                                        <div class="right_content">View <a href="/free-casino/play-slot-machines#">All
                                                Casinos >></a></div>
                                    </td>
                                </tr>-->
                                </tbody>
                            </table>

                            <div class="terms-and-conditions">
                                Terms and conditions might apply to these offers.
                            </div>

                        </div>
                    </div>


                </div>

                <div class="article_body">
                    <?php the_field('fs_block_3_text1'); ?>
                    <div class="toplist_content_wrapper toplist_2">
                        <div class="toplist_content">

                            <?php if (get_field('fs_block_3_casino1')) {
                                foreach (get_field('fs_block_3_casino1') as $item) { ?>
                                    <div class="toplist_content_2">
                                        <div class="table width100">
                                            <div class="toplist_content_image table-cell v-middle">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="">
                                                    <img src="<?= $item['img']; ?>"/>
                                                </a>
                                            </div>

                                            <div class="bonus table-cell v-middle">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="">

                                                    <h6> <?= $item['bonus']; ?></h6></a>
                                            </div>

                                            <div class="table-cell v-middle center_content playnow">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="" class="play_button with_hover">
                                                    <span><?= $item['link']['title']; ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>


                        </div>

<!--                        <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                    </div>
                     <br>
                    <?php the_field('fs_block_3_text2'); ?>
                    <div class="toplist_content_wrapper toplist_2">
                        <div class="toplist_content">

                            <?php if (get_field('fs_block_3_casino2')) {
                                foreach (get_field('fs_block_3_casino2') as $item) { ?>
                                    <div class="toplist_content_2">
                                        <div class="table width100">
                                            <div class="toplist_content_image table-cell v-middle">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="">
                                                    <img src="<?= $item['img']; ?>"/>
                                                </a>
                                            </div>

                                            <div class="bonus table-cell v-middle">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="">

                                                    <h6> <?= $item['bonus']; ?></h6></a>
                                            </div>

                                            <div class="table-cell v-middle center_content playnow">
                                                <a rel="nofollow"
                                                   target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>"
                                                   data-id="1327" data-tracker=""
                                                   data-label="" class="play_button with_hover">
                                                    <span><?= $item['link']['title']; ?></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php }
                            } ?>


                        </div>

<!--                        <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                    </div>
                     <p></p>

                </div>


                <div class="widget_area">
                    <ul class="games_category_list">
                        <li>
                            <div class="widget_title purple">
                                <h3><?php the_field('fs_block_4_title'); ?></h3>
                            </div>
                            <div class="padding-10">
                                <span class="loading_overlay" data-identfier="3" style="display: none;"></span>
                                <div class="games_row clearfix" data-identfier="3">

                                    <?php if (get_field('fs_block_4_games')) {
                                        foreach (get_field('fs_block_4_games') as $item) { ?>
                                            <div class="game_block fl">
                                                <a target="<?= $item['link']['target']; ?>"
                                                   href="<?= $item['link']['url']; ?>">
                                                    <div class="game_information hide">
                                                        <h4><?= $item['title']; ?></h4>
                                                        <span class="play_button"><?= $item['link']['title']; ?></span>
                                                    </div>

                                                    <img src="<?= $item['img']; ?>"/>

                                                </a>
                                            </div>
                                        <?php }
                                    } ?>

                                    <span class="pattern_button">
                                    
                                        
                                    
                                </span>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>


            </div>


            <div class="four sectionContentWrapper">
                <div class="widget_area right_section clearfix">


                    <!--<div class="widget_container promotionsWidget">
                        <div class="widget_title pink">
                            <h3>Casino Promotions</h3>
                        </div>
                        <div class="widget_content">
                            <ul class="promotions_widget clearfix">

                                <li class="clearfix">
                                    <div class="content_wrapper clearfix">
                                        <div class="time_left inline-block v-middle">
                                            <a href="/promofeed/65/casino-tropez" rel="nofollow" data-id="382"
                                               target="_blank">

                                                <strong>23 Day/s remaining</strong>
                                            </a>

                                        </div>
                                        <div class="image_wrapper inline-block v-middle">


                                            <a href="/promofeed/65/casino-tropez" rel="nofollow" data-id=""
                                               target="_blank"><img src="assets/ll_placeholder.jpg"
                                                                    data-src="https://edge.www.casinotoplists.com/assets/Uploads/tropez-casino-dark186x90.jpg?t=1433615314"
                                                                    alt="Casino Tropez Review"/></a>


                                        </div>
                                        <div class="info_wrapper">
                                            <div class="info_details">
                                                <a href="/promotions?uID=65"><h3>€3000 Welcome Bonus + 50% Refund</h3>
                                                </a>
                                                <span>Wagering requirements. Terms and conditions apply.</span>
                                            </div>
                                            <a class="right_side_widget_button" href="/promotions?uID=65">Read More</a>
                                        </div>

                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="content_wrapper clearfix">
                                        <div class="time_left inline-block v-middle">
                                            <a href="/promofeed/66/casino-swiss" rel="nofollow" data-id="451"
                                               target="_blank">

                                                <strong>23 Day/s remaining</strong>
                                            </a>

                                        </div>
                                        <div class="image_wrapper inline-block v-middle">


                                            <a href="/promofeed/66/casino-swiss" rel="nofollow" data-id=""
                                               target="_blank"><img src="assets/ll_placeholder.jpg"
                                                                    data-src="https://edge.www.casinotoplists.com/assets/Uploads/scasino-ctl-186x90.png?t=1433615309"
                                                                    alt="Casino Swiss Review"/></a>


                                        </div>
                                        <div class="info_wrapper">
                                            <div class="info_details">
                                                <a href="/promotions?uID=66"><h3>CHOOSE WELCOME OFFER 125% UP TO €500 OR
                                                        20% CASHBACK</h3></a>
                                                <span>This welcome bonus is offered to new customers only. A minimum deposit of €20 is needed. The maximum bonus/cashback amount is €500. Bonus wagering is 25x (bonus + deposit). Players have 30 Days to meet wagering requirements. Further terms and conditions apply.

</span>
                                            </div>
                                            <a class="right_side_widget_button" href="/promotions?uID=66">Read More</a>
                                        </div>

                                    </div>
                                </li>

                                <li class="clearfix">
                                    <div class="content_wrapper clearfix">
                                        <div class="time_left inline-block v-middle">
                                            <a href="/promofeed/74/casino-las-vegas" rel="nofollow" data-id="380"
                                               target="_blank">

                                                <strong>126 Day/s remaining</strong>
                                            </a>

                                        </div>
                                        <div class="image_wrapper inline-block v-middle">


                                            <a href="/promofeed/74/casino-las-vegas" rel="nofollow" data-id=""
                                               target="_blank"><img src="assets/ll_placeholder.jpg"
                                                                    data-src="https://edge.www.casinotoplists.com/assets/Uploads/CasinoLasVegas-265x88.jpg?t=1500652187"
                                                                    alt="Casino Las Vegas Review"/></a>


                                        </div>
                                        <div class="info_wrapper">
                                            <div class="info_details">
                                                <a href="/promotions?uID=74"><h3>125% UP TO €500 + 50 FREE SPINS ON YOUR
                                                        FIRST DEPOSIT</h3></a>
                                                <span>This promotion is open to new customers only. Players need to make a minimum deposit of €20. Maximum bonus: €500. Wagering requirement of 125% bonus: 25x (Bonus + Deposit). Free Spin wagering requirement: 20x win amount. Players have 30 days to meet wagering requirements for free spins and bonus. Further terms and conditions apply.</span>
                                            </div>
                                            <a class="right_side_widget_button" href="/promotions?uID=74">Read More</a>
                                        </div>

                                    </div>
                                </li>

                            </ul>
                        </div>

                        <span class="terms-and-conditions terms-and-conditions-short">
                Terms and conditions might apply to these offers.
            </span>

                    </div>-->


                    <div class="widget_container gameguideWidget">
                        <div class="widget_title green">
                            <h3><?php the_field('fs_sidebar_block_1_title'); ?></h3>
                        </div>
                        <div class="widget_content">
                            <ul class="games_guide_widget clearfix">
                                <?php if (get_field('fs_sidebar_block_1_posts')) {
                                    foreach (get_field('fs_sidebar_block_1_posts') as $item) { ?>
                                        <li class="clearfix">
                                            <a target="<?= $item['link']['target']; ?>"
                                               href="<?= $item['link']['url']; ?>">
                                                <div class="content_wrapper clearfix">
                                                    <div style="background-image: url(<?= $item['img']; ?>);
                                                            background-position: 0;" class="game_image icon_wrapper fl slots"></div>
                                                    <div class="info_wrapper">
                                                        <h3><?= $item['title']; ?></h3>
                                                        <p><?= $item['desc']; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    <?php }
                                } ?>


                            </ul>
                            <div class="guides_footer widget_title green clearfix">
                                <a target="<?= get_field('fs_sidebar_block_1_bottom_link')['target']; ?>"
                                   href="<?= get_field('fs_sidebar_block_1_bottom_link')['url']; ?>"><?= get_field('fs_sidebar_block_1_bottom_link')['title']; ?></a>
                            </div>
                        </div>
                    </div>

                    <div class="widget_container PaymentOptionWidget">
                        <div class="widget_title mustard">
                            <h3><?php the_field('fs_sidebar_block_2_title'); ?></h3>
                        </div>
                        <div class="widget_content">

                            <ul class="payment_options_widget">

                                <?php if (get_field('fs_sidebar_block_2_posts')) {
                                    foreach (get_field('fs_sidebar_block_2_posts') as $item) { ?>
                                        <li class="clearfix">
                                            <a target="<?= $item['link']['target']; ?>"
                                               href="<?= $item['link']['url']; ?>">
                                                <div class="content_wrapper clearfix">


                                                    <img src="<?= $item['img']; ?>" class="fl"/>


                                                    <div class="info_wrapper fl">
                                                        <h3><?= $item['title']; ?></h3>
                                                    </div>
                                                    <span class="arrow_effect fr"></span>
                                                </div>
                                            </a>
                                        </li>
                                    <?php }
                                } ?>

                            </ul>

                            <div class="guides_footer widget_title mustard">

                                <a target="<?= get_field('fs_sidebar_block_2_bottom_link')['target']; ?>"
                                   href="<?= get_field('fs_sidebar_block_2_bottom_link')['url']; ?>"><?= get_field('fs_sidebar_block_2_bottom_link')['title']; ?></a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>


        <div class="widget_area">


        </div>

    </div>
</div>
<?php get_footer(); ?>