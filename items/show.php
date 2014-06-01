<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'item show')); ?>

<div id="main">
<!-- Title, Breadcrumb Start-->
	<div class="breadcrumb-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<h2 class="title">
						<?php echo metadata('item', array('Dublin Core', 'Title')); ?>
					</h2>
				</div>
				<div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
					<div class="breadcrumbs pull-right">
						<ul>
							<li>You are here:</li>
							<li><a href="/items/browse">Browse</a></li>
							<li><a href="/items/browse">People</a></li>
							<li><strong>
								<?php echo metadata('item', array('Dublin Core', 'Title')); ?>
							</strong></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="posts-block col-lg-9 col-md-9 col-sm-8 col-xs-12">
					<div class="post-image">
						<?php if (get_theme_option('Item FileGallery') == 1): ?>
						<div class="element-text"><?php echo item_image_gallery(); ?></div>
						<?php else: ?>
						<div class="element-text"><?php echo files_for_item(); ?></div>
						<?php endif; ?>
					</div>
					<h3 class="title">Summary</h3>
					<div class="post-content top-pad">
						<p>
							There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.	
						</p>
					</div>
					<div id="comments">
						<?php include("show_comments.php"); ?>
					</div>
				</div>
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 sidebar">
					<?php include("show_sidebar.php"); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<? /*
<h1><?php echo metadata('item', array('Dublin Core', 'Title')); ?></h1>

<?php echo all_element_texts('item'); ?>

<!-- The following returns all of the files associated with an item. -->
<?php if (metadata('item', 'has files')): ?>
<div id="itemfiles" class="element">
    <h3><?php echo __('Files'); ?></h3>
    <?php if (get_theme_option('Item FileGallery') == 1): ?>
    <div class="element-text"><?php echo item_image_gallery(); ?></div>
    <?php else: ?>
    <div class="element-text"><?php echo files_for_item(); ?></div>
    <?php endif; ?>
</div>
<?php endif; ?>

<!-- If the item belongs to a collection, the following creates a link to that collection. -->
<?php if (metadata('item', 'Collection Name')): ?>
<div id="collection" class="element">
    <h3><?php echo __('Collection'); ?></h3>
    <div class="element-text"><p><?php echo link_to_collection_for_item(); ?></p></div>
</div>
<?php endif; ?>

<!-- The following prints a list of all tags associated with the item -->
<?php if (metadata('item', 'has tags')): ?>
<div id="item-tags" class="element">
    <h3><?php echo __('Tags'); ?></h3>
    <div class="element-text"><?php echo tag_string('item'); ?></div>
</div>
<?php endif;?>

<!-- The following prints a citation for this item. -->
<div id="item-citation" class="element">
    <h3><?php echo __('Citation'); ?></h3>
    <div class="element-text"><?php echo metadata('item', 'citation', array('no_escape' => true)); ?></div>
</div>

<?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

<nav>
<ul class="item-pagination navigation">
    <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
    <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
</ul>
</nav>
 */?>

<?php echo foot(); ?>
