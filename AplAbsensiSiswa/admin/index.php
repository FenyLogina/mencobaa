<!DOCTYPE html>
<html>
	<head>
		<style type="text/css">
			*{
				padding: 0px;
				margin: 0px;
			}
			body {
				background-image:url(1.jpg);
				background-attachment: fixed;
				background-repeat: no-repeat;
				background-size: 100%;
				margin-top: 80px;
			}
			table {
				position: relative;
			    border-collapse: collapse;
			    width: 50%;
			}

			th, td {
			    text-align: center;
			    padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
			    background-color: white;
			    color: black;
			}
			ul {
			    list-style-type: none;
			    margin: 0;
			    padding: 0;
			    overflow: hidden;
			    background-color: ;
			}

			li {
			    float: left;
			}

			li a {
			    display: block;
			    color: white;
			    text-align: center;
			    padding: 14px 16px;
			    text-decoration: none;
			}

			li a:hover:not(.active) {
			    background-color: #111;
			}

			.active {
			    background-color: #111;
			}
			.b{
				font-family:Times New Roman;
				font-size: 30px;
				font-color:yellow;
			}
		</style>
	</head>
	<body>	
		<ul>
		  <li><a class="active" href="index.php">Home</a></li>
		  <li><a href="list_angkatan.php">Angkatan</a></li>
		  <li><a href="list_guru.php">Guru</a></li>
		  <li><a href="list_jenisabsen.php">Jenis Absen</a></li>
		  <li><a href="list_jurusan.php">Jurusan</a></li>
		  <li><a href="list_ket.php">Keterangan</a></li>
		</ul>

	</body>
</html>