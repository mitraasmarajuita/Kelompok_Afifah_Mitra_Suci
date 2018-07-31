<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Daftar</title>
<style type="text/css">
body { /* background gambar */

	margin-top: 2px;
	color:#666666;
	background: #fff url("back.jpg") repeat-x;
}
#konten {   /* lebar layout web member */
	width:800px;						
	margin-left: auto;
	margin-right: auto;
	background-color:#00CC66;			
}
td {
font-family:Arial, Helvetica, sans-serif;
font-size: 12px;
}
</style>

</head>
<body style="margin-top: 0px;background:#006600 url('back.jpg') repeat-x;">
<div id="konten">
	<div id="isi">
<script type="text/javascript" src="js/jquery.validate.pack.js"></script>
<script type="text/javascript">

$(document).ready(function() {
	
	$("#formID").validate({
		rules: {
			password: {
				required: true,
				minlength: 6
			},
			confirm_password: {
				required: true,
				minlength: 6,
				equalTo: "#password"
			},
			nfile: {
				required: true,
				accept:"jpg"
			}
		},
		messages: {
			email: {
				required: "E-mail harus diisi",
				email: "Masukkan E-mail yang valid",
				remote: jQuery.validator.format("Email yang anda masukan sudah terdaftar.")
			},
			username: {
				required: "Username harus diisi",
				remote: jQuery.validator.format("Username yang anda masukan tidak valid atau sudah terdaftar.")
			},
			nfile: {
				required: "File harus diisi",
				accept: "Format file salah, seharusnya format Gambar JPG"
			},
			password: {
				required: "Password harus diisi kembali",
				minlength: "Password minimal 6 karakter"
			},
			confirm_password: {
				required: "Password harus diisi kembali",
				minlength: "Password minimal 6 karakter",
				equalTo: "Password tidak sama dengan yang diatas"
			}
		},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		},
		submitHandler: function() {
		
		var dataString = 'userid='+ $("#userid").val() + '&jenis='+ $("#jenis").val() + '&neg='+ $("#neg").val() + '&name='+ $("#name").val() + '&kelamin='+ $("#kelamin").val() + '&nis='+ $("#nis").val() + '&kelas=' + $("#kelas").val() + '&email='+ $("#email").val() + '&username='+ $("#username").val() + '&password='+ $("#password").val() + '&pertanyaan='+ $("#pertanyaan").val() + '&jawaban='+ $("#jawaban").val() + '&hari='+ $("#hari").val() + '&bulan='+ $("#bulan").val() + '&tahun='+ $("#tahun").val() + '&kerja='+ $("#kerja").val() + '&alamat='+ $("#alamat").val() + '&sekolah='+ $("#sekolah").val() + '&telp='+ $("#telp").val()+ '&blog='+ $("#blog").val() + '&tentang='+ $("#tentang").val()+ '&country='+ $("#country").val()+ '&stprofil='+ $("#stprofil").val()+ '&stblog='+ $("#stblog").val()+ '&code='+ $("#code").val();
		$.ajax({type: "POST",url: "membersave.php",data: dataString,cache: false,
		success: function(html){$("#hasil").append(html);$("#boxpesan").hide();}});
		
		}
		
	});
})
</script><script type="text/javascript">
$(document).ready(function()
{
$('#jenis').click(function(){

var element = $(this);
var jenis = $('#jenis').val();
if (jenis=='Alumni') {
	$('#target').show();
}
else {
	$('#target').hide();
}

return false;});});
</script> <div id="hasil"></div><div id="boxpesan">
    <form name="formID" id="formID" action="berhsil.php" method="post">
	<input type="hidden" name="userid" id="userid" value="5cg7ebab3b4bfb3c6bfbbc5">
	<table border="0" width="100%" cellspacing="2" cellpadding="2" id="tablebaru">
	<tbody><tr><td colspan="3" bgcolor="#00CC33"><img src="../images/icon21.png" width="100" height="100" style="margin:0 20px 0 10px" align="left"> <h1>Pendaftaran Online <br> SMA N 1 KECAMATAN GUNUANG OMEH</h1>
	Silahkan Anda isi form dibawah ini dengan lengkap , benar dan jujur. <br><br><br>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>Prosedur pendaftaran untuk Siswa baru : </b><br>
