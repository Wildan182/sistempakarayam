<?php 

for ($i=10; $i < 27 ; $i++) {

 	# code...
 
	echo "
	<span class='contact100-form validate-form' id=G".$i."_P>
		<span class='contact100-form-title'>
			<h3>SISTEM PAKAR AYAM</h3>
		</span>
		<center><big>Selamat datang di website sistem pakar ayam.</big>
			<p style='font-size: 12px; font-style: normal;'>Disini, anda dapat mencari tahu solusi pengobatan penyakit ayam</p>
		</center>


		<label class='label-input100' id='' for='pertanyaan1'>G".$i." : </label>
		<div class='wrap-input100 rs1-wrap-input100 validate-input' data-validate='Kondisi 1'>
			<div class='checkbox-tick'>
				<label class='male'>
					<input type='radio' name='G".$i."' value='G0".$i."'> Ya<br>
					<span class='checkmark'></span>
				</label>
				<label class='female'>
					<input type='radio' name='G".$i."' value='tidak'> Tidak<br>
					<span class='checkmark'></span>
				</label>
			</div>
		</div>

		<div class='container-contact100-form-btn'>
			<button class='contact100-form-btn' onclick='instAr();periksa(work)'>Submit</button>
		</div>
	</span>
	";

}



 ?>