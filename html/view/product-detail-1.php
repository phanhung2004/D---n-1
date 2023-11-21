    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/product_page.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
	<link href="css/csschitiet.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
	<link href="css/chitietsanpham.css" rel="stylesheet">
<main class="bg_gray">
	<?php
		extract($sanpham);
		$image=$img_path.$image;
	?>
	    <div class="container margin_30">
	        <div class="page_header">
	            <div class="breadcrumbs">
	                <ul>
	                    <li><a href="#">Home</a></li>
	                    <li><a href="#">Category</a></li>
	                    <li>Page active</li>
	                </ul>
	            </div>
	            <h1><?=$name?></h1>
	        </div>
			
	        <!-- /page_header -->
	        <div class="row justify-content-center">
	            <div class="col-lg-8">
	                <div class="owl-carousel owl-theme prod_pics magnific-gallery">
	                    <div class="item">
	                        <a href="img/products/shoes/product_detail_1.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="<?=$image?>" alt=""></a>
	                    </div>
	                    <!-- /item -->
	                    <div class="item">
	                        <a href="img/products/shoes/product_detail_2.jpg" title="Photo title" data-effect="mfp-zoom-in"><img src="<?=$image?>" alt=""></a>
	                    </div>
	                    <!-- /item -->
	                </div>
	                <!-- /carousel -->
	            </div>
	        </div>
	        <!-- /row -->
	    </div>

		<!-- end php  -->
	    <!-- /container -->
	    <?php
			extract($sanpham);
			$linkgh = "index.php?act=cart&idsp=".$id;
			extract($sanphamchitiet);
		?>
	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="row justify-content-between">
	                <div class="col-lg-6">
	                    <div class="prod_info version_2">
							<p><?=$mota?></p>
	                        <!-- <span class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i><em>4 reviews</em></span> -->
	                        <!-- <p><small>SKU: MTKRY-001</small><br>Lorem ipsum dolor sit amet, his no adipisci pericula conclusionemque. Qui labore salutandi ex, vivendum argumentum mediocritatem vis eu, viris tritani per id. At iudicabit maluisset vis, dicant diceret pri cu. Cum at rebum vulputate forensibus, eruditi principes ad vel, pro denique recusabo at. Ubique nominavi delicata sit cu, quo no reque insolens suscipiantur.</p>
	                        <p>Et phaedrum temporibus per. Antiopam posidonium et est. Eu ius quas modus suavitate, ex sea feugiat laoreet voluptatum. Quo at veritus ancillae complectitur, duo no assum omnes.</p> -->
	                    </div>
	                </div>
				
	                <div class="col-lg-5">
						
					<form action="<?=$linkgh?>" method="POST" enctype="multipart/form-data">
						<?php
							extract($sanpham);
							$image=$img_path.$image;
						?>
						<input type="hidden" name="price" value="<?=$price?>">
						<input type="hidden" name="image" value="<?=$image?>">
	                    <div class="prod_options version_2">
						<div class="row">
								<label class="col-xl-7 col-lg-5  col-md-6 col-6 pt-0"><strong>Color</strong></label>
								<div class="col-xl-5 col-lg-5 col-md-6 col-6 colors">
									<ul>
										<li>
											<a href="#" class="color color_11" style="background-color: black; margin: 0 25px;"></a>
											<input type="hidden" id="selectedColor" name="selectedColor">
										</li>
										<li><a href="#" class="color color_22" style="background-color: whitesmoke; margin: 0 25px;"></a></li>
										<!-- Other color options -->
									</ul>
								</div>
							</div>
	                        <div class="row">
	                            <label class="col-xl-7 col-lg-5 col-md-6 col-6"><strong>Size</strong> - Size Guide <a href="#0" data-bs-toggle="modal" data-bs-target="#size-modal"><i class="ti-help-alt"></i></a></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="custom-select-form">
									<select class="wide" name="idsize" id="">
											<option value="1" selected>Chọn Size</option>
											<?php
												foreach($sanphamchitiet as $dm){
													extract($dm);
													echo '<option value="'.$size.'">'.$size.'</option>';
												}
											?>
									</select>
	                                </div>
	                            </div>
	                        </div>
							<!-- <input type="hidden" id="selectedSize" name="selectedSize"> -->

	                        <div class="row">
	                             <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Quantity</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
