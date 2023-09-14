<?php /* Template Name: Conteúdo - Full | Links */ ?>

<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE FULL RELATED | page-content-full-related.php</div>
<?php }
get_header();

$iconHeader = get_field('icone_header');
$pageTitle = get_the_title();
include('include-header-title.php');
?>

<!-- BANNER -->
<div class="container">
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php include('include-banner.php'); ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>
<!-- FIM DE BANNER -->
<!-- CONTEUDO -->
<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-12 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                } ?>
            </div>
        </div>
        <hr>
        <!-- LINKS RELACIONADOS -->
        <?php include('include-links-relacionados.php'); ?>
        <!-- FIM DE LINKS RELACIONADOS -->
    </div>
</div>
<div class="box-search-group-wrapper" style="margin-bottom: -120px; margin-top: 120px">
    <div class="box-search-group">
        <div class="search-scout-group">
            <p>Procure um Grupo Escoteiro</p>
            <form class="form-inline" action="/cep" method="GET">
                <input type="text" class="form-control" name="cep" id="inlineFormInputName" placeholder="CEP ou localização">
                <button type="submit" class="btn">Procurar</button>
            </form>
        </div>
    </div>
</div>
<!-- FIM DE CONTEUDO -->

<?php get_footer() ?>
