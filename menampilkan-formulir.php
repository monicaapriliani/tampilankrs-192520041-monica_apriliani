<!DOCTYPE html>
<head>
        <title>Tampilan Formulir</title>
        <style>
                #data {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                #data td, #data th {
                border: 1px solid #ddd;
                padding: 8px;
                }

                #data tr:nth-child(even){background-color: #f2f2f2;}

                #data tr:hover {background-color: #ddd;}

                #data th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
                }
                /* th,td{
                        border:1px solid black;
                        
                } */
        </style>
<head>
<body>
<?php 
        $no = 1;
	 $nim = $_POST['nim'];
	$nama = $_POST['nama'];
	$kode = $_POST['kode'];
        $nama_matkul = $_POST['nama_matkul'];
        $sks = $_POST['sks'];
        $kelas = $_POST ['kelas'];
        $semester = $_POST['semester'];
       
?>

<table id="data">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Kode</th>
                    <th>Mata Kuliah</th>
                    <th>SKS</th>
                    <th>Kelas</th>
                    <th>Semester</th>
                </tr>
                <tr>      
                    <td> <?= $no++; ?></td>
                    <td> <?= $nim; ?></td>
                    <td> <?= $nama; ?></td>
                    <td> <?= $kode; ?></td>
                    <td><?= $nama_matkul; ?></td>
                    <td> <?= $sks; ?></td>
                    <td><?= $kelas; ?></td>
                    <td><?= $semester; ?></td>

                </tr>
            </table>
</body>
</html>