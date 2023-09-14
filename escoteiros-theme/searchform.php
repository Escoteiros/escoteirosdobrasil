<form action="<?php echo get_home_url(); ?>" method="get" accept-charset="utf-8" id="searchform" role="search">
    <input type="text" name="s" id="s" value="<?php the_search_query(); ?>" placeholder="Buscar por notícias, eventos, equipes, etc" />
    <input type="submit" id="searchsubmit" class="btn btn-primary btn-sm" value="Buscar" />
</form>