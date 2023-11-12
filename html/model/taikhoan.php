<?php
  function insert_taikhoan($name, $email, $sodienthoai, $diachi, $password){
    $sql = "INSERT INTO `taikhoan` (`name`, `email`, `sodienthoai`, `diachi`, `pass`) VALUES ('$name', '$email','$sodienthoai','$diachi', '$password');";
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
?>