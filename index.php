<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistem Pakar Ayam</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/png" href="images/favicon.png"> 
	<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- MATERIAL DESIGN ICONIC FONT -->
	<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<script type="text/javascript" src="js/loaddiv.js"></script>
	<!--===============================================================================================-->
	<style type="text/css">
		#G2_P,#G3_P,#G4_P,#G5_P,#G6_P,#G7_P,#G8_P,#G9_P,#G10_P,#G11_P,#G12_P,#G13_P,#G14_P,#G15_P,
		#G16_P,#G17_P,#G18_P,#G19_P,#G20_P,#G21_P,#G22_P,#G23_P,#G24_P,#G25_P,#G26_P,#G27_P,#G28_P,#G29_P,
		#G30_P,#G31_P,#G32_P,#G33_P,#G34_P,#G35_P,#G36_P{
			display: none;
		}
	</style>
</head>
<body>
	<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "sistempakar";

// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 

	?>

	<div class="container-contact100">
		<div class="wrap-contact100">



			<span class="contact100-form validate-form" id=G1_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G1 : Apakah Ayam Memiliki Kotoran Cair (Mencret) dan berwarna hijau / kuning ?  </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G1" value="G01"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G1" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G2_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G2 : Apakah Jenggernya Pucat  ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G2" value="G02"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G2" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G3_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G3 : Apakah Nafsu Makan Ayam Menurun ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G3" value="G03"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G3" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G4_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G4 : Apakah ayam terlihat Lesu </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G4" value="G04"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G4" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G5_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G5 : Apakah Ayam Mudah Kehausan </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G5" value="G05"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G5" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G6_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G6 : Apakah ayam mati secara mendadak  ?</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G6" value="G06"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G6" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G7_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G7 : Apakah Umur Ayam > 1 Tahun </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G7" value="G07"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G7" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G8_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G8 : Apakah Bagian Dada Ayam Terlihat Tipis (Kurus) ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G8" value="G08"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G8" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G9_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G9 : Apakah Persendian Ayam Bengkak ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G9" value="G09"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G9" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>


			<span class="contact100-form validate-form" id=G10_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G10 : Apakah Ayam Sulit Bernafas ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G10" value="G10"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G10" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G11_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G11 : Apakah Ayam Batuk - batuk ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G11" value="G11"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G11" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G12_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G12 : Apakah Ayam Berusia < 1 Tahun</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G12" value="G12"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G12" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G13_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G13 : Apakah Warna Kotoran Ayam Putih ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G13" value="G13"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G13" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G14_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G14 : Apakah Kepala Ayam Bengkak ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G14" value="G014"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G14" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G15_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G15 : Ayam ayam sering menggelengkan kepala ? (Secara tidak wajar) </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G15" value="G15"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G15" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G16_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G16 : Apakah Ada cairan dalam hidung ayam ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G16" value="G16"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G16" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G17_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G17 : Apakah Posisi Sayap Ayam Menurun Kebawah ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G17" value="G17"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G17" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G18_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G18 : Apakah Ayam Terlihat Lemah </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G18" value="G18"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G18" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G19_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G19 : Apakah Kotoran Ayam Berdarah ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G19" value="G19"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G19" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G20_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G20 : Apakah Kepala Ayam Menghitam ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G20" value="G20"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G20" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G21_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G21 : Apakah Bulu Ayam Terlihat Kusut ?</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G21" value="G21"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G21" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G22_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G22 : Apakah Tingkat Kematian Ayam Tinggi ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G22" value="G22"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G22" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G23_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G23 : Apakah Berat Badan Ayam Terus Menurun ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G23" value="G23"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G23" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G24_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G24 : Apakah Ayam Selalu Terlihat Mengantuk ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G24" value="G24"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G24" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G25_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G25 : Apakah Ayam Bersin - Bersin ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G25" value="G25"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G25" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>

			<span class="contact100-form validate-form" id=G26_P>
				<span class="contact100-form-title">
					<h3>SISTEM PAKAR AYAM</h3>
				</span>
				<center><big>Selamat datang di website sistem pakar ayam.</big>
					<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
				</center>


				<label class="label-input100" id="" for="pertanyaan1">G26 : Apakah Ayam Terlihat Sangat Kurus ? </label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
					<div class="checkbox-tick">
						<label class="male">
							<input type="radio" name="G26" value="G26"> Ya<br>
							<span class="checkmark"></span>
						</label>
						<label class="female">
							<input type="radio" name="G26" value="tidak"> Tidak<br>
							<span class="checkmark"></span>
						</label>
					</div>
				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn" onclick="instAr();periksa(work)">Submit</button>
				</div>
			</span>



			<div class="contact100-more" style="background-image: url('images/pitik.png');">

			</div>

		</div>
	</div>


	<div class="col-md-8" style="background-color:  #F7EEE5; color: black">
		<span class="label-input50" id="working" style="font-size: 20px;"></span>
		<span class="label-input50" id="sug" style="font-size: 20px;"></span>
	</div>


	<script type="text/javascript">



		var work = [];
		var work2 = [];

