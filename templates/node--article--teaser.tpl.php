<div class="teaser">
<div class="row">
  <div class="col-md-4">
    <?php print render($content['field_teaser_image']); ?>
  </div>
  <div class="col-md-8">
  <div class="teaser-inner">
    <h2><?php print l($node->title,'node/'.$node->nid); ?></h2>
    <?php print render($content['field_teaser_text']); ?>
    <?php print l(t('Read more'),'node/'.$node->nid,array('attributes'=>array('class'=>array('read-more')))); ?>
  </div>
  </div>
</div>
</div>
