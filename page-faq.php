<?php /* Template Name: FAQ  */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE FAQ | page-faq.php</div>
<?php }
get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>


<div class="container">
	<div class="row">
		<div class="col-12 remove-padding-mobile">
			<?php include('include-banner.php'); ?>
		</div>
	</div>
</div>
<!-- FIM DE BANNER -->

<div class="container">
    <div class="content-wrapper content-wrapper--no-dash">
		<div class="row">
			<div class="col-12 content__text">
				<?php
				while(have_posts()){
					the_post();
                    the_content();
                } ?>
			</div>
		</div>

		<div class="row">
            <div class="col-md-2 col-sm-12">
                <div class="border-sidebar"></div>
                <ul class="taxonomy-list taxonomy-list--faq">
                    <?php if( have_rows('grupo_de_perguntas') ){ ?>
                        <?php while( have_rows('grupo_de_perguntas') ){ the_row(); ?>
                                <li class="taxonomy-list__item">
                                    <a href="javascript:void(0);" class="taxonomy-list__item__link faq-link-js" id="LinkGrupo<?php echo get_row_index(); ?>" data-target="grupo<?php echo get_row_index(); ?>">
                                        <strong><?php the_sub_field('titulo_do_grupo'); ?></strong>
                                    </a>
                                </li>
                        <?php }
                    } ?>
                </ul>
            </div>
			<div class="col-md-10 col-sm-12">
                <div class="faq-wrapper">
                    <?php if( have_rows('grupo_de_perguntas') ){ ?>
                        <?php while( have_rows('grupo_de_perguntas') ){ the_row(); ?>
                            <div class="faq-group d-none" id="grupo<?php echo get_row_index(); ?>">
                                <?php if(have_rows('grupo_perguntas')){
                                    while(have_rows('grupo_perguntas')){ the_row(); ?>
                                        <div class="faq-question">
                                            <h3 class="faq-question__title"><?php the_sub_field('pergunta'); ?></h3>
                                                <div class="faq-question__answer">
                                                    <?php the_sub_field('resposta'); ?>
                                                </div>
                                                <a href="javascript:void(0);" class="faq-question__action faq-action-js">+</a>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        <?php }
                    } ?>
                </div>
			</div>
		</div>
	</div>
</div>

<?php get_footer() ?>
