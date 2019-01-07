<?php 
	include 'mysqli_koneksi.php';
	$id=$_GET['id'];
	$sql = mysqli_query($con,"SELECT * FROM kajian ORDER BY id_kajian");
	$hasil = mysqli_fetch_array($sql);
	$judul  = stripslashes($hasil['judul_kajian']);  
	$hl = stripslashes($hasil['tgl']);
	$id_kajian = stripslashes($hasil['id_kajian']);
	$tag = stripcslashes($hasil['kategori']);
	$pembuat = stripcslashes($hasil['pembuat']);
	$isi = stripcslashes($hasil['isi_kajian']);
 ?>

<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Standard Format Post - Abstract</title>
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
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					<li class="current"><a href="index.php" title="">Home</a></li>
					<li><a href="about.php" title="">Tentang</a></li>							
					<li class="has-children"><a href="berita.php" title="">Berita</a>
						<ul class="sub-menu">
			            <li><a href="berita_nasional.php">Nasional</a></li>
			            <li><a href="berita_daerah.php">Daerah</a></li>
			            <li><a href="berita_internasional.php">Internasional</a></li>
			         	</ul>
					</li>
					<li><a href="video.php" title="">Video</a></li>
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
   

   <!-- content
   ================================================== -->
   <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
							<img src="images/thumbs/masjid.jpg"> 
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title"><?php echo $judul;?></h1>	

						<ul class="entry-meta">
							<li class="date"><?php echo $hl;?></li>						
							<li class="cat"><?php echo $tag;?></li>				
						</ul>						

						<p class="lead"><?php echo $isi;?></p>

		  			   <div class="author-profile">
		  			   	<img src="images/avatars/user-05.jpg" alt="">

		  			   	<div class="about">
		  			   		<h2>Pembuat</h2>
		  			   		<h4><a href="#"><?php echo $pembuat;?></a></h4>
		  			   	</div>
		  			   </div><!-- end author-profile -->					

					</div> <!-- end entry-primary -->	

				</article>
   		

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		<div class="comments-wrap">
			<div id="comments" class="row">
				<div class="col-full">

               <h3>5 Comments</h3>

               <!-- commentlist -->
            <ol class="commentlist">

                  <li class="depth-1">

                     <div class="avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                     </div>

                     <div class="comment-content">

	                     <div class="comment-info">
	                        <cite>Itachi Uchiha</cite>

	                        <div class="comment-meta">
	                           <time class="comment-time" datetime="2014-07-12T23:05">Jul 12, 2014 @ 23:05</time>
	                           <span class="sep">/</span><a class="reply" href="#">Reply</a>
	                        </div>
	                     </div>

	                     <div class="comment-text">
	                        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
	                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
	                     </div>

	                  </div>

                  </li>
            </ol> <!-- Commentlist End -->					

               <!-- respond -->
               <div class="respond">

               	<h3>Leave a Comment</h3>

                  <form name="contactForm" id="contactForm" method="post" action="input_comment.php">
  					   <fieldset>

                     <div class="form-field">
  						      <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                     </div>

                     <div class="form-field">
  						      <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website"  value="">
                     </div>

                     <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message" ></textarea>
                     </div>

                     <button type="submit" class="submit button-primary">Submit</button>

  					   </fieldset>
  				      </form> <!-- Form End -->

               </div> <!-- Respond End -->

         	</div> <!-- end col-full -->
         </div> <!-- end row comments -->
		</div> <!-- end comments-wrap -->

   </section> <!-- end content -->


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
   <script src="js/main.js"></script>

</body>

</html>