//deze pagina wordt niet meer gebruikt logo's met de link was een rommeltje
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="content"<?php print $content_attributes; ?>>
        <a href="<?php print preg_replace('/^.*?(https?:\/\/.*?)(<.*)?$/i', '$1', render($content['field_url'])); ?>" target="_blank">
            <?php print render($content['field_image']); ?>
        </a>
    </div>
</div>
