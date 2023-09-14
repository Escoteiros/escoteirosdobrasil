<?php /* Template Name: Ramos */
if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE RAMOS | page-ramos.php</div>
<?php }
get_header();
$ramosCategory = get_field('categoria_ramos');
$ramosCategory = strtolower($ramosCategory);
$pageTitle = get_the_title();
$headerOption = 'hide-title';
get_field('icone_header');
include('include-header-title.php');
?>

<!-- BANNER -->
<div class="container">
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <!-- INCLUDE BANNER -->
            <?php
            $showBanner = true;
            $bannerOption = 'banner-header--ramos';
            include('include-banner.php');
            ?>
            <!-- INCLUDE BANNER -->
        </div>
    </div>
</div>
<!-- FIM DE BANNER -->
<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-md-6 col-sm-12 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                } ?>
            </div>
            <div class="col-md-5 offset-md-1 col-sm-12">
                <?php if ($ramosCategory != "nulo"): ?>
                    <div class="box-search-group box-search-group--sidebar">
                        <div class="search-scout-group search-scout-group">
                            <p>Procure um Grupo Escoteiro</p>
                            <form class="form-inline" action="/cep" method="GET">
                                <input type="text" class="form-control" id="inlineFormInputName" name="cep" placeholder="CEP ou localização">
                                <button type="submit" class="btn btn-primary my-1">Procurar</button>
                            </form>
                        </div>
                    </div>
                <?php endif ?>
                <div class="archive-buttons-wrapper">
                    <?php if (have_rows('lista_links__arquivos')) {
                        while (have_rows('lista_links__arquivos')) {
                            the_row();
                            $post_object = get_sub_field('link__arquivo');
                            $post_label = get_sub_field('label_link__arquivo');
                            $post_link_externo = get_sub_field("link_externo");
                            if ($post_link_externo != "") { ?>
                                <a target="_blank" href="<?= esc_url($post_link_externo) ?>" class="btn btn--content btn--<?= $ramosCategory; ?> btn-block mb-1"><?= $post_label; ?></a>
                                <?php wp_reset_postdata();
                            } else {
                                if ($post_object) {
                                    $post = $post_object;
                                    setup_postdata($post); ?>
                                    <a target="_blank" href="<?php the_permalink(); ?>" class="btn btn--content btn--<?= $ramosCategory; ?> btn-block mb-1"><?= $post_label; ?></a>
                                    <?php wp_reset_postdata();
                                }
                            }
                        }
                    } ?>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DE CONTEUDO -->

    <!-- MIDDLE BANNER -->
    <?php
    $image = get_field('imagem_middle');
    if (!empty($image)) {
    ?>
        <div class="banner-middle banner-middle--<?= $ramosCategory; ?>" style="background-image: url('<?= esc_url($image['url']); ?>');">
        <?php } else { ?>
            <div class="banner-middle banner-middle--<?= $ramosCategory; ?>" style="background-image: url('<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-header.png');">
            <?php }
            $quoteBox = get_field('quote_box');
            if ($quoteBox): ?>
                <div class="banner-middle__box" style="background: <?= $quoteBox['background_color']; ?>; color: <?= $quoteBox['text_color']; ?>;">
                    <p class="banner-middle__box__quote"><?= $quoteBox['quote']; ?></p>
                    <p class="banner-middle__box__person">- <?= $quoteBox['person']; ?></p>
                </div>
            <?php endif; ?>
            </div>
            <!-- FIM DE MIDDLE BANNER -->

            <div class="row column-reverse-mobile">
                <div class="col-md-4 offset-md-1 col-sm-12">
                    <h2 class="text-center mb-3">Eventos Relacionados</h2>
                    <!-- EVENTOS RELACIONADOS -->
                    <?php
                    $eventoOption = 'sidebar';
                    include('include-eventos-relacionados.php');
                    ?>
                    <!-- FIM DE EVENTOS RELACIONADOS -->
                </div>

                <!-- CONTEUDO 2 -->
                <?php $textoSecundario = get_field('texto_secundario'); ?>
                <div class="col-md-6 offset-md-1">
                    <h3 class="mb-3"><?= $textoSecundario['titulo_secundario']; ?></h2>
                    <div class="text-content-wrapper">
                        <p><?= $textoSecundario['texto_secundario']; ?></p>
                    </div>
                </div>
            </div>
            <!-- FIM DE CONTEUDO 2 -->
        </div>
</div>

<?php get_footer() ?>
