<hr>
<nav class="navbar navbar-bottom container" >
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav text-uppercase">
      	<li><a href="/"><i class="fa fa-home"></i></a></li>
        <?php foreach ($categories as $key => $value) {?>
        	<li class=""><a href="/<?php echo $value['slug']?>"> <?php echo $value['name']?> </a></li>
        <?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="footer text-center" data-sr>
  <ul class="nav navbar-nav text-uppercase">
    <li><a href="">Đặt tin17.com làm trang chủ</a> </li>
    <li><a href="">Liên hệ</a> </li>
    <li><a href="">Điều khoản sử dụng</a> </li>
  </ul>
  <div class="clearfix"></div>
  <ul class="nav navbar-nav ">
    <li><a href=""><img src="<?php echo base_url('/assets/images/contact-fb.png')?>"></a> </li>
    <li><a href=""><img src="<?php echo base_url('/assets/images/contact-address.png')?>"></a> </li>
    <li><a href=""><img src="<?php echo base_url('/assets/images/contact-mail.png')?>"></a> </li>
  </ul>
  <div class="clearfix"></div>
	<span class="text-uppercase pull-right">&copy; - Copyright by HD</span>
</div>