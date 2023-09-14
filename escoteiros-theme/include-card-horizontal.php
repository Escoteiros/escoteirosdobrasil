<?php if (have_rows('card')) : ?>
    <section class="col-12">
        <?php while (have_rows('card')) : the_row(); ?>
            <div class="card mb-3 shadow-sm">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <?php $imgCard = get_sub_field('card_image');
                        if ($imgCard == '') { ?>
                            <img src="<?= get_template_directory_uri(); ?>/img/placeholders/convenio.svg" class="card-img-top" alt="">
                        <?php } else { ?>
                            <img src="<?= esc_url($imgCard['url']); ?>" alt="<?= $imgCard['alt']; ?>" class="card-img-top">
                        <?php } ?>
                    </div>
                    <div class="col-md-8 bg-light">
                        <div class="card-body h-100 d-flex flex-column justify-content-center">
                            <h4 class="card-title"><?php the_sub_field('card_title'); ?></h4>
                            <p class="card-text"><?php the_sub_field('card_description'); ?></p>
                            <?php if (get_sub_field('card_has_btn')) : ?>
                                <p class="text-center mt-1"><a href="<?= the_sub_field('card_btn_url') ?>" class="btn btn-primary btn-sm"><?= the_sub_field('card_btn_text') ?></a></p>
                            <?php endif ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile ?>
    </section>
<?php endif ?>
