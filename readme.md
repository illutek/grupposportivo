Hier wat uitleg over de opmaak/opzet van de site.

De GSP route is vorm gegeven in de view zelf, om de image te linken met de gps route pagina
    hier is de claas routeyou aangemaakt
    het linken van de image naar de routeyou.com is eveneens hier toegepast, tegen mijn zin

In de node.tpl.php file de link op de  titel h2 verwijderd er is op de hele site geen enkel teaser
gebruikt daardoor kon dit gebeuren

De buttons (volgende rit) in de zijbalk naar de alle ritten, worden aangemaakt in de view via een
tekstveld in de voet.

Het fotoalbum overzicht een wrapper class 'album-overzicht' in de view aangemaakt, geen tpl file
Een cover afbeelding en een veld multi upload voor de rest van de afbeeldingen.

Om het label vertrekuur te kunnen afprinten voor het uur , bij datum instellingen 2  extra formaten
aangemaakt 1 enkel met de datum en 1 met enkel het uur, deze beide velden 'vertrekuur' toegevoegd
in de view en met css deze beide velden naast elkaar plaatsen
(resultaten herschreven class vertrek-date toegevoegd)

Gebruik van de site

Na inloggen van de user krijgt hij een opgemaakte pagina te zien (user-profile.tpl.php)
