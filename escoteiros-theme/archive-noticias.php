<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE ARCHIVE NOTICIAS | archive-noticias.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header();
$pageTitle = get_the_archive_title();
$headerOption = 'hide-title';
$iconHeader = 'Fazemos';
include('include-header-title.php');
?>

<div class="container">
    <!-- BANNER -->
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <?php
            $showBanner = true;
            $bannerOption = 'banner-header--block banner-header--news';
            include('include-banner.php');
            ?>
        </div>
    </div>
    <!-- FIM DE BANNER -->
</div>

<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
        <!-- FILTROS -->
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 mt-3 filter-desktop">
                <div class="btn-group flex-wrap btn-group--filter" role="group" aria-label="">
                    <a class="btn btn-secondary btn-group-item--active js-filter" href="" data-category="">Todas as categorias</a>
                    <?php
                    $taxonomy = 'CategoriaNoticia';
                    $terms = get_terms([
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                    ]);
                    foreach ($terms as $term) {
                        if ($term->name != "Destaque") {
                    ?>
                            <a class="btn btn-secondary js-filter" href="" data-category="<?= $term->slug; ?>" data-taxonomy="<?= $taxonomy ?>" data-max-pages="<?= $wp_query->max_num_pages; ?>">
                                <?= $term->name ?>
                            </a>
                    <?php }
                    } ?>
                </div>
            </div>
            <div class="col-12">
                <select class="filter-mobile filter-mobile-js" data-taxonomy="CategoriaNoticia">
                    <option value="">Todas as categorias</option>
                    <?php
                    $taxonomy = 'CategoriaNoticia';
                    $terms = get_terms([
                        'taxonomy' => $taxonomy,
                        'hide_empty' => false,
                    ]);
                    foreach ($terms as $term) :
                    ?>
                        <option value="<?= $term->slug; ?>"><?= $term->name ?></option>
                    <?php endforeach ?>
                </select>
            </div>
        </div>
        <!-- FIM DE FILTROS -->

        <!-- BUSCA NOTÍCIAS -->
        <div class="row">
            <div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
                <form class="search" action="<?= home_url('/'); ?>">
                    <div class="form-group">
                        <img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="" style="width: 20px; position: absolute; top: 8px; left: 20px;">
                        <input type="search" name="s" placeholder="Buscar por notícias" class="form-control" style="border:0; border-bottom: 1px solid #ccc; padding-left: 30px">
                    </div>
                    <input type="hidden" name="post_type" value="noticias">
                </form>
            </div>
        </div>
        <!-- FIM DE BUSCA NOTÍCIAS -->
        <div class="row" id="noticiasDestaque">
            <div class="col-md-12 col-sm-12">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type' => "noticias",
                        //'paged' => "1",
                        'tax_query' => array(
                            array(
                                'taxonomy' => "CategoriaNoticia",
                                'field' => 'slug',
                                'terms' => "destaque"
                            ),
                        ),
                        'orderby' => 'post_date',
                        'order' => 'DESC',
                        'posts_per_page' => '6',
                    );

                    $queryN  = new WP_Query($args);

                    if ($queryN->have_posts()) {
                        $cont = 0;
                        while ($queryN->have_posts()) {
                            $queryN->the_post();
                            $taxonomies = get_taxonomies('', 'names');
                            $eDestaque = false;
                            $arrayTax = wp_get_post_terms(get_the_ID(), $taxonomies);
                            foreach ($arrayTax as $tax) {
                                if ($tax->name == "Destaque") { ?>
                                    <?php include('include-card-destaque.php'); ?>
                    <?php    }
                            }
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- NOTÍCIAS -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="outrasNoticias">
                    <h2>Outras Notícias</h2>
                </div>
                <hr>
                <?php
                global $wp_query;
                $post_type = get_queried_object();
                ?>
                <?php include('include-loader.php'); ?>
                <div id="posts-container" class="row" data-post="<?= $post_type->name; ?>" data-taxonomy="<?= $taxonomy ?>"></div>
                <?php include('include-empty-state.php'); ?>
                <div class="load-more-wrapper">
                    <a href="javascript:void(0)" class="btn btn-primary-outline load-more-js">Carregar Mais</a>
                </div>
            </div>
        </div>
        <!-- FIM DE NOTÍCIAS -->
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
