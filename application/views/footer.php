<hr>
<nav class="navbar navbar-bottom container" >
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav text-uppercase">
      	<li><a href="/"><i class="fa fa-home"></i></a></li>
        <?php foreach ($categories as $key => $value) {?>
        	<li class=""><a href="<?php echo base_url('/danh-muc/'.$value['slug'])?>"> <?php echo $value['name']?> </a></li>
        <?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="footer text-center">
  <a class="footer-logo" href="/"><img src="<?php echo base_url('/assets/images/tin17-logo.png')?>"></a>
  <a class="footer-gotop" href="#"><img src="<?php echo base_url('/assets/images/up.png')?>"></a>
  <ul class="nav navbar-nav text-uppercase">
    <li><a href="#" onclick="setHomepage(); return false;">Đặt tin17.com làm trang chủ</a> </li>
    <li><a href="<?php echo base_url('/chi-tiet/Lien-he')?>">Liên hệ</a> </li>
    <li><a href="<?php echo base_url('/chi-tiet/Dieu-khoan')?>">Điều khoản sử dụng</a> </li>
  </ul>
  <hr style="width:50%">
  <ul class="nav navbar-nav share-social ">
    <li><a href="https://www.facebook.com/Moitrenmang"><img src="<?php echo base_url('/assets/images/fb.png')?>"></a> </li>
    <li><a href="https://plus.google.com/115597441987086057658"><img src="<?php echo base_url('/assets/images/gplus.png')?>"></a> </li>
    <li><a href="https://www.youtube.com/channel/UCdukbZkCyZGon25XoAtKRvg"><img src="<?php echo base_url('/assets/images/y.png')?>"></a> </li>
    <li><a href="https://twitter.com/moitrenmang"><img src="<?php echo base_url('/assets/images/tw.png')?>"></a> </li>
  </ul>
  <hr>
	<span class="text-uppercase pull-right">&copy; - Copyright by HD</span>
</div>

<script type="text/javascript">
  $('.footer-gotop').click(function(){
    $(document).scrollTop(0);
  });
  function setHomepage()
  {
   alert('Vui lòng bấm tổ hợp phím Ctrl+D (Mac: ⌘-D) để lưu trang.');
  }
</script>