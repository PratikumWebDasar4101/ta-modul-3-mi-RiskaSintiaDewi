<form method="POST" action="simpan.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="Nim"></td>
			</tr>
			<tr>
				<td>Nama User</td>
				<td>:</td>
				<td><input type="text" name="Nama"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="Fakultas">
 					 <option value="FIT">FIT</option>
 					 <option value="FIK">FIK</option>
  					 <option value="FTE">FTE</option>
 					 <option value="FKB">FKB</option>
					</select></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="Jenis_Kelamin" value="l">Perempuan &nbsp;&nbsp;
					<input type="radio" name="Jenis_Kelamin" value="p">Laki Laki</td>
			</tr>
			<tr>
				<td>File Gambar</td>
				<td colspan="2"><input type="file" name="File_gbr" id="File_gbr"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="Kirim" value="Kirim"></td>
			</tr>
		</table>
</form>
