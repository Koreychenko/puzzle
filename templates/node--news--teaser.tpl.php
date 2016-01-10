<h2><span class="header-date"><?php print format_date($node->created, 'short'); ?></span><?php print l($node->title,'node/'.$node->nid); ?></h2>
<div class="row">
  <div class="col-md-4">
    <?php print render($content['field_teaser_image']); ?>
  </div>
  <div class="col-md-8">
    <?php print render($content['field_teaser_text']); ?>
  </div>
</div>
