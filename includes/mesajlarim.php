<?php 

@session_start();
@ob_start();

if(!empty($_SESSION['email']) && !empty($_SESSION['isimsoyisim'])) {
	$email=$DB->filter($_SESSION['email']);
	$isimsoyisim=$DB->filter($_SESSION['isimsoyisim']);
	$profil=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND email=? AND state=?",array($isimsoyisim,$email,1),"ORDER BY ID ASC",1);

	if($profil!=false) {

		?>

		<head>
			<title>Mesajlarım | Gaziantep Rehberi</title>
		</head>

	<!-- Our Dashbord -->
		<section class="extra-dashboard-menu dn-992">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="ed_menu_list mt5">
							<ul>
								<li><a href="<?=SITE?>profilim"><span class="flaticon-avatar"></span> Profilim</a></li>
								<?php 
								if($profil[0]["status"]!="KULLANICI")
								{
									?>
									<li><a href="<?=SITE?>profilim/ilanlarim"><span class="flaticon-list"></span> İlanlarım</a></li>
									<?php
								}	

								 ?>
								
								<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
								<span class="contact-status away"></span>
								<li><a class="active"><span class="flaticon-chat"></span> Mesajlarım</a></li>
								<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
								<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>


	<!-- Our Dashbord -->
	<section class="our-dashbord dashbord bgc-f4">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						<div class="dashboard_navigationbar dn db-992">
							<div class="dropdown">
								<button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Profil Detayları</button>
								<ul id="myDropdown" class="dropdown-content">
									<li><a href="<?=SITE?>profilim"><span class="flaticon-avatar"></span> Profilim</a></li>
									<?php 
									if($profil[0]["status"]!="KULLANICI")
									{
										?>
										<li><a href="<?=SITE?>profilim/ilanlarim"><span class="flaticon-list"></span> İlanlarım</a></li>
										<?php
									}	

									 ?>
									<li><a href="<?=SITE?>profilim/kaydedilenler"><span class="flaticon-love"></span> Kaydedilenler</a></li>
									<li class="active"><a><span class="flaticon-chat"></span> Mesajlar</a></li>
									<li><a href="<?=SITE?>profilim/yorumlar"><span class="flaticon-note"></span> Yorumlar</a></li>
									<li><a href="<?=SITE?>cikis-yap"><span class="flaticon-logout"></span> Çıkış Yap</a></li>
								</ul>
							</div>
						</div>
					</div>
				<div class="col-lg-12 mb15">
					<div class="breadcrumb_content style2">
						<h2 class="breadcrumb_title float-left">Mesajlarım</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-5 col-xl-4">
					<div class="message_container">
						<div class="inbox_user_list">
							<div class="iu_heading">
								<div class="candidate_revew_search_box">
									<form class="form-inline">
								    	<input class="form-control" type="search" placeholder="Kişilerde Ara" aria-label="Search">
								    	<button class="btn" type="submit"><span class="flaticon-loupe"></span></button>
								    </form>
								</div>
							</div>
							<ul>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s1.jpg" alt="s1.jpg"/>
											<div class="meta">
												<h5 class="name">Darlene Robertson</h5>
												<p class="preview">Head of Development</p>
											</div>
											<div class="m_notif">2</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s2.jpg" alt="s2.jpg"/>
											<div class="meta">
												<h5 class="name">Jane Cooper</h5>
												<p class="preview">You: Where is Alex?</p>
											</div>
											<div class="m_notif">5</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
											<div class="meta">
												<h5 class="name">Joanne Davies</h5>
												<p class="preview">I'm going to office.</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status busy"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s4.jpg" alt="s4.jpg"/>
											<div class="meta">
												<h5 class="name">Sarah Miller</h5>
												<p class="preview">You: okay!</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status away"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s5.jpg" alt="s5.jpg"/>
											<div class="meta">
												<h5 class="name">Joanne Davies</h5>
												<p class="preview">Let’s go!</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status busy"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s6.jpg" alt="s6.jpg"/>
											<div class="meta">
												<h5 class="name">Sam Lee</h5>
												<p class="preview">Awesome!</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s7.jpg" alt="s7.jpg"/>
											<div class="meta">
												<h5 class="name">Vincent Porter</h5>
												<p class="preview">I'm going to office.</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s8.jpg" alt="s8.jpg"/>
											<div class="meta">
												<h5 class="name">Jacob Brown</h5>
												<p class="preview">You: Where is Alex?</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s1.jpg" alt="s1.jpg"/>
											<div class="meta">
												<h5 class="name">Vincent Porter</h5>
												<p class="preview">I'm going to office.</p>
											</div>
										</div>
									</a>
								</li>
								<li class="contact">
									<a href="#">
										<div class="wrap">
											<span class="contact-status online"></span>
											<img class="img-fluid" src="<?=SITE?>images/team/s2.jpg" alt="s2.jpg"/>
											<div class="meta">
												<h5 class="name">Jacob Brown</h5>
												<p class="preview">You: Where is Alex?</p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-7 col-xl-8">
					<div class="message_container mt30-smd">
						<div class="user_heading">
							<div class="wrap">
								<span class="contact-status online"></span>
								<img class="img-fluid mr10" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
								<div class="meta">
									<a class="text-thm tdu float-right fz14" href="#">Sohbeti Sil</a>
									<h5 class="name">Joanne Davies</h5>
									<p class="preview">Active was today at 11:43</p>
								</div>
							</div>
						</div>
						<div class="inbox_chatting_box">
							<ul class="chatting_content">
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:31</div>
								    	<p>Hello, John!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:31</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
								</li>
								<li class="media reply first">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>Are we meeting today?</p>
									</div>
								</li>
								<li class="media reply">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>The project finally complete! Let's go to!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:45</div>
								    	<p>Let's go!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:51</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s4.jpg" alt="s4.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:31</div>
								    	<p>Hello, John!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:31</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
								</li>
								<li class="media reply first">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>Are we meeting today?</p>
									</div>
								</li>
								<li class="media reply">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>The project finally complete! Let's go to!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:45</div>
								    	<p>Let's go!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:51</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
								</li>
								<li class="media reply first">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>Are we meeting today?</p>
									</div>
								</li>
								<li class="media reply">
									<div class="media-body text-right">
										<div class="date_time">Today, 10:35</div>
								    	<p>The project finally complete! Let's go to!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:45</div>
								    	<p>Let's go!</p>
									</div>
								</li>
								<li class="media sent">
									<span class="contact-status busy"></span>
									<img class="img-fluid align-self-start mr-3" src="<?=SITE?>images/team/s3.jpg" alt="s3.jpg"/>
									<div class="media-body">
										<div class="date_time">Today, 10:51</div>
								    	<p>simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</p>
									</div>
								</li>
							</ul>
						</div>
						<div class="mi_text">
							<div class="message_input">
								<form class="form-inline">
							    	<input class="form-control" name="messageval" type="search" placeholder="Enter text here..." aria-label="Search">
							    	<button class="btn" type="submit" name="sendmessage">Mesaj Gönder</button>
							    </form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


		<?php 
	}
}
else {
	?>
	<meta http-equiv="refresh" content="0;url=<?=SITE?>">
	<?php
}

?>
