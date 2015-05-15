Hier wat uitleg over de opmaak/opzet van de site.

De GSP route is vorm gegeven in de view zelf, om de image te linken met de gps route pagina
    hier is de claas routeyou aangemaakt
    het linken van de image naar de routeyou.com is eveneens hier toegepast, tegen mijn zin

De slideshow in de header met backstretch, de images in de themplate map 'images' het linken
gebeurt in het custom_backstretch.js bestand

In de node.tpl.php file de link op de  titel h2 verwijderd er is op de hele site geen enkel teaser
gebruikt daardoor kon dit gebeuren

De buttons (volgende rit) in de zijbalk naar de alle ritten, worden aangemaakt in de view via een
tekstveld in de voet.

Het fotoalbum overzicht een wrapper class 'album-overzicht' in de view aangemaakt, geen tpl file
Een cover afbeelding en een veld multi upload voor de rest van de afbeeldingen.

Om het label vertrek uur te kunnen afprinten voor het uur , bij datum instellingen 2  extra formaten
aangemaakt 1 enkel met de datum en 1 met enkel het uur, deze beide velden 'vertrekuur' toegevoegd
in de view en met css deze beide velden naast elkaar plaatsen
(resultaten herschreven class vertrek-date toegevoegd)

De locale js bestanden include via het info file, de externe via de function hook_preprocess_page
 - drupal_add_js op template.php
De module jQuery Update is noodzakelijk, ingesteld op 1.10 versie voor de module FooTable

De sidebar_left onder de content geplaatst en met pull/push deze terug links geplaatst, heeft
als voordeel dat google nu eerst de belangrijkere content ziet, en nu wordt de sidebar_left
op een smartphone onder de content getoond

Probleem op 20150515 bug - op een smartphone is het logo niet klikbaar, de structuur in de
header aangepast nested cols (lost het prbleem niet op),
logo heeft geen hoogte div name-wrap neemt dan die ruimte in, door volgende css toe te
voegen .bcg_header #logo_wrap {overflow: auto;} probleem opgelost.

Gebruik van de site

Na inloggen van de user krijgt hij een opgemaakte pagina te zien (user-profile.tpl.php)