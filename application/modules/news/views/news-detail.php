<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="bg-white">
	<h3 class="text-uppercase"><strong><?php echo $item['title']?></strong> </h3>
	<hr>
	<a href="<?php echo base_url()?>" class="">Home</a> / <a href="<?php echo base_url().'danh-muc/'. $cat['slug']?>"><?php echo $cat['name']?></a>
	<hr>

	<div class="col-md-8 news-detail">
		<p class="description"><i><strong> <?php echo $item['description']?></strong></i></p>
		<hr>
		<img class="img-responsive col-md-12" src="<?php echo base_url().'uploads/news/'.$item['image']?>">		
		<hr>
        <div class="detail" id="detail"><?php echo $item['detail']?></div>
		<hr>
		<span class="glyphicon glyphicon-tags"></span> <?php echo $item['tags']?> 
		<!-- <span class="glyphicon glyphicon-pencil"></span><?php echo date("d/m/Y",$item['created'])?> --> 
		<hr>
		<div class="share-social">
			Thích và chia sẻ bài viết này :<br>
			<div class="row">
				<div class="col-xs-5">
					<div class="fb-share-button" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-layout="button_count"></div>
					<div class="fb-like" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="false"></div>
					<a class="twitter-share-button twitter-count-horizontal" href="<?php echo base_url().'chi-tiet/'.$item['slug']?>">Tweet</a>
				</div>
				<div class="col-xs-2">
					<img class="" style="max-width:100%; padding:0;" src="<?php echo base_url('/assets/images/tin17-logo.png')?>">
				</div>
				<div class="col-xs-5">
					<div class="fb-share-button" data-href="https://www.facebook.com/Moitrenmang" data-layout="button_count"></div>
					<div class="g-plus" data-action="share"></div>
				</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<hr>
		<div class="fb-comments" data-href="<?php echo base_url().'chi-tiet/'.$item['slug']?>" data-width="100%" data-numposts="5" data-colorscheme="light"></div>
		<hr>
		<!-- <img class="adv-mid-home" src="<?php echo base_url('/assets/images/qc1.png')?>"> -->
		<script async src=""//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js""></script>
		<!-- TIN 17 - AUTO -->
		<ins class=""adsbygoogle""
		     style=""display:block""
		     data-ad-client=""ca-pub-3860284943335442""
		     data-ad-slot=""5513624411""
		     data-ad-format=""auto""></ins>
		<script>
		(adsbygoogle = window.adsbygoogle || []).push({});
		</script>

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