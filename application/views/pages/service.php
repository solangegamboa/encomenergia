<main>
	<div class="container">
		<hr>
		<div class="row">
			<section class="col-md-8 section">
				<?php if(isset($title) && !empty($title)):?>
					<h2 class="section-title section-title-services mt-n4"><?php echo $title;?></h2>
				<?php endif;?>
				<?php if(isset($description) && !empty($description)):?>
					<h3><?php echo $description;?></h3>
				<?php endif;?>
				<?php if(isset($content) && !empty($content)):?>
					<?php echo $content;?>
				<?php endif;?>
			</section>
			<section class="col-md-4">
				<ul>
					<li><a href="">teste</a></li>
				</ul>
			</section>
		</div>
		<hr>
	</div>


</main>
