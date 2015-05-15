<hr>
<nav class="navbar navbar-bottom container" >
  <div class="container-fluid">
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav text-uppercase">
      	<li><a href="/"><i class="fa fa-home"></i></a></li>
        <?php foreach ($categories as $key => $value) {?>
        	<li class=""><a href="/news/list/<?php echo $value['type'].'/'.$value['id']?>"> <?php echo $value['name']?> </a></li>
        <?php }?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="footer text-center" data-sr>
	<h4 class="text-uppercase">&copy; - Copyright by HD</h4>
</div>