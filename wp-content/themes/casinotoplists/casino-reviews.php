<?php
/* Template Name: casino-reviews*/
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


        <div class="full sectionContentWrapper article_body">
            <h1><?php the_field('cr_block_1_title'); ?></h1>
            <div class="logo_holder fl">
                <img src="<?php the_field('cr_block_1_img'); ?>"/>
            </div>
            <p>
                <?php the_field('cr_block_1_desc'); ?>
            <p> </p></p>
        </div>


        <div class="widget_area">


            <!-- Best_Online_Casinos - en_US -  -->
            <div class="widget_container">
                <div class="widget_title orange">
                    <h3><?php the_field('cr_table_title'); ?></h3>
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
                        <tbody class="pagination-content-100">


                        <?php if (get_field('cr_table')) {
                            $i = 0;
                            foreach (get_field('cr_table') as $item) {
                                $i++; ?>
                                <tr>
                                    <td class="position"><?= $i ?>.</td>
                                    <td class="logo">

                                        <a target="<?= $item['link1']['target']; ?>" href="<?= $item['link1']['url']; ?>"
                                           rel="nofollow"
                                           data-id="523" data-label=""
                                           data-tracker="">
                                            <img src="<?= $item['img']; ?>" class="partner_logo"/>
                                        </a>

                                    </td>
                                    <td class="bonus">

                                        <a target="<?= $item['link1']['target']; ?>" href="<?= $item['link1']['url']; ?>" rel="nofollow" title="Go to Casino.com"
                                           data-id="523" data-label=""
                                           data-tracker="">
                                            <span class="upto">до</span> <?= $item['bonus']; ?>
                                        </a>
                                    </td>
                                    <td class="ratings">
                                        <div class="ratings_holder five"></div>
                                        <!-- <a class="" href="casino-com">Review</a> -->
                                    </td>
                                    <td class="review">
                                        <a target="<?= $item['link1']['target']; ?>" href="<?= $item['link1']['url']; ?>">
                                            <?= $item['link1']['title']; ?>
                                        </a>
                                    </td>
                                    <td class="playNow">
                                        <a target="<?= $item['link2']['target']; ?>" href="<?= $item['link2']['url']; ?>" rel="nofollow" class="play_button with_hover"
                                           title="Go to Casino.com" data-id="523"
                                           data-label="" data-tracker="">
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

        <div class="full sectionContentWrapper article_body">

            <?php the_field('cr_block_2_text1'); ?>
            <div class="toplist_content_wrapper toplist_2">
                <div class="toplist_content">

                    <?php if (get_field('cr_block_2_casino1')) {
                        foreach (get_field('cr_block_2_casino1') as $item) { ?>
                            <div class="toplist_content_2">
                                <div class="table width100">
                                    <div class="toplist_content_image table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">
                                            <img src="<?= $item['img']; ?>"/>
                                        </a>
                                    </div>

                                    <div class="bonus table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">

                                            <h6><?= $item['bonus']; ?></h6></a>
                                    </div>

                                    <div class="table-cell v-middle center_content playnow">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label=""
                                           class="play_button with_hover">
                                            <span><?= $item['button_text']; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>

                </div>

<!--                <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

            </div>
            <?php the_field('cr_block_2_text2'); ?>
            <div class="toplist_content_wrapper toplist_2">
                <div class="toplist_content">

                    <?php if (get_field('cr_block_2_casino2')) {
                        foreach (get_field('cr_block_2_casino2') as $item) { ?>
                            <div class="toplist_content_2">
                                <div class="table width100">
                                    <div class="toplist_content_image table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">
                                            <img src="<?= $item['img']; ?>"/>
                                        </a>
                                    </div>

                                    <div class="bonus table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">

                                            <h6><?= $item['bonus']; ?></h6></a>
                                    </div>

                                    <div class="table-cell v-middle center_content playnow">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label=""
                                           class="play_button with_hover">
                                            <span><?= $item['button_text']; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>

                </div>

<!--                <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

            </div>
            <?php the_field('cr_block_2_text3'); ?>
            <div class="toplist_content_wrapper toplist_2">
                <div class="toplist_content">

                    <?php if (get_field('cr_block_2_casino3')) {
                        foreach (get_field('cr_block_2_casino3') as $item) { ?>
                            <div class="toplist_content_2">
                                <div class="table width100">
                                    <div class="toplist_content_image table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">
                                            <img src="<?= $item['img']; ?>"/>
                                        </a>
                                    </div>

                                    <div class="bonus table-cell v-middle">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label="">

                                            <h6><?= $item['bonus']; ?></h6></a>
                                    </div>

                                    <div class="table-cell v-middle center_content playnow">
                                        <a rel="nofollow" target="<?= $item['link']['target']; ?>" href="<?= $item['link']['url']; ?>"
                                           data-id="523" data-tracker="" data-label=""
                                           class="play_button with_hover">
                                            <span><?= $item['button_text']; ?></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php }
                    } ?>

                </div>

<!--                <span class="terms-and-conditions">Terms and conditions might apply to these offers.</span>-->

            </div>
            <p></p>

        </div>

        <br/>


        <div class="widget_area">
            <!-- Casino games guide -->


            <!-- Casino games guide -->

        </div>
        <div class="widget_area"></div>
    </div>
</div>
<?php get_footer(); ?>