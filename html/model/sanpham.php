<?php
 function loadall_sanpham_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,6";
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
  
?>