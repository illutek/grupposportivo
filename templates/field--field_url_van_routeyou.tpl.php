<?php
/**
 * Created by PhpStorm.
 * User: Stefan
 * Date: 19/02/2015
 * Time: 16:25
 */
foreach ($items as $delta => $item) : ?>
    <a target="_blank" href="<?php print $element['#object']->field_url_van_routeyou['und'][0]['value']; ?>"><?php print render($item); ?></a>
<?php endforeach; ?>