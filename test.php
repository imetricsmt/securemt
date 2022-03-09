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
         
                $succMsg = 'Your contact request has been submitted successfully.';
               
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
      <title>Using hCaptcha with PHP</title>
      <script src="https://www.hCaptcha.com/1/api.js" async defer></script>
   </head>
   <body>
      <div>
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
               <input type="submit" name="submit" value="CONTINUE">
            </form>
         </div>
         <div class="clear"> </div>
      </div>
   </body>
</html>