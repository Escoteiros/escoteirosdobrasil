<?php /* Template Name: Conteúdo - Full  */
if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE FULL | page-content-full.php</div>
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
                ?>
                    <?php the_content() ?>
                <?php } ?>
            </div>
        </div>

        <!-- DOWNLOADS -->
        <?php include('include-card-download-medio.php'); ?>
        <!-- FIM DE DOWNLOADS -->

        <!-- ACCORDION -->
        <?php if (have_rows('lista_textos')) { ?>
            <div class="row mt-4 mb-5">
                <div class="col-md-10 offset-md-1 col-sm-12">
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
        <?php } ?>
        <!-- FIM DE ACCORDION -->
        <!-- LISTA DE LINKS -->
        <?php if (have_rows('lista_links__arquivos')) { ?>
            <div class="row">
                <div class="col-12">
                    <div class="archive-buttons-wrapper">
                        <?php while (have_rows('lista_links__arquivos')) {
                            the_row();
                            $post_object = get_sub_field('link__arquivo');
                            $post_label = get_sub_field('label_link__arquivo');
                            if ($post_object) {
                                $post = $post_object;
                                setup_postdata($post);
                        ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn--content btn-block mb-1"><?php echo $post_label; ?></a>
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
<!-- FIM DE CONTEUDO -->
<!-- FOOTER -->
<?php get_footer() ?>
