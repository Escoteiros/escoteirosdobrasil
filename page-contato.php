<?php /* Template Name: Contato */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE CONTATO | page-contato.php</div>
<?php }
get_header();

$pageTitle = get_the_title();
$headerOption = 'hide-title';
$iconHeader = get_field('icone_header');
include('include-header-title.php');
?>

<div class="container">
    <!-- CONTEUDO -->
    <div class="content-wrapper content-wrapper--contact">
        <div class="row">
            <div class="col-lg-5">
                <h1 class="form-page-title">Tem alguma dúvida?</h1>
                <p class="form-page-subtitle">Escreva para nós!</p>
                <div class="form-page-contact-info form-page-contact-info">
                    <div class="mt-5 mb-3">
                        <p><strong>ESCOTEIROS DO BRASIL</strong></p>
                        <p>Rua Coronel Dulcídio, 2107 - Bairro Água Verde</p>
                        <p>CEP 80250-100 - Curitiba - Paraná</p>
                    </div>
                    <p>Atendimento de segunda a sexta-feira.</p>
                    <p>Das 9h às 12h e das 13h30 às 18h.</p>
                    <p>Tel. <a href="tel:04133534732">(41) 3353-4732</a> ou <a href="tel:08000012016">0800 001 2016</a></p>
                    <p>WhatsApp <a href="https://wa.me/554130907931">(41) 3090-7931 </a></p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <?php
                    while(have_posts()){
                        the_post();
                        the_content();
                    } ?>
            </div>
        </div>
        <div class="bg-dots">
            <div class="bg-contact-ilustra"></div>
        </div>
    </div>
    <!-- FIM DE CONTEUDO -->
</div>

<!-- FOOTER -->
<?php get_footer() ?>
