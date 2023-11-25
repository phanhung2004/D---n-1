    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/listing.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
<main>
		<div class="banner">
			<!-- <h1>hello</h1> -->
			<!-- <img src="../img/OIG (1).jpg" alt=""> -->
		</div>
	    <!-- /top_banner -->
	    <div id="stick_here"></div>
	    <div class="toolbox elemento_stick">
	        <div class="container">
	        </div>
	    </div>
	    <!-- /toolbox -->
	    <div class="container margin_30">
	        <div class="row">
	            <aside class="col-lg-3" id="sidebar_fixed">
	                <div class="filter_col">
	                    <div class="inner_bt"><a href="#" class="open_filters"><i class="ti-close"></i></a></div>
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_1" data-bs-toggle="collapse" class="opened">Categories</a></h4>
	                        <div class="collapse show" id="filter_1">
	                            <ul>
	                                <li>
	                                    <label class="container_check">Men <small>12</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Women <small>24</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Running <small>23</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Training <small>11</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_2" data-bs-toggle="collapse" class="opened">Color</a></h4>
	                        <div class="collapse show" id="filter_2">
	                            <ul>
	                                <li>
	                                    <label class="container_check">Blue <small>06</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Red <small>12</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Orange <small>17</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Black <small>43</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_3" data-bs-toggle="collapse" class="closed">Brands</a></h4>
	                        <div class="collapse" id="filter_3">
	                            <ul>
	                                <li>
	                                    <label class="container_check">Adidas <small>11</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Nike <small>08</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Vans <small>05</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">Puma <small>18</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="filter_type version_2">
	                        <h4><a href="#filter_4" data-bs-toggle="collapse" class="closed">Price</a></h4>
	                        <div class="collapse" id="filter_4">
	                            <ul>
	                                <li>
	                                    <label class="container_check">$0 — $50<small>11</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$50 — $100<small>08</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$100 — $150<small>05</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                                <li>
	                                    <label class="container_check">$150 — $200<small>18</small>
	                                        <input type="checkbox">
	                                        <span class="checkmark"></span>
	                                    </label>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- /filter_type -->
	                    <div class="buttons">
	                        <a href="#0" class="btn_1">Filter</a> <a href="#0" class="btn_1 gray">Reset</a>
	                    </div>
	                </div>
	            </aside>


	            <!-- /col -->
	            <div class="col-lg-9">
				<?php
						foreach($spaopolo as $aopolo){
							extract($aopolo);
							$image=$img_path.$image;
							$linksp="index.php?act=product-detail-1&idsp=".$id;

					?>
	                <div class="row row_item">

	                    <div class="col-sm-4">
	                        <figure>
	                            <!-- <span class="ribbon off">-30%</span> -->
	                            <a href="<?=$linksp?>">
	                                <img class="img-fluid lazy" src="<?=$image?>" alt="">
	                            </a>
	                            <!-- <div data-countdown="2019/05/15" class="countdown"></div> -->
	                        </figure>
	                    </div>
	                    <div class="col-sm-8">
	                        <!-- <div class="rating"><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star voted"></i><i class="icon-star"></i></div> -->
	                        <a href="<?=$linksp?>">
	                            <h3><?=$name?></h3>
	                        </a>
	                        <p><?=$mota?></p>
	                        <div class="price_box">
	                            <span class="new_price"><?=$price?></span>
	                            <span class="old_price"><?=$giakhuyenmai?></span>
	                        </div>
	                        <ul>
	                            <li><a href="<?=$linksp?>" class="btn_1">Add to cart</a></li>
	                        </ul>
	                    </div>
	                </div> 
					<?php
						}
					?>
					<div class="pagination__wrapper">
						<?php
							$count=lay_so_luong_san_pham_aopolo();
							$sotrang=ceil($count/4);
							// echo $sotrang;
						?>
	                    <ul class="pagination">
							<?php
								for($i=1;$i<=$sotrang;$i++){

							?>
	                         <li>
	                            <a href="index.php?act=aopolo&idpt=<?php echo $i ?>" class="active"><?=$i?></a>
	                        </li>
							<?php
							}
							?>

	                    </ul>
	                </div>
	            </div>

	    <!-- /container -->
	</main>
	<!-- /main -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="js/sticky_sidebar.min.js"></script>
	<script src="js/specific_listing.js"></script>