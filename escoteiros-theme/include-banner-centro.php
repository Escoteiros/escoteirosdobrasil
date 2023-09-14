<?php if (have_rows('banner_central')) : ?>
    <section class="col-12 mt-3">
        <?php while(have_rows('banner_central')):
            the_row();
            $img = get_sub_field('banner_centro_imagem');
        ?>
            <div class="col-md-8 offset-2">
                <img class="w-100 mb-4" src="<?= esc_url($img['url']); ?>" alt="<?= $img['alt']; ?>">
            </div>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
