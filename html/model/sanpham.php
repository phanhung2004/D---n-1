<?php
 function loadall_sanpham_home($begin){
    $sql="select * from sanpham where 1 order by id desc limit $begin,8";
    $listsanpham=pdo_query($sql);
    return $listsanpham;
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
function load_danhmuc_aosomi(){
  $sql = "select * from sanpham where iddm = 3";
  $result = pdo_query($sql);
  return $result;
}
function load_danhmuc_aophong(){
  $sql = "select * from sanpham where iddm = 5";
  $result = pdo_query($sql);
  return $result;
}
function load_danhmuc_polo(){
  $sql = "select * from sanpham where iddm = 1";
  $result = pdo_query($sql);
  return $result;
}
function load_sanpham_cungloai($id, $iddm){
  $sql = "select * from sanpham where iddm = $iddm and id <> $id";
  $result = pdo_query($sql);
  return $result;
}
?>