<ol>
<li>Siswa/Orang Tua dapat melengkapi data-data dibawah ini.</li>
<li>Syarat pendaftaran dapat dikirim melalui post atau mengantar langsung kesekolah.<br>Syarat pendaftaran :<br>1. potokopi lapor semester 1 sd 5
</li></ol></td></tr><tr><td colspan="3" class="td0">Informasi Khusus</td></tr>	
	<tr>
		<td align="right">Nama</td>
		<td>:</td>
		<td><input type="text" name="name" value="" id="name" size="20" maxlength="30" class="required" title="Nama harus diisi"></td>
	</tr>
	<tr>
		<td align="right" valign="top">Kelamin</td>
		<td valign="top">:</td>
		<td><select name="kelamin" id="kelamin" class="required" title="Jenis kelamin harus dipilih">
		<option value="" selected="">[Pilih]</option><option value="m">Laki-laki</option><option value="f">Perempuan</option></select>
		</td>
	</tr>
	<tr>
		<td align="right" valign="top">Email</td>
		<td valign="top">:</td>
		<td><input id="email" type="text" name="email" remote="cekemail.php" size="30" value="" class="required email">
		<br>Masukan email yang valid dan aktif.</td>
	</tr>
	<tr>
		<td align="right" valign="top">Password</td>
		<td valign="top">:</td>
		<td><input id="password" type="password" name="password" size="20" style="width:180; height:20;"></td>
	</tr>
	<tr>
		<td align="right" valign="top">Re-type Password</td>
		<td valign="top">:</td>
		<td><input id="confirm_password" type="password" name="confirm_password" size="20" style="width:180; height:20;"></td>
	</tr>
	<tr>
		<td align="right">Tgl Lahir</td>
		<td>:</td>
		<td>
		<select name="hari" id="hari" class="required" title="Tanggal harus dipilih"><option value="" selected=""></option> <option value="01">1</option> <option value="02">2</option> <option value="03">3</option> <option value="04">4</option> <option value="05">5</option> <option value="06">6</option> <option value="07">7</option> <option value="08">8</option> <option value="09">9</option> <option value="10">10</option> <option value="11">11</option> <option value="12">12</option> <option value="13">13</option> <option value="14">14</option> <option value="15">15</option> <option value="16">16</option> <option value="17">17</option> <option value="18">18</option> <option value="19">19</option> <option value="20">20</option> <option value="21">21</option> <option value="22">22</option> <option value="23">23</option> <option value="24">24</option> <option value="25">25</option> <option value="26">26</option> <option value="27">27</option> <option value="28">28</option> <option value="29">29</option> <option value="30">30</option> <option value="31">31</option></select>
		<select name="bulan" id="bulan" class="required" title="Bulan harus dipilih"><option value="" selected=""></option> <option value="01">Jan</option> <option value="02">Feb</option> <option value="03">Mar</option> <option value="04">Apr</option> <option value="05">May</option> <option value="06">Jun</option> <option value="07">Jul</option> <option value="08">Aug</option> <option value="09">Sep</option> <option value="10">Oct</option> <option value="11">Nov</option> <option value="12">Dec</option></select>
		<select id="tahun" name="tahun" class="required" title="Tahun harus dipilih">
		<option value="" selected=""></option> <option value="2009">2009</option> <option value="2008">2008</option> <option value="2007">2007</option> <option value="2006">2006</option> <option value="2005">2005</option> <option value="2004">2004</option> <option value="2003">2003</option> <option value="2002">2002</option> <option value="2001">2001</option> <option value="2000">2000</option> <option value="1999">1999</option> <option value="1998">1998</option> <option value="1997">1997</option> <option value="1996">1996</option> <option value="1995">1995</option> <option value="1994">1994</option> <option value="1993">1993</option> <option value="1992">1992</option> <option value="1991">1991</option> <option value="1990">1990</option> <option value="1989">1989</option> <option value="1988">1988</option> <option value="1987">1987</option> <option value="1986">1986</option> <option value="1985">1985</option> <option value="1984">1984</option> <option value="1983">1983</option> <option value="1982">1982</option> <option value="1981">1981</option> <option value="1980">1980</option> <option value="1979">1979</option> <option value="1978">1978</option> <option value="1977">1977</option> <option value="1976">1976</option> <option value="1975">1975</option> <option value="1974">1974</option> <option value="1973">1973</option> <option value="1972">1972</option> <option value="1971">1971</option> <option value="1970">1970</option> <option value="1969">1969</option> <option value="1968">1968</option> <option value="1967">1967</option> <option value="1966">1966</option> <option value="1965">1965</option> <option value="1964">1964</option> <option value="1963">1963</option> <option value="1962">1962</option> <option value="1961">1961</option> <option value="1960">1960</option> <option value="1959">1959</option> <option value="1958">1958</option> <option value="1957">1957</option> <option value="1956">1956</option> <option value="1955">1955</option> <option value="1954">1954</option> <option value="1953">1953</option> <option value="1952">1952</option> <option value="1951">1951</option> <option value="1950">1950</option> <option value="1949">1949</option> <option value="1948">1948</option> <option value="1947">1947</option> <option value="1946">1946</option> <option value="1945">1945</option> <option value="1944">1944</option> <option value="1943">1943</option> <option value="1942">1942</option> <option value="1941">1941</option> <option value="1940">1940</option> <option value="1939">1939</option> <option value="1938">1938</option> <option value="1937">1937</option> <option value="1936">1936</option> <option value="1935">1935</option> <option value="1934">1934</option> <option value="1933">1933</option> <option value="1932">1932</option> <option value="1931">1931</option> <option value="1930">1930</option> <option value="1929">1929</option> <option value="1928">1928</option> <option value="1927">1927</option> <option value="1926">1926</option> <option value="1925">1925</option> <option value="1924">1924</option> <option value="1923">1923</option> <option value="1922">1922</option> <option value="1921">1921</option> <option value="1920">1920</option></select>
		</td>
	</tr>
	
	<tr><td colspan="3" class="td0">Informasi Pribadi </td></tr>
	<tr>
		<td align="right" valign="top">Status Informasi</td>
		<td valign="top">:</td>
		<td><select name="stprofil" id="stprofil"><option value="open">Tampilkan ke teman</option>
		<option value="hide">Sembunyikan</option></select>
		</td>
	</tr>
	<tr>
		<td align="right" valign="top">Alamat</td>
		<td valign="top">:</td>
		<td><textarea name="alamat" id="alamat" class="required" cols="40" rows="6" title="Alamat harus diisi" maxlength="100"></textarea></td>
	</tr>
	<tr>
		<td align="right">Negara</td>
		<td valign="top">:</td>
		<td><select name="country" id="country">
      <option value="" selected=""></option>
	  <option value="ID">INDONESIA</option>
      <option value="US">UNITED STATES</option> 
      <option value="AF">Afghanistan</option>
      <option value="AL">Albania</option>
      <option value="DZ">Algeria</option>
      <option value="AR">Argentina</option>
      <option value="AU">Australia</option>
      <option value="AT">Austria</option>
  	  <option value="CA">Canada</option>
      <option value="BH">Bahrain</option>
      <option value="BD">Bangladesh</option>
      <option value="BE">Belgium</option>
      <option value="BO">Bolivia</option>
      <option value="BR">Brazil</option>
      <option value="IO">British Indian Ocean Territory</option>
      <option value="BN">Brunei Darussalam</option>
      <option value="BG">Bulgaria</option>
      <option value="KH">Cambodia</option>
      <option value="CM">Cameroon</option>
      <option value="CL">Chile</option>
      <option value="CN">China</option>
      <option value="CO">Colombia</option>
      <option value="CG">Congo</option>
      <option value="CR">Costa Rica</option>
      <option value="HR">Croatia</option>
      <option value="CU">Cuba</option>
      <option value="CY">Cyprus</option>
      <option value="CZ">Czech Republic</option>
      <option value="DK">Denmark</option>
      <option value="TP">East Timor</option>
      <option value="EC">Ecuador</option>
      <option value="EG">Egypt</option>
      <option value="SV">El Salvador</option>
      <option value="EE">Estonia</option>
      <option value="ET">Ethiopia</option>
       <option value="FI">Finland</option>
      <option value="FR">France</option>
      <option value="GF">French Guiana</option>
      <option value="GE">Georgia</option>
      <option value="DE">Germany</option>
      <option value="GR">Greece</option>
      <option value="HK">Hong Kong</option>
      <option value="HU">Hungary</option>
      <option value="IS">Iceland</option>
      <option value="IN">India</option>
      <option value="ID">Indonesia</option>
      <option value="IR">Iran</option>
      <option value="IQ">Iraq</option>
      <option value="IE">Ireland</option>
      <option value="IL">Israel</option>
      <option value="IT">Italy</option>
      <option value="JM">Jamaica</option>
      <option value="JP">Japan</option>
      <option value="JO">Jordan</option>
      <option value="KZ">Kazakhstan</option>
      <option value="KE">Kenya</option>
      <option value="KI">Kiribati</option>
      <option value="KW">Kuwait</option>
      <option value="LA">Laos</option>
      <option value="LV">Latvia</option>
      <option value="LB">Lebanon</option>
      <option value="LR">Liberia</option>
      <option value="LY">Libya</option>
      <option value="LT">Lithuania</option>
      <option value="LU">Luxembourg</option>
      <option value="MK">Macedonia</option>
      <option value="MG">Madagascar</option>
      <option value="MW">Malawi</option>
      <option value="MY">Malaysia</option>
      <option value="MX">Mexico</option>
      <option value="FM">Micronesia</option>
      <option value="MC">Monaco</option>
      <option value="MN">Mongolia</option>
      <option value="MA">Morocco</option>
      <option value="MM">Myanmar</option>
      <option value="NP">Nepal</option>
      <option value="NL">Netherlands</option>
      <option value="NZ">New Zealand</option>
      <option value="NE">Niger</option>
      <option value="NG">Nigeria</option>
      <option value="KP">North Korea</option>
      <option value="NO">Norway</option>
      <option value="OM">Oman</option>
      <option value="PK">Pakistan</option>
       <option value="PS">Palestinian Territory</option>
      <option value="PA">Panama</option>
      <option value="PG">Papua New Guinea</option>
      <option value="PY">Paraguay</option>
      <option value="PE">Peru</option>
      <option value="PH">Philippines</option>
      <option value="PL">Poland</option>
      <option value="PT">Portugal</option>
      <option value="QA">Qatar</option>
      <option value="RO">Romania</option>
      <option value="RU">Russian Federation</option>
      <option value="RW">Rwanda</option>
      <option value="SH">Saint Helena</option>
       <option value="SA">Saudi Arabia</option>
      <option value="SN">Senegal</option>
     <option value="SG">Singapore</option>
      <option value="SK">Slovakia</option>
      <option value="SI">Slovenia</option>
       <option value="ZA">South Africa</option>
      <option value="KR">South Korea</option>
      <option value="ES">Spain</option>
      <option value="LK">Sri Lanka</option>
      <option value="SD">Sudan</option>
      <option value="SR">Suriname</option>
      <option value="SE">Sweden</option>
      <option value="CH">Switzerland</option>
      <option value="TW">Taiwan</option>
      <option value="TH">Thailand</option>
      <option value="TN">Tunisia</option>
      <option value="TR">Turkey</option>
      <option value="TM">Turkmenistan</option>
       <option value="UG">Uganda</option>
      <option value="UA">Ukraine</option>
      <option value="AE">United Arab Emirates</option>
      <option value="GB">United Kingdom</option>
      <option value="UY">Uruguay</option>
      <option value="UZ">Uzbekistan</option>
      <option value="VE">Venezuela</option>
      <option value="VN">Vietnam</option>
      <option value="WF">Wallis and Futuna Islands</option>
      <option value="YE">Yemen</option>
      <option value="YU">Yugoslavia</option>
      <option value="ZR">Zaire</option>
      <option value="ZM">Zambia</option>
      <option value="ZW">Zimbabwe</option>
    </select>
		</td>
	</tr>

	<tr>
		<td align="right" valign="top">Sekolah</td>
		<td valign="top">:</td>
		<td><input type="text" name="sekolah" id="sekolah" class="required" title="Sekolah harus diisi" value="" size="40" maxlength="50"></td>
	</tr>
	<tr>
		<td align="right" valign="top">Telp/HP</td>
		<td valign="top">:</td>
		<td><input type="text" name="telp" id="telp" size="20" value="" class="required" style="width:180; height:20;" title="No Telp harus diisi" maxlength="30"></td>
	</tr>
	<tr>
		<td align="right" valign="top">Homepage/Blog</td>
		<td valign="top">:</td>
		<td>http:// <input type="text" name="blog" size="30" id="blog" value="" maxlength="50"> 
		<br>Tidak menggunakan http://
		<br><input type="checkbox" name="stblog" id="stblog" value="on"> Blog ini mau ditampilkan di Daftar Blog Member  </td>
	</tr>
		<tr>
		<td align="right" valign="top">Tentang Anda</td>
		<td valign="top">:</td>
		<td><textarea name="tentang" id="tentang" cols="40" rows="6"></textarea>
		<br>Seperti : Hobby,Aktivitas,dsb <br></td>
	</tr>
	<tr><td align="right" valign="top">Kode Konfirmasi</td><td></td><td><img src="../procs/captcha/captcha.php"> * case sensitive
    <br><input type="text" name="code" size="12" id="code" class="required"><br><br><input type="submit" id="button2" name="submit" value="Daftar">&nbsp;</td></tr>	
	</tbody></table></form></div></div>	
	<div id="bawah">  .Website engine's code is copyright © 2018 Mahasiswa Politeknik Caltex Riau versi 3.5</div>
	</div>




</body></html>