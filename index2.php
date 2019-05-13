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


<!-- 
	gejala 1 -->

	<span class="contact100-form validate-form" id=G1_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>


		<label class="label-input100" id="" for="pertanyaan1">G1 : </label>
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
			<button class="contact100-form-btn" onclick="instAr1();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 2 -->

	<span class="contact100-form validate-form" id=G2_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G2 : </label>
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
			<button class="contact100-form-btn" onclick="instAr2();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 3 -->

	<span class="contact100-form validate-form" id=G3_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G3 : </label>
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
			<button class="contact100-form-btn" onclick="instAr3();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 4 -->

	<span class="contact100-form validate-form" id=G4_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G4 : </label>
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
			<button class="contact100-form-btn" onclick="instAr4();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 5 -->

	<span class="contact100-form validate-form" id=G5_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G5 : </label>
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
			<button class="contact100-form-btn" onclick="instAr5();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 6 -->

	<span class="contact100-form validate-form" id=G6_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G6 : </label>
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
			<button class="contact100-form-btn" onclick="instAr6();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 7 -->

	<span class="contact100-form validate-form" id=G7_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G7 : </label>
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
			<button class="contact100-form-btn" onclick="instAr7();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 8 -->

	<span class="contact100-form validate-form" id=G8_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G8 : </label>
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
			<button class="contact100-form-btn" onclick="instAr8();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 9 -->

	<span class="contact100-form validate-form" id=G9_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G9 : </label>
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
			<button class="contact100-form-btn" onclick="instAr9();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 10 -->

	<span class="contact100-form validate-form" id=G10_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G10 : </label>
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
			<button class="contact100-form-btn" onclick="instAr10();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 11 -->

	<span class="contact100-form validate-form" id=G11_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G11 : </label>
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
			<button class="contact100-form-btn" onclick="instAr11();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 12 -->

	<span class="contact100-form validate-form" id=G12_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G12 : </label>
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
			<button class="contact100-form-btn" onclick="instAr12();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 13 -->

	<span class="contact100-form validate-form" id=G13_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G13 : </label>
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
			<button class="contact100-form-btn" onclick="instAr13();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 14 -->

	<span class="contact100-form validate-form" id=G14_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G14 : </label>
		<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Kondisi 1">
			<div class="checkbox-tick">
				<label class="male">
					<input type="radio" name="G14" value="G14"> Ya<br>
					<span class="checkmark"></span>
				</label>
				<label class="female">
					<input type="radio" name="G14" value="tidak"> Tidak<br>
					<span class="checkmark"></span>
				</label>
			</div>

		</div>
		
		<div class="container-contact100-form-btn">
			<button class="contact100-form-btn" onclick="instAr14();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 15 -->

	<span class="contact100-form validate-form" id=G15_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G15 : </label>
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
			<button class="contact100-form-btn" onclick="instAr15();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 16 -->

	<span class="contact100-form validate-form" id=G16_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G16 : </label>
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
			<button class="contact100-form-btn" onclick="instAr16();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 17 -->

	<span class="contact100-form validate-form" id=G17_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G17 : </label>
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
			<button class="contact100-form-btn" onclick="instAr17();periksa(work)">Submit</button>
		</div>
	</span>
	<!-- GEJALA 18 -->

	<span class="contact100-form validate-form" id=G18_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G18 : </label>
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
			<button class="contact100-form-btn" onclick="instAr18();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 19 -->

	<span class="contact100-form validate-form" id=G19_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G19 : </label>
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
			<button class="contact100-form-btn" onclick="instAr19();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 20 -->

	<span class="contact100-form validate-form" id=G20_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G20 : </label>
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
			<button class="contact100-form-btn" onclick="instAr20();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 21 -->

	<span class="contact100-form validate-form" id=G21_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G21 : </label>
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
			<button class="contact100-form-btn" onclick="instAr21();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 22 -->

	<span class="contact100-form validate-form" id=G22_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G22 : </label>
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
			<button class="contact100-form-btn" onclick="instAr22();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 23 -->

	<span class="contact100-form validate-form" id=G23_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G23 : </label>
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
			<button class="contact100-form-btn" onclick="instAr23();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 24 -->

	<span class="contact100-form validate-form" id=G24_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G24 : </label>
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
			<button class="contact100-form-btn" onclick="instAr24();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 25 -->

	<span class="contact100-form validate-form" id=G25_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G25 : </label>
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
			<button class="contact100-form-btn" onclick="instAr25();periksa(work)">Submit</button>
		</div>
	</span>

	<!-- GEJALA 26 -->

	<span class="contact100-form validate-form" id=G26_P>
		<span class="contact100-form-title">
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style="font-size: 12px; font-style: normal;">Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>

		<label class="label-input100" id="" for="pertanyaan1">G26 : </label>
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
			<button class="contact100-form-btn" onclick="instAr26();periksa(work)">Submit</button>
		</div>
	</span>

	
	<!-- img -->

	<div class="contact100-more" style="background-image: url('images/pitik.png');">

	</div>

