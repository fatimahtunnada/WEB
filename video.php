<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>KampungSholawat</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href="css/main.css">
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.php">Author</a>
	         <h1>Video</h1>
	    </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li><a href="index.php" title="">Home</a></li>
					<li><a href="about.php" title="">Tentang</a></li>							
					<li class="has-children"><a href="berita.php" title="">Berita</a>
						<ul class="sub-menu">
			            <li><a href="berita_nasional.php">Nasional</a></li>
			            <li><a href="berita_daerah.php">Daerah</a></li>
			            <li><a href="berita_internasional.php">Internasional</a></li>
			         	</ul>
					</li>
					<li class="current"><a href="video.php" title="">Video</a></li>
					<li><a href="download.php" title="">Download</a></li>
					<li><a href="zawiyah.php" title="">Zawiyah</a></li>
					<li><a href="jadwal.php" title="">Jadwal</a></li>	
					<li><a href="contact.php" title="">Kontak</a></li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			<div class="search-wrap">
				
				<form role="search" method="get" class="search-form" action="#">
					<label>
						<span class="hide-content">Search for:</span>
						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
					</label>
					<input type="submit" class="search-submit" value="Search">
				</form>

				<a href="#" id="close-search" class="close-btn">Close</a>

			</div> <!-- end search wrap -->	

			<div class="triggers">
				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
				<a class="menu-toggle" href="#"><span>Menu</span></a>
			</div> <!-- end triggers -->	
   		
   	</div>     		
   	
   </header> <!-- end header -->


   <!-- masonry
   ================================================== -->
   <section id="bricks">

   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">

         	<div class="grid-sizer"></div>
				
			<article class="brick entry format-standard animate-this">
			<table class="table table-striped table-advance table-hover">
           		                <tbody>
                            		<tr>
                            	 		<th width="8%"><i class="icon_profile"></i> No</th>
                                 		<th width="20%"><i class="icon_clock"></i> Judul</th>
                                 		<th width="15%"><i class="icon_map_alt"></i> Link</th>
                                 		
                            		</tr>
									<?php
										include "mysqli_koneksi.php";
										$no=1;
										$sql=mysqli_query($con, "SELECT * FROM video ORDER BY id DESC");
										while($data=mysqli_fetch_array($sql)){
							 		?>		  
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['judul']; ?></td>
										<td><a href="<?php echo $data['link']; ?>"><input type="button" name="link" value="Link"></td>
                              		</tr>
	        						<?php } ?>
								</tbody>
                    		</table>
			 </article> <!-- end -->
			 		
         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->
   </section> <!-- end bricks -->

   
   <!-- footer
   ================================================== -->
   <footer>

   	<div class="footer-main">

   		<div class="row">  

	      	<div class="col-four tab-full mob-full footer-info">            

	            <h4>Tentang Kampung Sholawat</h4>

	            	<p>
		          		<!-- Diisi ya nad-->
		        	</p>

		      </div> <!-- end footer-info -->

	      	<div class="col-two tab-1-3 mob-1-2 site-links">

	      		<h4>Site Links</h4>

	      		<ul>
	      			<li><a href="contact.php">Kontak</a></li>
				</ul>

	      	</div> <!-- end site-links -->  

	      	<div class="col-two tab-1-3 mob-1-2 social-links">

	      		<h4>Social</h4>

	      		<ul>
	      			<li><a href="#">Twitter</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="#">Instagram</a></li>
				</ul>
	      	           	
	      	</div> <!-- end social links --> 

	      	<div class="col-four tab-1-3 mob-full footer-subscribe">

	      		<h4>Tinggalkan Pesan</h4>

	      		<div class="subscribe-form">
	      	
	      			<form id="mc-form" action="input_bt.php" class="group" novalidate="true">

						<input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Email" required="">
			   			<input type="submit" name="subscribe" >
		   				<label for="mc-email" class="subscribe-message"></label>
			
					</form>

	      		</div>	      		
	      	           	
	      	</div> <!-- end subscribe -->         

	      </div> <!-- end row -->

   	</div> <!-- end footer-main -->

      <div class="footer-bottom">
      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Fatimah Tunada</span> 
		         	<span>Design by Nada</span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> 
      </div> <!-- end footer-bottom -->  

   </footer>  

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>