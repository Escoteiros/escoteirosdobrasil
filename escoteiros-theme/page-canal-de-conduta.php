<?php /* Template Name: Canal de Conduta */ ?>
<?php if (current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE CANAL DE CONDUTA | page-canal-de-conduta.php</div>
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
        </div>
        <div class="row">
            <!-- CONTEÚDO LATERAL ESQUERDO -->
            <div class="col-md-12 col-sm-12">
                <h1 class="form-page-title">Canal de Conduta</h1>

                <div class="mt-5 mb-3 col-12 content__text">
                    <div class="row opcaoSimOuNao">
                        <p>O Canal de Denúncias é o principal meio de comunicação para que você possa contar a sua história.</p>
                        <p>Os Escoteiros do Brasil afirmam o compromisso em apoiar o desenvolvimento de crianças, adolescentes e jovens. Para garantir a proteção infanto-juvenil é importante saber o que está acontecendo,  oferecer o melhor suporte possível e responsabilizar infrações de natureza ético-disciplinares que envolvam nossos associados.</p>
                        <p>As denúncias realizadas nesse canal são recebidas apenas pela Diretoria de Integridade, certificando a imparcialidade e confidencialidade dos processos de apuração.</p>
                        <p>Caso seu problema seja urgente ou você tenha dúvidas, por favor, nos procure pelo email <a href="mailto:denuncias@escoteiros.org.br">denuncias@escoteiros.org.br</a>.</p>
                        <div class="cBtnDenuncia">
                            <a href="javascript:void(0)" class="btn btn-primary registrarDenuncia">Registrar Denúncia</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-sm-12">
                <?php
                while (have_posts()) {
                    the_post();
                    the_content();
                } ?>
            </div>
        </div>
        <div class="bg-dots">
        </div>
    </div>
    <!-- FIM DE CONTEUDO -->
</div>
<script type="text/javascript">
    $(document).ready(function() {
        //
        $(".registrarDenuncia").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").hide();
            $(".abrirDenuncias1").hide();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").show();
        });

        $(".concordoTermos").click(function() {
            $(".abrirConcordoTermos").show();
            $(".abrirRegistrarDenuncia").hide();
        })

        $(".denuncias1").click(function() {
            $(".abrirDenuncias1").show();
            $(".abrirConcordoTermos").hide();
            $('input[type=radio][name=termo]').prop('checked', false);
        })

        $(".denuncias2").click(function() {
            $("#formCondutaEtico").show();
            $(".abrirConcordoTermos").hide();
            $(".boxEstados").html("<option>--</option>");
            $(".boxCidades").html("<option>--</option>");
            getEstados($(".boxEstados"));
        })

        $(".termoSim").click(function() {
            $(".abrirDenuncias1").hide();
            $("#formCondutaAssedioSim").show();
            $("#formCondutaAssedioNao").hide();
        })

        $(".termoNao").click(function() {
            $(".abrirDenuncias1").hide();
            $("#formCondutaAssedioNao").show();
            $("#formCondutaAssedioSim").hide();
        })

        // Botões de voltar
        $(".voltarRegistrarDenuncia").click(function() {
            $(".opcaoSimOuNao").show();
            $(".abrirConcordoTermos").hide();
            $(".abrirDenuncias1").hide();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").hide();
        })

        $(".voltarTiposDeDenuncia").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").hide();
            $(".abrirDenuncias1").hide();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").show();
        })

        $(".voltarAnonimo").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").show();
            $(".abrirDenuncias1").hide();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").hide();
        })

        $(".voltarF1").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").hide();
            $(".abrirDenuncias1").show();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").hide();
        })

        $(".voltarF2").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").hide();
            $(".abrirDenuncias1").show();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").hide();
        })

        $(".voltarF3").click(function() {
            $(".opcaoSimOuNao").hide();
            $(".abrirConcordoTermos").show();
            $(".abrirDenuncias1").hide();
            $("#formCondutaEtico").hide();
            $("#formCondutaAssedioNao").hide();
            $("#formCondutaAssedioSim").hide();
            $(".abrirRegistrarDenuncia").hide();
        })
    })
</script>

<!-- FOOTER -->
<?php get_footer() ?>
