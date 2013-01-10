<?php
include_once "config/ClsDB.php";
include_once "config/cls_coba.php";

?>
<div align="center"><h2>Available Data</h2>

<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
		<th>No Tlp</th>
		<th>Umur</th>
	</tr>
	<?php
	$ActiveCoba = new coba;
	$ActiveCoba->doConnect();	
	foreach ($rows=$ActiveCoba->getCobaRecord($id)){ 
		$ActiveCoba->getCobaField();
	?>
 	<tr>
		<td><?php echo $datas->[1]; ?></td>
		<td><?php ?></td>
		<td><?php ?></td>
		<td><?php ?></td>
		<td><?php ?></td>
	</tr>
	<?php	    
	}
	?>

</table>

</div>
<?php
//if ($act==insert) { 
?>
	<form name="coba" method="post" action="inc/coba_insert_proses.php">
		<div align="center"><h2>Form Input</h2>
		<table>
			<tr>
				<td>Nama : </td>
				<td><input type="text" name="nama" id="nama"> </td>
			</tr>	
			<tr>
				<td>Alamat : </td>
				<td><input type="text" name="alamat" id="alamat"> </td>
			</tr>
			<td>coba cari saya</td>
			<tr>
				<td>No_tlp  </td>
				<td><input type="text" name="no_tlp" id="no_tlp"> </td>
			</tr>
			<tr>
				<td>Umur  </td>
				<td><input type="text" name="umur" id="umur"> </td>
			</tr>

			<tr>
				<td colspan="2"><input type="submit" value="Submit"><input type="reset" value="Cancel"></td>
			</tr>
		</table>
		</div>
	</form>
<?php //} ?>	