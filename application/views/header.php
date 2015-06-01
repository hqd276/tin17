<div class="header" >
	<div class="logo hidden-xs">
		<div class="container">
			<div class="search-form col-sm-3 pull-right">
				<form action="<?php echo base_url().'search';?>" method="get" id="search-form">
		      		<input type="text" class="form-control t-search" name="txtsearch">
		        	<i class="fa fa-search"></i>
		      	</form>
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
	      <a class="navbar-brand visible-xs-block" href="#"><img src="<?php echo base_url('/assets/images/tin17-logo.png')?>"></a>
	    </div>

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
</div>

<script type="text/javascript">
	$(".t-search").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("#search-form").submit();
    }
	});
</script>