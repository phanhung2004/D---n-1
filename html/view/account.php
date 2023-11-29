    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

	<!-- SPECIFIC CSS -->
    <link href="css/account.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    	
	<main class="bg_gray">
		
        <div class="container margin_30">
            <div class="page_header">
                <div class="breadcrumbs">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Category</a></li>
                        <li>Page active</li>
                    </ul>
            </div>
            <h1>Sign In or Create an Account</h1>
        </div>
        <!-- /page_header -->
                <div class="row justify-content-center">
            <?php
                if(!isset($_SESSION['user'])){
            ?>

                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="client">Already Client</h3>
                        <div class="form_container">


                        <form action="index.php?act=login" method="POST" enctype="multipart/form-data">


                            <div class="row no-gutters">
                                 <div class="col-lg-6 pr-lg-1">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                </div>
                                <div class="col-lg-6 pl-lg-1">
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                </div> 
                            </div>
                            <div class="divider"><span>Or</span></div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email*">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroEmailLogin)&& ($erroEmailLogin!="")){
                                            echo $erroEmailLogin;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password_in" value="" placeholder="Password*">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroPassLogin)&& ($erroPassLogin!="")){
                                            echo $erroPassLogin;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <div class="clearfix add_bottom_15">
                                <!-- <div class="checkboxes float-start">
                                    <label class="container_check">Remember me
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div> -->
                                <div class="float-end"><a id="forgot" href="javascript:void(0);">Lost Password?</a></div>
                            </div>
                            <div class="text-center"><input type="submit" name="login" value="Log In" class="btn_1 full-width"></div>
                            <h6 style="color: red;">
                                    <?php
                                        if(isset($loginFale)&& ($loginFale!="")){
                                            echo $loginFale;
                                        }

                                        if(isset($loginfinish)&& ($loginfinish!="")){
                                            echo $loginfinish;
                                        }

                                    ?>
                                </h6>
                            <!-- <div id="forgot_pw">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email_forgot" id="email_forgot" placeholder="Type your email">
                                </div>
                                <p>A new password will be sent shortly.</p>
                                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
                            </div> -->


                            </form>
                        </div>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
                    <div class="row">
                        <div class="col-md-6 d-none d-lg-block">
                            <ul class="list_ok">
                                <li>Find Locations</li>
                                <li>Quality Location check</li>
                                <li>Data Protection</li>
                            </ul>
                        </div>
                        <div class="col-md-6 d-none d-lg-block">
                            <ul class="list_ok">
                                <li>Secure Payments</li>
                                <li>H24 Support</li>
                            </ul>
                        </div>
                    </div>
                    <!-- /row -->
                </div>


                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
                        <div class="form_container">


                        <form action="index.php?act=register" method="POST" enctype="multipart/form-data">

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email_2" placeholder="Email*">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroEmail)&& ($erroEmail!="")){
                                            echo $erroEmail;
                                        }
                                        if(isset($erroEmail2)&& ($erroEmail2!="")){
                                            echo $erroEmail2;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password_in_2" value="" placeholder="Password*">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroPass)&& ($erroPass!="")){
                                            echo $erroPass;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <hr>

                            <div class="private box">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name*">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="diachi" placeholder="Full Address*">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row no-gutters">

                                </div>
                                <!-- /row -->
                                
                                <div class="row no-gutters">
   
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sodienthoai" placeholder="Telephone *">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                
                            </div>

                            <hr>

                            <div class="text-center"><input type="submit" name="register" value="Register" class="btn_1 full-width"></div>
                            <?php
                            if(isset($_SESSION['user'])){
                            ?>

                            <div class="text-center"><input type="submit" name="register" value="Đăng xuất" class="btn_1 full-width"></div>

                            <?php
                            }
                            ?>

                            <!-- //form -->
                            </form>
                            <div class="text-center"><a href="index.php?act=quenmatkhau"><input type="submit" name="quenmatkhau" value="Quên Mật Khẩu" class="btn_1 full-width"></a></div>

                        </div>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
                </div>
                <?php
                }
                ?>

                <?php
                    if(isset($_SESSION['user'])){
                ?>

            <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="new_client">New Client</h3> <small class="float-right pt-2">* Required Fields</small>
                        <div class="form_container">


                        <form action="index.php?act=thaydoi_acc" method="POST" enctype="multipart/form-data">
                            <?php
                        
                                    extract($listacc);
                                
                            ?>
                            <div class="form-group">
                                <label for="">Nhập email</label>
                                <input type="email" class="form-control" name="email" value="<?=$email?>" id="email_2">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroEmail)&& ($erroEmail!="")){
                                            echo $erroEmail;
                                        }
                                        if(isset($erroEmail2)&& ($erroEmail2!="")){
                                            echo $erroEmail2;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <div class="form-group">
                            <label for="">Nhập pass</label>
                                <input type="text" class="form-control" name="pass" id="password_in_2" value="<?=$pass?>">
                                <h6 style="color: red;">
                                    <?php
                                        if(isset($erroPass)&& ($erroPass!="")){
                                            echo $erroPass;
                                        }
                                    ?>
                                </h6>
                            </div>
                            <hr>
 
                            <div class="private box">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                    <label for="">Nhập user name</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="username" value="<?=$username?>">
                                        </div>
                                    </div>

                                    <div class="col-12">
                                    <label for="">Nhập địa chỉ</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="diachi" value="<?=$diachi?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="row no-gutters">

                                </div>
                                <div class="row no-gutters">
 
                                    <div class="col-6 pl-1">
                                    <label for="">Nhập số điện thoại</label>
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sodienthoai" value="<?=$sodienthoai?>">
                                        </div>
                                    </div>
                                </div>          
                            </div>

                            <hr>

                            <div class="text-center"><input type="submit" name="thaydoi" value="Thay Đổi" class="btn_1 full-width"></div>
                            </form>
                            <div class="text-center"><a href="index.php?act=dangxuat"><input type="submit" value="Đăng xuất" class="btn_1 full-width"></a></div>
                            <h5 style="color: green;"><?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo "<script>alert('Đăng ký thành công');</script>";
                                }
                            ?></h5>
                        </div>
                        <!-- /form_container -->
                    </div>
                <?php
                }
                ?>


            </div>
            <!-- /row -->
            </div>
            <!-- /container -->
        </main>
        <!--/main-->
        <div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="js/common_scripts.min.js"></script>
    <script src="js/main.js"></script>

    <script>
    	// Client type Panel
		$('input[name="client_type"]').on("click", function() {
		    var inputValue = $(this).attr("value");
		    var targetBox = $("." + inputValue);
		    $(".box").not(targetBox).hide();
		    $(targetBox).show();
		});
	</script>