<?php
/**
 * フッター
 *
 * BcBaserHelper::footer() で呼び出す
 * （例）<?php $this->BcBaser->footer() ?>
 */
$sharer_description = $this->BcBaser->getTitle() . '｜' . $this->BcBaser->getDescription();
$uri = $this->BcBaser->getUri($this->BcBaser->getHere());
$sharer_url = urlencode($uri);
?>
<footer class="mt-5 container">
	<hr>
	<div class="row">
		<div class="col-md-6 text-md-right mt-3">
			<a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-facebook fa-2x mx-1 facebook-dub"></i></a>
			<a href="https://twitter.com/share?url=<?php echo $sharer_url ?>&text=<?php echo $sharer_description ?>" target="_blank"><i class="fab fa-twitter fa-2x mx-1 twitter-dub"></i></a>
			<a href="http://b.hatena.ne.jp/entry/<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-hatena fa-2x mx-1 hatena-dub"></i></a>
			<a href="http://getpocket.com/edit?url=<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-get-pocket fa-2x mx-1 pocket-dub"></i></a>
			<a href="http://line.me/R/msg/text/?<?php echo $sharer_url ?>" target="_blank"><i class="fab fa-line fa-2x mx-1 line-dub"></i></a>
		</div>
		<div class="col-md-6 text-md-left mt-3">
			<p class="text-muted">
				<small>
					&#169; <?php echo date('Y') ?> 
					<a href='<?php echo $this->BcBaser->getUri("/") ?>' class="a-dub"><?php echo $this->BcBaser->getTitle() ?></a>
				</small>
			</p>
		</div>
	</div>
	<div class="text-center mt-3">
		<p>
			<a href="http://basercms.net/" target="_blank"><?php $this->BcBaser->img('baser.power.gif') ?></a>
			<a href="http://cakephp.jp/" target="_blank"><?php $this->BcBaser->img('cake.power.gif') ?></a>
			<a href="http://dubmilli.com/" target="_blank"><?php $this->BcBaser->img('dubmilli.power.gif') ?></a>
		</p>
	</div>
</footer>
