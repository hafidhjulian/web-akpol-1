<?php

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Akademi Kepolisian</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://www.youtube.com">
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/instafeed.js/1.4.1/instafeed.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
		<link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<link rel="shortcut icon" src="assets/images/logoakpol.png">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	</head>
	<body>
			<!-- <div class="jumbotron jumbotron-fluid"> -->
			<!-- Background Video -->
			<div class="container-fluid">
				<div class="row">
					<div class="backvid" id="head">
					<video autoplay muted loop id="videos">
					<source src="assets/Akpol Bahasa Inggris.mp4" type="video/mp4">
						not supported
					</video>
					</div>
				</div>
			</div>
			<!-- Button Up -->
			<a href="#head" class="tomup"><button id="naik"><strong><i class="fa fa-angle-up"></i></strong></button></a>
			<!-- Navbar -->
				<div class="container">
					<nav class="navbar navbar-expand-md fixed-top nav-container">
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#beranda">
								<i class="fa fa-bars"></i>
							</button>
						<div class="container">
						<a class="navbar-brand" href="#carhome"><img src="assets/images/logoakpol.png"></a>
						<div class="collapse navbar-collapse" id="beranda">
							<ul class="navbar-nav">
								<li class="nav-item">
									<a class="nav-link" href="#visiMisi">Visi & Misi</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#struktur">Structure</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#galeri">Gallery</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" target="blank" href="http://ant-idea.com/portaltaruna/">Application</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#footer">About Us</a>
								</li>
								<li class="nav-item">
									<a class="nav-link btn text-center" href="#" data-toggle="modal" data-target="#login" id="btnlogin"><strong>Login</strong></a>
									<div id="login" class="modal fade modal-show">		
										<div class="modal-dialog">
											<div class="modal-content">

												<div class="modal-header">
													<h4 class="modal-title judmod">Login</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<div class="modal-body">
													<form>
														<div class="form-group">
													      	<label for="email">Email:</label>
													      	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
													    </div>
													    <div class="form-group">
													      	<label for="pwd">Password:</label>
													      	<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
													    </div>
													    <div class="form-check">
													      	<label class="form-check-label">
													        <input class="form-check-input" type="checkbox" name="remember"> Remember me
													      	</label>
													    </div>
													    <button type="submit" class="btn btn-primary btnlogin">Submit</button>
													</form>
													
												</div>
												
												<!-- <div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div> -->
											</div>
										</div>
									</div>
								</li>
								<!-- <li class="nav-item">
									<a class="nav-link btn-secondary" href="#" data-toggle="modal" data-target="#signup">Sign Up</a>
									<div id="signup" class="modal fade modal-show">		
										<div class="modal-dialog">
											<div class="modal-content">

												<div class="modal-header">
													<h4 class="modal-title judmod">Login</h4>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<div class="modal-body">
													<form>
														<div class="form-group">
													      	<label for="email">Email:</label>
													      	<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
													    </div>
													    <div class="form-group">
													      	<label for="pwd">Password:</label>
													      	<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
													    </div>
													    <div class="form-group">
													      	<label for="pwd">Repeat Password:</label>
													      	<input type="password" class="form-control" id="pwd" placeholder="Repeat password" name="pswd-repeat">
													    </div>
													    <div class="form-check">
													      	<label class="form-check-label">
													        <input class="form-check-input" type="checkbox" name="remember"> Remember me
													      	</label>
													    </div>
													    <button type="submit" class="btn btn-primary btnlogin">Submit</button>
													</form>
													
												</div>
												
												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
												</div> 
											</div>
										</div>
									</div>
								</li>  -->
							</ul>
						</div>
						</div>
					</nav>
			<!-- Foreground -->	
					<div class="deskripsi">
						
						<h1 id="akpol">AKADEMI KEPOLISIAN</h1>
						<h2 id="motto">"Dharma  Bijaksana  Ksatria"</h2>
						<div class="text-center">
							<a target="blank" href="http://penerimaan.polri.go.id/form_registrasi/1"><button class="btn" id="getbutton"><strong>Rekruitmen</strong></button></a>
							
						</div>
					</div>
				</div>
			<!-- Carousel -->
				<div class="container-fluid" id="carhome">
					<div class="row">
						<div class="col-md-12 col-xl-12 col-lg-12 col-sm-12">
							<div id="home" class="carousel slide" data-ride="carousel">
								<ul class="carousel-indicators">
									<li data-target="#home" data-slide-to="0" class="active"></li>
									<li data-target="#home" data-slide-to="1"></li>
									<li data-target="#home" data-slide-to="2"></li>
									<li data-target="#home" data-slide-to="3"></li>
									<li data-target="#home" data-slide-to="4"></li>
								</ul>

								<div class="carousel-inner" id="carimg">
									<div class="carousel-item active">
										<img src="assets/images/gubernurakpol.jpg">
									</div>
									<div class="carousel-item">
										<img src="assets/images/wagubakpol.jpg">
									</div>
									<div class="carousel-item">
										<img src="assets/images/wisuda.jpg">
									</div>
									<div class="carousel-item">
										<img src="assets/images/akademi.jpg">
									</div>
									<div class="carousel-item">
										<img src="assets/images/logo.jpg">
									</div>
								</div>

								<a class="carousel-control-prev" data-target="#home" data-slide="prev">
									<span class="carousel-control-prev-icon"></span>
								</a>
								<a class="carousel-control-next" data-target="#home" data-slide="next">
									<span class="carousel-control-next-icon"></span>
								</a>
							</div>
						</div>
					</div>	
				</div>
			<!-- Visi Misi -->
			<div class="container-fluid  vimi" id="visiMisi">
				<div class="container">
					<div class="row visi1">
						<div class="col-md-8" id="visiakpol">
							<h1 class="text-center">VISI AKPOL</h1>
							<p>“MENJADI LEMBAGA PENDIDIKAN YANG MENGHASILKAN POLISI PROFESIONAL, CERDAS, BERMORAL, DAN MODERN YANG BERWAWASAN GLOBAL DAN BERSTANDAR INTERNASIONAL (WORLD CLASS POLICE ACADEMY)”.</p>
							
							<h1 class="text-center" id="misi">MISI AKPOL</h1>
							<ol>
								<li>MENYELENGGARAKAN PENDIDIKAN PEMBENTUKAN PERWIRA POLRI MELALUI KEGIATAN PEMBELAJARAN, PELATIHAN, DAN PENGASUHAN SECARA BERTAHAP DAN BERKESINAMBUNGAN PADA SETIAP TINGKAT PENDIDIKAN</li>
								<li>MENYELENGGARAKAN KEGIATAN PENELITIAN DALAM UPAYA PENGEMBANGAN ILMU PENGETAHUAN DAN TEKNOLOGI YANG TERKAIT DENGAN BIDANG KEPOLISIAN.</li>
								<li>MENYELENGGARAKAN KEGIATAN PENGABDIAN MASYARAKAT YANG TERKAIT DENGAN BIDANG KEPOLISIAN.</li>
								<li>MENYELENGGARAKAN TATA KELOLA INSTITUSI YANG BERORIENTASI PADA PELAYANAN PRIMA DAN BERKEMBANG MENJADI PUSAT UNGGULAN (CENTER OF EXCELLENCE).</li>
								<li>MENGEMBANGKAN KERJASAMA DAN JEJARING KERJA DENGAN BERBAGAI LEMBAGA DI DALAM DAN LUAR NEGERI.</li>
							</ol>
						</div>
						<div class="col-md-4 text-center" id="even">
							<h1 id="judevent">Event</h1>
							<div id="accordion" id="desevent">
							    <div class="card">
							      <div class="card-header">
							        <a class="card-link" data-toggle="collapse" data-parent="#accordion" href="" data-target="#collapseOne">
							          Porsimaptar 2018
							        </a>
							      </div>
							      <div id="collapseOne" class="collapse">
							        <div class="card-body text-left">
							          <h5>Deskripsi acara :</h5>
							          <p>Porsimaptar Akpol 2018</p>
							          <hr>
							          <h5>Waktu :</h5>
							          <p>Senin (07.00)</p>
							          <hr>
							          <h5>Lokasi :</h5>
							          <p>Candi Baru, Semarang</p>
							          <hr>
							          <h5>Penyelenggara :</h5>
							          <p>Akademi Kepolisian</p>
							          <hr>
							          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.942709718621!2d110.41456911427763!3d-7.0160202949320425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b7870b1ee17%3A0x738e29f13a863bf9!2sAKADEMI+POLISI+TANGGON+KOSALA!5e0!3m2!1sid!2sid!4v1519367232720" width="285" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
							        </div>
							      </div>
							    </div>
							    <div class="card">
							      <div class="card-header">
							        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="" data-target="#collapseTwo">
							        Live Streaming
							      </a>
							      </div>
							      <div id="collapseTwo" class="collapse">
							        <div class="card-body">
							          Akademi Kepolisian, 
							        </div>
							      </div>
							    </div>
							    <div class="card">
							      <div class="card-header">
							        <a class="collapsed card-link" data-toggle="collapse" data-parent="#accordion" href="" data-target="#collapseThree">
							          SIAK
							        </a>
							      </div>
							      <div id="collapseThree" class="collapse">
							        <div class="card-body">
							         SISTEM AKADEMI KEPOLISIAN, 
							        </div>
							      </div>
							    </div>
							</div>
						</div>
					</div>
					<div class="row" id="berita">
						<div class="col-md-8 text-center">
							<h1>NEWS UPDATE</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-8">
							<div id="news" class="carousel slide" data-ride="carousel">
								<ul class="carousel-indicators">
									<li data-target="#news" data-slide-to="0" class="active"></li>
									<li data-target="#news" data-slide-to="1"></li>
									<li data-target="#news" data-slide-to="2"></li>
								</ul>

								<div class="carousel-inner">
									<div class="carousel-item active">
										
									</div>
									<div class="carousel-item">
										
									</div>
									<div class="carousel-item">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Deskripsi Gubernur -->
			<div class="container-fluid gub1 gubstr" id="struktur">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center judstr">
							<h1 id="judstruk">STRUKTUR</h1>
						</div>
					</div>
					<div class="row gubernur">
							<div class="col-md-6 gub">
								<div class="card">
								    <img class="card-img-top" src="assets/images/gubernur.jpg" style="width:100%">
								    <div class="card-body">
								      <h4 class="card-title"><strong>GUBERNUR AKADEMI KEPOLISIAN</strong></h4>
								      <p class="card-text"><strong>Irjen. Pol. Dr. H. Rycko Amelza Dahniel, M.Si.</strong></p>
								      <p class="card-text">Rycko termasuk polisi yang mendapat kenaikan pangkat luar biasa saat tergabung dalam tim Bareskrim, yang melumpuhkan teroris Dr Azahari dan kelompoknya di Kota Batu, Malang, Jawa Timur, 9 November 2005</p>
								      <button type="submit" data-toggle="modal" data-target="#desGub01" class="btn btn-outline-dark float-right">Read More</button>
										<div id="desGub01" class="modal fade">		
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title judmod">Irjen. Pol. Dr. H. Rycko Amelza Dahniel, M.Si.</h4>
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>

													<div class="modal-body deskripsigub text-justify">
														<p>Irjen. Pol. Dr. H. Rycko Amelza Dahniel, M.Si. (lahir di Bogor, Jawa Barat, 14 Agustus 1966; umur 51 tahun) tokoh Kepolisian Republik Indonesia (Polri). Saat ini, sejak 2 Juni 2017, ia menjabat sebagai Gubernur Akpol, setelah sebelumnya menjadi Kepala Polda Sumut yang aktif sejak 5 Oktober 2016 Rycko, lulusan terbaik Akpol 1988 ini berpengalaman dalam bidang reserse. 
														Jabatan terakhir jenderal bintang dua ini adalah Kapolda Sumut</p>
														<p>Rycko termasuk polisi yang mendapat kenaikan pangkat luar biasa saat tergabung dalam tim Bareskrim, yang melumpuhkan teroris Dr Azahari dan kelompoknya di Kota Batu, Malang, Jawa Timur, 9 November 2005[1]. 
															Ia mendapat penghargaan dari Kapolri saat itu, Jenderal Pol Sutanto bersama dengan para kompatriotnya, Tito Karnavian, Petrus Reinhard Golose, serta Idham Azis, dkk.</p>
													</div>
													
													<div class="modal-footer closegub">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
								    </div>
								</div>			
							</div>
							<div class="col-md-6 wagub">
								<div class="card">
								    <img class="card-img-top" src="assets/images/wagubernur.jpg" style="width:100%">
								    <div class="card-body">
								      <h4 class="card-title"><strong>WAKIL GUBERNUR AKADEMI KEPOLISIAN</strong></h4>
								      <p class="card-text"><strong>Brigjen. Pol. Drs. Basarudin, S.H., M.H.</strong></p>
								      <p class="card-text">Basarudin tercatat pernah menjabat sejumlah jabatan penting. Ia pernah menjabat ajudan Wakil Presiden RI Boediono</p>
								      <button type="submit" data-toggle="modal" data-target="#desWaGub01" class="btn btn-outline-dark float-right">Read More</button>
										<div id="desWaGub01" class="modal fade">		
											<div class="modal-dialog modal-dialog-centered">
												<div class="modal-content">
													<div class="modal-header">
														<h4 class="modal-title judmod">Brigjen. Pol. Drs. Basarudin, S.H., M.H.</h4>
														<button type="button" class="close" data-dismiss="modal">&times;</button>
													</div>

													<div class="modal-body deskripsigub text-justify">
														<p>Brigjen. Pol. Drs. Basarudin, S.H., M.H. (lahir di Semarang, Jawa Tengah, 25 Mei 1961; umur 56 tahun) adalah tokoh polisi Indonesia. Saat ini ia menjabat sebagai Wagub Akpol yang aktif sejak 4 Januari 2017.</p>
														<p>Basarudin tercatat pernah menjabat sejumlah jabatan penting. Ia pernah menjabat ajudan Wakil Presiden RI Boediono[1]. 
															Ia kemudian menjabat Wakapolda DIY, Wakapolda Sumut, Karowatpers SSDM Polri, Kapolda Sumbar dan terakhir sebagai Wagub Akpol.</p>
													</div>
													
													<div class="modal-footer closegub">
														<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													</div>
												</div>
											</div>
										</div>
								    </div>
								</div>		
							</div>
						
					</div>
					<div class="row">
						<div class="col-md-12 showstruk">
							<button type="submit" data-toggle="modal" data-target="#struk" class="btn center" id="butshow">Show Struktur</button>
							<div id="struk" class="modal fade">		
								<div class="modal-dialog modal-dialog-centered modal-lg">
									<div class="modal-content">
										<div class="modal-header">
											<h4 class="modal-title judmod">Struktur Organisasi Akademi Kepolisian</h4>
											<button type="button" class="close" data-dismiss="modal">&times;</button>
										</div>

										<div class="modal-body strukakademi text-justify">
											<img src="assets/images/struktur.png">
										</div>
										
										<div class="modal-footer closegub">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Galeri -->
			<div class="container-fluid galeri1" id="galeri">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center" id="judgal">
							<h1>GALLERY</h1>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12"  id="tabgal">
							<!-- Nav tabs -->
							<ul class="nav nav-tabs" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" data-toggle="tab" data-target="#foto">Photos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" data-target="#video">Videos</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" data-toggle="tab" data-target="#instagram">Instagram</a>
								</li>
							</ul>
							<!-- Tab content -->
							<div class="tab-content">
								<div id="foto" class="container tab-pane active">
									<div class="container">
									  <div class="galer">
									    <?php
									    $servername = "lumpia";
										$username = "root";
										$password = "";
										$dbname = "akpol_galeri";
										$conn = new mysqli($servername, $username, $password, $dbname);
										if ($conn->connect_error) {
										    die("Connection failed: " . $conn->connect_error);
										}

										$sql = "SELECT foto, id FROM data";
										$result = $conn->query($sql);
								          if($result->num_rows > 0) {

								              while ($row = $result->fetch_assoc()) {
								              	echo'<a href="#'.$row["id"].'" target="blank"><img src="'.$row["foto"].'"  class="img-responsive" width="325" height="200"></a>';
								              	
								              }
								          }
								          else {
											    echo "0 results";
											}
											$conn->close();
								        ?>
									  </div>
									</div>

								</div>
								<div id="video" class="container tab-pane fade">
									<br>
									<div class="row">
									<div class="col-md-12">
									<div class="stream youtube-gallery-feed">
										
										<?php
										$API_key    = 'AIzaSyAIqieMTrg3M5X3Qde3tkiMgmDlQIQ5NSw';
										$channelID  = 'UCSr_8bsnvPfKlEc4UX7WFyQ';
										$maxResults = 3;

										$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));
										foreach($videoList->items as $item){
										    //Embed video
										    if(isset($item->id->videoId)){
										        echo '<div class="youtube-video">
										                <iframe width="350" height="200" src="https://www.youtube.com/embed/'.$item->id->videoId.'" allowfullscreen></iframe>
										                
										            </div>';
										    }
										}
										?>
									</div>
									</div>
									</div>
								</div>
								<div id="instagram" class="container tab-pane fade">
									<div class="row">
										<div class="col-md-12 ig">
											<div id="instafeed-gallery-feed">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Logo Polda -->
			<div class="container-fluid" id="polda">
				<div class="container text-center">
					<div class="row">
						<div class="col-md-12 text-center">
							<h1>KEPOLISIAN DAERAH</h1>
						</div>
					</div>
					<div class="row" id="logpolda1">
						<div class="col">
							<a href="https://aceh.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA ACEH.png"></a>
						</div>
						<div class="col">
							<a href="http://sumut.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA SUMATERA UTARA.png" ></a>
						</div>
						<div class="col">
							<a href="https://sumbar.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA SUMATERA BARAT.png" ></a>
						</div>
						<div class="col">
							<a href="http://jambi.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA JAMBI.png" ></a>
						</div>
						<div class="col">
							<a href="http://riau.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA RIAU.png" ></a>
						</div>
						<div class="col">
							<a href="http://kepri.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA KEPULAUAN RIAU.png" ></a>
						</div>
						<div class="col">
							<a href="http://babel.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA BANGKA BELITUNG.png" ></a>
						</div>
						<div class="col">
							<a href="http://sumsel.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA SUMATERA SELATAN.png" ></a>
						</div>
					</div>
					<div class="row" id="logpolda2">
						<div class="col">
							<a href="http://bengkulu.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA BENGKULU.png" ></a>
						</div>
						<div class="col">
							<a href="http://lampung.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA LAMPUNG.png" ></a>
						</div>
						<div class="col">
							<a href="http://metro.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA METRO JAYA.png" ></a>
						</div>
						<div class="col">
							<a href="http://www.jabar.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA JAWA BARAT.png" ></a>
						</div>
						<div class="col">
							<a href="http://banten.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA BANTEN.png" ></a>
						</div>
						<div class="col">
							<a href="http://jateng.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA JAWA TENGAH.png" ></a>
						</div>
						<div class="col">
							<a href="http://jogja.polri.go.id/depan/" target="blank"><img src="assets/images/LOGO POLDA YOGYAKARTA.png" ></a>
						</div>
						<div class="col">
							<a href="http://humaspoldajatim.blogspot.co.id/" target="blank"><img src="assets/images/LOGO POLDA JAWA TIMUR.png" ></a>
						</div>
					</div>
					<div class="row" id="logpolda3">
						<div class="col">
							<a href="http://bali.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA BALI.png" ></a>
						</div>
						<div class="col">
							<a href="http://ntb.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA NTB.png" ></a>
						</div>
						<div class="col">
							<a href="http://tribratanewsntt.com/" target="blank"><img src="assets/images/LOGO POLDA NTT.png" ></a>
						</div>
						<div class="col">
							<a href="https://kalbar.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA KALIMANTAN BARAT.png" ></a>
						</div>
						<div class="col">
							<a href="http://kalteng.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA KALIMANTAN TENGAH.png" ></a>
						</div>
						<div class="col">
							<a href="http://kaltim.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA KALIMANTAN TIMUR.png" ></a>
						</div>
						<div class="col">
							<a href="https://kalsel.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA KALIMANTAN SELATAN.png" ></a>
						</div>
						<div class="col">
							<a href="http://sulut.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA SULAWESI UTARA.png" ></a>
						</div>
					</div>
					<div class="row" id="logpolda4">
						<div class="col">
							<a href="http://gorontalo.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA GORONTALO.png" ></a>
						</div>
						<div class="col">
							<a href="https://sulteng.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA SULAWESI TENGAH.png" ></a>
						</div>
						<div class="col">
							<a href="sultra.polri.go.id" target="blank"><img src="assets/images/LOGO POLDA SULAWESI TENGGARA.png" ></a>
						</div>
						<div class="col">
							<a href="sulsel.polri.go.id" target="blank"><img src="assets/images/LOGO POLDA SULAWESI SELATAN.png" ></a>
						</div>
						<div class="col">
							<img src="assets/images/LOGO POLDA MALUKU.png" >
						</div>
						<div class="col">
							<img src="assets/images/LOGO POLDA MALUKU UTARA.png" >
						</div>
						<div class="col">
							<img src="assets/images/LOGO POLDA PAPUA BARAT.png" >
						</div>
						<div class="col">
							<a href="http://papua.polri.go.id/" target="blank"><img src="assets/images/LOGO POLDA PAPUA.png" ></a>
						</div>
					</div>
				</div>
			</div>
			<!-- Footer -->
			<div class="container-fluid" id="footer">
					<div class="row foot1">
						<div class="col-md-3 logoFooter">
							<img src="assets/images/logoakpol.png">
						</div>
						<div class="col-md-1" id="list1">
							<div style="width:1px; height:200px; background-color:black;"></div>
						</div>
						<div class="col-md-4 m-0" id="alam">
							<p class="f1"><strong>Alamat : </strong></p>
							<p class="f2"><a href="https://www.google.co.id/maps/place/Akademi+Kepolisian/@-7.0112312,110.427744,17z/data=!3m1!4b1!4m5!3m4!1s0x2e708c8165555555:0x558135ef42acfb1d!8m2!3d-7.0112312!4d110.4299327?hl=id" target="blank">Jl. Sultan Agung No 131 Candi Baru Semarang, Jawa Tengah</a></p>
							<p class="f3"><strong>Telepon : </strong>021 8411680-90</p>
							<p class="f4"><strong>Email : </strong>info@akpol.ac.id</p>
						</div>
						<div class="col-md-1" id="list2">
							<div style="width:1px; height:200px; background-color:black;"></div>
						</div>
						<div class="col-md-3 sosmed text-center">
							<h4>Contact Us</h4>

							<span class="fa-stack fa-lg">
							<a href="https://www.instagram.com/humas_akpol/" target="blank">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-instagram fa-stack-1x"></i>
                            </a>
                            </span>

							<span class="fa-stack fa-lg">
							<a href="https://www.youtube.com/channel/UCSr_8bsnvPfKlEc4UX7WFyQ">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-youtube-play fa-stack-1x"></i>
                            </a>
                            </span>

                            <span class="fa-stack fa-lg">
                            <a href="https://twitter.com/akpol_semarang">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-twitter fa-stack-1x"></i>
                            </a>
                            </span>

                            <span class="fa-stack fa-lg">
                            <a href="https://www.facebook.com/adminhumasakpol/">
                            <i class="fa fa-circle-thin fa-stack-2x"></i>
                            <i class="fa fa-facebook fa-stack-1x"></i>
                            </a>
                            </span>

						</div>
					</div>
					<div class="row">
						<div class="col-md-12 text-center">
							<p>Copyright &copy; 2018 Akademi Kepolisian</p>
						</div>
					</div>
			</div>
	</body>
