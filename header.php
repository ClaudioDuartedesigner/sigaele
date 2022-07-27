<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortchu icon" href="./img/favicon.png">
	<meta property="og:image" content="https://www.sigaele.com.br/">
	<meta property="og:image:type" content="image/jpeg">
	<meta name='description' content='SigaEle Jesus!'>
	<link rel="stylesheet" type="text/css" href="./css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<title>SigaEle Jesus</title>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-C5EV8VHJ76"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'G-C5EV8VHJ76');
	</script>
</head>


<section class="container">
	<div class="dv-header">
 		<?php 
                    $filename = './img/logo.png';
             
                    if(file_exists($filename)) {
                    ?>
                    <a href="index.php"><img src="./img/logo.png" width="200" ></a><?php
                    }elseif(file_exists($filename)){
                    ?>  <a href="../index.php"><img src="../../../img/logo.png" width="200"></a>
                    <?php
                    }else{
                      ?>  <a href="../index.php"><img src="../img/logo.png" width="200"></a>  <?php
                    }
                ?>       
		</a>
	</div>
</section>