<?php
/**
 * Block Name: Slideshow
 *
 * This is the template that displays the testimonial block.
 */

// get image field (array)
$repeatSlide = get_field('repeat_slideshow');

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div style="margin: 0 -10px">
	<div class="gutenberg-slide<?php echo $align_class; ?>">
		<?php foreach( $repeatSlide as $l) : ?>
			<figure>
				<img src="<?php echo $l['image'];?>" alt="<?php the_title();?>">
			</figure>
		<?php endforeach?>
	</div>
</div>