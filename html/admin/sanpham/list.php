<link rel="stylesheet" href="../css/cssadmin.css">
<div class="row small-gutters">
				<?php 
					
					foreach($listsanpham as $sp){
						extract($sp);
                        $xoasp="index.php?act=xoasp&idsp=".$id;
						$hinhpath = "../upload/".$image;
						if(is_file($hinhpath)){
                            $hinhpath ="<img src= '".$hinhpath."' width='150px' height='150px'>";
                        }else{
                            $hinhpath = "no file image";
                        }
				?>
					<div class="col-6 col-md-4 col-xl-3 box1">
						<div class="grid_item">
							<figure>
								<!-- <span class="ribbon off"></span> -->
								<a href="">
									<?=$hinhpath?>
								</a>
							</figure>
							<a href="">
								<h3><?=$name?></h3>
							</a>
							<div class="price_box">
								<span class="new_price"><?=$price?></span>
								<span class="old_price"><?=$giakhuyenmai?></span>
							</div>
                            <button onclick="return confirm('bạn có muốn xóa không')"><a href="<?=$xoasp?>">XÓA</a></button>
                            <button><a href="">SỬA</a></button>
						</div>
					</div>
				<?php
					}
				?>
	
</div>
<button><a href="index.php?act=addsp">THÊM</a></button>