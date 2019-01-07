
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Berita</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Berita
                          	</header>
                          		
                            <FORM ACTION="proses/proses_tambah.php" enctype="multipart/form-data" METHOD="POST">
								<table cellpadding="0" cellspacing="0" border="0" width="90%">
									<tr>
										<td>Tanggal</td>
										<td><input type="date" name="tanggal"></td>
									</tr>
									<tr>
										<td width="200">Judul Berita</td>
										<td><input type="text" name="judul"size="30"></td>
									</tr>
									<tr>
										<td>Isi Berita</td>
										<td>
											<div class="col-sm-20">
     										<textarea class="form-control ckeditor" name="isi" rows="6"></textarea>
											</div>
										</td>
									</tr>
									<tr>
										<td width="200">Tag</td>
										<td><input type="text" name="tag"size="30"></td>
									</tr>
									<tr>
										<td>Foto</td>
										<td><input type="file" name="foto"></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><br>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Berita">&nbsp;
											<a href="beranda.php?page=berita"><input type="button" name="Cancel" value="Cancel" onClick="batal()"></a>
										</td>
									</tr>
								</table>
							</FORM>
                        </section>
                    </div>
                </div>