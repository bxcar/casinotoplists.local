<?php
/* Template Name: online-casino-games-guide*/
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

                    <div class="article_body">
                        <h1><?php the_field('oc_block_1_title'); ?></h1>
                        <hr/>
                        <p><a name="Guides"></a></p>
                        <?php the_field('oc_block_1_desc'); ?>
                        <p style="text-align: justify;">
                        <div class="toplist_content_wrapper toplist_3">
                            <div class="toplist_content">

                                <?php if (get_field('oc_block_3_casino3')) {
                                    foreach (get_field('oc_block_3_casino3') as $item) { ?>
                                        <div class="toplist_content_3">
                                            <div class="table width100">
                                                <div class="toplist_content_image table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">
                                                        <img src="<?= $item['img']; ?>"/>
                                                    </a>
                                                </div>

                                                <div class="bonus table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">

                                                        <h6><?= $item['bonus']; ?></h6></a>
                                                </div>

                                                <div class="table-cell v-middle center_content playnow">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="" class="play_button with_hover">
                                                        <span><?= $item['button_text']; ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>

<!--                            <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                        </div>
                        </p>
                        <p style="text-align: justify;"> </p>
                    </div>
                    <br/>

                    <section class="widget_area games_guide">
                        <div class="widget_title green">
                            <h3><?php the_field('oc_block_2_title'); ?></h3>
                        </div>
                        <div class="widget_content">
                            <?php if (get_field('oc_block_2_posts')) {
                                foreach (get_field('oc_block_2_posts') as $item) { ?>
                                    <ul>
                                        <li class="clearfix">
                                            <a target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>">
                                                <div class="content_wrapper clearfix no-widget">
                                                    <div style="background-image: url(<?= $item['img']; ?>);
                                                            background-position: 0;" class="game_image icon_wrapper fl slots"></div>
                                                    <div class="info_wrapper">
                                                        <h3><?= $item['title']; ?></h3>
                                                        <p><?= $item['desc']; ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                <?php }
                            } ?>

                            <div class="guides_footer widget_title green"></div>
                        </div>
                    </section>


                    <div class="article_body">
                        <h2 style="text-align: justify;"><strong><img src="<?php the_field('oc_block_2_img'); ?>" class="leftAlone"/></strong></h2>
                        <?php the_field('oc_block_3_text1'); ?>
                        <div class="toplist_content_wrapper toplist_3">
                            <div class="toplist_content">

                                <?php if (get_field('oc_block_3_casino1')) {
                                    foreach (get_field('oc_block_3_casino1') as $item) { ?>
                                        <div class="toplist_content_3">
                                            <div class="table width100">
                                                <div class="toplist_content_image table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">
                                                        <img src="<?= $item['img']; ?>"/>
                                                    </a>
                                                </div>

                                                <div class="bonus table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">

                                                        <h6><?= $item['bonus']; ?></h6></a>
                                                </div>

                                                <div class="table-cell v-middle center_content playnow">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="" class="play_button with_hover">
                                                        <span><?= $item['button_text']; ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>

<!--                            <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                        </div>
                        </p>
                        <?php the_field('oc_block_3_text2'); ?>
                        <div class="toplist_content_wrapper toplist_3">
                            <div class="toplist_content">

                                <?php if (get_field('oc_block_3_casino2')) {
                                    foreach (get_field('oc_block_3_casino2') as $item) { ?>
                                        <div class="toplist_content_3">
                                            <div class="table width100">
                                                <div class="toplist_content_image table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">
                                                        <img src="<?= $item['img']; ?>"/>
                                                    </a>
                                                </div>

                                                <div class="bonus table-cell v-middle">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="">

                                                        <h6><?= $item['bonus']; ?></h6></a>
                                                </div>

                                                <div class="table-cell v-middle center_content playnow">
                                                    <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                                       data-id="523" data-tracker=""
                                                       data-label="" class="play_button with_hover">
                                                        <span><?= $item['button_text']; ?></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>

                            </div>

<!--                            <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

                        </div>
                        </p>
                    </div>
                </div>


            </div>


            <div class="widget_area"></div>

        </div>
    </div>

<?php get_footer(); ?>