<!-- 
	                                <div class="numbers-row">
	                                    <input type="text" value="1" name="quantity_1">
	                                    <div class="inc" id="inc">+</div>
	                                    <div class="dec" id="dec">-</div>
	                                </div> -->
									<div class="number-row">
										<input type="text" value="1" name="quantity" class="quantity">
										<div class="inc">+</div>
										<div class="dec">-</div>
										<!-- <input type="hidden" name="soluong" id="soluong"> -->
									</div>
									
	                            </div>
								<!-- <input type="hidden" id="selectedQuantity" name="selectedQuantity"> -->
	                        </div>
							<div class="row">
	                            <label class="col-xl-7 col-lg-5  col-md-6 col-6"><strong>Số lượng có trong kho</strong></label>
	                            <div class="col-xl-5 col-lg-5 col-md-6 col-6">
	                                <div class="">
										<p style="text-align: center;margin-top: 15px;"><?=$soluong?></p>
	                                </div>
	                            </div>
	                        </div> 
	                        <div class="row mt-3">
	                            <div class="col-lg-7 col-md-6">
									<!-- <span>Giá</span> -->
	                                <div style="font-size: 24px;" class="price_main"id="productPrice"><?=$price?></div>
									<input type="hidden" name="tongtien" id="tongtien_input">
	                            </div>
	                            <!-- <div class="col-lg-5 col-md-6">
	                                <div class="btn_add_to_cart"><a href="index.php?act=cart" class="btn_1">Add to Cart</a></div>
	                            </div> -->
								<div class="col-lg-5 col-md-6">
									<?php
										if(isset($_SESSION['user'])){
											// echo '
											// <div class="btn_add_to_cart">
											// 	<!-- <a href="index.php?act=cart" class="btn_1">Add to Cart</a> -->
											// 	<input type="submit" name="cart" class="btn_1" value="Add to Cart">
		
											// 	<span class="out_of_stock">Out of Stock</span>

											// '
									?>
									<div class="btn_add_to_cart">
										<?php 						
										if ($soluong > 0) : ?>
											<!-- <a href="index.php?act=cart" class="btn_1">Add to Cart</a> -->
											<input type="submit" name="cart" class="btn_1" value="Add to Cart">
										<?php else : ?>
											<span class="out_of_stock">Out of Stock</span>
										<?php endif; ?>
									</div>
									<?php
									}else{
									?>

									<div class="btn_add_to_cart">
										<?php 						
										if ($soluong > 0) : ?>
											<!-- <a href="index.php?act=cart" class="btn_1">Add to Cart</a> -->
											<input type="submit" name="cart_review" class="btn_1" value="Add to Cart">
										<?php else : ?>
											<span class="out_of_stock">Out of Stock</span>
										<?php endif; ?>
									</div>

									<?php
									}
									?>
								</div>
	                        </div>
	                    </div>
						</form>
	                </div>
	            </div>
	            <!-- /row -->
	        </div>
	    </div>
	    <!-- /bg_white -->

	    <div class="tabs_product bg_white version_2">
	        <div class="container">
	            <ul class="nav nav-tabs" role="tablist">
	                <li class="nav-item">
	                    <a id="tab-A" href="#pane-A" class="nav-link active" data-bs-toggle="tab" role="tab">Description</a>
	                </li>
	                <li class="nav-item">
	                    <a id="tab-B" href="#pane-B" class="nav-link" data-bs-toggle="tab" role="tab">Reviews</a>
	                </li>
	            </ul>
	        </div>
	    </div>
	    <!-- /tabs_product -->

	    <div class="tab_content_wrapper">
	        <div class="container">
	            <div class="tab-content" role="tablist">
	                <div id="pane-A" class="card tab-pane fade active show" role="tabpanel" aria-labelledby="tab-A">
	                    <div class="card-header" role="tab" id="heading-A">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-A" aria-expanded="false" aria-controls="collapse-A">
	                                Description
	                            </a>
	                        </h5>
	                    </div>

	                    <div id="collapse-A" class="collapse" role="tabpanel" aria-labelledby="heading-A">
	                        <div class="card-body">
	                            <div class="row justify-content-between">
	                                <!-- <div class="col-lg-6">
	                                    <h3>Details</h3>
	                                    <p>Lorem ipsum dolor sit amet, in eleifend <strong>inimicus elaboraret</strong> his, harum efficiendi mel ne. Sale percipit vituperata ex mel, sea ne essent aeterno sanctus, nam ea laoreet civibus electram. Ea vis eius explicari. Quot iuvaret ad has.</p>
	                                    <p>Vis ei ipsum conclusionemque. Te enim suscipit recusabo mea, ne vis mazim aliquando, everti insolens at sit. Cu vel modo unum quaestio, in vide dicta has. Ut his laudem explicari adversarium, nisl <strong>laboramus hendrerit</strong> te his, alia lobortis vis ea.</p>
	                                    <p>Perfecto eleifend sea no, cu audire voluptatibus eam. An alii praesent sit, nobis numquam principes ea eos, cu autem constituto suscipiantur eam. Ex graeci elaboraret pro. Mei te omnis tantas, nobis viderer vivendo ex has.</p>
	                                </div> -->
	                                <div class="col-lg-5">
	                                    <h3>Specifications</h3>
	                                    <!-- <div class="table-responsive">
	                                        <table class="table table-sm table-striped">
	                                            <tbody>
	                                                <tr>
	                                                    <td><strong>Color</strong></td>
	                                                    <td>Blue, Purple</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Size</strong></td>
	                                                    <td>150x100x100</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Weight</strong></td>
	                                                    <td>0.6kg</td>
	                                                </tr>
	                                                <tr>
	                                                    <td><strong>Manifacturer</strong></td>
	                                                    <td>Manifacturer</td>
	                                                </tr>
	                                            </tbody>
	                                        </table>
	                                    </div> -->
	                                    <!-- /table-responsive -->
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!-- /TAB A -->
	                <div id="pane-B" class="card tab-pane fade" role="tabpanel" aria-labelledby="tab-B">
	                    <div class="card-header" role="tab" id="heading-B">
	                        <h5 class="mb-0">
	                            <a class="collapsed" data-bs-toggle="collapse" href="#collapse-B" aria-expanded="false" aria-controls="collapse-B">
	                                Reviews
	                            </a>
	                        </h5>
	                    </div>

	<!-- //load binh luan / -->

	                    <div id="collapse-B" class="collapse" role="tabpanel" aria-labelledby="heading-B">

	                        <div class="card-body">
							<?php
								foreach($binhluan as $bl){
									extract($bl);
									extract($sanpham);
									
							?>
	                            <div class="row justify-content-between">
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <!-- <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span> -->
	                                            <em><?php echo date("d/m/Y", strtotime($bl['ngaydangbinhluan'])) ?></em>
	                                        </div>
	                                        <h4><?=$name?></h4>
	                                        <p><?=$noidung?></p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <!-- <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><i class="icon-star empty"></i><em>4.0/5.0</em></span> -->
	                                            <!-- <em>Published 1 day ago</em> -->
	                                        </div>
	                                        <h4></h4>
	                                        <p><?=$mota?></p>
	                                    </div>
	                                </div>
	                            </div>

	                            
	                            <!-- <div class="row justify-content-between">
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star empty"></i><em>4.5/5.0</em></span>
	                                            <em>Published 3 days ago</em>
	                                        </div>
	                                        <h4>"Outstanding"</h4>
	                                        <p>Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                                <div class="col-lg-5">
	                                    <div class="review_content">
	                                        <div class="clearfix add_bottom_10">
	                                            <span class="rating"><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><em>5.0/5.0</em></span>
	                                            <em>Published 4 days ago</em>
	                                        </div>
	                                        <h4>"Excellent"</h4>
	                                        <p>Sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.</p>
	                                    </div>
	                                </div>
	                            </div> -->
								<?php
								}
								?>
								<?php
									if(isset($_SESSION['user'])){
								?>
	                            <p class="text-end"><a href="index.php?act=leave-review&idsp=<?=$id?>" class="btn_1">Leave a review</a></p>
								<?php
									}
								?>
	                        </div>

	                        <!-- /card-body -->
	                    </div>
	                    
	                </div>
	                <!-- /tab B -->
	            </div>
	            <!-- /tab-content -->
	        </div>
	        <!-- /container -->
	    </div>
	    <!-- /tab_content_wrapper -->

	    <div class="bg_white">
	        <div class="container margin_60_35">
	            <div class="main_title">
	                <h2>Related</h2>
	                <span>Products</span>
	                <p>Sản phẩm có liên quan - Sản phẩm cùng loại.</p>
	            </div>


	            <div class="owl-carousel owl-theme products_carousel">
				<?php
				foreach($sanphamcl as $cl){
					extract($cl);
					$imagecl=$img_path.$image;
					$linksp="index.php?act=product-detail-1&idsp=".$id;
				?>
	                <div class="item">
	                    <div class="grid_item">
	                        <span class="ribbon new">Cùng Loại</span>
	                        <figure>
	                            <a href="<?=$linksp?>">
	                                <img class="owl-lazy" src="<?=$imagecl?>" alt="">
	                            </a>
	                        </figure>
	                        <a href="">
	                            <h3><?=$name?></h3>
	                        </a>
	                        <div class="price_box">
	                            <span class="new_price"><?=$price?></span>
	                        </div>

	                    </div>
	                  
	                </div>
					<?php
					}
					?>
	                
	                
	            </div>
	        </div>

	    </div>
	</main>

		<?php
			extract($sanpham);

		?>
		<script>
			const incButton = document.querySelector('.inc');
			const decButton = document.querySelector('.dec');
			const quantityInput = document.querySelector('.quantity');
			const productPrice = document.getElementById('productPrice');

			let pricePerItem = parseInt('<?=$price?>'); // Chuyển giá tiền ban đầu thành số

			const availableQuantity = parseInt('<?=$soluong?>');

			// Sự kiện click cho nút '+'
			incButton.addEventListener('click', function() {
				let value = parseInt(quantityInput.value);
				value = isNaN(value) ? 0 : value;
				if (value < availableQuantity) { // Kiểm tra nếu số lượng chọn nhỏ hơn số lượng có sẵn trong kho
					quantityInput.value = value + 1;
					updateTotalPrice(value + 1);
				}
			});

			// Sự kiện click cho nút '-'
			decButton.addEventListener('click', function() {
				let value = parseInt(quantityInput.value);
				value = isNaN(value) ? 0 : value;
				if (value > 1) {
					quantityInput.value = value - 1; // Giảm giá trị đi 1, nhưng không dưới 1
					updateTotalPrice(value - 1);
				}
			});
			// var soluong = 1;

			function updateTotalPrice(quantity) {
			let totalPrice = pricePerItem * quantity;

			if (quantity === 1) {
				totalPrice = pricePerItem; 
				document.getElementById('tongtien_input').value = totalPrice;// Gán lại giá trị mới cho totalPrice nếu quantity là 1
			}

			productPrice.textContent = totalPrice;
			document.getElementById('tongtien_input').value = totalPrice;
		}



			const colorOptions = document.querySelectorAll('.color');

			colorOptions.forEach(option => {
				option.addEventListener('click', function() {
					const selectedColor = this.style.backgroundColor;
					document.getElementById('selectedColor').value = selectedColor;
				});
			});

		</script>
		
        <script src="js/common_scripts.min.js"></script>
    	<script src="js/main.js"></script>
