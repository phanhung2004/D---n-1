<?php
  function insert_taikhoan($name, $email, $sodienthoai, $diachi, $password){
    $sql = "INSERT INTO `taikhoan` (`username`, `email`, `sodienthoai`, `diachi`, `pass`) VALUES ('$name', '$email','$sodienthoai','$diachi', '$password');";
    pdo_execute($sql);
}
function check_existing_email($email){
    try {
        $conn = pdo_get_connection();
        $sql = "SELECT COUNT(*) as count FROM `taikhoan` WHERE `email` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return ($result['count'] > 0);
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}
// function load_one_account($id){
//     $sql = "SELECT * FROM `taikhoan` WHERE taikhoan.id = '$id'";
//     pdo_query_one($sql);
// }
function checkuser($email,$password) {
    $sql="SELECT * FROM taikhoan WHERE email='$email' and pass='$password'";
    $taikhoan = pdo_query_one($sql);
    return $taikhoan;

}
function dangxuat() {
    if (isset($_SESSION['user'])) {
        unset($_SESSION['user']);
    }
}
function loadAll_taikhoan() {
    $sql="SELECT * FROM taikhoan";
    $listtaikhoan=pdo_query($sql);
    return $listtaikhoan;
}

function update_taikhoan($id,$username,$pass,$sodienthoai){
    $sql="UPDATE `taikhoan` SET `username` = '$username', `sodienthoai` = '$sodienthoai', `pass` = '$pass' WHERE `taikhoan`.`id` = '$id'";
    pdo_query_one($sql);
    // return $onedanhmuc;
}
function update_taikhoan_new($id,$email,$pass,$username,$diachi,$sodienthoai){
    $sql="UPDATE `taikhoan` SET `username` = '$username', `email` = '$email', `sodienthoai` = '$sodienthoai', `diachi` = '$diachi', `pass` = '$pass' WHERE `taikhoan`.`id` = '$id'";
    pdo_query_one($sql);
    // return $onedanhmuc;
}


function loadone_taikhoan($id){
    $sql="SELECT * FROM `taikhoan` WHERE `taikhoan`.`id` = '$id'";
    $onetaikhoan=pdo_query_one($sql);
    return $onetaikhoan;
}

function delete_taikhoan($id){
    $sql = "DELETE FROM taikhoan WHERE `taikhoan`.`id` = '$id'";
    pdo_execute($sql);
}
function sendMail($email){
    $sql = "SELECT * FROM `taikhoan` WHERE `email` = '$email'";
    $taikhoan = pdo_query_one($sql);
    
    if($taikhoan != false){
        sendMailPass($email, $taikhoan['username'], $taikhoan['pass']);
        return "Gửi email thành công";
    }else{
        return "Email không tồn tại";
    }
}
function sendMailPass($email, $name, $pass){
    // require 'vendor/autoload.php';
    // require 'PHPMailer-master/src/Exception.php';
    // require 'PHPMailer-master/src/PHPMailer.php';
    // require 'PHPMailer-master/src/SMTP.php';
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    $mail = new PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'sandbox.smtp.mailtrap.io';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '4d716658d52dc7';                     //SMTP username
    $mail->Password   = 'a8b92cebe70e6f';                               //SMTP password
    $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('DuAn1@example.com', 'ShopWin');
    $mail->addAddress($email, $name);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'SHOP WIN ban quan ao xac nhan quen mat khau duoc dung bang email cua ban';
    $mail->Body    = 'Pass cua ban la'.$pass;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}

?>