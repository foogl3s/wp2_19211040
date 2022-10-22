<html>
<head>
	<title> D-Lemas : Form Input Data Siswa</title>
</head>
<body>
	<center>
		<form action="<?= base_url('Tugas_uts/cetak');	?>"
method="post">
			<table>
				<tr>
					<th colspan="3">
						D-Lemas : Form Input Data Siswa
					</th>
				</tr>
				<tr>
					<th>Nama Siswa</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id=
						"nama" value="<?= set_value('nama');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('nama');
					?></font>
				</td>
				</tr>
				<tr>
					<th>NIS</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id=
						"nis" value="<?= set_value('nis');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('nis');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Kelas</th>
					<td>:</td>
					<td>
						<input type="text" name="kelas" id=
						"kelas" value="<?= set_value('kelas');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('kelas');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id=
						"tglahir" value="<?= set_value('tglahir');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:black; font-size:10; 
					align:center;"><?= form_error('tglahir');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Tempat Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="nis" id=
						"tplahir" value="<?= set_value('tplahir');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('tplahir');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>:</td>
					<td>
						<input type="text" name="alamat" id=
						"alamat" value="<?= set_value('alamat');
						?>">
					</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('alamat');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>:</td>
					<td>
						<input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki<br>
						<input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan<br>
				</td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('jenis_kelamin');
					?></font>
				</td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>:</td>
					<td>
				     <select name="agama" id= "agama">
					 <option value=""<?php echo set_select('agama', '', TRUE); ?>>Agama</option>
					 <option value="2"<?php echo set_select('agama', 'islam'); ?>>Islam</option>
					 <option value="3"<?php echo set_select('agama', 'kristen'); ?>>Kristen</option>
					 <option value="4"<?php echo set_select('agama', 'protestan'); ?>>Protestan</option>
					 <option value="4"<?php echo set_select('agama', 'katolik'); ?>>Katolik</option>
					 <option value="4"<?php echo set_select('agama', 'hindu'); ?>>Hindu</option>
					 <option value="4"<?php echo set_select('agama', 'budha'); ?>>Budha</option>
					 <option value="4"<?php echo set_select('agama', 'konghucu'); ?>>Konghucu</option>
					 </select>
					 </td>
				</tr>
				<tr>
				<th></th>
				<th></th>
				<td>
					<font style="color:red; font-size:10; 
					align:center;"><?= form_error('agama');
					?></font>
				</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>