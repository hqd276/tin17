<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/news.css">
<div class="news-list">
	<span class="title text-uppercase">Kết quả tìm kiếm</span>
	<hr>

	<div class="news-form container">
	<?php if(count($list_news)>0) { ?>
		<?php foreach ($list_news as $key => $value) {?>
			<div class="item text-left">
				<div class="col-md-4">
					<img class="img-responsive" src="<?php echo base_url().'uploads/news/'.$value['image']?>">
				</div>
				<div class="col-md-8">
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>"><h4 class="text-uppercase"><?php echo $value['title']?></h4></a>
					<p><?php echo split_char($value['description'],150,1)." ..."?></p>
					<a href="<?php echo base_url().'chi-tiet/'.$value['slug']?>" class="text-uppercase more pull-right">More</a>
				</div>
				
			</div>
		<?php }
	}else{?>
		<h3> Không tìm thấy kết quả nào</h3>
	<?php }?>
	</div>
	<div class="clearfix"></div>
</div>