<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package casinotoplists
 */

get_header();
?>
    <div id="middle">
        <div class="pageCenterLayout clearfix">


            <div class="breadcrumbs clearfix">

            <span>

                <span>
                    <a href="/" class="brdc_home fl">
                        <span class="hide">
                            casinotoplists.com
                        </span>
                    </a>



                    <span class="brdc_links fl">
                        <span class="gtsign"> &gt; </span>
                    </span>

                </span>

                <span><span class="brdc_links fl"><?php the_title(); ?></span></span>


            </div>


            <div class="internalResponsive grid_layout">
                <div class="nine sectionContentWrapper">


                    <img src="<?php the_field('p_block_1_img'); ?>"/>


                    <div class="article_body">
                        <h1><?php the_field('p_block_1_title'); ?></h1>
                        <hr/>

                        <p><strong>
                        <p><?php the_field('p_block_1_desc'); ?></p></strong></p>

                    </div>


                    <div class="widget_area">


                        <!-- US_Casino_Rooms - en_US - USD -->
                        <div class="widget_container">
                            <div class="widget_title orange">
                                <h3><?php the_field('p_block_1_table_title'); ?></h3>
                            </div>
                            <div class="widget_content toplist_default_full">
                                <div class="loading_overlay_toplist" style="display:none"></div>
                                <table class="toplist_widget">
                                    <thead>
                                    <tr>
                                        <th class="rank"></th>
                                        <th>Сайт</th>
                                        <th>Бонус</th>
                                        <th>Рейтинг</th>
                                        <th>Обзор</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody class="pagination-content-295">

                                    <?php if (get_field('p_block_1_table')) {
                                        $i = 0;
                                        foreach (get_field('p_block_1_table') as $item) {
                                            $i++; ?>
                                            <tr>
                                                <td class="position"><?= $i ?>.</td>
                                                <td class="logo">

                                                    <a target="<?= $item['link1']['target']; ?>"
                                                       href="<?= $item['link1']['url']; ?>"
                                                       rel="nofollow"
                                                       title="Go to Planet 7 Casino"
                                                       data-id="561"
                                                       data-label=""
                                                       data-tracker="">
                                                        <img src="<?= $item['img'] ?>" class="partner_logo"/>
                                                    </a>

                                                </td>
                                                <td class="bonus">

                                                    <a target="<?= $item['link1']['target']; ?>"
                                                       href="<?= $item['link1']['url']; ?>"
                                                       rel="nofollow"
                                                       title="Go to Planet 7 Casino"
                                                       data-id="561"
                                                       data-label=""
                                                       data-tracker="">


                                                        <span class="upto">up to</span> <?= $item['bonus'] ?>


                                                    </a>
                                                </td>
                                                <td class="ratings">
                                                    <?php if($item['rating'] == 5) { ?>
                                                        <div class="ratings_holder five"></div>
                                                    <?php } elseif($item['rating'] == 4.5) { ?>
                                                        <div class="ratings_holder fourhalf"></div>
                                                    <?php } elseif($item['rating'] == 4) { ?>
                                                        <div class="ratings_holder four"></div>
                                                    <?php } elseif($item['rating'] == 3.5) { ?>
                                                        <div class="ratings_holder threehalf"></div>
                                                    <?php } elseif($item['rating'] == 3) { ?>
                                                        <div class="ratings_holder three"></div>
                                                    <?php } elseif($item['rating'] == 2.5) { ?>
                                                        <div class="ratings_holder twohalf"></div>
                                                    <?php } elseif($item['rating'] == 2) { ?>
                                                        <div class="ratings_holder two"></div>
                                                    <?php } elseif($item['rating'] == 1.5) { ?>
                                                        <div class="ratings_holder onehalf"></div>
                                                    <?php } elseif($item['rating'] == 1) { ?>
                                                        <div class="ratings_holder one"></div>
                                                    <?php } ?>
                                                    <!-- <a class="" href="planet7-casino">Review</a> -->
                                                </td>
                                                <td class="review">
                                                    <a target="<?= $item['link1']['target']; ?>"
                                                       href="<?= $item['link1']['url']; ?>">
                                                        <?= $item['link1']['title']; ?>
                                                    </a>
                                                </td>
                                                <td class="playNow">
                                                    <a target="<?= $item['link2']['target']; ?>"
                                                       href="<?= $item['link2']['url']; ?>"
                                                       rel="nofollow"
                                                       class="play_button with_hover"
                                                       title="Go to Planet 7 Casino"
                                                       data-id="561"
                                                       data-label=""
                                                       data-tracker="">
                                                        <?= $item['link2']['title']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>

                                    </tbody>
                                </table>

                                <!--<div class="terms-and-conditions">
                                    Terms and conditions might apply to these offers.
                                </div>-->
                            </div>
                        </div>


                    </div>


                    <div class="article_body">

                        <?php the_field('p_block_2_text1'); ?>
                        <div class="toplist_content_wrapper toplist_2">
                            <div class="toplist_content">

                                <?php if (get_field('p_block_2_casino1')) {
                                    foreach (get_field('p_block_2_casino1') as $item) { ?>
                                        <div class="toplist_content_2">
                                            <div class="table width100">
                                                <div class="toplist_content_image table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="">
                                                        <img src="<?= $item['img']; ?>"/>
                                                    </a>
                                                </div>

                                                <div class="bonus table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="">

                                                        <h6> <?= $item['text']; ?></h6></a>
                                                </div>

                                                <div class="table-cell v-middle center_content playnow">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="" class="play_button with_hover">
                                                        <span><?= $item['link']['title']; ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>

<!--                            <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                        </div>
                         <?php the_field('p_block_2_text2'); ?>
                        <div class="toplist_content_wrapper toplist_2">
                            <div class="toplist_content">

                                <?php if (get_field('p_block_2_casino2')) {
                                    foreach (get_field('p_block_2_casino2') as $item) { ?>
                                        <div class="toplist_content_2">
                                            <div class="table width100">
                                                <div class="toplist_content_image table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="">
                                                        <img src="<?= $item['img']; ?>"/>
                                                    </a>
                                                </div>

                                                <div class="bonus table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="">

                                                        <h6> <?= $item['text']; ?></h6></a>
                                                </div>

                                                <div class="table-cell v-middle center_content playnow">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" data-id="561" data-tracker=""
                                                       data-label="" class="play_button with_hover">
                                                        <span><?= $item['link']['title']; ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>

<!--                            <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                        </div>
                        <p></p>

                    </div>


                    <!--<div class="widget_area clearfix related_pages bottom_related ">
                        <div class="widget_container center">

                            <div class="widget_title green">
                                <h3>Related Pages</h3>
                            </div>

                            <div class="widget_content">
                                <ul>

                                    <li class="inline-block"><a href="/uk-online-casinos">Online Casino UK</a></li>

                                    <li class="inline-block"><a href="/canadian-online-casinos">Online Casino Canada</a>
                                    </li>

                                    <li class="inline-block"><a href="/australia-online-casinos">Online Casino
                                            Australia</a></li>

                                    <li class="inline-block"><a href="/">Casino Reviews</a></li>

                                    <li class="inline-block"><a href="/secure-online-casinos">Safe Online Casinos</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>-->

                </div>

                <div class="four sectionContentWrapper">


                    <div class="widget_area right_section clearfix related_pages">
                        <div class="widget_container">

                            <div class="widget_title green">
                                <h3><?php the_field('p_sidebar1_title'); ?></h3>
                            </div>

                            <div class="widget_content">
                                <ul>
                                    <?php if (get_field('p_sidebar1_links')) {
                                        foreach (get_field('p_sidebar1_links') as $item) { ?>
                                            <a target="<?= $item['link']['target']; ?>"
                                               href="<?= $item['link']['url']; ?>">
                                                <li><?= $item['link']['title']; ?></li>
                                            </a>
                                        <?php }
                                    } ?>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="widget_area right_section clearfix">


                        <div class="widget_container gameguideWidget">
                            <div class="widget_title green">
                                <h3><?php the_field('p_sidebar2_title'); ?></h3>
                            </div>
                            <div class="widget_content">
                                <ul class="games_guide_widget clearfix">

                                    <?php if (get_field('p_sidebar2_posts')) {
                                        foreach (get_field('p_sidebar2_posts') as $item) { ?>
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
                                    <a target="<?= get_field('p_sidebar2_bottom_link')['target']; ?>"
                                       href="<?= get_field('p_sidebar2_bottom_link')['url']; ?>"><?= get_field('p_sidebar2_bottom_link')['title']; ?></a>
                                </div>
                            </div>
                        </div>


                    </div>

                </div>


            </div>


            <div class="widget_area"></div>

        </div>
    </div>

<?php
get_footer();
