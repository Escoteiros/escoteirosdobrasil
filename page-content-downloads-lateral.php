<?php /* Template Name: Conteúdo | Downloads Lateral  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE Conteúdo | Downloads Lateral | page-content-downloads.lateral.php</div>
<?php }
get_header();
$iconHeader = get_field('icone_header');
$pageTitle = get_the_title();
$subheaderOption == 'hide-subtitle';
include('include-header-title.php');
?>

<div class="container">
    <div class="row">
        <div class="col-md-1 col-sm-12">
            <div class="d-none d-sm-block">
                <?php include('include-social-media.php'); ?>
            </div>
        </div>
        <div class="col-md-11 col-sm-12 mb-3 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php
            $showBanner = true;
            include('include-banner.php');
            ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>
<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <?php if (have_rows('lista_downloads')) { ?>
                <div class="col-md-6 offset-md-1 content__text">
            <?php } else { ?>
                <div class="col-md-11 offset-md-1 content__text">
                <?php }
                while (have_posts()) {
                    the_post();
                    the_content();
                }
                wp_reset_postdata();
                ?>
                </div>

                <!-- DOWNLOADS -->
                <?php if (have_rows('lista_downloads')) { ?>
                    <div class="col-md-5">
                        <h3>Arquivos Relacionados</h3>
                        <?php while (have_rows('lista_downloads')) {
                            the_row();
                            if (have_rows('downloads_repetidor')):
                                while (have_rows('downloads_repetidor')):
                                    the_row();
                                    $file = get_sub_field('arquivo_download')['url'] ?? get_sub_field('link');
                                ?>
                                    <a href="<?= $file ?>" class="btn btn--content-institutional btn-block mb-1" target="_blank"><?php the_sub_field('titulo_arquivo'); ?></a>
                                <?php endwhile;
                            endif;
                        } ?>
                    </div>
                <?php } ?>
                <!-- FIM DE DOWNLOADS -->
            </div>

            <!-- COMPARTILHAR -->
            <div class="row">
                <?php if (have_rows('lista_downloads')) { ?>
                    <div class="col-md-6 offset-md-1">
                <?php } else { ?>
                    <div class="col-md-11 offset-md-1">
                <?php } ?>
                <p class="social-media-text">Compartilhe esta história</p>
                <?php
                $socialMediaModifier = 'social-media--horizontal';
                include('include-social-media.php');
                ?>
                </div>
            </div>
            <!-- FIM DE COMPARTILHAR -->
        </div>
    </div>

    <?php get_footer() ?>
