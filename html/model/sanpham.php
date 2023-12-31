<?php
 function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 12";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
 }
 function update_delete_sanpham($id){
  $sql = "UPDATE `sanpham` SET `trangthai_sanpham` = 1 WHERE `sanpham`.`id` = '$id'";
  pdo_execute($sql);
 }
 function count_sanpham($iddm){
  $sql = "SELECT COUNT(*) AS product_count FROM sanpham WHERE `iddm` = '$iddm'";
  $result = pdo_execute($sql);
  return $result;
 }
 function loadall_sanpham_new($keyw="",$iddm=0){
  $sql="SELECT * FROM `sanpham` where `trangthai_sanpham` = 0";
  // where 1 tức là nó đúng
  if($keyw!=""){
      $sql.=" and name like '%".$keyw."%'";
  }
  if($iddm>0){
      $sql.=" and iddm ='".$iddm."'";
  }
  $sql.=" order by id desc";
  $listsanpham=pdo_query($sql);
  return  $listsanpham;
}
   function loadall_sanpham($keyw="",$iddm=0){
      $sql="select * from sanpham where 1";
      // where 1 tức là nó đúng
      if($keyw!=""){
          $sql.=" and name like '%".$keyw."%'";
      }
      if($iddm>0){
          $sql.=" and iddm ='".$iddm."'";
      }
      $sql.=" order by id desc";
      $listsanpham=pdo_query($sql);
      return  $listsanpham;
  }
  function delete($id){
    $sql = "DELETE FROM `sanpham` WHERE id=".$id;
    pdo_execute($sql);
  }

  function insert_sanpham($name, $price, $color, $image, $size, $mota, $date, $soluong, $giagoc, $giakhuyenmai, $iddm){
    $sql = "INSERT INTO `sanpham` (`name`, `price`, `color`, `image`, `size`, `mota`, `ngaydang`, `soluong`, `giagoc`, `giakhuyenmai`, `iddm`) VALUES ('$name', '$price','$color','$image','$size', '$mota', '$date', '$soluong', '$giagoc', '$giakhuyenmai', '$iddm');";
    pdo_execute($sql);
}
function count_sanpham_home(){
  $sql = "SELECT COUNT(*) AS total1 FROM sanpham"; // Truy vấn để đếm tổng số sản phẩm
  $ket_qua = pdo_query_one($sql);
  return  $ket_qua;
}
function loadone_sanpham($id){
  $sql = "select * from sanpham where id = $id";
  $result = pdo_query_one($sql);
  return $result;
}
function updatesp($id,$name, $price, $color, $image, $size, $mota, $soluong, $giagoc, $giakhuyenmai, $iddm) {
  if($image!=""){
      $sql = "UPDATE `sanpham` SET `name` = '{$name}', `price` = '{$price}', `image` = '{$image}', `mota` = '{$mota}', `iddm` = '{$iddm}',`size` = '{$size}',`color` = '{$color}',`soluong` = '{$soluong}',`giagoc` = '{$giagoc}',`giakhuyenmai` = '{$giakhuyenmai}' WHERE `sanpham`.`id` = $id";
  }else{
      $sql = "UPDATE `sanpham` SET `name` = '{$name}', `price` = '{$price}', `image` = '{$image}', `mota` = '{$mota}', `iddm` = '{$iddm}',`size` = '{$size}',`color` = '{$color}',`soluong` = '{$soluong}',`giagoc` = '{$giagoc}',`giakhuyenmai` = '{$giakhuyenmai}' WHERE `sanpham`.`id` = $id";
  }
  pdo_execute($sql);
}
// function load_danhmuc_aosomi(){
//   $sql = "select * from sanpham where iddm = 3";
//   $result = pdo_query($sql);
//   return $result;
// }
// function load_danhmuc_aophong(){
//   $sql = "select * from sanpham where iddm = 5";
//   $result = pdo_query($sql);
//   return $result;
// }

function load_danhmuc_polo($begin){
  $sql = "select * from sanpham where iddm = 1 ORDER BY id DESC LIMIT $begin,4";
  $result = pdo_query($sql);
  return $result;
}
function load_danhmuc_aosomi($begin){
  $sql = "select * from sanpham where iddm = 3 ORDER BY id DESC LIMIT $begin,4";
  $result = pdo_query($sql);
  return $result;
}
function load_danhmuc_aophong($begin){
  $sql = "select * from sanpham where iddm = 5 ORDER BY id DESC LIMIT $begin,4";
  $result = pdo_query($sql);
  return $result;
}
function load_sanpham_cungloai($id, $iddm){
  $sql = "select * from sanpham where iddm = $iddm and id <> $id";
  $result = pdo_query($sql);
  return $result;

}

function load_all_fillter_danhmuc($option = []){
  $sql = "select * from sanpham WHERE iddm = ";
  if (count($option) == 1) {
    $sql .= $option[0];
  } else {
    foreach($option as $o) {
      $sql .= $o . " OR iddm = ";
    }
  }
  $sql = rtrim($sql, " OR iddm = ");

  // echo $sql; die;
  $result = pdo_query($sql);
  return $result;
}
?>