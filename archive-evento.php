<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE ARCHIVE EVENTOS | archive-evento.php</div>
<?php }
get_header();
$pageTitle = get_the_archive_title();
$iconHeader = 'Fazemos';
$headerOption = 'hide-title';
include('include-header-title.php');
?>

<div class="container">
	<!-- BANNER -->
	<div class="row">
		<div class="col-12 remove-padding-mobile">
			<!-- INCLUDE BANNER -->
			<?php
				$showBanner = true;
				$bannerOption = 'banner-header--block banner-header--event';
				include('include-banner.php');
			?>
			<!-- INCLUDE BANNER -->
		</div>
	</div>
	<!-- FIM DE BANNER -->
</div>
<div class="container">
	<div class="content-wrapper content-wrapper--no-dash">
		<!-- FILTROS -->
		<div class="row">
			<div class="col-md-12 col-sm-12 mt-3 filter-desktop">
				<div class="btn-group flex-wrap btn-group--filter" role="group" aria-label="">
						<a class="btn btn-secondary active js-filter" href="" data-category="">Todas as categorias</a>
						<?php
							$taxonomy = 'CategoriaEvento';
							$terms = get_terms([
							'taxonomy' => $taxonomy,
							'hide_empty' => false,
						]);

						$ordem = array("Nacionais", "Internacionais", "Atividades Especiais", "Adultos", "Lobinhos", "Escoteiros", "Sêniores", "Pioneiros", "Eventos Passados");

						usort($terms, function($a, $b) use ($ordem){
							$pos_a = array_search($a->name, $ordem);
							$pos_b = array_search($b->name, $ordem);
							return $pos_a - $pos_b;
						});

						foreach ($terms as $term) {
						?>
						<a class="btn btn-secondary js-filter" href="" data-category="<?= $term->slug; ?>" data-taxonomy="<?= $taxonomy ?>">
							<?= $term->name ?>
						</a>
					<?php }?>
				</div>
			</div>

			<div class="col-12">
				<select class="filter-mobile filter-mobile-js" data-taxonomy="CategoriaEvento">
					<option value="">Todas as categorias</option>
					<?php
							$taxonomy = 'CategoriaEvento';
							$terms = get_terms([
							'taxonomy' => $taxonomy,
							'hide_empty' => false,
						]);
						foreach ($terms as $term) {
					?>
						<option value="<?php echo $term->slug; ?>"><?php echo $term->name ?></option>
					<?php }?>
				</select>
			</div>
		</div>
		<!-- FIM DE FILTROS -->

		<!-- BUSCA EVENTOS -->
		<section class="row">
			<div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
				<form class="search" action="<?php echo home_url( '/' ); ?>">
					<div class="form-group">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/search.svg" alt="" style="width: 20px; position: absolute; top: 8px; left: 20px;">
						<input type="search" name="s" placeholder="Buscar por eventos" class="form-control" style="border:0; border-bottom: 1px solid #ccc; padding-left: 30px">
					</div>
					<input type="hidden" name="post_type" value="evento">
				</form>
			</div>
		</section>
		<!-- FIM DE BUSCA EVENTOS -->

		<!-- EVENTOS -->
		<section class="row">
			<div class="col-md-12 col-sm-12">
                <?php
                    global $wp_query;
                    $post_type = get_queried_object();
				?>
				<?php include('include-loader.php'); ?>
                <div id="posts-container" class="row" data-post="<?php echo $post_type->name; ?>" data-taxonomy="<?php echo $taxonomy ?>">
				</div>
				<?php include('include-empty-state.php'); ?>
				<div class="load-more-wrapper">
					<a href="javascript:void(0)" class="btn btn-primary load-more-js">Carregar Mais</a>
				</div>
            </div>
		</section>
		<!-- FIM DE EVENTOS -->
	</div>
</div>

<!-- FOOTER -->
<?php get_footer() ?>
