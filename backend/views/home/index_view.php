<?php 
	use backend\models\ViewElektabilitas;
?>

<div id="chart">
	
</div>

<table class="table table-striped tabled-bordered table-hover">
	<tr>
		<th>NO</th><th>Kecamatan</th><th>Kelompok Pemilih</th><th>Sudah Dikuasai</th><th>Dikuasai Lawan</th><th>Netral</th><th>Indikator</th>
	</tr>
	<?php 
		if(count($viewEl)>0)
		{
			$no=1;
			for($i=0;$i<count($viewEl);$i++)
			{
				if($i==0)
				{
					if($viewEl[$i]["kecamatanid"]==$viewEl[$i+1]["kecamatanid"])
					{
				?>				
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $viewEl[$i]["kecamatan"] ?></td>
							<td><?php echo $viewEl[$i]["kelompokpemilih"] ?></td>
							<td><?php 
									$sudahDikuasai = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],1);
									
									echo $sudahDikuasai;
								?>
							</td>
							<td><?php 
									$dikuasaiLawan = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],2);
									
									echo $dikuasaiLawan;
								?>
							</td>
							<td><?php 
									$netral = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],3);
									
									echo $netral;
								?>
							</td>
						</tr>
				<?php
					}
					else
					{
				?>				
						<tr style="background-color:#ccc;">
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
				<?php		
					}
				}
				else
				{
					if($viewEl[$i]["kecamatanid"]!=$viewEl[$i-1]["kecamatanid"])
					{
						//$no=$no+1;
				?>
						<tr style="background-color:#ccc;">
							<td></td>
							<td></td>
							<td><b>Total</b></td>
							<td><?php
									echo ViewElektabilitas::getTotalPenguasaanPemilih($viewEl[$i-1]["kecamatanid"],1);
								?>
							</td>
							<td><?php
									echo ViewElektabilitas::getTotalPenguasaanPemilih($viewEl[$i-1]["kecamatanid"],2);
								?>
							</td>
							<td>
								<?php
									echo ViewElektabilitas::getTotalPenguasaanPemilih($viewEl[$i-1]["kecamatanid"],3);
								?>
							</td>
							<td></td>
						</tr>
				
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $viewEl[$i]["kecamatan"] ?></td>
							<td><?php echo $viewEl[$i]["kelompokpemilih"] ?></td>
							<td><?php 
									$sudahDikuasai = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],1);
									
									echo $sudahDikuasai;
								?>
							</td>
							<td><?php 
									$dikuasaiLawan = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],2);
									
									echo $dikuasaiLawan;
								?>
							</td>
							<td><?php 
									$netral = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],3);
									
									echo $netral;
								?>
							</td>
						</tr>											
				<?php
					}
					else
					{
						$no=$no-1;
				?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $viewEl[$i]["kecamatan"] ?></td>
							<td><?php echo $viewEl[$i]["kelompokpemilih"] ?></td>
							<td><?php 
									$sudahDikuasai = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],1);
									
									echo $sudahDikuasai;
								?>
							</td>
							<td><?php 
									$dikuasaiLawan = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],2);
									
									echo $dikuasaiLawan;
								?>
							</td>
							<td><?php 
									$netral = ViewElektabilitas::penguasaanPemilih($viewEl[$i]["kecamatanid"],$viewEl[$i]["jenispenguasaanpemilihid"],3);
									
									echo $netral;
								?>
							</td>
						</tr>
												
										
				<?php
					}
				?>
					
				<?php	
				}
			?>								
	<?php
				$no++;				
			}
		}
	?>
		
</table>

<?php //print("<pre>".print_r($viewEl,true)."</pre>"); ?>