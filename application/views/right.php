<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/right.css">
<div class="hot_news">
	<h4 class="text-center text-uppercase">Đừng bỏ lỡ</h4>
	<ul class="list-unstyled">
	<?php foreach ($hot_news as $key => $value) {?>
		<li>
			<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
				<img class="pull-right" src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
				<?php echo $value['title']?>
			</a>
		</li>
	<?php }?>
	</ul>
</div>

<div class="hot_news">
	<h4 class="text-center text-uppercase">Đọc nhiều nhất</h4>
	<ul class="list-unstyled">
	<?php foreach ($top_views_news as $key => $value) {?>
		<li>
			<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
				<img class="pull-right" src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
				<?php echo $value['title']?>
			</a>
		</li>
	<?php }?>
	</ul>
</div>

<!-- <img class="adv-right" src="<?php echo base_url('/assets/images/qc2.jpg')?>"> -->
<script async src=""//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js""></script>
<!-- TIN  17 300X600 -->
<ins class=""adsbygoogle""
     style=""display:inline-block;width:300px;height:600px""
     data-ad-client=""ca-pub-3860284943335442""
     data-ad-slot=""8376931210""></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
