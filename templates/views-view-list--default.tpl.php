<?php

/**
 * @file
 * Theme template to display a list of rows.
 *
 * - $title : The title of this group of rows.  May be empty.
 * - $options['type'] will either be ul or ol.
 * - $row_id :
 *
 * @ingroup views_templates
 */
?>
<?php print $wrapper_prefix; ?>
    <?php if (!empty($title)) : ?>
    <h4><?php print $title; ?></h4>
    <?php
endif; ?>
    <?php print $list_type_prefix; ?>
    <?php foreach ($rows as $id => $row): ?>
        <?php
        $row_classes = explode(' ', $classes_array[$id]);
        $row_id      = array_pop($row_classes);
        ?>
      <li class="<?php print $classes_array[$id]; ?>"id="<?php print $row_id; ?>"><?php print $row; ?></li>
    <?php
endforeach; ?>
    <?php print $list_type_suffix; ?>
<?php print $wrapper_suffix; ?>
