<?php
/**
 * パーツ用ブログ記事一覧
 *
 * BcBaserHelper::blogPosts( コンテンツ名, 件数 ) で呼び出す
 * （例）<?php $this->BcBaser->blogPosts('news', 3) ?>
 */
?>

<div class="mx-md-5">
<?php if ($posts): ?>
	<?php foreach ($posts as $key => $post): ?>
	<h4><?php $this->Blog->postTitle($post, false) ?></h4>
	<p><small><span class="text-muted">pub:<?php $this->Blog->postDate($post) ?></span></small></p>
	<p>
		<?php echo $post['BlogPost']['detail']; ?>
	</p>
	<?php endforeach; ?>
<?php else: ?>
	<p>no data.</p>
<?php endif ?>
</div>