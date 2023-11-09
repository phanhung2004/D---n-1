<h1>CONTROPANEL</h1>
<input style="border: none; border-bottom: 1px solid;" type="submit" value="Thoat Admin">
<link rel="stylesheet" href="../css/cssadmin.css">
<div class="row small-gutters">
				<?php 
					foreach($spnew as $sp){
						extract($sp);
                        $xoasp="index.php?act=xoasp&idsp=".$id;
				?>
					<div class="col-6 col-md-4 col-xl-3 box1">
						<div class="grid_item">
							<figure>
								<!-- <span class="ribbon off"></span> -->
								<a href="index.php?act=product-detail-1">
									<img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1.jpg" alt="">
									<img class="img-fluid lazy" src="img/products/product_placeholder_square_medium.jpg" data-src="img/products/shoes/1_b.jpg" alt="">
								</a>
							</figure>
							<a href="index.php?act=product-detail-1">
								<h3><?=$name?></h3>
							</a>
							<div class="price_box">
								<span class="new_price"><?=$price?></span>
								<span class="old_price"><?=$giakhuyenmai?></span>
							</div>
                            <button onclick="return confirm('bạn có muốn xóa không')"><a href="<?=$xoasp?>">XÓA</a></button>
                            <button><a href="">THÊM</a></button>
                            <button><a href="">SỬA</a></button>
						</div>
					</div>
				<?php
					}
				?>
</div>