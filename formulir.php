<html>
<head>
	<title>Form Mahasiswa</title>
	<style>
		body {
			font-family: "segoe ui";
		}
		h1 {
			font-size: 25px;
		}
		input, select {
			border: 1px solid #CCCCCC;
			padding: 7px;
			font-size: 14px;
		}
		input[type="submit"] {
			padding: 7px 15px;
			margin-left: 130px;
			cursor: pointer;
		}
        input[type="reset"] {
			cursor: pointer;
        }
		label {
			width: 130px;
			display: block;
			float: left;
		}
		.action, .radio {
			float:none;
			width:auto;
		}
		.row {
			margin-bottom: 7px;
			clear: both;
		}
		.options {
			float:left;
		}
	
	</style>
</head>
<body>
    <h1>Formulir Mahasiswa</h1>
    <form action = "menampilkan-formulir.php" method = "POST">
		<div class="row">
			<label>NIM</label>
			<input type="number" name="nim" required>  
		</div>
		<div class="row">
			<label>Nama Mahasiswa</label>
			<input type="text" name="nama" required>
		</div>
		<div class="row">
			<label>Kode Matakuliah</label>
			<input type="number" name="kode" required>
		</div>
		
        <div class="row">
			<label>Nama Matakuliah</label>
			<input type="text" name="nama_matkul" required>
        </div>
        <div class="row">
			<label>SKS</label>
			<input type="number" name="sks" required>
		</div>
		<div class="row">
			<label>Kelas</label>
                <input type="radio" name="kelas" value="A" required> A
                <input type="radio" name="kelas" value="B" required> B
		</div>
        <div class="row">
			<label>Semester</label>
			<select name="semester" required>
                <option value="1">1</option>
                <option value="3">3</option>
                <option value="5">5</option>
                <option value="7">7</option>
            </select>
		</div>

			<input type="submit" value="kirim">
            <input type="reset"  value="reset">
	</form>
</body>
</html>