<?php

/**
 * @file
 * Default theme implementation to present all user profile data.
 *
 * This template is used when viewing a registered member's profile page,
 * e.g., example.com/user/123. 123 being the users ID.
 *
 * Use render($user_profile) to print all profile items, or print a subset
 * such as render($user_profile['user_picture']). Always call
 * render($user_profile) at the end in order to print all remaining items. If
 * the item is a category, it will contain all its profile items. By default,
 * $user_profile['summary'] is provided, which contains data on the user's
 * history. Other data can be included by modules. $user_profile['user_picture']
 * is available for showing the account picture.
 *
 * Available variables:
 *   - $user_profile: An array of profile items. Use render() to print them.
 *   - Field variables: for each field instance attached to the user a
 *     corresponding variable is defined; e.g., $account->field_example has a
 *     variable $field_example defined. When needing to access a field's raw
 *     values, developers/themers are strongly encouraged to use these
 *     variables. Otherwise they will have to explicitly specify the desired
 *     field language, e.g. $account->field_example['en'], thus overriding any
 *     language negotiation rule that was previously applied.
 *
 * @see user-profile-category.tpl.php
 *   Where the html is handled for the group.
 * @see user-profile-item.tpl.php
 *   Where the html is handled for each item in the group.
 * @see template_preprocess_user_profile()
 *
 * @ingroup themeable
 */
?>
<div class="profile"<?php print $attributes; ?>>
    <p>Welkom op je account pagina.<br>Onderaan deze pagina bij 'Linken voor de ingelogde leden' een
        aantal items die enkel zichtbaar zijn voor de uiteraard ingelogde leden</p>
    <p>Om later terug te keren naar deze pagina, dit kan door op je gebruikersnaam te klikken
        bovenaan rechts op de menubalk.</p>
    <?php print render($user_profile['field_voornaam']); ?><br>
    <?php print render($user_profile['field_familienaam']); ?><br>
    <?php print render($user_profile['field_adres']); ?><br>
    <?php print render($user_profile['field_postcode_en_gemeente']); ?>
    <?php print render($user_profile); ?>
    <h3>Linken voor de ingelogde leden</h3>
    <ul>
        <li>
            <a href="<?php print base_path() ?>ledenvergaderingen">Verslagen ledenvergaderingen</a>
        </li>
        <li>
            <a href="<?php print base_path() ?>bestuursvergaderingen">Verslagen bestuursvergaderingen</a>
            (leden geen toegang)
        </li>
        <li>
            <?php print l(t('Je account bewerken'), "user/{$GLOBALS['user']->uid}/edit"); ?>
        </li>
        <li>
            <a href="<?php print base_path() ?>user/logout">Uitloggen</a>
        </li>
    </ul>
</div>
