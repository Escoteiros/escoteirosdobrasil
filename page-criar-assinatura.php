<?php /* Template Name: Criar assinatura  */ ?>
<?php if(current_user_can('administrator')) {  ?>
    <div style="background: red; color: #fff; text-align: center; font-size:12px; padding: 10px;">PAGE CRIAR ASSINATURA | page-criar-assinatura.php</div>
<?php } ?>
<!-- HEADER -->
<?php get_header() ?>
<!-- ./HEADER -->

<?php
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
                <h1 class="form-page-title">Criando sua Assinatura</h1>
                <div class="row">
                    <div class="col-md-12">
                        <p>Para criar a sua assinatura institucional realize os seguintes passos:</p>
                        <ul>
                            <li>Preencha os campos abaixo corretamente, usando letra maiúscula apenas na primeira letra de cada termo do nome e função.</li>
                            <li>Copie o código gerado na última caixa.</li>
                            <li>Após copiar o código, siga as instruções <a href="https://support.google.com/mail/answer/8395" target="_blank" rel="noopener noreferrer">deste tutorial</a>.</li>
                        </ul>
                    </div>
                </div>
                <div class="row" style="margin-top: 25px; margin-bottom: 25px">
                    <div class="col-sm-12 col-md-6 content__text">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <input class="form-control" name="nome" id="nome" type="text" placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="cargo" id="cargo" type="text" placeholder="Função" required>
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="telefone" id="telefone" type="text" placeholder="Telefone (Se você preferir, pode deixar em branco)">
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-12 col-md-6 content__text">
                        <div class="text-center">
                            <p>Pré visualização</p>
                        </div>
                        <div id="preview">
                            <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
                            <table border="0" cellpadding="0" cellspacing="0" style="min-width: 380px;">
                                <tr>
                                    <td rowspan="2"><img src="<?= get_template_directory_uri(); ?>/img/logoAssinatura.png" width="80" height="104" alt="Logo Escoteiros do Brasil" /></td>
                                    <td height="81" style="vertical-align:middle;">
                                        <div>
                                            <p class="nome" id="nomePreview" style="margin: 0px 0px 0px 15px; max-width: 240px; line-height: 5px; font-family: 'Montserrat', sans-serif; color: rgb(44, 70, 121); font-size: 12px; font-weight: bold;"></p>
                                            <p class="funcao" id="cargoPreview" style="margin: 15px 0px 0px 15px; max-width: 240px; line-height: 10px; font-family: 'Montserrat', sans-serif; color: rgb(86,146,206); font-size: 9px; font-style: italic;"></p>
                                            <p class="tel" id="telefonePreview" style="margin: 15px 0px 0px 15px; line-height: 0px; color: rgb(44, 70, 121); font-size: 11px; font-family: 'Montserrat', sans-serif; font-style: italic;"></p>
                                        </div>
                                    </td>
                                    <td rowspan="2" style="padding-left: 20px;">
                                        <img src="<?= get_template_directory_uri(); ?>/img/selo2021.png" width="50" alt="Selo Melhores ONGS 2021" />
                                        <img src="<?= get_template_directory_uri(); ?>/img/doar.png" width="50" alt="Instituo Doar" />
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button onclick="copiar()" class="btn btn-primary" style="margin-bottom: 10px">Copiar Para Outlook/Gmail</button>
                        <button onclick="copiarApp()" class="btn btn-primary" style="margin-bottom: 10px">Copiar Para Thunderbird</button>
                        <div id="code" style="border: 1px solid grey; padding: 10px; max-height: 100px; overflow: auto">
                            <div id="codecode">
                                &lt;link href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap&quot; rel=&quot;stylesheet&quot;&gt;
                                &lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;min-width: 380px;&quot;&gt;
                                &lt;tr&gt;
                                &lt;td rowspan=&quot;2&quot;&gt;&lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/logoAssinatura.png&quot; width=&quot;80&quot; height=&quot;104&quot; alt=&quot;Logo Escoteiros do Brasil&quot;/&gt;&lt;/td&gt;
                                &lt;td height=&quot;81&quot; style=&quot;vertical-align:middle;&quot;&gt;
                                &lt;div&gt;
                                &lt;p style=&quot;margin: 0px 0px 0px 15px; max-width: 240px; line-height: 5px; font-family: &apos;Montserrat&apos;, sans-serif; color: rgb(44, 70, 121); font-size: 12px; font-weight: bold;&quot;&gt;&lt;/p&gt;
                                &lt;p style=&quot;margin: 15px 0px 0px 15px; max-width: 240px; line-height: 10px; font-family: &apos;Montserrat&apos;, sans-serif; color: rgb(86,146,206); font-size: 9px; font-style: italic;&quot;&gt;&lt;/p&gt;
                                &lt;p style=&quot;margin: 15px 0px 0px 15px; line-height: 0px; color: rgb(44, 70, 121); font-size: 11px; font-family: &apos;Montserrat&apos;, sans-serif; font-style: italic;&quot;&gt;&lt;/p&gt;
                                &lt;/div&gt;
                                &lt;/td&gt;
                                &lt;td style=&quot;padding-left: 20px&quot; rowspan=&quot;2&quot;&gt;
                                &lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/selo2021.png&quot; alt=&quot;Selo Melhores ONGS 2021&quot; width=&quot;50&quot; /&gt;
                                &lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/doar.png&quot; alt=&quot;Instituo Doar&quot; width=&quot;50&quot; /&gt;
                                &lt;/td&gt;                                
                                &lt;/tr&gt;
                                &lt;/table&gt;
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIM DE CONTEUDO -->
</div>
<script>
    const atualizaPreview = () => {
        const nome = document.getElementById('nome').value;
        const cargo = document.getElementById('cargo').value;
        const telefone = document.getElementById('telefone').value;
        if (!nome && !cargo && !telefone) {
            return;
        }

        document.getElementById('nomePreview').innerText = nome;
        document.getElementById('cargoPreview').innerText = cargo;
        document.getElementById('telefonePreview').innerText = telefone;

        const codigo = '&lt;link href=&quot;https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,700;1,400&display=swap&quot; rel=&quot;stylesheet&quot;&gt;' +
            '&lt;table border=&quot;0&quot; cellpadding=&quot;0&quot; cellspacing=&quot;0&quot; style=&quot;min-width: 380px;&quot;&gt;' +
            '&lt;tr&gt;' +
            '&lt;td rowspan=&quot;2&quot; style=&quot;width: 80px&quot; &gt;&lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/logoAssinatura.png&quot; width=&quot;80&quot; height=&quot;104&quot; alt=&quot;Logo Escoteiros do Brasil&quot;/&gt;&lt;/td&gt;' +
            '&lt;td height=&quot;81&quot; style=&quot;vertical-align:middle;&quot;&gt;' +
            '&lt;div&gt;' +
            `&lt;p style=&quot;margin: 0px 0px 0px 15px; max-width: 240px; line-height: 5px; font-family: &apos;Montserrat&apos;, sans-serif; color: rgb(44, 70, 121); font-size: 12px; font-weight: bold;&quot;&gt;${nome}&lt;/p&gt;` +
            `&lt;p style=&quot;margin: 15px 0px 0px 15px; max-width: 240px; line-height: 10px; font-family: &apos;Montserrat&apos;, sans-serif; color: rgb(86,146,206); font-size: 9px; font-style: italic;&quot;&gt;${cargo}&lt;/p&gt;` +
            `&lt;p style=&quot;margin: 15px 0px 0px 15px; line-height: 0px; color: rgb(44, 70, 121); font-size: 11px; font-family: &apos;Montserrat&apos;, sans-serif; font-style: italic;&quot;&gt;${telefone}&lt;/p&gt;` +
            '&lt;/div&gt;' +
            '&lt;/td&gt;' +
            '&lt;td rowspan=&quot;2&quot; style=&quot;padding-left: 20px&quot; &gt;' +
            '&lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/selo2021.png&quot; alt=&quot;Selo Melhores ONGS 2021&quot; width=&quot;50&quot;/&gt;' +
            '&lt;img src=&quot;<?= get_template_directory_uri(); ?>/img/doar.png&quot; alt=&quot;Instituo Doar&quot; width=&quot;50&quot; /&gt;' +
            '&lt;/td&gt;' +
            '&lt;/tr&gt;' +
            '&lt;/table&gt;';

        document.getElementById('codecode').innerHTML = codigo;

        if (nome) {
            document.getElementById('nomePreview').style.display = 'block';
        } else {
            document.getElementById('nomePreview').style.display = 'none';
        }

        if (cargo) {
            document.getElementById('cargoPreview').style.display = 'block';
        } else {
            document.getElementById('cargoPreview').style.display = 'none';
        }

        if (telefone) {
            document.getElementById('telefonePreview').style.display = 'block';
        } else {
            document.getElementById('telefonePreview').style.display = 'none';
        }
    };
    window.onload = () => {
        document.getElementById('nome').addEventListener('change', atualizaPreview);
        document.getElementById('cargo').addEventListener('change', atualizaPreview);
        document.getElementById('telefone').addEventListener('change', atualizaPreview);
    }

    function copiar() {
        if (document.selection) {
            const range = document.body.createTextRange();
            range.moveToElementText(document.getElementById('preview'));
            range.select().createTextRange();
            console.log(document.execCommand("copy"));
        } else if (window.getSelection) {
            const range = document.createRange();
            range.selectNode(document.getElementById('preview'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
        }
    }

    function copiarApp() {
        if (document.selection) {
            const range = document.body.createTextRange();
            range.moveToElementText(document.getElementById('codecode'));
            range.select().createTextRange();
            document.execCommand("copy");
        } else if (window.getSelection) {
            const range = document.createRange();
            range.selectNode(document.getElementById('codecode'));
            window.getSelection().removeAllRanges();
            window.getSelection().addRange(range);
            document.execCommand("copy");
        }
    }
</script>

<!-- FOOTER -->
<?php get_footer() ?>