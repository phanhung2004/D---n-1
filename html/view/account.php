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
                if(isset($_SESSION['user'])){

            ?>
                <div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="client">Already Client</h3>
                        <div class="form_container">


                        <form action="index.php?act=login" method="POST" enctype="multipart/form-data">


                            <div class="row no-gutters">
                                <!-- <div class="col-lg-6 pr-lg-1">
                                    <a href="#0" class="social_bt facebook">Login with Facebook</a>
                                </div>
                                <div class="col-lg-6 pl-lg-1">
                                    <a href="#0" class="social_bt google">Login with Google</a>
                                </div> -->
                            </div>
                            <!-- <div class="divider"><span>Or</span></div> -->
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
                <?php
                    }
                ?>
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
                            <!-- <div class="form-group">
                                <label class="container_radio" style="display: inline-block; margin-right: 15px;">Private
                                    <input type="radio" name="client_type" checked value="private">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="container_radio" style="display: inline-block;">Company
                                    <input type="radio" name="client_type" value="company">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <div class="private box">
                                <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name*">
                                        </div>
                                    </div>
                                    <!-- <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name*">
                                        </div>
                                    </div> -->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="diachi" placeholder="Full Address*">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                <div class="row no-gutters">
                                    <!-- <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City*">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal Code*">
                                        </div>
                                    </div> -->
                                </div>
                                <!-- /row -->
                                
                                <div class="row no-gutters">
                                    <!-- <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <div class="custom-select-form">
                                                <select class="wide add_bottom_10" name="country" id="country">
                                                        <option value="" selected>Country*</option>
                                                        <option value="Europe">Europe</option>
                                                        <option value="United states">United states</option>
                                                        <option value="Asia">Asia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sodienthoai" placeholder="Telephone *">
                                        </div>
                                    </div>
                                </div>
                                <!-- /row -->
                                
                            </div>
                            <!-- /private -->
                            <!-- <div class="company box" style="display: none;">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Company Name*">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Address">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /row -->
                                <!-- <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="City*">
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Postal Code*">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /row -->
                                <!-- <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <div class="custom-select-form">
                                                <select class="wide add_bottom_10" name="country" id="country_2">
                                                        <option value="" selected>Country*</option>
                                                        <option value="Europe">Europe</option>
                                                        <option value="United states">United states</option>
                                                        <option value="Asia">Asia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Telephone *">
                                        </div>
                                    </div>
                                </div> -->
                                <!-- /row -->
                            <!-- </div> -->
                            <!-- /company -->
                            <hr>
                            <!-- <div class="form-group">
                                <label class="container_check">Accept <a href="#0">Terms and conditions</a>
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div> -->
                            <div class="text-center"><input type="submit" name="register" value="Register" class="btn_1 full-width"></div>


                            <!-- //form -->
                            </form>
                            <h5 style="color: green;"><?php
                                if(isset($thongbao)&&($thongbao!="")){
                                    echo $thongbao;
                                }
                            ?></h5>
                        </div>
                        <!-- /form_container -->
                    </div>
                    <!-- /box_account -->
                </div>
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