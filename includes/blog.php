<?php 
	if(empty($_GET['sayfa'])) {
				$page=1;
	}else {
				$page=strip_tags($_GET['sayfa']);
	}
		$blogcount=$DB->CallData("blog","WHERE state=?",array(1),"ORDER BY date ASC");
		$limit=3;
		$startlimit=($page*$limit)-$limit;
		$totalRecord=count($blogcount);
		$pageNumber=ceil($totalRecord/$limit);
		$blog=$DB->CallData("blog","WHERE state=?",array(1),"ORDER BY date ASC","".$startlimit.",".$limit."");
 ?>


<head>
	<title>Blog | Gaziantep Rehberi</title>
</head>

	<!-- Inner Page Breadcrumb -->
	<section class="inner_page_breadcrumb style2" style="background-image: url(<?=SITE?>images/banner/blog.jpg);">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-xl-6">
					<div class="breadcrumb_content">
						<h2 class="breadcrumb_title">Blog</h2>
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="<?=SITE?>">Ana Sayfa</a></li>
						    <li class="breadcrumb-item active" aria-current="page">Blog</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Main Blog Post Content -->
	<section class="blog_post_container">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="main_blog_post_content">

						<?php 
							for ($i=0; $i <count($blog) ; $i++) { 
								if(!empty($blog[$i]["image"])) {$image=$blog[$i]["image"];} else {$image='varsayilan.jpg';} 
								setlocale(LC_ALL, 'tr_TR.UTF-8');
                $nowdate=strtotime($blog[$i]["date"]);
                $today = date("j F",$nowdate);
                $turkishdate=$DB->convertMonthToTurkishCharacter($today);
						 ?>

						<div class="for_blog list-type feat_property">
							<div class="thumb w100 pb10">
								<img class="img-whp" src="<?=SITE?>images/blog/<?=$image?>" alt="<?=$image?>">
								<div class="tag bgc-thm"><a class="text-white" href="<?=SITE?>blog-detay/<?=$blog[$i]["seflink"]?>"><?=$blog[$i]["kategori"]?></a></div>
							</div>
							<div class="details pb5">
								<div class="tc_content pt15">
									<div class="bp_meta mb20">
										<ul>
											<li class="list-inline-item"><span class="flaticon-avatar mr10"></span> <?=$blog[$i]["phone"]?></li>
											<li class="list-inline-item"><span class="flaticon-date mr10"></span> <?=$turkishdate?></li>
										</ul>
									</div>
									<a href="<?=SITE?>blog-detay/<?=$blog[$i]["seflink"]?>"><h4 class="mt15 mb20"><?=$blog[$i]["title"]?></h4></a>
									<a href="<?=SITE?>blog-detay/<?=$blog[$i]["seflink"]?>"><p class="mb10"><?=mb_substr(strip_tags(stripslashes($blog[$i]["text"])), 0,150,"UTF-8")?>...</p></a>
									<a class="tdu text-thm" href="<?=SITE?>blog-detay/<?=$blog[$i]["seflink"]?>">Daha fazla oku</a>
								</div>
							</div>
						</div>

						<?php 
						}
						 ?>

						
						
						
						<div class="row">


							<div class="col-lg-12">
								<div class="mbp_pagination mt30">
									<ul class="page_navigation">
									<?php 
									if($page > 1) {
										if($page==2) {
											?>
											<li class="page-item">
								    	<a class="page-link" href="<?=SITE?>blog" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
								    </li>
											<?php
										}
										else {

										

										$newPage=$page-1;

										?>
										<li class="page-item">
								    	<a class="page-link" href="<?=SITE?>blog/<?=$newPage?>" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-left"></span></a>
								    </li>
										<?php
										}
									}

									


									 ?>

									 <?php 
									 $record=10;
									 for ($i=$page-$record; $i < $page+$record ; $i++) { 
									 	if($i > 0 && $i<=$pageNumber) {
									 		if($i == $page) {
									 			?>
									 			<li class="page-item active"><a class="page-link" href="<?=SITE?>blog/<?=$i?>"><?=$i?></a></li>
									 			<?php

									 		}
									 		else {

									 			if($i==1) {
									 				?>
									 				<li class="page-item"><a class="page-link" href="<?=SITE?>blog"><?=$i?></a></li>
									 				<?php

									 			}
									 			else {

									 			

									 		?>
									 		<li class="page-item"><a class="page-link" href="<?=SITE?>blog/<?=$i?>"><?=$i?></a></li>
									 		<?php
									 		}
									 	}

									 	}
									 
									 }
									  ?>
								    
								    
								    

								    <?php 
								    if($page != $pageNumber) {
											$newPage=$page+1;
										?>
											<li class="page-item">
									    	<a class="page-link" href="<?=SITE?>blog/<?=$newPage?>" tabindex="-1" aria-disabled="true"> <span class="fa fa-angle-right"></span></a>
									    </li>
											<?php

										}
								     ?>
								    
								</ul>
								</div>
							</div>



						</div>
					</div>
				</div>
				<div class="col-lg-4 col-xl-4">
					<div class="sidebar_search_widget">
						<div class="blog_search_widget">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="To search type and hit enter" aria-label="Recipient's username">
							</div>
						</div>
					</div>
					<div class="terms_condition_widget">
						<h4 class="title">Categories Property</h4>
						<div class="widget_list">
							<ul class="list_details order_list list-style-type-bullet">
								<li><a href="#">Accepts Credit Cards</a></li>
								<li><a href="#">Smoking Allowed</a></li>
								<li><a href="#">Bike Parking</a></li>
								<li><a href="#">Street Parking</a></li>
								<li><a href="#">Wireless Internet</a></li>
								<li><a href="#">Alcohol</a></li>
								<li><a href="#">Pet Friendly</a></li>
							</ul>
						</div>
					</div>
					<div class="sidebar_feature_listing">
						<h4 class="title">Top Article</h4>
						<div class="media">
							<img class="align-self-start mr-3" src="<?=SITE?>images/blog/fls1.jpg" alt="fls1.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Great Business Tips in 2020</h5>
						    	<a href="#">January 7, 2021</a>
							</div>
						</div>
						<div class="media">
							<img class="align-self-start mr-3" src="<?=SITE?>images/blog/fls2.jpg" alt="fls2.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">Excited News About Fashion.</h5>
						    	<a href="#">January 7, 2021</a>
							</div>
						</div>
						<div class="media mb0">
							<img class="align-self-start mr-3" src="<?=SITE?>images/blog/fls3.jpg" alt="fls3.jpg">
							<div class="media-body">
						    	<h5 class="mt-0 post_title">8 Amazing Tricks About Business</h5>
						    	<a href="#">January 7, 2021</a>
							</div>
						</div>
					</div>
					<div class="blog_tag_widget">
						<h4 class="title">Tags</h4>
						<ul class="tag_list">
							<li class="list-inline-item"><a href="#">Travelling</a></li>
							<li class="list-inline-item"><a href="#">Art</a></li>
							<li class="list-inline-item"><a href="#">Vacation</a></li>
							<li class="list-inline-item"><a href="#">Tourism</a></li>
							<li class="list-inline-item"><a href="#">Culture</a></li>
							<li class="list-inline-item"><a href="#">Lifestyle</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