</div>
</div>


<div class="col-md-8" style="background-color:  #F7EEE5; color: black">
	<span class="label-input50" id="working"></span>
	<span class="label-input50" id="sug"></span>
</div>


<script type="text/javascript">

	var work = [];

// KEPALA CABANG 1

		function instAr1(){
			var G1_P = document.getElementById('G1_P');
			var G2_P = document.getElementById('G2_P');

			var sem = $('input[name=G1]:checked').val();
			if (sem == 'G01') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G1_P.style.display = 'none';
				G2_P.style.display = 'block';
				}else{
					G1_P.style.display = 'none';
					G2_P.style.display = 'block';
				}
			}

			
		function instAr2(){
			var G2_P = document.getElementById('G2_P');
			var G3_P = document.getElementById('G3_P');

			var sem = $('input[name=G2]:checked').val();
			if (sem == 'G02') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G2_P.style.display = 'none';
				G3_P.style.display = 'block';
				}else{
					G2_P.style.display = 'none';
					G3_P.style.display = 'block';
				}
			}

			
		function instAr3(){
			var G3_P = document.getElementById('G3_P');
			var G4_P = document.getElementById('G4_P');

			var sem = $('input[name=G3]:checked').val();
			if (sem == 'G03') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G3_P.style.display = 'none';
				G4_P.style.display = 'block';
				}else{
					G3_P.style.display = 'none';
					G4_P.style.display = 'block';
				}
			}

			
		function instAr4(){
			var G4_P = document.getElementById('G4_P');
			var G5_P = document.getElementById('G5_P');

			var sem = $('input[name=G4]:checked').val();
			if (sem == 'G04') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G4_P.style.display = 'none';
				G5_P.style.display = 'block';
				}else{
					G4_P.style.display = 'none';
					G5_P.style.display = 'block';
				}
			}

			
		function instAr5(){
			var G5_P = document.getElementById('G5_P');
			var G6_P = document.getElementById('G6_P');

			var sem = $('input[name=G5]:checked').val();
			if (sem == 'G05') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G5_P.style.display = 'none';
				G6_P.style.display = 'block';
				}else{
					G5_P.style.display = 'none';
					G6_P.style.display = 'block';
				}
			}

			
		function instAr6(){
			var G6_P = document.getElementById('G6_P');
			var G7_P = document.getElementById('G7_P');

			var sem = $('input[name=G6]:checked').val();
			if (sem == 'G06') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G6_P.style.display = 'none';
				G7_P.style.display = 'block';
				}else{
					G6_P.style.display = 'none';
					G7_P.style.display = 'block';
				}
			}

			
		function instAr7(){
			var G7_P = document.getElementById('G7_P');
			var G8_P = document.getElementById('G8_P');

			var sem = $('input[name=G7]:checked').val();
			if (sem == 'G07') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G7_P.style.display = 'none';
				G8_P.style.display = 'block';
				}else{
					G7_P.style.display = 'none';
					G8_P.style.display = 'block';
				}
			}

			
		function instAr8(){
			var G8_P = document.getElementById('G8_P');
			var G9_P = document.getElementById('G9_P');

			var sem = $('input[name=G8]:checked').val();
			if (sem == 'G08') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G8_P.style.display = 'none';
				G9_P.style.display = 'block';
				}else{
					G8_P.style.display = 'none';
					G9_P.style.display = 'block';
				}
			}

			
		function instAr9(){
			var G9_P = document.getElementById('G9_P');
			var G10_P = document.getElementById('G10_P');

			var sem = $('input[name=G9]:checked').val();
			if (sem == 'G09') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G9_P.style.display = 'none';
				G10_P.style.display = 'block';
				}else{
					G9_P.style.display = 'none';
					G10_P.style.display = 'block';
				}
			}

			
		function instAr10(){
			var G10_P = document.getElementById('G10_P');
			var G11_P = document.getElementById('G11_P');

			var sem = $('input[name=G10]:checked').val();
			if (sem == 'G10') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G10_P.style.display = 'none';
				G11_P.style.display = 'block';
				}else{
					G10_P.style.display = 'none';
					G11_P.style.display = 'block';
				}
			}

			
		function instAr11(){
			var G11_P = document.getElementById('G11_P');
			var G12_P = document.getElementById('G12_P');

			var sem = $('input[name=G11]:checked').val();
			if (sem == 'G11') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G11_P.style.display = 'none';
				G12_P.style.display = 'block';
				}else{
					G11_P.style.display = 'none';
					G12_P.style.display = 'block';
				}
			}

			
		function instAr12(){
			var G12_P = document.getElementById('G12_P');
			var G13_P = document.getElementById('G13_P');

			var sem = $('input[name=G12]:checked').val();
			if (sem == 'G12') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G12_P.style.display = 'none';
				G13_P.style.display = 'block';
				}else{
					G12_P.style.display = 'none';
					G13_P.style.display = 'block';
				}
			}

			
		function instAr13(){
			var G13_P = document.getElementById('G13_P');
			var G14_P = document.getElementById('G14_P');

			var sem = $('input[name=G13]:checked').val();
			if (sem == 'G13') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G13_P.style.display = 'none';
				G14_P.style.display = 'block';
				}else{
					G13_P.style.display = 'none';
					G14_P.style.display = 'block';
				}
			}

			
		function instAr14(){
			var G14_P = document.getElementById('G14_P');
			var G15_P = document.getElementById('G15_P');

			var sem = $('input[name=G14]:checked').val();
			if (sem == 'G14') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G14_P.style.display = 'none';
				G15_P.style.display = 'block';
				}else{
					G14_P.style.display = 'none';
					G15_P.style.display = 'block';
				}
			}

			
		function instAr15(){
			var G15_P = document.getElementById('G15_P');
			var G16_P = document.getElementById('G16_P');

			var sem = $('input[name=G15]:checked').val();
			if (sem == 'G15') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G15_P.style.display = 'none';
				G16_P.style.display = 'block';
				}else{
					G15_P.style.display = 'none';
					G16_P.style.display = 'block';
				}
			}

			
		function instAr16(){
			var G16_P = document.getElementById('G16_P');
			var G17_P = document.getElementById('G17_P');

			var sem = $('input[name=G16]:checked').val();
			if (sem == 'G16') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G16_P.style.display = 'none';
				G17_P.style.display = 'block';
				}else{
					G16_P.style.display = 'none';
					G17_P.style.display = 'block';
				}
			}

			
		function instAr17(){
			var G17_P = document.getElementById('G17_P');
			var G18_P = document.getElementById('G18_P');

			var sem = $('input[name=G17]:checked').val();
			if (sem == 'G17') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G17_P.style.display = 'none';
				G18_P.style.display = 'block';
				}else{
					G17_P.style.display = 'none';
					G18_P.style.display = 'block';
				}
			}

			
		function instAr18(){
			var G18_P = document.getElementById('G18_P');
			var G19_P = document.getElementById('G19_P');

			var sem = $('input[name=G18]:checked').val();
			if (sem == 'G18') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G18_P.style.display = 'none';
				G19_P.style.display = 'block';
				}else{
					G18_P.style.display = 'none';
					G19_P.style.display = 'block';
				}
			}

			
		function instAr19(){
			var G19_P = document.getElementById('G19_P');
			var G20_P = document.getElementById('G20_P');

			var sem = $('input[name=G19]:checked').val();
			if (sem == 'G19') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G19_P.style.display = 'none';
				G20_P.style.display = 'block';
				}else{
					G19_P.style.display = 'none';
					G20_P.style.display = 'block';
				}
			}

			
		function instAr20(){
			var G20_P = document.getElementById('G20_P');
			var G21_P = document.getElementById('G21_P');

			var sem = $('input[name=G20]:checked').val();
			if (sem == 'G20') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G20_P.style.display = 'none';
				G21_P.style.display = 'block';
				}else{
					G20_P.style.display = 'none';
					G21_P.style.display = 'block';
				}
			}

			
		function instAr21(){
			var G21_P = document.getElementById('G21_P');
			var G22_P = document.getElementById('G22_P');

			var sem = $('input[name=G21]:checked').val();
			if (sem == 'G21') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G21_P.style.display = 'none';
				G22_P.style.display = 'block';
				}else{
					G21_P.style.display = 'none';
					G22_P.style.display = 'block';
				}
			}

			
		function instAr22(){
			var G22_P = document.getElementById('G22_P');
			var G23_P = document.getElementById('G23_P');

			var sem = $('input[name=G22]:checked').val();
			if (sem == 'G22') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G22_P.style.display = 'none';
				G23_P.style.display = 'block';
				}else{
					G22_P.style.display = 'none';
					G23_P.style.display = 'block';
				}
			}

			
		function instAr23(){
			var G23_P = document.getElementById('G23_P');
			var G24_P = document.getElementById('G24_P');

			var sem = $('input[name=G23]:checked').val();
			if (sem == 'G23') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G23_P.style.display = 'none';
				G24_P.style.display = 'block';
				}else{
					G23_P.style.display = 'none';
					G24_P.style.display = 'block';
				}
			}

			
		function instAr24(){
			var G24_P = document.getElementById('G24_P');
			var G25_P = document.getElementById('G25_P');

			var sem = $('input[name=G24]:checked').val();
			if (sem == 'G24') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G24_P.style.display = 'none';
				G25_P.style.display = 'block';
				}else{
					G24_P.style.display = 'none';
					G25_P.style.display = 'block';
				}
			}

			
		function instAr25(){
			var G25_P = document.getElementById('G25_P');
			var G26_P = document.getElementById('G26_P');

			var sem = $('input[name=G25]:checked').val();
			if (sem == 'G25') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G25_P.style.display = 'none';
				G26_P.style.display = 'block';
				}else{
					G25_P.style.display = 'none';
					G26_P.style.display = 'block';
				}
			}

			
		function instAr26(){
			var G26_P = document.getElementById('G26_P');
			var G27_P = document.getElementById('G27_P');

			var sem = $('input[name=G26]:checked').val();
			if (sem == 'G26') {
				work.push(sem);
				document.getElementById('working').innerHTML = work;
				G26_P.style.display = 'none';
				<?php 
					INSERT INTO sementara (gejala) VALUES (value1, value2, value3, ...);
				 ?>
				}else{
					G26_P.style.display = 'none';
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

function getVal(){
	var number=document.getElementById("number").value; 
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
