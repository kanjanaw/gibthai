<?php
	if(empty($_title)) 			$_title ='';
	if(empty($_keywords)) 		$_keywords ='';
	if(empty($_description)) 	$_description ='';
?>
    <title>
        <?php echo $_title;?>
    </title>
    <meta name="keywords" content="<?php echo $_keywords;?>" />
    <meta name="description" content="<?php echo $_description;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robot" content="index, follow" />
    <meta name='copyright' content='Orange Technology Solution co.,ltd.'>
    <meta name='designer' content='Netthakan O.'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta property="og:image" content="images/logo.png" />
    <link type="text/css" rel="stylesheet" href="css/layout.css"/>
    <link type="image/ico" rel="shortcut icon" href="images/favicon.ico">


    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    
   

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