<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">SEARCH | search.php</div>
<?php }
get_header() ?>

<div class="container container--header">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= get_site_url() ?>">Escoteiros do Brasil</a></li>
            <?php

            if (isset($_GET['post_type'])) {
                $type = $_GET['post_type'];
                if ($type == 'evento') { ?>
                    <li class="breadcrumb-item"><a href="eventos">Eventos</a></li>
                <?php } elseif ($type == 'noticias') { ?>
                    <li class="breadcrumb-item"><a href="noticias">Noticias</a></li>
                <?php } elseif ($type == 'download') { ?>
                    <li class="breadcrumb-item"><a href="downloads">Downloads</a></li>
                <?php } elseif ($type == 'projeto') { ?>
                    <li class="breadcrumb-item"><a href="projetos">Projetos</a></li>
                <?php } elseif ($type == 'especialidade') { ?>
                    <li class="breadcrumb-item"><a href="especialidades">Especialidades</a></li>
            <?php }
            }
            ?>
            <li class="breadcrumb-item">Pesquisa</li>
        </ol>
    </nav>
</div>
<!-- Inicio área de conteúdo -->
<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-12 remove-padding-mobile">
                <h1>Resultado da Busca</h1>
            </div>
            <div class="col-12">
                <p class="search-results-indicator">Foram encontrados <span><?= $wp_query->found_posts; ?></span> resultados para: <span>"<?php the_search_query(); ?>"</span></p>

                <p class="search-results-page-indicator mt-3 mb-3">Página <?= $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;  ?> de <?= $wp_query->max_num_pages; ?> </p>
            </div>
        </div>

        <div class="row mt-3">
            <?php
            while (have_posts()) {
                the_post();
                if (isset($_GET['post_type'])) {
                    $type = $_GET['post_type'];

                    if ($type == 'evento') {
                        include('include-card-eventos.php');
                    } elseif ($type == 'noticias') {
                        include('include-card-noticias.php');
                    } elseif ($type == 'download') {
                        include('include-card-download.php');
                    } elseif ($type == 'projeto') {
                        include('include-card-projetos.php');
                    } elseif ($type == 'especialidade') {
                        include('include-card-especialidade.php');
                    } else { ?>
                        <div class="col-md-3 offset-md-1 col-sm-5">
                        </div>
                        <div class="col-md-12 col-sm-12 mb-12" style="margin-bottom: 25px">
                            <h3><?php the_title() ?></h3>
                            <?= wp_trim_words(get_the_content(), 30); ?>
                            <p class="mt-2"><a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm ">Acessar</a></p>
                        </div>
                    <?php }
                    } else { ?>
                    <div class="col-md-3 offset-md-1 col-sm-5">

                    </div>
                    <div class="col-md-12 col-sm-12 mb-12" style="margin-bottom: 25px">
                        <h3><?php the_title() ?></h3>
                        <?= wp_trim_words(get_the_content(), 30); ?>
                        <p class="mt-2"><a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm ">Acessar</a></p>
                    </div>
                <?php }
            } ?>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <nav aria-label="Navegação">
                    <?= paginate_links(); ?>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>
