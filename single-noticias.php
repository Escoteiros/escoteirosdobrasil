<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE NOTICIAS SINGLE | single-noticia.php</div>
<?php }
get_header();

$pageTitle = get_the_title();
$subheaderOption = 'show-subtitle';
$iconHeader = '';
include('include-header-title.php');
?>

<div class="container">
    <?php
    if(get_field('banner')['banner_topo_show']){
    ?>
        <div class="row">
            <div class="col-md-1 col-sm-12">
                <div class="d-none d-sm-block">
                    <?php include('include-social-media.php'); ?>
                </div>
            </div>
            <div class="col-md-11 col-sm-12 remove-padding-mobile">
                <!-- INCLUDE BANNER -->
                <?php include('include-banner.php'); ?>
                <!-- INCLUDE BANNER -->
            </div>
        </div>
    <?php } ?>
</div>

<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-11 offset-md-1 col-sm-12 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                } ?>
            </div>
        </div>

        <!-- COMPARTILHAR -->
        <div class="row">
            <div class="col-md-11 offset-md-1 col-sm-12">
                <p class="social-media-text">Compartilhe esta história</p>
                <?php
                $socialMediaModifier = 'social-media--horizontal';
                include('include-social-media.php');
                ?>
            </div>
        </div>
        <!-- FIM DE COMPARTILHAR -->
        <!-- NOTÍCIAS RELACIONADAS -->
        <?php
        $noticiasRelacionadas = get_field('noticias_relacionadas');
        if ($noticiasRelacionadas) { ?>
            <div class="row">
                <div class="col-12 text-center">
                    <h3 class="mt-5 mb-5">Notícias Relacionados</h3>
                </div>

                <?php
                foreach ($noticiasRelacionadas as $post) { ?>
                    <?php setup_postdata($post); ?>
                    <!-- CARD NOTÍCIAS -->
                    <?php include('include-card-noticias.php'); ?>
                    <!-- CARD NOTÍCIAS -->
                <?php } ?>
            </div>
            <!-- FIM DA LISTA DE NOTÍCIAS -->

            <div class="row">
                <div class="col-12 mt-4 text-center">
                    <a href="<?php echo get_home_url(); ?>/noticias" class="btn btn-primary">Ver Mais</a>
                </div>
            </div>
        <?php } ?>
        <!-- FIM DE NOTÍCIAS RELACIONADAS -->
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
