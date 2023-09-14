<?php
$conteudosRelacionados = get_field('conteudos_relacionados');
if ($conteudosRelacionados) { ?>
    <div class="row">
        <?php
        foreach ($conteudosRelacionados as $post) {
            setup_postdata($post); ?>

            <a href="<?php the_permalink(); ?>" class="card-event-link card-english-link">
                <div class="card card--event card-event-home">
                    <?php if (has_post_thumbnail($post->ID)) {
                        $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <img src="<?= $image[0]; ?>" alt="" class="card-img-top">
                    <?php } else { ?>
                        <img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="card-img-top">
                    <?php } ?>

                    <div class="card-body">
                        <h5 class="card-title"><?= $post->post_title; ?></h5>
                        <p class="card-text"><?= wp_trim_words($post->post_content, 17); ?></p>
                    </div>
                </div>
            </a>
            <!-- CARD CONTEUDO -->
        <?php } ?>
    </div>
    <!-- FIM DA LISTA DE EVENTOS -->
<?php } ?>
<?php wp_reset_postdata(); ?>
