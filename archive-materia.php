<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE MATERIA | archive-materia.php</div>
<?php }
get_header();

$pageTitle = get_the_archive_title();
$iconHeader = 'Fazemos';
include('include-header-title.php');
?>
<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">

        <!-- BUSCA MATÉRIAS -->
        <div class="row mb-md-5">
            <div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
                <form id="formBusca" class="search" action="<?= home_url('/'); ?>">
                    <div class="form-group">
                        <img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="" />
                        <input type="search" name="s" placeholder="Buscar por matérias" class="form-control"
                               aria-label="Buscar por matérias" />
                    </div>
                    <input type="hidden" name="post_type" value="materia" />
                </form>
            </div>
        </div>
        <!-- FIM DE BUSCA MATERIAS -->
            <?= do_shortcode('[searchandfilter fields="search,categoriamateria" headings=",Categories,Tags"]'); ?>

        <!-- MATERIAS -->
        <div class="row">
            <?php
            while (have_posts()){
                the_post();
            ?>
                <div class="col-md-5 offset-md-1 col-sm-12">
                    <?php if (has_post_thumbnail()) { ?>
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="materia__image">
                    <?php } else { ?>
                        <img src="<?= get_template_directory_uri(); ?>/img/placeholders/placeholder-materia.png" alt="" class="materia__image">
                    <?php } ?>
                </div>
                <div class="col-md-5 col-sm-12">
                    <p class="materia__date"><?= get_the_date() ?></p>
                    <h3 class="materia__title"><?php the_title() ?></h3>
                    <p class="materia__content"><?= wp_trim_words(get_the_content(), 20); ?></p>
                    <a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Veja Mais</a>
                    <div class="materia__tag-wrapper">
                        <?php
                        $category = get_the_terms($post->ID, 'TagMateria');
                        if(!empty($category)):
                            foreach ($category as $cat) {
                            ?>
                                <a href="<?= get_term_link($cat->term_id) ?>" class="btn btn--tag mb-3"><?= $cat->name; ?></a>
                            <?php }
                        endif;
                        ?>
                    </div>
                </div>
                <div class="materia-separador"></div>
            <?php } ?>
        </div>
        <!-- FIM DE MATERIAS -->
        <!-- PAGINACAO -->
        <div class="pagination-wrapper">
            <nav aria-label="Navegação">
                <?php
                $args = array(
                    'prev_text' => '<<',
                    'next_text' => '>>'
                );
                echo paginate_links($args);
                ?>
            </nav>
        </div>
        <!-- FIM DE PAGINACAO -->
    </div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
