
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Download</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Input Download
                          	</header>
                          		
                            <FORM ACTION="proses/proses_tambah_download.php" enctype="multipart/form-data" METHOD="POST">
								<table cellpadding="0" cellspacing="0" border="0" width="90%">
									<tr>
										<td>Tanggal</td>
										<td><input type="date" name="tanggal"></td>
									</tr>
									<tr>
										<td width="200">Judul</td>
										<td><input type="text" name="judul"size="30"></td>
									</tr>
									<tr>
										<td>Kategori</td>
										<td>
											<input type="text" name="ket"size="30">
										</td>
									</tr>
									<tr>
										<td>File</td>
										<td><input type="file" name="file"></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><br>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Materi">&nbsp;
											<a href="beranda.php?page=download"><input type="button" name="Cancel" value="Cancel" onClick="batal()"></a>
										</td>
									</tr>
								</table>
							</FORM>
                        </section>
                    </div>
                </div>