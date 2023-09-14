<?php if (have_rows('listVideos')) : ?>
    <section class="row">
        <div class="col-12 d-flex">
            <?php while (have_rows('listVideos')):
                the_row(); ?>
                <div class="text-center my-3 video-iframe col-md-4">
                <?= get_sub_field('videoEmbed'); ?>
                </div>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