// KEPALA CABANG 1

function instAr(){
	var G1_P = document.getElementById("G1_P");
	var G2_P = document.getElementById("G2_P");
	var G3_P = document.getElementById("G3_P");
	var G4_P = document.getElementById("G4_P");
	var G5_P = document.getElementById("G5_P");
	var G6_P = document.getElementById("G6_P");
	var G7_P = document.getElementById("G7_P");
	var G8_P = document.getElementById("G8_P");
	var G9_P = document.getElementById("G9_P");
	var G10_P = document.getElementById("G10_P");
	var G11_P = document.getElementById("G11_P");
	var G12_P = document.getElementById("G12_P");
	var G13_P = document.getElementById("G13_P");
	var G14_P = document.getElementById("G14_P");
	var G15_P = document.getElementById("G15_P");
	var G16_P = document.getElementById("G16_P");
	var G17_P = document.getElementById("G17_P");
	var G18_P = document.getElementById("G18_P");
	var G19_P = document.getElementById("G19_P");
	var G20_P = document.getElementById("G20_P");
	var G21_P = document.getElementById("G21_P");
	var G22_P = document.getElementById("G22_P");
	var G23_P = document.getElementById("G23_P");
	var G24_P = document.getElementById("G24_P");
	var G25_P = document.getElementById("G25_P");
	var G26_P = document.getElementById("G26_P");

	var sem1 = $('input[name=G1]:checked').val(); 
	var sem2 = $('input[name=G2]:checked').val(); 
	var sem3 = $('input[name=G3]:checked').val(); 
	var sem4 = $('input[name=G4]:checked').val(); 
	var sem5 = $('input[name=G5]:checked').val(); 
	var sem6 = $('input[name=G6]:checked').val(); 
	var sem7 = $('input[name=G7]:checked').val(); 
	var sem8 = $('input[name=G8]:checked').val(); 
	var sem9 = $('input[name=G9]:checked').val(); 
	var sem10 = $('input[name=G10]:checked').val(); 
	var sem11 = $('input[name=G11]:checked').val(); 
	var sem12 = $('input[name=G12]:checked').val(); 
	var sem13 = $('input[name=G13]:checked').val(); 
	var sem14 = $('input[name=G14]:checked').val(); 
	var sem15 = $('input[name=G15]:checked').val(); 
	var sem16 = $('input[name=G16]:checked').val(); 
	var sem17 = $('input[name=G17]:checked').val(); 
	var sem18 = $('input[name=G18]:checked').val(); 
	var sem19 = $('input[name=G19]:checked').val(); 
	var sem20 = $('input[name=G20]:checked').val(); 
	var sem21 = $('input[name=G21]:checked').val(); 
	var sem22 = $('input[name=G22]:checked').val(); 
	var sem23 = $('input[name=G23]:checked').val(); 
	var sem24 = $('input[name=G24]:checked').val(); 
	var sem25 = $('input[name=G25]:checked').val(); 
	var sem26 = $('input[name=G26]:checked').val();

	if (sem1 == "G01") {
		work.push(sem1);
		document.getElementById("working").innerHTML = work;
		
		G1_P.style.display = "none";
		G2_P.style.display = "block";
		if (sem2 == "G02") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem1,sem2);
			document.getElementById("working").innerHTML = work;
			G2_P.style.display = "none";
			G3_P.style.display = "block";

			if (sem3 == "G03") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem1,sem2,sem3);
				document.getElementById("working").innerHTML = work;
				G3_P.style.display = "none";
				G5_P.style.display = "block";
				if (sem5 == "G05") {
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem1,sem2,sem3,sem5);
					document.getElementById("working").innerHTML = work;
					G5_P.style.display = "none";
					G6_P.style.display = "block";
				}if (sem6 == "G06"){
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem1,sem2,sem3,sem5,sem6);
					document.getElementById("working").innerHTML = work;
					G6_P.style.display = "none";
					G10_P.style.display = "block";
					if (sem10 == "G10") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem1,sem2,sem3,sem5,sem6,sem10);
						document.getElementById("working").innerHTML = work;
						alert("Penyakit P3 - Kolera \nSolusi xxxxxxxxx");
					} else if(sem10 == "tidak") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem1,sem2,sem3,sem5,sem6);
						document.getElementById("working").innerHTML = work;
						alert("penyakit P1 - Typus Ayam \nSolusi xxxxxxxxx");
					}
				}
			}
		}else if(sem2 == "tidak"){
			alert("tidak Teridentifikasi");
			window.location.reload();
		}

	}
	
	// INF2
	else if(sem1 == "tidak"){
		G1_P.style.display = "none";
		G2_P.style.display = "block";

		if (sem2 == "G02") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem2);
			document.getElementById("working").innerHTML = work;
			G2_P.style.display = "none";
			G13_P.style.display = "block";
			if(sem13 == "G13"){
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem2,sem13);
				document.getElementById("working").innerHTML = work;
				G13_P.style.display = "none";
				G17_P.style.display = "block";
				if(sem17 == "G17"){
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem2,sem13,sem17);
					document.getElementById("working").innerHTML = work;
					alert("Penyakit P6 - Berak Lumpur \nSolusi xxxxxxxxx");
				}else if (sem17 == "Tidak"){
					alert("Tidak Teridentifikasi");
					window.location.reload();
				}
			}
		}

		//inf 3 

		else if (sem2 == "tidak"){
			G2_P.style.display = "none";
			G3_P.style.display = "block";
			if (sem3 == "G03") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem3);
				document.getElementById("working").innerHTML = work;
				G3_P.style.display = "none";
				G4_P.style.display = "block";

				if(sem4 == "G04"){
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem3,sem4);
					document.getElementById("working").innerHTML = work;
					G4_P.style.display = "none";
					G5_P.style.display = "block";
					if (sem5 == "G05") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem3,sem4,sem5);
						document.getElementById("working").innerHTML = work;
						G5_P.style.display = "none";
						G10_P.style.display = "block";
						if (sem10 == "G10") {
							while(work.length > 0) {
								work.pop();
							}
							work.push(sem3,sem4,sem5,sem10);
							document.getElementById("working").innerHTML = work;
							G10_P.style.display = "none";
							G23_P.style.display = "block";
							if (sem23 == "G23") {
								while(work.length > 0) {
									work.pop();
								}
								work.push(sem3,sem4,sem5,sem10,sem23);
								document.getElementById("working").innerHTML = work;
								G23_P.style.display = "none";
								G24_P.style.display = "block";
								if (sem24 == "G24") {
									while(work.length > 0) {
										work.pop();
									}
									work.push(sem3,sem4,sem5,sem10,sem23,sem24);
									document.getElementById("working").innerHTML = work;
									alert("Penyakit P9 - Radang Paru - Paru \nSolusi xxxxxxxxx");
								}else if(sem24 == "tidak"){
									alert("Penyakit tidak Teridentifikasi");
									window.location.reload();
								}
							}
						}
					} else if (sem5 == "tidak"){
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem3,sem4);
						document.getElementById("working").innerHTML = work;
						G5_P.style.display = "none";
						G10_P.style.display = "block";
						if (sem10 == "G10") {
							while(work.length > 0) {
								work.pop();
							}
							work.push(sem3,sem4,sem10);
							document.getElementById("working").innerHTML = work;
							G10_P.style.display = "none";
							G16_P.style.display = "block";
							if (sem16 == "G16") {
								while(work.length > 0) {
									work.pop();
								}
								work.push(sem3,sem4,sem10,sem16);
								document.getElementById("working").innerHTML = work;
								G16_P.style.display = "none";
								G25_P.style.display = "block";
								if (sem25 == "G25") {
									while(work.length > 0) {
										work.pop();
									}
									work.push(sem3,sem4,sem10,sem16,sem25);
									document.getElementById("working").innerHTML = work;
									alert("Penyakit P11 - Sesak Nafas \nSolusi xxxxxxxxx");
								}else if (sem25 == "tidak"){
									alert("Penyakit tidak Teridentifikasi");
									window.location.reload();
								}
							}
						}
					}
				}else if (sem4 == "tidak"){
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem3);
					document.getElementById("working").innerHTML = work;
					G4_P.style.display = "none";
					G5_P.style.display = "block";
					if (sem5 == "G05") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem3,sem5);
						document.getElementById("working").innerHTML = work;
						G5_P.style.display = "none";
						G13_P.style.display = "block";
						if (sem13 == "G13") {
							while(work.length > 0) {
								work.pop();
							}
							work.push(sem3,sem5,sem13);
							document.getElementById("working").innerHTML = work;
							G13_P.style.display = "none";
							G21_P.style.display = "block";
							if (sem21 == "G21") {
								while(work.length > 0) {
									work.pop();
								}
								work.push(sem3,sem5,sem13,sem21);
								document.getElementById("working").innerHTML = work;
								G21_P.style.display = "none";
								G26_P.style.display = "block";
								if (sem26 == "G26") {
									while(work.length > 0) {
										work.pop();
									}
									work.push(sem3,sem5,sem13,sem21,sem26);
									document.getElementById("working").innerHTML = work;
									alert("Penyakit P12 - Gumoro \nSolusi xxxxxxxxx");
								}else if(sem26 == "tidak"){
									alert("Penyakit tidak Teridentifikasi");
									window.location.reload();
								}
							}
						}
					}else if (sem5 == "tidak"){
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem3);
						document.getElementById("working").innerHTML = work;
						G5_P.style.display = "none";
						G18_P.style.display = "block";
						if (sem18 == "G18") {
							while(work.length > 0) {
								work.pop();
							}
							work.push(sem3,sem18);
							document.getElementById("working").innerHTML = work;
							G18_P.style.display = "none";
							G19_P.style.display = "block";
							if (sem19 == "G19") {
								while(work.length > 0) {
									work.pop();
								}
								work.push(sem3,sem18,sem19);
								document.getElementById("working").innerHTML = work;
								alert("Penyakit P7 - Berak Darah \nSolusi xxxxxxxxx");
							}else if (sem19 == "tidak"){
								alert("Penyakit tidak Teridentifikasi");
								window.location.reload();
							}
						}
					}
				}
			}
