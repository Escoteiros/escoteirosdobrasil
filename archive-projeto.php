<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE ARCHIVE PROJETO | archive-projeto.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
    $pageTitle = 'Portfólio de projetos';
    $iconHeader = 'Fazemos';
    include('include-header-title.php');
?>

<div class="container">

	<div class="content-wrapper content-wrapper--no-dash">
        <div class="row">
            <div class="col-12">
                <?php
                    $projectsText = get_field('projetoTexto','option');
                    if($projectsText){
                        echo $projectsText;
                    }
                ?>
            </div>
        </div>

        <!-- BUSCA MATÉRIAS -->
        <section class="row mb-md-5">
            <div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
                <form class="search" action="<?php echo home_url( '/' ); ?>">
                    <div class="form-group">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="" style="width: 20px; position: absolute; top: 8px; left: 20px;">
                        <input type="search" name="s" placeholder="Buscar por projetos" class="form-control" style="border:0; border-bottom: 1px solid #ccc; padding-left: 30px">
                    </div>
                    <input type="hidden" name="post_type" value="projeto">
                </form>
            </div>
        </section>
        <!-- FIM DE BUSCA MATERIAS -->

        <!-- PROJETOS -->
        <div class="row">
            <section class="col-md-3 col-sm-12">
                <div class="border-sidebar"></div>

                <div class="submenu-desktop">
                    <ul class="taxonomy-list filter-desktop">
                        <li class="taxonomy-list__item">
                            <a href="<?php echo get_post_type_archive_link('especialidade'); ?>" class="js-filter taxonomy-list__item__link active" data-category="" data-taxonomy="">Todos</a>
                        </li>
                    </ul>
                    <p class="taxonomy-title">Categorias</p>
                    <?php
                        $setTaxonomy = 'CategoriaProjeto';
                        include('include-taxonomy-menu.php');
                    ?>
                    <p class="taxonomy-title">Status</p>
                    <?php
                        $setTaxonomy = 'Status';
                        include('include-taxonomy-menu.php');
                    ?>
                </div>

                <select class="filter-mobile filter-mobile-js2">
                    <option value="">Todas as categorias</a>
                    <?php
                        $taxonomy = 'CategoriaProjeto';
                        if($setClassModifier){
                            $class = $setClassModifier;
                        }else{
                            $class = '';
                        }

                        $top_level_terms = get_terms( array(
                            'taxonomy'      => $taxonomy,
                            'parent'        => '0',
                            'hide_empty'    => false,
                        ) );

                    ?>
                    <optgroup label="Categorias">
					<?php if ($top_level_terms) { ?>
						<?php foreach ($top_level_terms as $top_level_term) {
							$top_term_id = $top_level_term->term_id;
							$top_term_name = $top_level_term->name;
							$top_term_tax = $top_level_term->taxonomy;
						?>
                            <option value="<?php echo $top_level_term->slug; ?>" data-taxonomy="CategoriaProjeto"><?php echo $top_term_name; ?></option>
                            <?php } ?>
                        </optgroup>
                    <?php } ?>

                    <?php
                        $taxonomy = 'Status';
                        if($setClassModifier){
                            $class = $setClassModifier;
                        }else{
                            $class = '';
                        }

                        $top_level_terms = get_terms( array(
                            'taxonomy'      => $taxonomy,
                            'parent'        => '0',
                            'hide_empty'    => false,
                        ) );

                    ?>
                    <optgroup label="Status">
					<?php if ($top_level_terms) { ?>
						<?php foreach ($top_level_terms as $top_level_term) {
							$top_term_id = $top_level_term->term_id;
							$top_term_name = $top_level_term->name;
							$top_term_tax = $top_level_term->taxonomy;
						?>
                            <option value="<?php echo $top_level_term->slug; ?>" data-taxonomy="Status"><?php echo $top_term_name; ?></option>
                            <?php } ?>
                        </optgroup>
					<?php } ?>
				</select>
            </section>

            <div class="col-md-9 col-sm-12">
                <?php
                    global $wp_query;
                    $post_type = get_queried_object();
				?>
				<?php include('include-loader.php'); ?>
                <div id="posts-container" class="row" data-post="<?php echo $post_type->name; ?>" data-taxonomy="<?php echo $taxonomy ?>">
                </div>
                <?php include('include-empty-state.php'); ?>
				<div class="load-more-wrapper">
					<a href="javascriptt:void(0)" class="btn btn-primary-outline load-more-js">Carregar Mais</a>
				</div>
            </div>

        </div>
        <!-- FIM DE PROJETOS -->


        <!-- PAGINACAO -->
        <div class="pagination-wrapper">
            <nav aria-label="Page navigation example">
                <?php
                    $args = array(
                        'prev_text' => '<<',
                        'next_text' => '>>'
                    );
                    //echo paginate_links( $args );
                ?>
            </nav>
        </div>
        <!-- FIM DE PAGINACAO -->


	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
