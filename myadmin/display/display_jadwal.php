<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="beranda.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Jadwal</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
                              	Jadwal
                          	</header>
                          		<a href="beranda.php?page=input_jadwal"><button class="btn btn-primary">Tambah</button></a><br>
                          
                    		<table class="table table-striped table-advance table-hover">
                        		<tbody>
                            		<tr>
                            	 		<th><i class="icon_number"></i> No</th>
                                 		<th><i class="icon_clock"></i> hari</th>
                                 		<th><i class="icon_map_alt"></i> tanggal</th>
                                 		<th><i class="icon_profile"></i> waktu</th>
                                 		<th><i class="icon_tag"></i> tempat</th>
                                 		<th><i class="icon_book_alt"></i> kegiatan</th>
                                 		<th><i class="icon_mobile"></i> Action</th>
                            		</tr>
									<?php
										include "koneksi.php";
										$no=1;
										$sql=mysqli_query($koneksi, "SELECT * FROM jadwal ORDER BY id DESC");
										while($data=mysqli_fetch_array($sql)){
							 		?>		  
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['hari']; ?></td>
										<td><?php echo $data['tanggal']; ?></td>
										<td><?php echo $data['waktu']; ?></td>
										<td><?php echo $data['tempat']; ?></td>
										<td><?php echo $data['kegiatan']; ?></td>
										<td>
											
											<a onclick="return confirm('Apakah Anda Yakin Menghapus ?')" href="proses/proses_hapus_jadwal.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
										</td>								
                              		</tr>
	        						<?php } ?>
								</tbody>
                    		</table>
                      </section>
                  </div>
              </div>