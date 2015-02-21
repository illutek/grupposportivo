<!-- naviagatie stiky on top -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed"
                    data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li><a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                       role="button" aria-expanded="false">
                        Ritten
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="<?php print base_path() ?>grupposportivo-ritten ">Grupposportivo ritten</a></li>
                        <li><a href="<?php print base_path() ?>oefenritten ">Oefenritten</a></li>
                        <li><a href="<?php print base_path() ?>klassiekers ">Klassiekers</a></li>
                        <li><a href="<?php print base_path() ?>permanente-ritten ">Permanente ritten</a></li>
                        <li><a href="<?php print base_path() ?>gps-route">GPS ritten</a></li>
                    </ul>
                </li>
                <li><a href="<?php print base_path() ?>leden">Leden</a></li>
                <li><a href="<?php print base_path() ?>aanwezigheidslijst">Aanwezigheidslijst</a></li>
                <li><a href="<?php print base_path() ?>blog">Blog</a></li>
                <li><a href="<?php print base_path() ?>interssante-linken">Linken</a></li>
                <li><a href="<?php print base_path() ?>grupposprotivo-contacteren">Contacteren</a></li>
                <li><a href="<?php print base_path() ?>gastenboek-berichten ">Gastenboek</a></li>
                <li><a href="<?php print base_path() ?>fotoalbums">Fotoalbums</a></li>
                <li><a href="<?php print base_path() ?>video">Video's</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <!-- de inlog button en user print -->
                <li><?php global $user; if ($user->uid != 0)
                    { print '<li class="first">' .t('').
                        '<a href="' .url('user/'.$user->uid). '">' .$user->name. '</a>
                        </li>'; print '<li>
                        <a href="' .url('user/logout'). '">' .t('Logout'). '</a>
                        </li>'; } else { print '<li class="first">
                        <a href="' .url('user'). '">' .t('Login'). '</a>
                        </li>'; print '<li>
                        <a href="' .url('user/register'). '">' .t(''). '</a>
                        </li>'; } ?></li>
            </ul>
        </div><!--/.navbar-collapse -->
    </div>
</nav>

<!-- bcg_header hier de bootstrap slider, logo, site naam, slogan en googlemaps -->
<div class="bcg_header"><!-- class bcg_header in bootstrap.css op regel 4850 ongeveer -->
    <div class="container">
        <div id="logo_wrap" class="col-md-4">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
        </div><!-- end logo_wrap -->
        <div id="club_name_wrap" class="col-md-8">
            <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/club_name-min.png"
                     class="img-responsive" alt="Grupposportivo">
            </a>
            <?php if ($site_slogan): ?>
                <div class="slogan"><?php print $site_slogan; ?></div>
            <?php endif; ?>
        </div>
            <div class="col-md-8 route">
                <a href="<?php print base_path() ?>route-naar-de-flipper">
                <img src="<?php print base_path() . path_to_theme(); ?>/images/google_maps_icon-min.jpg"
                     alt="google_maps">
                Café Flipper Heirstraat 156 3630 Maasmechelen</a><!-- hier printen van de contact gegevens -->
            </div>
        </div><!-- end club_name_wrap -->
    </div>
</div><!-- end bcg_header -->

<!-- zijbalk content en bottom content, dus alle inhoud -->
<div class="container container_wrap">
    <div class="row">
        <!-- deze zijbalk wordt altijd getoond -->
        <div id="sidebar_left" class="col-md-3">
            <div id="inner_zijbalk_left">
                <?php print render($page['sidebar_left']); ?>
            </div>
        </div><!-- end sidebar_left -->

        <div id="content_wrap" class="col-md-9">
            <?php if ($page['news_anoniem']): ?>
                <div id="news_anoniem">
                    <?php print render($page['news_anoniem']); ?>
                </div><!-- news_anoniem -->
            <?php endif; ?>
            <?php if ($page['news_leden']): ?>
                <div id="news_leden">
                    <?php print render($page['news_leden']); ?>
                </div><!-- news_anoniem -->
            <?php endif; ?>

            <div class="content">
                <a id="main-content"></a>
                <?php print render($title_prefix); ?>
                <?php if ($title): ?>
                    <h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
                <?php print render($title_suffix); ?>
                <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
                <?php print render($page['help']); ?>
                <?php if ($action_links): ?>
                    <ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
                <?php print render($page['content']); ?>
                <?php print $feed_icons; ?>
            </div><! end content -->

            <!-- Onderste content met 3 verschillende regions worden altijd getoon -->
            <div class="" id="content_bottom_wrap">
                <hr>
                <div class="bottom_first col-md-4">
                    <div class="bottom_content">
                        <!-- zou kunnen dat ik hier de p tags moet toevoegen om de
                        button op gelijke hoogte te krijgen-->
                        <?php print render($page['bottom_first']); ?>
                    </div>
                    <!-- de link aanpassen naar de content -->
                    <a href="<?php print base_path() ?>blog" class="btn btn-gruppo" role="button">Meer</a>
                </div>
                <div class="bottom_midle col-md-4">
                    <div class="bottom_content">
                        <!-- zou kunnen dat ik hier de p tags moet toevoegen om de
                        button op gelijke hoogte te krijgen-->
                        <?php print render($page['bottom_midle']); ?>
                    </div>
                    <!-- de link aanpassen naar de content -->
                    <!-- <a href="#" class="btn btn-gruppo" role="button">Meer</a>-->
                </div>
                <div class="bottom_last col-md-4">
                    <div class="bottom_content">
                        <!-- zou kunnen dat ik hier de p tags moet toevoegen om de
                        button op gelijke hoogte te krijgen-->
                        <?php print render($page['bottom_last']); ?>
                    </div>
                    <!-- de link aanpassen naar de content -->
                    <a href="<?php print base_path() ?>wielerflits" class="btn btn-gruppo" role="button">Meer</a>
                </div>
            </div>
        </div><!-- end content_wrap -->
    </div><!-- end row -->
</div> <!-- end container /container_wrap-->

<!-- footer met de copy vermelding en de contact gegevens degene die ook in de header zijn geplaats
ga hier voor een inhoudstype aanmaken en dit op een of andere manier hier rechtstreeks printen -->
<div class="container">
    <footer>
        <p>&copy; Grupposportivo 2014</p>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php print base_path() . path_to_theme(); ?>/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php print base_path() . path_to_theme(); ?>/js/ie10-viewport-bug-workaround.js"></script>
<!-- Backstretch -->
<!-- onderstaande code aanpassen voor de theme -->
<script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.js"></script>
<script src="<?php print base_path() . path_to_theme(); ?>/js/jquery.backstretch.js"></script>

<script>
    (function($){
        $(document).ready(function(){
            var base = window.Drupal.settings.basePath + 'sites/all/themes/gruppo/images/';
            $(".bcg_header").backstretch([
                    base + 'cycling-race.jpg',
                    base + 'groot_100702-wielrenners-min.jpg'],
                {fade: 750, duration: 4000});
        });
    }(jQuery))
</script>
