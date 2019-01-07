			<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="beranda.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Berita</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Berita
                          	</header>
                          		<a href="beranda.php?page=input_berita"><button class="btn btn-primary">Tambah</button></a><br>
                          
                    		<table class="table table-striped table-advance table-hover">
                        		<tbody>
                            		<tr>
                            	 		<th><i class="icon_profile"></i> No</th>
                                 		<th><i class="icon_clock"></i> Tanggal</th>
                                 		<th><i class="icon_map_alt"></i> Judul</th>
                                 		<th><i class="icon_book_alt"></i> Isi</th>
                                 		<th><i class="icon_tag"></i> Tag</th>
                                 		<th><i class="icon_camera"></i> Foto</th>
                                 		<th><i class="icon_mobile"></i> Action</th>
                            		</tr>
									<?php
										include "koneksi.php";
										$no=1;
										$sql=mysqli_query($koneksi, "SELECT * FROM berita ORDER BY id_berita DESC");
										while($data=mysqli_fetch_array($sql)){
							 		?>		  
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['tanggal']; ?></td>
										<td><?php echo $data['judul']; ?></td>
										<td><?php echo $data['isi']; ?></td>
										<td><?php echo $data['tag']; ?></td>
										<td><img src="img/<?php echo $data['foto']; ?>" width="150px" height="100px"></td>
										<td>
											<a href="edit.php?id=<?php echo $data['id_berita']; ?>"><button class="btn btn-primary"><i class="fa fa-edit"></i></button></a>
											<a onclick="return confirm('Apakah Anda Yakin Menghapus ?')" href="proses/proses_hapus.php?id=<?php echo $data['id_berita']; ?>"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
										</td>								
                              		</tr>
	        						<?php } ?>
								</tbody>
                    		</table>
                      </section>
                  </div>
              </div>