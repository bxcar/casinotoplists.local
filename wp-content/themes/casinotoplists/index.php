<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package casinotoplists
 */

get_header();
?>
    <div id="middle">
        <div class="pageCenterLayout clearfix">

            <div class="internalResponsive grid_layout">
                <div class="nine sectionContentWrapper">


                    <img src="<?php the_field('main_image'); ?>" alt="Online Casinos"/>


                    <div class="article_body">
                        <h1><?php the_field('title'); ?></h1>
                        <hr/>
                        <?php the_field('top_text'); ?>
                    </div>
                </div>

                <div class="four sectionContentWrapper">
                    <div class="widget_area right_section clearfix">


                        <!-- Best_Online_Casinos - en_US -  -->
                        <div class="widget_container">
                            <div class="widget_title orange">
                                <h3><?php the_field('sidebar_title'); ?></h3>
                            </div>
                            <div class="widget_content">

                                <table class="toplist_widget toplist_default_side">
                                    <thead>
                                    <tr>
                                        <th class="rank"></th>
                                        <th>Сайт</th>

                                        <th>Бонус</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php if (get_field('sidebar_sites')) {
                                        $i = 0;
                                        foreach (get_field('sidebar_sites') as $item) {
                                            $i++; ?>
                                            <tr>
                                                <td class="position"><?= $i ?>.</td>
                                                <td class="logo">
                                                    <a target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" rel="nofollow">
                                                        <img src="<?= $item['img']; ?>" class="partner_logo"
                                                             alt="Casino.com"/>
                                                    </a>
                                                </td>

                                                <td class="bonus">
                                                    <a target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" rel="nofollow"
                                                       title="Go to Casino.com">
                                                        <span class="upto">до</span> <?= $item['bonus']; ?>
                                                    </a>
                                                </td>
                                                <td class="playNow">
                                                    <a target="<?= $item['link']['target']; ?>"
                                                       href="<?= $item['link']['url']; ?>" rel="nofollow"
                                                       class="play_button with_hover">
                                                        <?= $item['button_text']; ?>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>


                    </div>
                </div>

            </div>


            <div class="games_list">
                <div class="crown_big"></div>

                <?php if (get_field('games')) {
                    foreach (get_field('games') as $item) { ?>
                        <div class="games_row clearfix">

                            <div class="game_desc fl">
                                <div class="crown_small"></div>
                                <h4 class="game_title"><?= $item['title']; ?></h4>
                                <div class="games_icon craps"></div>
                            </div>

                            <?php if ($item['games_list']) {
                                foreach ($item['games_list'] as $game) { ?>
                                    <div class="game_block fl">
                                        <a target="<?= $game['link']['target']; ?>" href="<?= $game['link']['url']; ?>">
                                            <div class="game_information hide">
                                                <h4><?= $game['title']; ?></h4>
                                                <p><?= $game['desc']; ?></p>
                                                <span class="play_button">Play Now</span>
                                            </div>
                                            <img src="<?= $game['img']; ?>"/>
                                        </a>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    <?php }
                } ?>
            </div>

            <br/>


            <div class="widget_area">

                <div class="widget_container gameguideWidget">
                    <div class="widget_title green">
                        <h3><?php the_field('block_1_title'); ?></h3>
                    </div>
                    <div class="widget_content">
                        <ul class="games_guide_widget clearfix">

                            <?php if (get_field('block_1_posts')) {
                                foreach (get_field('block_1_posts') as $item) {?>
                                    <li class="clearfix">
                                        <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>">
                                            <div class="content_wrapper clearfix">
                                                <div style="background-image: url(<?= $item['img']; ?>);
                                                        background-position: 0;" class="game_image icon_wrapper fl"></div>
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
                        <div class="guides_footer widget_title green">&nbsp;</div>
                    </div>
                </div>

            </div>


            <div class="widget_area">
                <div class="widget_container news_widget">
                    <div class="widget_title red">
                        <h3 class="fl"><?php the_field('block_2_title'); ?></h3>
                        <a class="fr" href="/#">
                            Смотреть все последние новости >>
                        </a>
                    </div>
                    <div class="widget_content">
                        <ul class="news_content clearfix">

                            <?php if (get_field('block_2_posts')) {
                                foreach (get_field('block_2_posts') as $item) {?>
                                    <li class="clearfix">
                                        <div class="content_wrapper clearfix">
                                            <div class="fl info_img">
                                                <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>">

                                                    <img src="<?= $item['img']; ?>"/>

                                                </a>
                                            </div>
                                            <div class="info_wrapper">
                                                <h6>
                                                    <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"><?= $item['title']; ?></a>
                                                </h6>
                                                <p><?= $item['desc']; ?></p>
                                            </div>
                                            <div class="additional_info clearfix">
                                    <!--<span class="posted_date fl">
                                        Posted on 23/11/11
                                    </span>-->
                                                <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>" class="read fr">Подробнее ></a>
                                            </div>
                                        </div>
                                    </li>
                                <?php }
                            } ?>

                        </ul>
                    </div>
                </div>
            </div>

            <div class="full sectionContentWrapper article_body"><?php the_field('bottom_text'); ?></div>
            <div class="widget_area"></div>
        </div>
    </div>
<?php
get_footer();
