<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE DOWNLOAD | archive-downlaod.php</div>
<?php }
get_header();
$iconHeader = 'Informacoes';
$pageTitle = get_the_archive_title();
include('include-header-title.php');
?>

<div class="container">
	<div class="content-wrapper content-wrapper--no-dash">
        <!-- BUSCA DOWNLOADS -->
        <div class="row mb-md-5">
            <div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
                <form id="formBusca" class="search" action="<?= home_url( '/' ); ?>">
                    <div class="form-group">
                        <img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="">
                        <input type="search" name="s" placeholder="Buscar por documento" class="form-control" aria-label="Buscar por documento" />
                    </div>
                    <input type="hidden" name="post_type" value="download">
                </form>
            </div>
        </div>
        <!-- FIM DE BUSCA DOWNLOADS -->
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="border-sidebar"></div>
                <?php
                    $setTaxonomy = 'Downloads';
                    include('include-taxonomy-menu.php');
                ?>
            </div>
            <div class="col-md-9 col-sm-12">
                <?php
                    global $wp_query;
                    $post_type = get_queried_object();
				?>
				<?php include('include-loader.php'); ?>
                <div id="posts-container" class="row" data-post="<?= $post_type->name; ?>" data-taxonomy="<?= $taxonomy ?>">
                </div>
                <div id="emptyContainer">
                    <?php include('include-empty-state.php'); ?>
                    <div class="load-more-wrapper">
                        <a href="javascriptt:void(0)" class="btn btn-primary-outline load-more-js">Carregar Mais</a>
                    </div>
                </div>
                <div id="firstPageContainer" class="hide">
                    <div class="firstPageContent">
                        Selecione algo no menu
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- ILUSTRA -->
<div class="bg-ilustra bg-ilustra--download"></div>
<!-- FIM DE ILUSTRA -->

<!-- FOOTER -->
<?php get_footer() ?>
