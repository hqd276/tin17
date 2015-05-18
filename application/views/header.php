<div class="header" >
	<div class="logo">
		<div class="container">
			<div class="search-form col-sm-3 pull-right">
				<input class="search form-control" name="search" value="" placeholder="Từ khóa cần tìm">
				<i class="fa fa-search"></i>
			</div>
		</div>
	</div>
	<nav class="navbar navbar-top container" >
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>

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
</div>