<!DOCTYPE html>
<html>
<head>
        <title> Generate Sertificate</title>
        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet" type="text/css">

        <style>
			@font-face {
                font-family: 'Poppins';
                src: url({{ storage_path('fonts\Poppins-Italic.ttf') }}) format("truetype");
                font-weight: 400;
                /*font-style: italic;*/
            }
            html, body {
                display: block;
            }
            body {
                
                background-image: url('<?php echo base_url('files/sertificate/background_sertifikat.jpg'); ?>');
                background-size: 100% 100%;
                background-repeat: no-repeat;
                font-family: "Poppins";

            }
            .orify {
                margin: 0px !important;
                padding: 0px !important;
                border: 0px !important;
            }

            .firstStyle{
                font-size: 42px;
                /*color: #0093AD;*/
                font-family:impact;
                text-align: center;
            }
            .secondStyle{
                font-size: 18px;
                color: #000;
                font-family: Arial, sans-serif;
                /*font-style: italic;*/
            }
            .thirdStyle{
                font-size: 18px;
                font-family: 'Poppins';
                color: grey
            }
            .forthStyle{
                font-size: 42px;
                font-family: 'Times New Roman';
                text-align: center;
                color: #008B8B
            }

            .fifthStyle{
                font-size: 18px;
                color: #000;
               font-family: 'Times New Roman', serif;
            }

            .sixStyle{
                font-size: 18px;
                color: #000;
               font-family: 'Times New Roman', serif;
            }

            /*.container {
                position: absolute;
                bottom: 49.6796px;
                width: 250px;
            }*/

            .section {
                margin-bottom: 20px !important;
            }

            .page-break {
                page-break-after: always
            }
        </style>
    </head>
<body>
	<?php
		if(@$data['pemateri'][0]->nama){
			echo '
			<div class="orify" style="margin-top:120px !important;">
				<div class="section" style="text-align: center;">
		            <p class="orify firstStyle" style="padding-top: 30px"> Certificate Of Attendance</p>
		            <p class="orify secondStyle" style=""> Nomor : 890042/0010/D4.400/PD200/TSAT/10.2023</p>
		        </div>
		        <div class="section" style="text-align: center;">
		            <p class="orify thirdStyle" style="margin-top: 10px"> Sertifikat ini menyatakan bahwa </p>
		            <p class="orify forthStyle" style="margin-top: 10px; "> '.$data['pemateri'][0]->nama.'</p>
		        </div>
		        <div class="section" style="text-align: center;">
		            <p class="orify thirdStyle" style="">Telah menjadi Pemateri dalam pelatihan Internal Sharing</p>
		            <p class="orify thirdStyle" style=""><b>'.$data['detail']->judul_materi.'</b></p>
		        
		            <div style="text-align: center;margin-top: 30px">
		                <span class="orify fifthStyle" style="margin-right:5px !important;"> Bogor, '.date("d F Y", strtotime($data['detail']->tanggal)).'</span>
		                <br>
		               
		            </div>
		        </div>
		        <div class="container" style="padding-top: 30px">
		            <center>
		                <div class="" style="margin-bottom: 10px;text-align:center">
		                 	<img src="' . base_url("files/sertificate/") . (@$data['setting'] == '' ? 'ttd.png' : $data['setting']->scan_ttd) . '" alt="Deskripsi Gambar" width="20%">
		                </div>
		            </center>
		            <div style="text-align: center;" class="orify sixStyle">
		                <center><b>'.(isset($data['setting']) && is_object($data['setting']) ? $data['setting']->nama_ttd : 'MUCHMAD YAZID SAKTINO').'</b></center>
		            </div>
		            <hr style="width:250px; text-align:center; margin-left:0; margin-bottom:0px; margin-top:0px; color:#000; border: 0.5px solid #0093AD;">
		            <p class="orify sixStyle" style="text-align: center;">'.(isset($data['setting']) && is_object($data['setting']) ? $data['setting']->jabatan_ttd : 'VP HCM Telkomsat').'</p>
		            
		 	</div>';
		 	if($data['peserta']){
		 		echo '<div class="page-break"></div>';
		 	}
		}
 	?>
 	
 	<?php
 		$no = 0;
 		foreach ($data['peserta'] as $key => $value) {
 			$no = $no+1;
 			echo '
			<div class="orify" style="margin-top:120px !important;">
				<div class="section" style="text-align: center;">
		            <p class="orify firstStyle" style="padding-top: 30px"> Certificate Of Attendance</p>
		            <p class="orify secondStyle" style=""> Nomor : 890042/0010/D4.400/PD200/TSAT/10.2023</p>
		        </div>
		        <div class="section" style="text-align: center;">
		            <p class="orify thirdStyle" style="margin-top: 10px"> Sertifikat ini menyatakan bahwa </p>
		            <p class="orify forthStyle" style="margin-top: 10px; "> '.$value->nama.'</p>
		        </div>
		        <div class="section" style="text-align: center;">
		            <p class="orify thirdStyle" style="">Telah menjadi Peserta dalam pelatihan Internal Sharing</p>
		            <p class="orify thirdStyle" style=""><b>'.$data['detail']->judul_materi.'</b></p>
		        
		            <div style="text-align: center;margin-top: 30px">
		                <span class="orify fifthStyle" style="margin-right:5px !important;"> Bogor, '.date("d F Y", strtotime($data['detail']->tanggal)).'</span>
		                <br>
		               
		            </div>
		        </div>
		        <div class="container" style="padding-top: 30px">
		            <center>
		                <div class="" style="margin-bottom: 10px;text-align:center">
		                 	<img src="' . base_url("files/sertificate/") . (@$data['setting'] == '' ? 'ttd.png' : $data['setting']->scan_ttd) . '" alt="Deskripsi Gambar" width="20%">
		                </div>
		            </center>
		            <div style="text-align: center;" class="orify sixStyle">
		                <center><b>'.(isset($data['setting']) && is_object($data['setting']) ? $data['setting']->nama_ttd : 'MUCHMAD YAZID SAKTINO').'</b></center>
		            </div>
		            <hr style="width:250px; text-align:center; margin-left:0; margin-bottom:0px; margin-top:0px; color:#000; border: 0.5px solid #0093AD;">
		            <p class="orify sixStyle" style="text-align: center;">'.(isset($data['setting']) && is_object($data['setting']) ? $data['setting']->jabatan_ttd : 'VP HCM Telkomsat').'</p>
		        </div>
		 	</div>';
 			if($no < count($data['peserta'])){
 				echo '<div class="page-break"></div>';
 			}
 		}
 	?>
</body>
</html>