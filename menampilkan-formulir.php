<!DOCTYPE html>
<head>
        <title>Tampilan Formulir</title>
        <style>
                #form {
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
                }

                #form td, #form th {
                border: 1px solid #ddd;
                padding: 8px;
                }

                #form tr:nth-child(even){background-color: #f2f2f2;}

                #form tr:hover {background-color: #ddd;}

                #form th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #04AA6D;
                color: white;
                }
                
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

<table id="form">
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
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $nim; ?></td>
                    <td><?php echo $nama; ?></td>
                    <td><?php echo $kode; ?></td>
                    <td><?php echo $nama_matkul; ?></td>
                    <td><?php echo $sks; ?></td>
                    <td><?php echo $kelas; ?></td>
                    <td><?php echo $semester; ?></td>

                </tr>
</table>
</body>
</html>
