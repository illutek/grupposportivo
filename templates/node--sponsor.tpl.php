<?php if ($teaser): ?><!-- de teaser voor in de sidebar left -->
    <div class="sponsor_sidebar_wrap">
        <table>
            <tr>
                <td><?php print render($content['field_image']); ?></td>
                <td>
                    <span class="sponsor_sidebar_title"><a href="<?php print $node_url; ?>"><?php print $title; ?></a></span>
                    <?php print render($content['body']); ?>
                </td>
            </tr>
        </table>
    </div>
<?php else: ?><!-- de volledige node -->
    <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
        <?php print render($title_prefix); ?>
        <?php if (!$page): ?>
            <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
        <?php endif; ?>
        <?php print render($title_suffix); ?>
        <div class="sponsor_wrap">
            <?php print render($content); ?>
        </div>
    </div>
<?php endif; ?>