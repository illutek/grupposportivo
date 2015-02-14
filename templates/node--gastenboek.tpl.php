<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print render($title_prefix); ?>
  <?php if (!$page): ?>
    <h3<?php print $title_attributes; ?>><?php print $title; ?></h3>
  <?php endif; ?>
  <?php print render($title_suffix); ?>

  <div class="content"<?php print $content_attributes; ?>>
      <div class="person_icon"><?php print render($content['field_gastenboek_naam']); ?></div>
      <?php print render($content['body']); ?>
  </div>
</div>