//inf 4
else if(sem3 == "tidak"){
	document.getElementById("working").innerHTML = work;
	G3_P.style.display = "none";
	G4_P.style.display = "block";

	

	if (sem4 == "G04") {
		while(work.length > 0) {
			work.pop();
		}
		work.push(sem4);
		document.getElementById("working").innerHTML = work;
		G4_P.style.display = "none";
		G7_P.style.display = "block";
		if (sem7 == "G07") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem4,sem7);
			document.getElementById("working").innerHTML = work;
			G7_P.style.display = "none";
			G8_P.style.display = "block";
			if (sem8 == "G08") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem4,sem7,sem8);
				document.getElementById("working").innerHTML = work;
				G8_P.style.display = "none";
				G9_P.style.display = "block";
				if (sem9 == "G09") {
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem4,sem7,sem8,sem9);
					document.getElementById("working").innerHTML = work;
					alert("Penyakit P2 - TBC \nSolusi xxxxxxxxx");

				}else if (sem9 == "tidak"){
					alert("Penyakit tidak Teridentifikasi");
					window.location.reload();
				}
			}
		}
		//inf 5
	}else if (sem4 == "tidak"){
		while(work.length > 0) {
			work.pop();
		}
		
		document.getElementById("working").innerHTML = work;
		G4_P.style.display = "none";
		G9_P.style.display = "block";
		if (sem9 == "G09") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem9);
			document.getElementById("working").innerHTML = work;
			G9_P.style.display = "none";
			G11_P.style.display = "block";
			if (sem11 == "G11") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem9,sem11);
				document.getElementById("working").innerHTML = work;
				G11_P.style.display = "none";
				G15_P.style.display = "block";
				if (sem15 == "G15") {
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem9,sem11,sem15);
					document.getElementById("working").innerHTML = work;
					G15_P.style.display = "none";
					G16_P.style.display = "block";
					if (sem16 == "G16") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem9,sem11,sem15,sem16);
						document.getElementById("working").innerHTML = work;
						alert("Penyakit P5 - Pilek / Snot \nSolusi xxxxxxxxx");						
					}else if (sem16 == "tidak"){
						alert("Penyakit tidak Teridentifikasi");
						window.location.reload();
					}
				}
			}
		//inf 6
	}else if(sem9 == "tidak"){
		while(work.length > 0) {
			work.pop();
		}
		
		document.getElementById("working").innerHTML = work;
		G9_P.style.display = "none";
		G10_P.style.display = "block";
		
//tanda
if(sem10 == "G10"){
	while(work.length > 0) {
		work.pop();
	}
	work.push(sem10);
	document.getElementById("working").innerHTML = work;
	G10_P.style.display = "none";
	G11_P.style.display = "block";
	if (sem11 == "G11") {
		while(work.length > 0) {
			work.pop();
		}
		work.push(sem10,sem11);
		document.getElementById("working").innerHTML = work;
		G11_P.style.display = "none";
		G15_P.style.display = "block";
		if (sem15 == "G15") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem10,sem11,sem15);
			document.getElementById("working").innerHTML = work;
			G15_P.style.display = "none";
			G16_P.style.display = "block";
			if (sem16 == "G16") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem10,sem11,sem15,sem16);
				document.getElementById("working").innerHTML = work;
				alert("Penyakit P10 - Influenza Ayam \nSolusi xxxxxxxxx");
			}else if (sem16 == "tidak"){
				alert("Penyakit tidak Teridentifikasi");
				window.location.reload();
			}
		}
	}
}else if (sem10 == "tidak"){
	while(work.length > 0) {
		work.pop();
	}

	document.getElementById("working").innerHTML = work;
	G10_P.style.display = "none";
	G11_P.style.display = "block";
	if (sem11 == "G11") {
		while(work.length > 0) {
			work.pop();
		}
		work.push(sem11);
		document.getElementById("working").innerHTML = work;
		G11_P.style.display = "none";
		G12_P.style.display = "block";
		if (sem12 == "G12") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem11,sem12);
			document.getElementById("working").innerHTML = work;
			G12_P.style.display = "none";
			G13_P.style.display = "block";
			if (sem13 == "G13") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem11,sem12,sem13);
				document.getElementById("working").innerHTML = work;

				alert("Penyakit P4 - CRD / Batuk \nSolusi xxxxxxxxx");
			}else if (sem13 == "tidak"){
				alert("Penyakit tidak Teridentifikasi");
				window.location.reload();
			}
		}
	} else if (sem11 == "tidak"){
		while(work.length > 0) {
			work.pop();
		}

		document.getElementById("working").innerHTML = work;
		G11_P.style.display = "none";
		G18_P.style.display = "block";
		if (sem18 == "G18") {
			while(work.length > 0) {
				work.pop();
			}
			work.push(sem18);
			document.getElementById("working").innerHTML = work;
			G18_P.style.display = "none";
			G20_P.style.display = "block";
			if (sem20 == "G20") {
				while(work.length > 0) {
					work.pop();
				}
				work.push(sem18,sem20);
				document.getElementById("working").innerHTML = work;
				G20_P.style.display = "none";
				G21_P.style.display = "block";
				if (sem21 == "G21") {
					while(work.length > 0) {
						work.pop();
					}
					work.push(sem18,sem20,sem21);
					document.getElementById("working").innerHTML = work;
					G21_P.style.display = "none";
					G22_P.style.display = "block";
					if (sem22 == "G22") {
						while(work.length > 0) {
							work.pop();
						}
						work.push(sem18,sem20,sem21,sem22);
						document.getElementById("working").innerHTML = work;
						G22_P.style.display = "none";
						G23_P.style.display = "block";
						if (sem23 == "G23") {
							while(work.length > 0) {
								work.pop();
							}
							work.push(sem18,sem20,sem21,sem22,sem23);
							document.getElementById("working").innerHTML = work;
							
							alert("Penyakit P8 - Hostomatosis \nSolusi xxxxxxxxx");
						}else if(sem23 == "tidak"){
							alert("Penyakit tidak Teridentifikasi");
							window.location.reload();
						}
					}
				}
			}
		}
	}
}

}
}


}			
} 
} 
}



function periksa(str){
	if (str.length == 0) { 
		document.getElementById("sug").innerHTML = "";
		return;
	} else {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				document.getElementById("sug").innerHTML = this.responseText;
			}
		};
		xmlhttp.open("GET", "search.php?q=" + str, true);
		xmlhttp.send();
	}
}

</script>

<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
	$(".selection-2").select2({
		minimumResultsForSearch: 20,
		dropdownParent: $('#dropDownSelect1')
	});
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
