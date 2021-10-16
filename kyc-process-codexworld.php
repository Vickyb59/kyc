<?php
$uploadedFile = $statusMsg = '';
$msgClass = 'errordiv';
if(isset($_POST['name'])){
    // Get the submitted form data
    $name = $_POST['name']; // required
    $username = $_POST['username']; // required
    $profession = $_POST['profession']; // required
    $networth = $_POST['networth']; // required
    // if message is empty || not
    if (
        empty($_POST['message'])
    ) {
        $message = 'There appears to be no additional message';
    }else{
        $message = $_POST['message']; // optional
    }
    
    // Check whether submitted data is not empty
    if(!empty($name)){
        
        
        $uploadStatus = 1;
        
        // Upload validid file
        if(!empty($_FILES["validid"]["name"])){
            
            // File path config
            $targetDir = "uploads/";
            $fileName = basename($_FILES["validid"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
            
            // Allow certain file formats
            $allowTypes = array('pdf', 'doc', 'docx', 'jpg', 'png', 'jpeg');
            if(in_array($fileType, $allowTypes)){
                // Upload file to the server
                if(move_uploaded_file($_FILES["validid"]["tmp_name"], $targetFilePath)){
                    $uploadedFile = $targetFilePath;
                }else{
                    $uploadStatus = 0;
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $uploadStatus = 0;
                $statusMsg = 'Sorry, only PDF, DOC, JPG, JPEG, & PNG files are allowed to upload.';
            }
        }
        
        if($uploadStatus == 1){
            
            // Recipient
            $toEmail = 'israelcharlse@gmail.com';

            // Sender
            $from = 'starta@startacap.com';
            $fromName = $name;
            
            // Subject
            $emailSubject = 'New KYC Form Submission by '.$name;
            
            // Message 
            $htmlContent = '<h2>KYC Form Submission</h2>
                <p><b>Name:</b> '.$name.'</p>
                <p><b>Username:</b> '.$username.'</p>
                <p><b>Profession:</b> '.$profession.'</p>
                <p><b>Net Worth:</b> '.$networth.'</p>
                <p><b>Message:</b><br/>'.$message.'</p>';
            
            // Header for sender info
            $headers = "From startacap";

            if(!empty($uploadedFile) && file_exists($uploadedFile)){
                
                // Boundary 
                $semi_rand = md5(time()); 
                $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 
                
                // Headers for attachment 
                $headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 
                
                // Multipart boundary 
                $message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
                "Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 
                
                // Preparing attachment
                if(is_file($uploadedFile)){
                    $message .= "--{$mime_boundary}\n";
                    $fp =    @fopen($uploadedFile,"rb");
                    $data =  @fread($fp,filesize($uploadedFile));
                    @fclose($fp);
                    $data = chunk_split(base64_encode($data));
                    $message .= "Content-Type: application/octet-stream; name=\"".basename($uploadedFile)."\"\n" . 
                    "Content-Description: ".basename($uploadedFile)."\n" .
                    "Content-Disposition: attachment;\n" . " filename=\"".basename($uploadedFile)."\"; size=".filesize($uploadedFile).";\n" . 
                    "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
                }
                
                $message .= "--{$mime_boundary}--";
                $returnpath = "-f admin@startacap.com";
                
                // Send email
                $mail = mail($toEmail, $emailSubject, $message, $headers, $returnpath);
                
                // Delete attachment file from the server
                @unlink($uploadedFile);
            }else{
                 // Set content-type header for sending HTML email
                $headers .= "\r\n". "MIME-Version: 1.0";
                $headers .= "\r\n". "Content-type:text/html;charset=UTF-8";
                
                // Send email
                $mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 
            }
            
            // If mail sent
            if($mail){
                $statusMsg = 'Your KYC request has been submitted successfully !';
                $msgClass = 'succdiv';
            }else{
                $statusMsg = 'Your KYC request submission failed, please try again.';
            }
        }
        
    }else{
        $statusMsg = 'Please fill all the fields.';
    }
}

echo $statusMsg;
?>