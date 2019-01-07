<div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-laptop"></i> Masters</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="beranda.php">Home</a></li>
						<li><i class="fa fa-laptop"></i>Anggota Zawiyah</li>						  	
					</ol>
				</div>
			</div>        

			  	<div class="row">
                  	<div class="col-lg-12">
                      	<section class="panel">
                          	<header class="panel-heading">
							  Anggota Zawiyah
                          	</header>
                          		
                          
                    		<table class="table table-striped table-advance table-hover">
                        		<tbody>
                            		<tr>
                            	 		<th><i class="icon_number"></i> No</th>
                                 		<th><i class="icon_clock"></i> Nama</th>
                                 		<th><i class="icon_map_alt"></i> jenis kelamin</th>
                                         <th><i class="icon_mobile"></i> agama</th>
                                         <th><i class="icon_mobile"></i> tanggal lahir</th>
                                         <th><i class="icon_mobile"></i> telepon</th>
                                         <th><i class="icon_mobile"></i> email</th>
                                         <th><i class="icon_mobile"></i> alamat</th>
                            		</tr>
									<?php
										include "koneksi.php";
										$no=1;
										$sql=mysqli_query($koneksi, "SELECT * FROM pendaftar ORDER BY id DESC");
										while($data=mysqli_fetch_array($sql)){
							 		?>		  
									<tr>
										<td><?php echo $no++; ?></td>
										<td><?php echo $data['nama']; ?></td>
                                        <td><?php echo $data['jenis_kelamin']; ?></td>
                                        <td><?php echo $data['agama']; ?></td>
                                        <td><?php echo $data['tanggal_lahir']; ?></td>
                                        <td><?php echo $data['telepon']; ?></td>
                                        <td><?php echo $data['email']; ?></td>
                                        <td><?php echo $data['alamat']; ?></td>
										<td>
											
											<a onclick="return confirm('Apakah Anda Yakin Menghapus ?')" href="proses/proses_hapus_zawiyah.php?id=<?php echo $data['id']; ?>"><button class="btn btn-danger"><i class="fa fa-trash-o"></i></button></a>
										</td>								
                              		</tr>
	        						<?php } ?>
								</tbody>
                    		</table>
                      </section>
                  </div>
              </div>