</html>

<script>
$( document ).ready(function() {
  //Page scrolling
  $('a.navbar-brand, a.nav-link, .footer-nav-link, .tomup').click(function(){
    var $link = $(this);
    $('html, body').stop().animate({
      scrollTop: ($($link.attr('href')).offset().top - 50)
    }, 1250);

  });

  // Highlight the top nav as scrolling occurs
  $('body').scrollspy({
    target: ".navbar",
    offset: 51
  });
});
</script>

<script>
    
	$(document).ready(function(){
    $('.modal').each(function(){
            var src = $(this).find('iframe').attr('src');

        $(this).on('click', function(){

            $(this).find('iframe').attr('src', '');
            $(this).find('iframe').attr('src', src);

        });
    });
});
</script>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
        document.getElementById("naik").style.display = "block";
    } else {
        document.getElementById("naik").style.display = "none";
    }
}
</script>


<script>
	$(document).ready(function(){       
	 var scroll_start = 0;
   var startchange = $('#home');
    var offset = startchange.offset();
     if (startchange.length){
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $(".navbar").css('background-color', 'rgba(196,35,38,0.4)');
        } else {
           $('.navbar').css('background', '#DD1A1A');
        }
    });
     }
 });
 </script>

<script type="text/javascript">
  var userFeed = new Instafeed({
    get: 'user',
    userId: '1732023749',
    clientId: 'e894a97b714745c9a06327e8caf0c38e',
    accessToken: '1732023749.1677ed0.3ddc499c50a24163992553e9fcaf5e09',
    // resolution: 'standard_resolution',
    template: '<a href="{{link}}" target="_blank" id="{{id}}"><img src="{{image}}" /></a>',
    sortBy: 'most-recent',
    links: false,
    target: "instafeed-gallery-feed"
  });
  userFeed.run();
</script>


