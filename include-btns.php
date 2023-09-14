<?php if (have_rows('links_doacao')) : ?>
    <section class="col-12 mb-3">
        <?php while (have_rows('links_doacao')) : the_row(); ?>
            <a class="btn btn-primary mb-2" style="border-radius: 2em;" href="<?php the_sub_field('btn_link') ?>">
                <?php the_sub_field('btn_texto') ?>
            </a>
        <?php endwhile; ?>
    </section>
<?php endif; ?>
