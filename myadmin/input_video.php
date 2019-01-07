
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Video</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Video
                          	</header>
                          		
                            <FORM ACTION="proses/proses_tambah_video.php" METHOD="POST">
								<table cellpadding="0" cellspacing="0" border="0" width="90%">
                                    <tr>
										<td>Judul</td>
										<td><input type="text" name="judul"></td>
									</tr>
                                    <tr>
										<td>Link</td>
										<td><input type="text" name="link"></td>
									</tr>
									
									
		
									<tr>
										<td>&nbsp;</td>
										<td><br>&nbsp;&nbsp;<input type="submit" name="Input" value="input">&nbsp;
											<a href="beranda.php?page=video"><input type="button" name="Cancel" value="Cancel" onClick="batal()"></a>
										</td>
									</tr>
								</table>
							</FORM>
                        </section>
                    </div>
                </div>