<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/home.css">
<div class="">
	<div class="home-hotnews">
		<div class="col-sm-6 home-item big">
			<a href="<?php echo base_url().'chi-tiet/'.$home_news_big['slug']?>">
				<img src="<?php echo base_url().'uploads/news/'.$home_news_big['image']?>">
				<div class="description"><?php echo $home_news_big['title']?></div>
			</a>
		</div>
		<div class="col-sm-6 no-padding">
			<?php foreach ($home_news as $key => $value) {?>
				<div class="col-sm-6 home-item">
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
						<img src="<?php echo base_url().'uploads/news/'.$value['image']?>">
						<div class="description"><?php echo $value['title']?></div>
					</a>
				</div>
			<?php }?>
		</div>
	</div>
	<div class="clearfix"></div>
	<div class="home-newnews">
		<div class="col-sm-6 home-item">
			<div class="col-sm-1 title-hoz text-uppercase">
				<span >Tin mới</span>
				
			</div>
			<div class="col-sm-11 no-padding">
				<?php foreach ($new_news_img as $key => $value) {?>
					<div class="col-sm-6 home-item">
						<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
							<img src="<?php echo base_url().'uploads/news/'.$value['image']?>">
							<div class="description"><?php echo $value['title']?></div>
						</a>
					</div>
				<?php }?>
			</div>
		</div>
		<div class="col-sm-6 text-left no-padding">
			<?php foreach ($new_news as $key => $value) {?>
				<div class="col-sm-6 home-text-item">
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
						<?php echo $value['title']?>
					</a>
				</div>
			<?php }?>
		</div>
	</div>

	<div class="clearfix"></div>
	<div class="group-news row">
		<div class="col-sm-9">
			<img class="adv-mid-home" src="<?php echo base_url('/assets/images/qc1.png')?>">
			<div class="row">
				<?php foreach ($categories as $key => $value) {
					if($value['list_news']) {?>				
					<div class="col-sm-4 group-news-item">
						<div class="group-title"><a href="<?php echo base_url().'danh-muc/'.$value['slug']?>"><?php echo $value['name'] ?></a> </div>	
						<?php if($value['list_news'][0]){?>
						<a class="first-item" href="<?php echo base_url().'chi-tiet/'.$value['list_news'][0]['slug']?>">
							<img src="<?php echo base_url().'uploads/news/thumbs/'.$value['list_news'][0]['image']?>">
							<span class="title"><strong><?php echo $value['list_news'][0]['title']?></strong></span>
							<p class="description"><?php echo split_char($value['list_news'][0]['description'],70)."..."?></p>
						</a>
						<?php unset ($value['list_news'][0]);}?>

						<ul class="list-unstyled other">
							<?php if ($value['list_news']) {
								foreach ($value['list_news'] as $k => $v) {?>
								<li><a href="<?php echo base_url().'chi-tiet/'.$v['slug']?>"><?php echo $v['title']?></a></li>
							<?php }
							}?>
						</ul>
					</div>
				<?php }
				}?>
			</div>
			<div class="video-block">
				<div class="title"> Tin tức Video</div>
				<div class="row">
					<?php foreach ($video_news as $key => $value) {?>
						<div class="col-sm-4">
							<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>">
								<div class="description"><?php echo split_char($value['title'],35)."..."?></div>
								<img src="<?php echo base_url().'uploads/news/'.$value['image']?>">
							</a>
						</div>
					<?php }?>
				</div>
			</div>
		</div>
		<div class="col-sm-3">
			<?php echo $template['partials']['right']; ?>
		</div>
	</div>
</div>

<div class="clearfix"></div>