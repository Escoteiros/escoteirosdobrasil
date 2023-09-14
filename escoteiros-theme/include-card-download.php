<div class="col-md-4 my-4">
    <div class="card card--download">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="card-img-top">
        <!-- LINK RELATORIO -->
        <div class="card-body">
            <div class="textoDownload">
                <p class="card-title"><?= wp_trim_words(get_the_title(),7) ?></p>
                <p class="card-text"><?= wp_trim_words(get_the_content(), 20); ?></p>
            </div>
            <div class="btnsDownload">
            <?php $file = get_field('arquivo_download');
            if(!empty($file)):
            ?>
            <a href="<?= $file['url'] ?>" class="btn btn-primary btn-sm" target="_blank">Download</a>
            <?php endif;
            $link = get_field('link');
            if(!empty($link)): ?>
                 <a href="<?= $link['url'] ?>" class="btn btn-primary btn-sm" target="<?= $link['target'] ?>"><?= empty($link['title']) ? 'Download' : $link['title'] ?></a>
            <?php endif ?>
            </div>
        </div>
        <!-- FIM DE LINK RELATORIO -->
    </div>
</div>
