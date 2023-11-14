<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/leave_review.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
<main>
	
<?php extract($sanpham); ?>
<form action="index.php?act=leave-review&idsp=<?=$id?>" method="POST">
	<div class="container margin_60_35">
	
			<div class="row justify-content-center">
				<div class="col-lg-8">
					<div class="write_review">
						<h1><?=$name?></h1>
						<!-- <div class="rating_submit">
							<div class="form-group">
							<label class="d-block">Overall rating</label>
							<span class="rating mb-0">
								<input type="radio" class="rating-input" id="5_star" name="rating-input" value="5 Stars"><label for="5_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="4_star" name="rating-input" value="4 Stars"><label for="4_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="3_star" name="rating-input" value="3 Stars"><label for="3_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="2_star" name="rating-input" value="2 Stars"><label for="2_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="1_star" name="rating-input" value="1 Star"><label for="1_star" class="rating-star"></label>
							</span>
							</div>
						</div> -->
						<!-- /rating_submit -->
						<!-- <div class="form-group">
							<label>Title of your review</label>
							<input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
						</div> -->
						<div class="form-group">
							<label>Bình Luận Của Bạn</label>
							<textarea name="noidung" class="form-control" style="height: 180px;" placeholder="Viết vài câu bình luận của bạn vào cho chúng tôi nha"></textarea>
						</div>
						<!-- <div class="form-group">
							<label>Add your photo (optional)</label>
							<div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
						</div> -->
						<!-- <div class="form-group">
							<div class="checkboxes float-left add_bottom_15 add_top_15">
								<label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
									<input type="checkbox">
									<span class="checkmark"></span>
								</label>
							</div>
						</div> -->
						<!-- <a href="confirm.html" class="btn_1">Submit review</a> -->
						<input type="hidden" name="idpro" value="<?=$id?>">
						<input type="submit" class="bnt_1" name="guibinhluan" value="Gửi bình luận">
					</div>
				</div>
		</div>
		<!-- /row -->
		</div>
		</form>	
		<!-- /container -->
	</main>
	<!--/main-->
    <div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>