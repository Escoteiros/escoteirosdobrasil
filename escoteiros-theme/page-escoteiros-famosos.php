<?php /* Template Name: Escoteiros Famosos */ ?>
<?php if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE Famosos | page-escoteiros-famosos.php</div>
<?php }

get_header();
$pageTitle = get_the_title();
$iconHeader = get_field('icone_header');
$headerOption = 'hide-subtitle';
include('include-header-title.php');
?>
<style type="text/css">
    .button-wrap {
        margin-left: 5px;
        margin-right: 5px;
    }
</style>
<section class="container">
	<!-- BANNER -->
	<div class="row">
		<div class="col-12 remove-padding-mobile">
			<?php
				include('include-banner.php');
			?>
		</div>
	</div>
	<!-- FIM DE BANNER -->
</section>
<div class="container" style="text-align: justify;">
     <?php
        while (have_posts()) {
            the_post();
        ?>
            <?php the_content() ?>
    <?php } ?>
    <style type="text/css">
        @media only screen and (max-width: 1800px) {

            .btn-alfa{
                border-radius:10px; 
                padding-top: 30px;
                padding-bottom: 30px;
                padding-left: 50px;
                padding-right: 50px;
                margin: 5px;
                font-size: 45px;
                width: 145px !important;
            }
        }

        @media (min-width: 992px)
            .col-grid-max {
                -webkit-box-flex: 0;
                -ms-flex: 0 0 16.6666666667%;
                flex: 0 0 16.6666666667%;
                max-width: 16.6666666667%;
            }
        }

        @media only screen and (max-width: 400px) {

            .btn-alfa{
                border-radius:10px; 
                padding-top: 30px;
                padding-bottom: 30px;
                padding-left: 50px;
                padding-right: 50px;
                margin: 5px;
                font-size: 45px;

            }

            .col-grid{
                width: 0px !important;
                position: relative;
                padding-right: 15px;
                padding-left: 15px;
            }

        }
    </style>
    <section id="selecaoNotaveis">
        <div class="container">
          <div class="row ml-auto" style="overflow-x: hidden">
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-A" type="button" class="btn btn-outline-primary btn-alfa btn-block">A</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-B" type="button" class="btn btn-outline-primary btn-alfa btn-block">B</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-C" type="button" class="btn btn-outline-primary btn-alfa btn-block">C</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-D" type="button" class="btn btn-outline-primary btn-alfa btn-block">D</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-E" type="button" class="btn btn-outline-primary btn-alfa btn-block">E</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-F" type="button" class="btn btn-outline-primary btn-alfa btn-block">F</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-G" type="button" class="btn btn-outline-primary btn-alfa btn-block">G</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-H" type="button" class="btn btn-outline-primary btn-alfa btn-block">H</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-I" type="button" class="btn btn-outline-primary btn-alfa btn-block">I</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-J" type="button" class="btn btn-outline-primary btn-alfa btn-block">J</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-K" type="button" class="btn btn-outline-primary btn-alfa btn-block">K</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-L" type="button" class="btn btn-outline-primary btn-alfa btn-block">L</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-M" type="button" class="btn btn-outline-primary btn-alfa btn-block">M</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-N" type="button" class="btn btn-outline-primary btn-alfa btn-block">N</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-O" type="button" class="btn btn-outline-primary btn-alfa btn-block">O</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-P" type="button" class="btn btn-outline-primary btn-alfa btn-block">P</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-Q" type="button" class="btn btn-outline-primary btn-alfa btn-block">Q</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-R" type="button" class="btn btn-outline-primary btn-alfa btn-block">R</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-S" type="button" class="btn btn-outline-primary btn-alfa btn-block">S</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-T" type="button" class="btn btn-outline-primary btn-alfa btn-block">T</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-U" type="button" class="btn btn-outline-primary btn-alfa btn-block">U</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-V" type="button" class="btn btn-outline-primary btn-alfa btn-block">V</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-X" type="button" class="btn btn-outline-primary btn-alfa btn-block">X</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-W" type="button" class="btn btn-outline-primary btn-alfa btn-block">W</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-Y" type="button" class="btn btn-outline-primary btn-alfa btn-block">Y</a></div>
            <div class="col-grid-max col-grid text-center"><a href="https://escoteiros.org.br/escoteiros-famosos-Z" type="button" class="btn btn-outline-primary btn-alfa btn-block">Z</a></div>
          </div>
        </div>
    </section>
</div>


<?php get_footer() ?>
