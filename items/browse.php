<?php echo head(); ?>

<div id='main'>
  <div class='breadcrumb-wrapper'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-6 col-md-6 col-xs-12 col-sm-6'>
          <h2 class='title'>Browse</h2>
        </div>
        <div class='col-lg-6 col-md-6 col-xs-12 col-sm-6'>
          <div class='breadcrumbs pull-right'>
            <ul>
              <li>You are here:</li>
              <li>Browse</li>
              <li>People</li>
              <li><strong>Phillip Lanclos<strong></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class='content' id='browse'>
    <div class='container'>
      <div class='row'>
			<?php include("browse_categories.php") ?>
        <div class='col-lg-9 col-md-9 col-sm-9 col-xs-9' id='images'>
          <div class='row'>
            <div class='col-md-12'>
              <h3>Images</h3>
            </div>
          </div>
          <div class='row'>
            <div class='portfolio three-column'>
					<?php foreach (loop('items') as $item): ?>
						<?php include("browse_item.php") ?>
					<?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo footer() ?>
