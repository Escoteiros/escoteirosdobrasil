<?php /* Template Name: Ordem Flor de Lis  */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE OFL | page-ofl.php</div>
<?php }

get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
$headerOption = 'hide-subtitle';
include('include-header-title.php');
?>
<section class="container">
	<!-- BANNER -->
	<div class="row">
		<div class="col-12 remove-padding-mobile">
			<?php
				$bannerOption = '';
				include('include-banner.php');
			?>
		</div>
	</div>
	<!-- FIM DE BANNER -->
</section>
<div class="container">
    <section class="content__text">
        <?php while(have_posts()){
            the_post();
            the_content();
        } ?>
    </section>
    <h2>Conheça as categorias</h2>
    <?php include('include-card-doacao.php'); ?>

    <section id="oflMembros">
        <h2>Membros</h2>
        <div class="row">
        <button type="button" class="btn col-md-3" data-toggle="modal" data-target="#modalCategoria2">
            <img src="<?= get_template_directory_uri(); ?>/img/bot_bronze.png" alt="Ver membros bronze">
        </button>
        <button type="button" class="btn col-md-3" data-toggle="modal" data-target="#modalCategoria3">
            <img src="<?= get_template_directory_uri(); ?>/img/bot_prata.png" alt="Ver membros bronze">
        </button>
        <button type="button" class="btn col-md-3" data-toggle="modal" data-target="#modalCategoria4">
            <img src="<?= get_template_directory_uri(); ?>/img/bot_ouro.png" alt="Ver membros bronze">
        </button>
        <button type="button" class="btn col-md-3" data-toggle="modal" data-target="#modalCategoria5">
            <img src="<?= get_template_directory_uri(); ?>/img/bot_diamante.png" alt="Ver membros bronze">
        </button>
        </div>
    </section>
</div>
<?php
    $categoria01 = [];
    $categoria02 = [];
    $categoria03 = [];
    $categoria04 = [];
    $categoria05 = [];

    while (have_rows('ofl_membros')) {
        the_row();
        $categoriaMembro = get_sub_field('ofl_membro_categoria');
        switch($categoriaMembro){
            case('category01'):
                array_push($categoria01, trim(get_sub_field('ofl_membro_nome')));
                break;
            case('category02'):
                array_push($categoria02, trim(get_sub_field('ofl_membro_nome')));
                break;
            case('category03'):
                array_push($categoria03, trim(get_sub_field('ofl_membro_nome')));
                break;
            case('category04'):
                array_push($categoria04, trim(get_sub_field('ofl_membro_nome')));
                break;
            case('category05'):
                array_push($categoria05, trim(get_sub_field('ofl_membro_nome')));
                break;
            default:
                break;
        }
    }
?>

<section class="modal fade" id="modalCategoria2" tabindex="-1" aria-labelledby="modalTitle1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle1">Bronze</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="modal-body list-group list-group-flush p-0">
            <?php asort($categoria02);
            foreach($categoria02 as $name) {
                echo '<li class="list-group-item">'.$name.'</li>';
            } ?>
            </ul>
            <div class="modal-footer bt-0">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</section>
<section class="modal fade" id="modalCategoria3" tabindex="-1" aria-labelledby="modalTitle3" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle3">Prata</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="modal-body list-group list-group-flush p-0">
            <?php asort($categoria03);
            foreach($categoria03 as $name) {
                echo '<li class="list-group-item">'.$name.'</li>';
            } ?>
            </ul>
            <div class="modal-footer bt-0">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</section>
<section class="modal fade" id="modalCategoria4" tabindex="-1" aria-labelledby="modalTitle4" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle">Ouro</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="modal-body list-group list-group-flush p-0">
            <?php asort($categoria04);
            foreach($categoria04 as $name) {
                echo '<li class="list-group-item">'.$name.'</li>';
            } ?>
            </ul>
            <div class="modal-footer bt-0">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</section>
<section class="modal fade" id="modalCategoria5" tabindex="-1" aria-labelledby="modalTitle5" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalTitle5">Diamante OFL</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <ul class="modal-body list-group list-group-flush p-0">
            <?php asort($categoria05);
            foreach($categoria05 as $name) {
                echo '<li class="list-group-item">'.$name.'</li>';
            } ?>
            </ul>
            <div class="modal-footer bt-0">
                <button type="button" class="btn btn-primary btn-sm" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>
