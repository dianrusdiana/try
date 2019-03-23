<!DOCTYPE html>
<html lang="en" id="home">
   <head>
   	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Portfolio</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="public/css/app.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="assets/less.style.less">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


 <div class="container">
   <div class="header">
     <h1>My Website</h1>
   </div>
 </div>






  <!-- jumbotron -->
	<div class="jumbotron text-center">
	  <img src="assets/img/profile1.png" class="img-circle">
	  <h2>Dian Rusdiana</h2>
	  <p>Accounting | Web Developer</p>
	</div>
  <!-- akhir jumbotron -->


  <!-- navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  	<div class="container-fluid">
  		<div class="navbar-header">
  			<a href="#home" class="navbar-brand page-scroll">Dian Rusdiana</a>
  			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      		</button>
  		</div>	
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#about" class="page-scroll">About</a></li>
				<li><a href="#portfolio" class="page-scroll">Portfolio</a></li>
				<li><a href="#contact" class="page-scroll">Contact</a></li>
			</ul>
		</div>
  	</div>
  </nav>
  <!-- akhir navbar -->


  <!-- carousel -->
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
				
		<div id="my-slider" class="carousel slide" data-ride="carousel">

		  <!-- indikator dot nav -->
		  <ol class="carousel-indicators">
			<li data-target="#my-slider" data-slide-to="0" class="active"></li>
			<li data-target="#my-slider" data-slide-to="1"></li>
		  </ol>
					
		  <!-- wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
			<div class="item active">
			  <img src="assets/img/1.png"/>
			  <div class="carousel-caption">
				<h1>Desktop 1</h1>
			  </div>
			</div>
			<div class="item">
			  <img src="assets/img/3.png"/>
			  <div class="carousel-caption">
				<h1>Desktop</h1>
			  </div>
			</div>

					</div>

					<!-- controls or next and pre buttons -->
					<a class="left carousel-control" href="#my-slider" roll="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" arial-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#my-slider" roll="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" arial-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- akhor carousel -->
  




  <!-- about -->
  <section class="about" id="about">
  	<div class="container">
  		<div class="row text-center">
  			<div class="col-sm-12">
  				<h2>About</h2>
  				<hr>
  			</div>

  			<div class="row">
  				<div class="col-sm-5 col-sm-offset-1">
  					<p class="pkiri">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam commodi ad quos repellendus, eius facere non dicta itaque deleniti omnis sequi illum reprehenderit quo inventore mollitia? Possimus velit, incidunt consectetur!</p>
  				</div>
  				<div class="col-sm-5">
  					<p class="pkanan">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae ex, consequuntur amet. Expedita, accusamus, aut. Consequatur reiciendis fuga, nam odio similique, dolore mollitia a minus, eius excepturi laudantium possimus error?</p>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- akhir about -->



  <!-- portfolio -->
  <section class="portfolio" id="portfolio">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
  				<h2 class="text-center">Portfolio</h2>
  				<hr>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/1.png">
  				</a>
  			</div>
  			<div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/2.png">
  				</a>
  			</div><div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/3.png">
  				</a>
  			</div>	
  		</div>
  		<div class="row">
  			<div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/4.png">
  				</a>
  			</div>
  			<div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/5.png">
  				</a>
  			</div><div class="col-sm-4">
  				<a href="#" class="thumbnail">
  					<img src="assets/img/6.png">
  				</a>
  			</div>	
  		</div>
  	</div>
  </section>
  <!-- akhir portfolio -->

  <!-- contact -->
  <section class="contact" id="contact">
  	<div class="container">
  		<div class="row">
  			<div class="col-sm-12">
  				<h2 class="text-center">Contact</h2>
  				<hr>
  			</div>
  		</div>

  		<div class="row">
  			<div class="col-sm-8 col-sm-offset-2">
  				<div class="form-group">
  					<form>
  						<div class="form-group">
	  						<label for="nama">Name</label>
	  						<input type="text" class="form-control" id="nama" placeholder="masukan nama">
  						</div>
  						<div class="form-group">
	  						<label for="email">Email</label>
	  						<input type="email" class="form-control" id="email" placeholder="masukan email">
  						</div>
  						<div class="form-group">
	  						<label for="telepon">No Telepon</label>
	  						<input type="tel" class="form-control" id="telepon" placeholder="masukan no telepon">
	  					</div>
						<select class="form-control">
							<option>-- Pilih Kategori --</option>
							<option>Web Developer</option>
							<option>Web Designer</option>
						</select>
						<div class="form-group">
							<label for="pesan"></label>
							<textarea rows="10" class="form-control" placeholder="masukan pesan"></textarea>
						</div>
						<button type="sumbit" class="btn btn-primary">Kirim Pesan</button>
  					</form>
  				</div>
  			</div>
  		</div>
  	</div>
  </section>
  <!-- akhir contact -->




  <!-- footer -->
  <footer>
    <div class="container text-center">
      <div class="row">
        <div class="col-sm-12">
          <p>&copy; copyright 2019 | built with <i class="glyphicon glyphicon-heart"></i> by <a href="">Ulangan.id</a></p>
        </div>
      </div>
      <div class="col-sm-12">
        <a href="" class="btn btn-danger"><i class="glyphicon glyphicon-play"></i>Subscribe to YouTube</a>
      </div>
    </div>
  </footer>
  <!-- akhir footer -->



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="jquery-3.3.1.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>