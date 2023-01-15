<?php 

@session_start();
@ob_start();
define("DATA", "data/");
define("PAGE", "includes/");
define("CLASSPAGE", "admin/class/");
include_once(DATA."connection.php");
define("SITE", $weburl);
 
date_default_timezone_set('Europe/Istanbul');

$panocheck=$DB->CallData("pano","WHERE state=?",array(1),"ORDER BY ID ASC");

if($panocheck!= false) {
	foreach ($panocheck as $key => $value) {
		$username=$DB->CallData("kullanicilar","WHERE isimsoyisim=? AND state=?",array($value["name"],1),"ORDER BY ID ASC");
		$now = time();
		$startdate = strtotime($value["date"]);
		$datediff = $now - $startdate;
		$totalday = floor($datediff / 86400);
		
		if($totalday>$username[0]["panotime"]) {
			
			$updatepano=$DB->RunQuery("UPDATE pano","SET state=? WHERE ID=?",array(2,$value["ID"]));
		}
	}

}





?>

<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta http-equiv="keywords" content="<?=$webseo?>">
    <meta http-equiv="description" content="<?=$webdescription?>">
    <link rel="shortcut icon" type="image/x-icon" href="<?=SITE?>images/logo-dark.png">
    <link rel="manifest" href="<?=SITE?>manifest.json">
    <meta name="description" content="<?=$webdescription?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="<?=SITE?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=SITE?>css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="<?=SITE?>css/responsive.css">
    <!-- Title -->

    <!-- Favicon -->
    <link href="<?=SITE?>images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="<?=SITE?>images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>





    <!--PWA Import-->


    <meta name="theme-color" media="(prefers-color-scheme: light)" content="white">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="e-gantep.com">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="apple-touch-icon" sizes="128x128" href="<?=SITE?>pwa/image/128x128.png">
    <link rel="apple-touch-icon-precomposed" sizes="128x128" href="<?=SITE?>pwa/image/128x128.png">
    <link rel="icon" sizes="192x192" href="<?=SITE?>pwa/image/192x192.png">
    <link rel="icon" sizes="128x128" href="<?=SITE?>pwa/image/128x128.png">

    <script>
    if ("serviceWorker" in navigator) {

        window.addEventListener('load', function() {
            navigator.serviceWorker.register('<?=SITE?>sw.js?v=10');
            console.log("Browser supported!");
        });
    } else {
        console.log("Browser not supported!");
    }
    </script>

    <!--PWA Import-->




</head>


<body>

    <?php 

	include_once(DATA."header.php");

	?>
    <!-- header-end -->




    <?php 

	if($_GET && !empty($_GET['page'])) {
		$page=$_GET['page'].".php";
		if(file_exists(PAGE.$page)) {


			include_once(PAGE.$page);

		}

		else {

			include_once(PAGE."home.php");




		}


	}
	else {

		include_once(PAGE."home.php");


	}

	?>

    <?php 
	include_once(DATA."footer.php");
	?>


    <a class="scrollToHome" href="#"><i class="fa fa-angle-up fa-2x" style="margin-top: 8px;"></i></a>


    <script>
    const installButton = document.getElementById('install-app');
    let beforeInstallPromptEvent
    window.addEventListener("beforeinstallprompt", function(e) {
        e.preventDefault();
        beforeInstallPromptEvent = e
        installButton.style.display = 'block'
        installButton.addEventListener("click", function() {
            e.prompt();
        });
        installButton.hidden = false;
    });
    installButton.addEventListener("click", function() {
        beforeInstallPromptEvent.prompt();
    });
    </script>


    <script type="text/javascript">
    function ilanFavoriEkle(SITE, ilanID, key) {
        $.ajax({
            method: "POST",
            url: SITE + "ajax.php",
            data: {
                "ilanID": ilanID,
                "ilanKey": key,
                "islemtipi": "ilanfavoriekle"
            },
            dataType: 'json',
            cache: false,
            success: function(result) {
                $("#favilan" + ilanID).css("color", result[0]);


                $("#favilan" + ilanID).removeClass(result[2]);
                $("#favilan" + ilanID).addClass(result[1]);




            }
        });
    }
    </script>





    <script src="<?=SITE?>js/jquery-3.6.0.js"></script>

    <script src="<?=SITE?>js/jquery-migrate-3.0.0.min.js"></script>
    <script src="<?=SITE?>js/popper.min.js"></script>
    <script src="<?=SITE?>js/bootstrap.min.js"></script>
    <script src="<?=SITE?>js/jquery.mmenu.all.js"></script>
    <script src="<?=SITE?>js/ace-responsive-menu.js"></script>
    <script src="<?=SITE?>js/bootstrap-select.min.js"></script>
    <script src="<?=SITE?>js/isotop.js"></script>
    <script src="<?=SITE?>js/snackbar.min.js"></script>
    <script src="<?=SITE?>js/simplebar.js"></script>
    <script src="<?=SITE?>js/parallax.js"></script>
    <script src="<?=SITE?>js/scrollto.js"></script>
    <script src="<?=SITE?>js/jquery-scrolltofixed-min.js"></script>
    <script src="<?=SITE?>js/jquery.counterup.js"></script>
    <script src="<?=SITE?>js/wow.min.js"></script>
    <script src="<?=SITE?>js/progressbar.js"></script>
    <script src="<?=SITE?>js/slider.js"></script>
    <script src="<?=SITE?>js/timepicker.js"></script>
    <!-- Custom script for all pages -->
    <script src="<?=SITE?>js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>