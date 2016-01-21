<?php
/*
*   'logo' => t('Logo'),
    'phones' => t('Phones'),
    'address' => t('Address'),
    'menu' => t('Top menu'),
    'main_content' => t('Content'),
    'footer' => t('Footer'),
*
*/
?>
<?php if ($content['slider_content']): ?>
  <div class="pzlslider">
    <?php print $content['slider_content']; ?>
  </div>
<?php endif; ?>
<div class="container">
  <?php print $content['main_content']; ?>
</div>
