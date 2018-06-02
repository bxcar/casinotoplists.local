<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
                    <a href="/" class="brdc_home fl"></a>
                    <span class="brdc_links fl">
                        <span class="gtsign"> &gt; </span>
                    </span>
                </span>

                <span>
                    <span class="brdc_links fl">Поиск</span>
                </span>
            </div>


            <div class="internalResponsive grid_layout">
                <div id="ag_cse">
                    <div class="nine sectionContentWrapper">
                        <section class="widget_area">
                            <div class="widget_container searchResults">
                                <div class="widget_title green">
                                    <h1 class="fl">Результаты поиска </h1>
                                </div>

                                <h2 class="keywords_searched fl" style="margin-bottom: 10px;"> Результаты по
                                    запросу:<span
                                            class="search_value"> <?= get_search_query(); ?></span></h2>

                                <div id="ag_cse_results" class="results_loading">
                                    <ul class="ag_result_list search_list clearfix result_list">
                                        <?php
                                        /* Start the Loop */
                                        while (have_posts()) :
                                            the_post(); ?>

                                            <li class="clearfix">
                                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3>
                                                    <p><?php the_field('short_desc'); ?></p>
                                                    <?php the_permalink(); ?> </a>
                                            </li>
                                        <?php endwhile;
                                        ?>
                                    </ul>
                                </div>


                            </div>

                        </section>
                    </div>
                </div>

            </div>


            <div class="widget_area">


            </div>

        </div>
    </div>


<?php
get_footer();
