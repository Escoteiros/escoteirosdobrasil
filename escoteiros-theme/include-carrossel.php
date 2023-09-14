<?php if (have_rows('lista_convenios')) : ?>
    <section class="row">
        <div class="col-10 offset-1">
            <?= empty(get_field('carroselName')) ? '' : '<h3>'.get_field('carroselName').'</h3>' ?>
            <ul id="partners-list">
                <?php while (have_rows('lista_convenios')) :
                    the_row(); ?>
                    <li>
                        <?php $img = get_sub_field('logo_convenio'); ?>
                        <img src="<?= esc_url($img['url']); ?>" alt="<?= $img['alt']; ?>">
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </section>
<?php endif; ?>
