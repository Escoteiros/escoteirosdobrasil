<?php
$eventosRelacionados = get_field('eventos_relacionadas');
if ($eventosRelacionados) { ?>
    <div class="row">
        <?php
            foreach($eventosRelacionados as $post) { ?>
            <?php setup_postdata($post); ?>

            <!--<?php if($eventoOption == 'sidebar') { $option = $eventoOption; } ?>-->
            <!-- CARD EVENTOS -->
                <?php include('include-card-eventos-home.php'); ?>
            <!-- CARD EVENTOS -->
        <?php } ?>
    </div>
    <!-- FIM DA LISTA DE EVENTOS -->

    <div class="row">
        <div class="col-12 mt-1 text-center">
            <a href="<?= get_home_url(); ?>/eventos/" class="btn btn-primary btn--events-ramos">Ver Mais</a>
        </div>
    </div>
<?php }
wp_reset_postdata(); ?>
