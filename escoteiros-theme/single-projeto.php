<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE PROJETO SINGLE | single-projeto.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
$pageTitle = get_the_title();
$subheaderOption = 'show-subtitle';
$iconHeader = empty(get_field('icone_header')) ? 'Fazemos' : get_field('icone_header');
include('include-header-title.php');
?>

<div class="container">
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php include('include-banner.php'); ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>

<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-12 content__text">
                <?php while (have_posts()) {
                    the_post();
                    the_content();
                } ?>
            </div>
        </div>

        <?php include('include-btns.php');
        include('include-videos.php');
        include('include-banner-centro.php');
        include('include-carrossel.php'); ?>

        <section class="col-lg-10 offset-lg-1 mt-5">
            <!-- DOWNLOADS -->
            <?php if (have_rows('lista_downloads')) { ?>
                <?php while (have_rows('lista_downloads')) {
                    the_row();
                    $tituloDownloads = get_sub_field('area_download_titulo');
                    if($tituloDownloads){
                        echo '<h3>'.get_sub_field('area_download_titulo').'</h3>';
                    }

                    if (have_rows('downloads_repetidor')) {
                        while (have_rows('downloads_repetidor')):
                            the_row();
                            $file = get_sub_field('arquivo_download')['url'] ?? get_sub_field('link'); ?>

                            <a href="<?= $file ?>" class="btn btn--content-institutional btn-block mb-1" target="_blank"><?php the_sub_field('titulo_arquivo'); ?></a>
                        <?php endwhile;
                    }
                }
            } ?>
            <!-- FIM DE DOWNLOADS -->
        </section>
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
