<HTML>
	<head>
	<title>Form Pendaftaran Unit</title>
	</head>
	
	<body>
		<H1>Input Data Pribadi</H1>
		<p>
		<form action="hasil.php" method="post">
			Nama:
			<input type="text" name="nama" required><br>
			<p>
			Jurusan:
			<input type="text" name="jurusan" required><br>
			<p>
			Angkatan:
			<input type="text" name="angkatan" required><br>
			<p>
			NIM: 
			<input type="text" name="nim" required><br>
			<p>
			Email:
			<input type="email" name="email" required><br>
			<p>
			Alasan ingin daftar:
			<input type="text" name="alasan" required><br>
			<p>
			<input type="submit" value="submit">
		</form>
	</body>
</html>