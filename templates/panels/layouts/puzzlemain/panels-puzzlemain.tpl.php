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

<div class="site-wrapper">
  <div class="header">
    <div class="container">
      <div class="row">
        <div class="col-md-4 logo-block">
          <?php print $content['logo']; ?>
        </div>
        <div class="col-md-4 phones-block">
          <?php print $content['phones']; ?>
        </div>
        <div class="col-md-4 address-block">
          <?php print $content['address']; ?>
        </div>
      </div>
    </div>
  </div>
  <div class="main-menu">
    <div class="container">
      <?php print $content['menu']; ?>
    </div>
  </div>
  <div class="main-content">
  <?php if ($content['page_title']): ?>
    <div class="page-title main-background">
      <div class="container">
        <?php print $content['page_title']; ?>
      </div>
    </div>
  <?php endif; ?>
    <div class="content <?php if ($content['page_title']) {print 'with-title'; } ?>">
      <div class="container">
        <?php print $content['main_content']; ?>
      </div>
    </div>
  </div>
  <div class="footerpusher">
  </div>
</div>
<div class="footer">
  <div class="container">
    <?php print $content['footer']; ?>
  </div>
</div>
