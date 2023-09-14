<?php if (current_user_can('administrator')) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">ARCHIVE ESPECIALIDADE | archive-especialidade.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header();
$pageTitle = get_the_archive_title();
$iconHeader = 'Informacoes';
include('include-header-title.php');
?>

<div class="container">
	<div class="content-wrapper content-wrapper--no-dash">

		<!-- BUSCA ESPECIALIDADES -->
		<div class="row mb-md-5">
			<div class="col-md-10 offset-md-1 col-sm-12 search-content-form-wrapper">
				<form class="search" action="<?= home_url('/'); ?>">
					<div class="form-group">
						<img src="<?= get_template_directory_uri(); ?>/img/icons/search.svg" alt="" style="width: 20px; position: absolute; top: 8px; left: 20px;">
						<input type="search" name="s" placeholder="Buscar por especialidades" class="form-control" style="border:0; border-bottom: 1px solid #ccc; padding-left: 30px">
					</div>
					<input type="hidden" name="post_type" value="especialidade">
				</form>
			</div>
		</div>
		<!-- FIM DE BUSCA ESPECIALIDADES -->

		<div class="row">
			<div class="col-md-3 col-sm-12">
				<div class="border-sidebar"></div>
				<div class="submenu-desktop">
					<ul class="taxonomy-list filter-desktop">
						<li class="taxonomy-list__item">
							<a href="<?= get_post_type_archive_link('especialidade'); ?>" class="js-filter taxonomy-list__item__link active" data-category="" data-taxonomy="">Todas</a>
						</li>
					</ul>
					<?php
					$setTaxonomy = 'CategoriaEspecialidade';
					include('include-taxonomy-menu.php');
					?>
					<!-- -->
					<p class="taxonomy-title">Área de conhecimento</p>
					<?php
					$setTaxonomy = 'Area';
					include('include-taxonomy-menu.php');
					?>
					<!-- -->
					<p class="taxonomy-title">Por modalidade</p>
					<?php
					$setTaxonomy = 'Modalidade';
					include('include-taxonomy-menu.php');
					?>
					<ul class="taxonomy-list filter-desktop">
						<li>
							<a href="<?= home_url('/nova-especialidade'); ?>" class="hide-mobile" style="color:#000" role="link">Crie uma Especialidade</a>
						</li>
					</ul>
				</div>
				<select class="filter-mobile filter-mobile-js2">
					<option value="">Todas as categorias</option>
					<?php
					$taxonomy = 'CategoriaEspecialidade';
					if ($setClassModifier) {
						$class = $setClassModifier;
					} else {
						$class = '';
					}

					$top_level_terms = get_terms(array(
						'taxonomy'      => $taxonomy,
						'parent'        => '0',
						'hide_empty'    => false,
					));

					?>
					<optgroup label="Área de conhecimento">
						<?php if ($top_level_terms) { ?>
							<?php foreach ($top_level_terms as $top_level_term) {
								$top_term_id = $top_level_term->term_id;
								$top_term_name = $top_level_term->name;
								$top_term_tax = $top_level_term->taxonomy;
							?>
								<option value="<?= $top_level_term->slug; ?>" data-taxonomy="CategoriaEspecialidade"><?= $top_term_name; ?></option>
							<?php } ?>
					</optgroup>
					<?php }
						$taxonomy = 'Area';
						if ($setClassModifier) {
							$class = $setClassModifier;
						} else {
							$class = '';
						}

						$top_level_terms = get_terms(array(
							'taxonomy'      => $taxonomy,
							'parent'        => '0',
							'hide_empty'    => false,
						));
					?>
					<optgroup label="Área">
						<?php if ($top_level_terms) : ?>
							<?php foreach ($top_level_terms as $top_level_term):
								$top_term_id = $top_level_term->term_id;
								$top_term_name = $top_level_term->name;
								$top_term_tax = $top_level_term->taxonomy;
							?>
								<option value="<?= $top_level_term->slug; ?>" data-taxonomy="Area"><?= $top_term_name; ?></option>
						<?php endforeach;
						endif; ?>
					</optgroup>
					<?php
					$taxonomy = 'Modalidade';
					if ($setClassModifier) {
						$class = $setClassModifier;
					} else {
						$class = '';
					}

					$top_level_terms = get_terms(array(
						'taxonomy'      => $taxonomy,
						'parent'        => '0',
						'hide_empty'    => false,
					));
					?>

					<optgroup label="Modalidade">
						<?php if ($top_level_terms):
							foreach ($top_level_terms as $top_level_term):
								$top_term_id = $top_level_term->term_id;
								$top_term_name = $top_level_term->name;
								$top_term_tax = $top_level_term->taxonomy;
						?>
								<option value="<?= $top_level_term->slug; ?>" data-taxonomy="Modalidade"><?= $top_term_name; ?></option>
							<?php endforeach;
						endif; ?>
					</optgroup>
				</select>
			</div>
			<div class="col-12 d-md-none d-block py-2">
				<div class="text-center">
					<a href="<?= home_url('/nova-especialidade'); ?>" style="color:#000" role="link">Crie uma Especialidade</a>
				</div>
			</div>
			<div class="containerEspec col-md-9 col-sm-12">
				<?php
				global $wp_query;
				$post_type = get_queried_object();
				include('include-loader.php'); ?>
				<div id="posts-container" class="row" data-post="<?= $post_type->name; ?>" data-taxonomy="<?= $taxonomy ?>">
				</div>
				<?php include('include-empty-state.php'); ?>
				<div class="load-more-wrapper">
					<a href="javascript:void(0)" class="btn btn-primary-outline load-more-js">Carregar Mais</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- FOOTER -->
<?php get_footer(); ?>