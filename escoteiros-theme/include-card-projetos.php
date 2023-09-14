<div class="col-md-4 col-sm-12 mt-4 mb-4">

    <div class="card card--project h-100">
        <?php if (has_post_thumbnail()) {
            $img_alt =  get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
        ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php echo $img_alt; ?>" class="card-img-top">
        <?php } else { ?>
            <img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="card-img-top">
        <?php } ?>

        <?php
        // STATUS
        $category = get_the_terms($post->ID, 'Status');
        foreach ($category as $cat) {
            $statusValue = '';
            if ($cat->term_id == 70) {
                $statusValue = 'comecar';
            } else if ($cat->term_id == 71) {
                $statusValue = 'desenvolvimento';
            } else if ($cat->term_id == 72) {
                $statusValue = 'finalizado';
            }
        ?>
            <div class="status status--<?php echo $statusValue  ?>"></div>
        <?php } ?>

        <div class="card-body">
            <h5 class="card-title"><?php echo get_the_title(); ?></h5>
            <p class="card-text"><?php echo get_field('resumo_card'); ?></p>
            <a href="<?php echo get_the_permalink(); ?>" class="btn btn-sm btn-primary">Veja Mais</a>
        </div>
    </div>
</div>
