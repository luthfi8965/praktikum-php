<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai Siswa</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<style>
		
        .header {
			background-color: #007bff;
			color: #fff;
			padding: 10px;
			margin-bottom: 20px;
		}
	</style>
<body>

	<div class="container mt-4">
        <div class="header">
		<h3 class="text-center mb-4">Daftar Nilai Siswa</h3>
</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>No</th>
					<th>NIM</th>
					<th>UTS</th>
					<th>UAS</th>
					<th>Tugas</th>
					<th>Nilai Akhir</th>
				</tr>
			</thead>
			<tbody>
				<?php
                $ns1 = ['id'=>1,'nim'=>'01101','uts'=>80,'uas'=>84,'tugas'=>78];
                $ns2 = ['id'=>2,'nim'=>'01121','uts'=>70,'uas'=>50,'tugas'=>68];
                $ns3 = ['id'=>3,'nim'=>'01130','uts'=>60,'uas'=>86,'tugas'=>70];
                $ns4 = ['id'=>4,'nim'=>'01134','uts'=>90,'uas'=>91,'tugas'=>82];
                
                $ar_nilai = [$ns1, $ns2 , $ns3, $ns4];

				$nomor = 1;
				foreach($ar_nilai as $ns){
					echo '<tr>';
					echo '<td>'.$nomor.'</td>';
					echo '<td>'.$ns['nim'].'</td>';
					echo '<td>'.$ns['uts'].'</td>';
					echo '<td>'.$ns['uas'].'</td>';
					echo '<td>'.$ns['tugas'].'</td>';
					$nilai_akhir = ($ns['uts'] + $ns['uas']+$ns['tugas'])/3;
					echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
					echo '</tr>';
					$nomor++;
				}
				?>
			</tbody>
		</table>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
