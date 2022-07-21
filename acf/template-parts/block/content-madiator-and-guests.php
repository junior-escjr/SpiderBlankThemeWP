<?php
/**
 * Block Name: Mediator and Guests
 *
 * This is the template that displays the testimonial block.
 */

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div class="content__flex">
	<p class="fs-16 mrg-b-22 mrg-r-43">
		<span class="ff-primary fs-22 fw-semibold txt-upper color-dark-150">Convidados:</span><br />
		<?php the_field('block-convidados'); ?>
	</p>
	<p class="fs-16">
		<span class="ff-primary fs-22 fw-semibold txt-upper color-dark-150">Mediador:</span><br />
		<?php the_field('block-mediador'); ?>
	</p>
</div>