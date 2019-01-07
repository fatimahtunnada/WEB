
		<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Input Kajian</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Berita
                          	</header>
                          		
                            <FORM ACTION="proses/proses_tambah_kajian.php" METHOD="POST">
								<table cellpadding="0" cellspacing="0" border="0" width="90%">
									<tr>
										<td>Tanggal</td>
										<td><input type="date" name="tgl"></td>
									</tr>
									<tr>
										<td width="200">Judul Kajian</td>
										<td><input type="text" name="judul_kajian" size="30"></td>
									</tr>
									<tr>
										<td width="200">Pembuat</td>
										<td><input type="text" name="pembuat"size="30"></td>
									</tr>
									<tr>
										<td width="200">Kategori</td>
										<td><input type="text" name="kategori"size="30"></td>
									</tr>
									<tr>
										<td>Foto</td>
										<td><input type="file" name="foto"></td>
									</tr>
									<tr>
										<td>Isi Kajian</td>
										<td>
											<div class="col-sm-20">
     										<textarea class="form-control ckeditor" name="isi_kajian" rows="6"></textarea>
											</div>
										</td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><br>&nbsp;&nbsp;<input type="submit" name="Input" value="Input Kajian">&nbsp;
											<a href="beranda.php?page=kajian"><input type="button" name="Cancel" value="Cancel" onClick="batal()"></a>
										</td>
									</tr>
								</table>
							</FORM>
                        </section>
                    </div>
                </div>