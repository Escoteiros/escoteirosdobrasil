<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE download | page-download.php</div>
<?php }

get_header();

$iconHeader = 'Informacoes';
$pageTitle = get_the_archive_title();
include('include-header-title.php');
?>

<div class="row">
    <div class="container">
        <div class="content-wrapper content-wrapper--no-dash">
            <div class="col-md-3 col-sm-12">
                <div class="border-sidebar"></div>
                <?php
                $setTaxonomy = 'Downloads';
                include('include-taxonomy-menu.php');
                ?>
            </div>
            <div class="col-md-9 col-sm-12">
                <?php
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

<?php get_footer() ?>
