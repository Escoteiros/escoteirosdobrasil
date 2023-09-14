<?php /* Template Name: Conteúdo - Rede Social  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE REDE SOCIAL | page-content-social.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
$iconHeader = get_field('icone_header');
$pageTitle = get_the_title();
include('include-header-title.php');
?>

<!-- BANNER -->
<div class="container">
    <div class="row">
        <div class="col-md-1 col-sm-12">
            <div class="d-none d-sm-block">
                <?php
                include('include-social-media.php');
                ?>
            </div>
        </div>
        <div class="col-md-11 col-sm-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php
            $showBanner = true;
            include('include-banner.php');
            ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>
<!-- FIM DE BANNER -->
<!-- CONTEUDO -->
<div class="container">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-10 offset-md-1 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                // DOWNLOADS
                include('include-card-download-medio.php');

                // ACCORDION
                if (have_rows('lista_textos')) { ?>
                    <div class="row mt-4 mb-5">
                        <div class="col-12">
                            <div class="accordion accordion--reports" id="accordion1">
                                <?php while (have_rows('lista_textos')) {
                                    the_row(); ?>

                                    <div class="card">
                                        <div class="card-header position-relative">
                                            <button class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo get_row_index(); ?>">
                                                <?php the_sub_field('area_texto_titulo'); ?>
                                            </button>
                                        </div>

                                        <div id="collapse<?php echo get_row_index(); ?>" class="collapse" data-parent="#accordion1">
                                            <div class="card-body">
                                                <?php the_sub_field('area_de_texto'); ?>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                <?php }
                // FIM DE ACCORDION
                // LISTA DE LINKS
                if (have_rows('lista_links__arquivos')) { ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="archive-buttons-wrapper">
                                <?php while (have_rows('lista_links__arquivos')) {
                                    the_row();
                                    $post_object = get_sub_field('link__arquivo');
                                    $post_label = get_sub_field('label_link__arquivo');
                                    if ($post_object) {
                                        $post = $post_object;
                                        setup_postdata($post); ?>
                                        <a href="<?php the_permalink(); ?>" class="btn btn--content btn-block mb-1"><?= $post_label; ?></a>
                                        <?php wp_reset_postdata();
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- FIM DE LISTA DE LINKS -->
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <p class="social-media-text">Compartilhe esta história</p>
                <?php
                $socialMediaModifier = 'social-media--horizontal';
                include('include-social-media.php');
                ?>
            </div>
        </div>

    </div>
</div>
<!-- FIM DE CONTEUDO -->

<!-- FOOTER -->
<?php get_footer() ?>
