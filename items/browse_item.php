<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
  <div class='portfolio-item'>
   <?php echo link_to_item(item_image('square_thumbnail')); ?>
   <div class='portfolio-item-title'>
    <?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?>
    <p>
      <?php if ($description = metadata('item', array('Dublin Core', 'Description'), array('snippet'=>250))): ?>
        <?php echo $description; ?>
      <?php endif; ?>
    </p>
   </div>
   <div class='clearfix'></div>
  </div>
</div>
