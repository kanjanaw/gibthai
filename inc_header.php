<?php
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>
    <title>
        <?php echo $_title;?>
        ระบบขอรับบริการสอบเทียบและตรวจเช็คสถานะงาน
    </title>
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robot" content="index, follow" />
    <meta name='copyright' content='Orange Technology Solution co.,ltd.'>
    <meta name='designer' content='Kanjana S.'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta property="og:image" content="images/logo.png" />
    <link type="text/css" rel="stylesheet" href="css/layout.css"/>
    <link type="image/ico" rel="shortcut icon" href="images/icon.png">

    <!-- style sheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- polo style sheet -->
    <!-- <link rel="stylesheet" href="css/polo-style.css">
    <link rel="stylesheet" href="css/polo-plugins.css"> -->



    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Thai:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">


    <script src="js/jquery.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

    <!-- Google Recaptcha v2 -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>


    <script type="text/javascript">
		$(document).ready(function() {
			$(".select-display-slide > li").click(function() {
				var rel = $(this).attr("rel");
				console.log(rel);
				$('.display-slide').hide();
				$('.display-slide[rel=' + rel + ']').fadeIn();
				$(".select-display-slide > li").removeClass("active");
				$(this).addClass("active");
			});
		});

	</script>


