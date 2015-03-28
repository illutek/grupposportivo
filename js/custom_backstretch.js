/**
 * Created by Stefan on 17/03/2015.
 */
(function($){
    $(document).ready(function(){
        var base = window.Drupal.settings.basePath + 'sites/all/themes/gruppo/images/';
        $(".bcg_header").backstretch([
                base + 'cycling-race.jpg',
                base + 'groot_100702-wielrenners-min.jpg'],
            {fade: 750, duration: 4000});
    });
    }(jQuery))