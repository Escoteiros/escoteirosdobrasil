<?php if (have_rows('lista_downloads')) { ?>
    <?php while (have_rows('lista_downloads')) {
        the_row(); ?>
        <div class="row mb-5">
            <div class="col-12 mb-3">
                <h2 class="title-downloads-list"><?php the_sub_field('area_download_titulo'); ?></h2>
            </div>

            <?php if (have_rows('downloads_repetidor')) { ?>
                <?php while (have_rows('downloads_repetidor')) {
                    the_row(); ?>
                    <div class="col-md-3 col-sm-12 mb-4">
                        <div class="card card--download">
                            <?php
                            $image = get_sub_field('imagem_arquivo')['url'] ?? get_template_directory_uri().'/img/icons/pdf-color.svg';
                            ?>
                            <img src="<?= $image; ?>" alt="" class="card-img-top">

                            <div class="card-body">
                                <div class="textoDownload">
                                    <h5 class="card-title"><?php the_sub_field('titulo_arquivo'); ?></h5>
                                    <p class="card-text"><?php the_sub_field('descricao_arquivo'); ?></p>
                                </div>
                                <?php $file = get_sub_field('arquivo_download');
                                $link = get_sub_field('link');
                                if (!empty($file)) :
                                ?>
                                    <a href="<?= $file['url'] ?>" class="btn btn-outline-primary btn-sm" target="_blank">Download</a>
                                <?php elseif(!empty($link)): ?>
                                    <a href="<?= $link; ?>" target="_blank" rel="noopener" class="btn btn-outline-primary btn-sm">Acessar</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php }
            } ?>
        </div>
    <?php }
} ?>
