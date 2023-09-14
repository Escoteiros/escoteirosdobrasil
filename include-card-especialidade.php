<div class="col-md-4 col-sm-12 mt-4 mb-4">
    <a href="<?php the_permalink(); ?>" class="card-badge-link">
        <div class="card card--badge">
            <?php if(has_post_thumbnail()){
                $img_alt =  get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true);
            ?>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?= $img_alt; ?>" class="card-img-top">
            <?php } else { ?>
                <img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-card.png" alt="" class="card-img-top">
            <?php } ?>
            <div class="card-body text-center">
                <p class="card-title"><?php the_title() ?></p>
                <div class="card-icon-wrapper">
                    <?php
                    $category = get_the_terms($post->ID, 'Modalidade');
                    if(!empty($category)):
                        foreach($category as $cat):
                    ?>
                            <?php if($cat->name == 'Básico'){ ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/icons/badges/basico.svg" alt="">
                            <?php } else if($cat->name == 'Ar'){ ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/icons/badges/ar.svg" alt="">
                            <?php } else if($cat->name == 'Mar'){ ?>
                                <img src="<?= get_template_directory_uri(); ?>/img/icons/badges/mar.svg" alt="">
                            <?php } ?>
                    <?php endforeach;
                    endif; ?>
                </div>
            </div>
        </div>
    </a>
</div>
