  <?php
     if (!empty($_POST["send"])) {
      $Name = $_POST["Name"];
      $Mobile = $_POST["Mobile"];
      $Email = $_POST["Email"];
      $Subject = $_POST["Subject"];
      $MessageDetails = $_POST["MessageDetails"];
      $toEmail = "it@uc.net.sa";
                    // eslam8070@gmail.com


     $mailHeaders = "Name: " . $Name .
     "\r\n Mobile: " . $Mobile .
     "\r\n Email: " . $Email .
     "\r\n Subject: " . $Subject .
     "\r\n Message: " . $MessageDetails . "\r\n";

     if (mail($toEmail, $Subject, $Name, $mailHeaders)) {
       $Message = "Thanks, Your Information Has Been Sent Successfully.";
         }
        }
   ?>

  <?php if (!empty($Message)) { ?>
      <div class="SentSuccess">
      <p> <?php echo "$Message" ?> </p>
      </div>

  <?php } ?>
  