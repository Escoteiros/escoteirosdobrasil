<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE TAXONOMY TAGMATERIA | taxonomy-TagMateria.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
	$pageTitle = get_the_archive_title();
	$iconHeader = get_field('icone_header');
    include('include-header-title.php');
?>

<div class="container">

	<div class="content-wrapper content-wrapper--no-dash">

		<!-- BUSCA MATÉRIAS -->
		<div class="row">
			<div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
				<form class="search" action="<?php echo home_url( '/' ); ?>">
					<div class="form-group">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="" style="width: 20px; position: absolute; top: 8px; left: 20px;">
						<input type="search" name="s" placeholder="Buscar por matérias" class="form-control" style="border:0; border-bottom: 1px solid #ccc; padding-left: 30px">
					</div>
					<input type="hidden" name="post_type" value="noticia">
				</form>
			</div>
		</div>
		<!-- FIM DE BUSCA MATERIAS -->

		<!-- <div class="row">
			<div class="col-12">
				<?php echo do_shortcode('[searchandfilter fields="search,categoriamateria" headings=",Categories,Tags"]'); ?>
				<?php echo do_shortcode('[searchandfilter fields="search,categoriamateria" order_dir=",asc,desc" order_by=",id,name" types=",checkbox,radio" headings=",Categories"]'); ?>
			</div>
		</div> -->

		<!-- MATERIAS -->
		<div class="row">
			<?php
			if (isset($_GET['filtro'])) {
				$filtro = $_GET['filtro'];
                $the_query = new WP_Query( array(
                    'post_type' => 'materias',
                    'tax_query' => array(
                        array (
                            'taxonomy' => 'TagMateria',
                            'field' => 'slug',
                            'terms' => $filtro,
                        )
                    ),
                ) );
                while ( $the_query->have_posts() ) {
                    $the_query->the_post();
				?>
					<div class="col-12">
						<div class="row">
							<div class="materia-item">
								<div class="col-6 offset-1">
									<?php if( has_post_thumbnail() ){ ?>
										<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="materia__image">
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/placeholder-materia.png" alt="" class="materia__image">
									<?php } ?>
								</div>
								<div class="col-5">
									<p class="materia__date"><?php echo get_the_date() ?></p>
									<h3 class="materia__title"><?php the_title() ?></h3>
									<p class="materia__content"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
									<a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Veja Mais</a>
									<div class="materia__tag-wrapper">
										<?php
											$category = get_the_terms( $post->ID, 'categoriamateria' );
											//var_dump($category);
											foreach ( $category as $cat){
										?>
										<a href="<?php echo get_term_link($cat->term_id) ?>" class="btn btn--tag"><?php echo $cat->name; ?></a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } else { ?>
				<?php
					while (have_posts() ) {
						the_post();
				?>
					<div class="col-12">
						<div class="row">
							<div class="materia-item">
								<div class="col-6 offset-1">
									<?php if( has_post_thumbnail() ){ ?>
										<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="materia__image">
									<?php }else{ ?>
										<img src="<?php echo get_template_directory_uri(); ?>/img/placeholders/placeholder-materia.png" alt="" class="materia__image">
									<?php } ?>
								</div>
								<div class="col-5">
									<p class="materia__date"><?php echo get_the_date() ?></p>
									<h3 class="materia__title"><?php the_title() ?></h3>
									<p class="materia__content"><?php echo wp_trim_words(get_the_content(), 20); ?></p>
									<a href="<?php the_permalink() ?>" class="btn btn-primary btn-sm">Veja Mais</a>
									<div class="materia__tag-wrapper">
										<?php
											$category = get_the_terms( $post->ID, 'TagMateria' );
											//var_dump($category);
											foreach ( $category as $cat){
										?>
										<a href="<?php echo get_term_link($cat->term_id) ?>" class="btn btn--tag"><?php echo $cat->name; ?></a>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php wp_reset_query(); ?>
		</div>
		<!-- FIM DE MATERIAS -->


		<!-- PAGINACAO -->
		<div class="pagination-wrapper">
			<nav aria-label="Page navigation example">
				<?php
					$args = array(
						'prev_text' => '<<',
						'next_text' => '>>'
					);
					echo paginate_links( $args );
				?>
			</nav>
		</div>
		<!-- FIM DE PAGINACAO -->
	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
