<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="bg-white">
	<h2 class="text-uppercase"><?php echo $item['title']?></h2>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'news/list/'.$cat['type'].'/'. $cat['id']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="col-md-8 news-detail">
		<p class="description"><i><?php echo $item['description']?></i></p>
		<hr>
		<img class="img-responsive col-md-12" src="<?php echo base_url().'uploads/news/'.$item['image']?>">		
		<hr>
        <div class="tab-pane active" id="detail"><?php echo $item['detail']?></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tag']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<div class="share-social">
			Thích và chia sẻ bài viết này :<br>
			<div class="fb-share-button" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-layout="button_count"></div>
			<div class="fb-like" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
		</div>
		<hr>
		<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
		<hr>

		<ul class="list-unstyled other-news">
		<?php if (count($other_news)>0) {
			foreach ($other_news as $key => $value) {?>
				<li class="col-sm-6">
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>"> 
						<img class="pull-left" src="<?php echo base_url().'uploads/news/thumbs/'.$value['image']?>">
						<?php echo $value['title']?>
					</a>
				</li>
		<?php	}
		}?>
		</ul>
	</div>
	<div class="col-md-4">
		<?php echo $template['partials']['right']; ?>
	</div>
	<div class="clearfix"></div>
</div>