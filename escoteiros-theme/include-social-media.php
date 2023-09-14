<?php
    $obj_id = get_queried_object_id();
    $current_url = get_permalink( $obj_id );
    $socialMediaModifier = $socialMediaModifier ?? '';
    $socialMediaSource = $socialMediaSource ?? '';
?>
<div class="social-media-wrapper">
    <ul class="social-media <?= $socialMediaModifier; ?>">
    <?php if($socialMediaSource == 'footer') { 
           $regiao = explode('.', $_SERVER['HTTP_HOST'])[0];
           switch ($regiao) {
               case 'am':
                   $facebook = "https://www.facebook.com/EscoteirosdoAmazonas";
                   $instagram = "escoteirosam";
                   $twitter = "";
                   $whatsapp = "phone=559296021042";
                   $linkedin = "";
                   $youtube = "";
                   break;

                case 'pr':
                   $facebook = "https://m.facebook.com/people/Escoteiros-do-Paran%C3%A1/100088464858982/";
                   $instagram = "escoteirospr";
                   $twitter = "";
                   $whatsapp = "";
                   $linkedin = "";
                   $youtube = "@escoteirosparana";
                   break;
               
               default:
                   $facebook = "https://www.facebook.com/EscoteirosDoBrasilOficial?fref=ts";
                   $instagram = "escoteirosdobrasil";
                   $twitter = "@Escoteiros";
                   $whatsapp = "text=https://www.escoteiros.org.br/";
                   $linkedin = "escoteiros-do-brasil";
                   $youtube = "user/escoteirosbrasil";
                   break;
           }

        if ($facebook != "") {
            echo '<li class="social-media__item social-media__item--facebook"><a href="'.$facebook.'" target="_blank"></a></li>';
        }
        if ($instagram != "") {
            echo '<li class="social-media__item social-media__item--instagram"><a href="https://www.instagram.com/'.$instagram.'/" target="_blank"></a></li>';
        }
        if ($twitter != "") {
            echo '<li class="social-media__item social-media__item--twitter"><a href="https://twitter.com/'.$twitter.'" target="_blank"></a></li>';
        }
        if ($whatsapp != "") {
            echo '<li class="social-media__item social-media__item--whatsapp"><a href="https://api.whatsapp.com/send?'.$whatsapp.'" target="_blank"></a></li>';
        }
        if ($linkedin != "") {
            echo '<li class="social-media__item social-media__item--linkedin"><a href="https://www.linkedin.com/company/'.$linkedin.'/" target="_blank"></a></li>';
        }
        if ($youtube != "") {
            echo '<li class="social-media__item social-media__item--youtube"><a href="https://www.youtube.com/'.$youtube.'" target="_blank"></a></li>';
        }
    ?>
    <?php } else { ?>
        <li class="social-media__item social-media__item--facebook">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?= $current_url; ?>" target="_blank"></a>
        </li>
        <li class="social-media__item social-media__item--twitter">
            <a href="https://twitter.com/intent/tweet?url=<?= $current_url; ?>&" target="_blank"></a>
        </li>
        <li class="social-media__item social-media__item--whatsapp">
            <a href="https://api.whatsapp.com/send?text=<?= $current_url; ?>" target="_blank"></a>
        </li>
        <li class="social-media__item social-media__item--linkedin">
            <a href="https://www.linkedin.com/cws/share?url=<?= $current_url; ?>" target="_blank"></a>
        </li>
    <?php } ?>
    </ul>
</div>
