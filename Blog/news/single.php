<?php
/**
 * ブログ記事詳細ページ
 * 呼出箇所：ブログ記事詳細ページ
 */
?>
<div class="container">
<section class="my-5 mx-md-3">
	<h4><?php $this->Blog->postTitle($post, false) ?></h4>
	<p><small><span class="text-muted mr-2">pub:<?php $this->Blog->postDate($post) ?></span></small></p>
	<div class="text-center mb-3">
		<?php $this->Blog->eyeCatch($post, array('link' => false, 'class' => 'rounded img-thumbnail', 'imgsize'=>'large')); ?>
	</div>
	<p>
		<?php echo $post['BlogPost']['detail']; ?>
	</p>
	<div class="row mt-5">
		<div class="col-md-6 text-center mb-3">
			<?php $this->Blog->prevLink($post, '', array('class'=>'a-dub')) ?>
		</div>
		<div class="col-md-6 text-center mb-3">
			<?php $this->Blog->nextLink($post, '', array('class'=>'a-dub')) ?>
		</div>
	</div>
</section>
</div>
