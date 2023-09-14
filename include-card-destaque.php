<div class="col-md-4 col-sm-12 mt-md-5 mb-mobile-5">
    <a href="<?= get_the_permalink(); ?>" class="card-news-link">
        <div class="card card--news">
            <?php if(has_post_thumbnail()){
                 $img_alt = get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
            ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?= $img_alt; ?>" class="card-img-top">
            <?php }else{ ?>
                <img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="card-img-top">
            <?php } ?>

            <div class="card-body">
                <p class="card-date"><?= get_the_date(); ?></p>
                <h5 class="card-title"><?= get_the_title(); ?></h5>
                <p class="card-text"><?= wp_trim_words(get_the_content(), 18); ?></p>
            </div>
        </div>
    </a>
</div>
