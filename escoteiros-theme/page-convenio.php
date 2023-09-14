<?php /* Template Name: Clube de Vantagens  */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE CONVENIO/Clube de Vantagens | page-convenio.php</div>
<?php }
get_header(); ?>
<!-- ./HEADER -->

<section class="container">
    <!-- BANNER -->
    <div class="row">
        <div class="col-12 remove-padding-mobile">
            <?php
            $bannerOption = '';
            include('include-banner.php');
            ?>
        </div>
    </div>
    <!-- FIM DE BANNER -->
</section>
<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="content__text">
            <?php
            while (have_posts()) {
                the_post();
                the_content();
            } ?>
        </div>
        <?php if (have_rows('convenio')) : ?>
            <div class="row">
                <?php while (have_rows('convenio')): the_row(); ?>
                    <div class="col-md-4 mb-3">
                        <div id="card<?= get_row_index() ?>" class="card h-100 shadow text-center">
                            <div class="frente">
                                <?php $logoConvenio = get_sub_field('imagem_convenio');
                                if (empty($logoConvenio)): ?>
                                    <img class="card-img-top" src="<?= get_template_directory_uri(); ?>/img/placeholders/convenio.svg" alt="">
                                <?php else: ?>
                                    <img class="card-img-top" src="<?= esc_url($logoConvenio['url']); ?>" alt="<?= $logoConvenio['alt']; ?>">
                                <?php endif; ?>
                                <div class="card-body">
                                    <h3 class="convenio-question__title"><?php the_sub_field('titulo_convenio'); ?></h3>
                                    <button type="button" class="btn btn-nos-roxo" onclick="showText('card<?= get_row_index() ?>')">Ver mais</button>
                                </div>
                            </div>
                            <div class="fundo">
                                <div class="card-body h-100 bg-light-blue">
                                    <?php the_sub_field('descricao_convenio');
                                    $linkBtn = get_sub_field('link_do_convenio');
                                    if ($linkBtn):
                                    ?>
                                        <a class="btn btn-nos-roxo mt-2" rel="nofollow noreferrer" target="_blank" href="<?= $linkBtn; ?>">Ver mais</a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</div>
<script>
    function showText(cardId) {
        const cards = document.getElementsByClassName('card');

        for (let index = 0; index < cards.length; index++) {
            cards[index].classList.remove('ativo');
        }

        document.getElementById(cardId).classList.add('ativo');
    }
</script>

<!-- FOOTER -->
<?php get_footer() ?>
