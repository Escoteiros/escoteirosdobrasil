<?php if(current_user_can('administrator')){ ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">SINGLE ESPECIALIDADE | single-especialidade.php</div>
<?php }
get_header();

$pageTitle = get_the_title();
$iconHeader = 'Informacoes';
include('include-header-title.php');
?>
<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-md-12 col-sm-12"></div>
            <div class="col-md-7 col-sm-12 content__text">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content() ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <?php if (has_post_thumbnail($post->ID)) { ?>
                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                    <img src="<?= $image[0]; ?>" alt="" class="badge-image">
                <?php } else { ?>
                    <img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="badge-image">
                <?php }
                    $qtdSpec = get_field("quantidade_itens") ?>
                <div class="badge-table-div">
                    <div class="badge-table-wrapper">
                        <table class="badge-table">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Níveis da Especialidade</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Nível I</td>
                                    <td><?= ($qtdSpec / 3) ?> itens</td>
                                </tr>
                                <tr>
                                    <td>Nível II</td>
                                    <td><?= ($qtdSpec / 3) * 2 ?> itens</td>
                                </tr>
                                <tr>
                                    <td>Nível III</td>
                                    <td><?= $qtdSpec ?> itens</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="badge-table-text">O jovem tem a liberdade de escolher quaisquer itens para a conquista do nível que desejar, não sendo obrigatório seguir a ordem da numeração dos mesmos.</p>
                </div>
            </div>
            <div class="col-md-1 col-sm-12">
                <div class="badge-links">
                    <?php
                    $file = get_field('arquivo_download');
                    if ($file) : ?>
                        <a href="<?= $file['url']; ?>" class="pdf-link" target="_blank">
                            <img src="<?= get_template_directory_uri(); ?>/img/icons/pdf-color.svg" alt="">
                        </a>
                    <?php endif; ?>
                    <a href="javascript:(window.print());" class="print-link noprint">
                        <img src="<?= get_template_directory_uri(); ?>/img/icons/imprimir.svg" alt="">
                    </a>
                </div>
            </div>
        <?php } ?>
        </div>

        <!-- COMPARTILHAR -->
        <div class="row noprint">
            <div class="col-md-7 col-sm-12">
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
