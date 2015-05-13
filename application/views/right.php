<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/right.css">
<div class="hot_news">
	<h4 class="text-center text-uppercase">Đừng bỏ lỡ</h4>
	<ul class="list-unstyled">
	<?php foreach ($hot_news as $key => $value) {?>
		<li>
			<a href="<?php echo base_url().'news/detail/'.$value['id']?>">
				<img class="pull-right" src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
				<?php echo $value['title']?>
				
			</a>
		</li>
	<?php }?>
	</ul>
	
</div>