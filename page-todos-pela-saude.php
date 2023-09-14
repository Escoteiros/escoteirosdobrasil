<?php /* Template Name: Todos Pela Saude */
if(current_user_can('administrator') ) {  ?>
	<div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE TODOS PELA SAUDE | page-todos-pela-saude.php</div>
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
            <!-- CONTEÚDO LATERAL ESQUERDO -->
            <div class="col-md-12 col-sm-12">
                <h1 class="form-page-title">Todos Pela Saúde</h1>
                <div class="row">
                    <div class="col-md-12">
                        <p>Obrigado por participar desta ação, onde poderemos ajudar a centenas de idosos.</p>
                        <p>Seu vídeo é muito impotante e para que possamos utiliza-lo da melhor forma possível precisamos que ele tenha um tamanho máximo</p>
                        <br>
                        <p>Se seu vídeo possui mais de 130mb faça os passos a seguir.</p>
                        <p>Entre no neste <a href="https://clideo.com/compress-video">link<a></p>
                        <p>Insira seu vídeo para comprimir</p>
                        <p>Quando este processo finalizar, baixe e envie a versão comprimida para nós.</p>
                    </div>
                </div>
                <div>
                    <div class="mt-5 mb-3 col-12 content__text">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" name="registroEscoteiro" type="text" placeholder="Registro Escoteiro" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="cidade" type="text" placeholder="Cidade" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="estado" type="text" placeholder="Estado" required>
                            </div>
                            <div class="listaCheckbox" style="margin-bottom: 20px; display: inline-block">
                                <p>Tipo de Vídeo</p>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="musica" id="musica">
                                    <label class="form-check-label" for="musica">
                                        Música
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="jogo" id="jogo">
                                    <label class="form-check-label" for="jogo">
                                        Jogo
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="brincadeira" id="brincadeira">
                                    <label class="form-check-label" for="brincadeira">
                                        Brincadeira
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="contacaoDeHistoria" id="contacaoDeHistoria">
                                    <label class="form-check-label" for="contacaoDeHistoria">
                                        Contação de História
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="poema" id="poema">
                                    <label class="form-check-label" for="poema">
                                        Leitura de Poema
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="desenho" id="desenho">
                                    <label class="form-check-label" for="desenho">
                                        Apresentação de Desenho
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="carta" id="carta">
                                    <label class="form-check-label" for="carta">
                                        Leitura de Carta
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="ondeEuMoro" id="ondeEuMoro">
                                    <label class="form-check-label" for="ondeEuMoro">
                                        Onde Eu Moro
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="habilidade" id="habilidade">
                                    <label class="form-check-label" for="habilidade">
                                        Habilidade
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="hobbie" id="hobbie">
                                    <label class="form-check-label" for="hobbie">
                                        Hobbie
                                    </label>
                                </div>
                                <div class="form-check col-md-4" style="float: left">
                                    <input class="form-check-input" name="tipoVideo[]" type="checkbox" value="outros" id="outros">
                                    <label class="form-check-label" for="outros">
                                        Outros
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <textarea class="form-control" name="descricao" id="" rows="3" placeholder="Conte-nos um pouco sobre este vídeo" required></textarea>
                            </div>

                            <div class="form-group">
                                Envie o Vídeo (máximo 130mb):
                                <input type="file" name="fileToUpload" id="fileToUpload" required>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="termoAceite" id="termoAceite" value="aceito" required>
                                <label class="form-check-label" for="termoAceite">Declaro estar ciente dos <a href="<?php bloginfo('template_directory'); ?>/files/autorizacao.pdf" download> termos de imagem</a> e libero o uso da minha imagem para a ação Todos Pela Saúde</label>
                            </div>

                            <div class="form-group" style="margin-top: 15px">
                                <input class="btn btn-primary" type="submit" value="Enviar Vídeo" name="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DE CONTEUDO -->
</div>

<!-- FOOTER -->
<?php get_footer() ?>

<?php
    if(isset($_POST["tipoVideo"]))
    {
        $uploadOk = 1;
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/musica/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/jogo/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/brincadeira/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/contacaoDeHistoria/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/poema/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/desenho/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/carta/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/ondeEuMoro/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/habilidade/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/hobbie/", 0777, true))
        {
        }
        if(!@mkdir(get_home_path() . "/wp-content/uploads/todos-pela-saude/outros/", 0777, true))
        {
        }

        $target_file = $target_dir . $preName. basename($_FILES["fileToUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Allow certain file formats
        if($imageFileType != "webm" && $imageFileType != "mkv" && $imageFileType != "flv"
        && $imageFileType != "avi" && $imageFileType != "mts" && $imageFileType != "mov" && $imageFileType != "rm"
        && $imageFileType!= "rmvb" && $imageFileType != "asf" && $imageFileType != "mp4" && $imageFileType != "m4v" && $imageFileType != "MOV" ) {
            echo '<script>alert("Somente vídeos são aceitos")</script>';
            $uploadOk = 0;
            echo $imageFileType;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {

        // if everything is ok, try to upload file
        } else {
            $tipoVideo = $_POST["tipoVideo"];
            $date = new DateTime();
            $preName = $date->getTimestamp();
            $multiFolder = 0;
            $firstPath;
            foreach($tipoVideo as $tipo)
            {

                $target_dir = get_home_path() . "/wp-content/uploads/todos-pela-saude/" .  $tipo . "/";
                $target_file = $target_dir . $preName. basename($_FILES["fileToUpload"]["name"]);
                if($multiFolder > 0)
                    copy($firstPath, $target_file);
                if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file))
                {
                    $firstPath = $target_file;
                    $multiFolder = 1;
                }

                $filename = pathinfo($_FILES['fileToUpload']['name'], PATHINFO_FILENAME);

                $jsonResposta = array();
                $jsonResposta["registroEscoteiro"] = $_POST["registroEscoteiro"];
                $jsonResposta["tipoVideo"] = $tipo;
                $jsonResposta["descricao"] = $_POST["descricao"];
                $jsonResposta["cidade"] = $_POST["cidade"];
                $jsonResposta["estado"] = $_POST["estado"];

                $fp = fopen($target_dir . $preName . $filename . '.json', 'w');
                fwrite($fp, json_encode($jsonResposta));
                fclose($fp);
            }
        }
    }if(isset($_FILES["fileToUpload"]) && !isset($_POST["tipoVideo"])){
        echo '<script>alert("O tipo de vídeo é obrigatorio")</script>';
    }

    function get_home_path() {
        $home    = set_url_scheme( get_option( 'home' ), 'http' );
        $siteurl = set_url_scheme( get_option( 'siteurl' ), 'http' );
        if ( ! empty( $home ) && 0 !== strcasecmp( $home, $siteurl ) ) {
            $wp_path_rel_to_home = str_ireplace( $home, '', $siteurl ); /* $siteurl - $home */
            $pos                 = strripos( str_replace( '\\', '/', $_SERVER['SCRIPT_FILENAME'] ), trailingslashit( $wp_path_rel_to_home ) );
            $home_path           = substr( $_SERVER['SCRIPT_FILENAME'], 0, $pos );
            $home_path           = trailingslashit( $home_path );
        } else {
            $home_path = ABSPATH;
        }

        return str_replace( '\\', '/', $home_path );
    }
?>
