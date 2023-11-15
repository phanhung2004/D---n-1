<div class="col-xl-6 col-lg-6 col-md-8">
                    <div class="box_account">
                        <h3 class="new_client">Quên Mật Khẩu</h3> <small class="float-right pt-2">* Required Fields</small>
                        <div class="form_container">


                        <form action="index.php?act=quenmatkhau" method="POST" enctype="multipart/form-data">

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
                              <!-- <div class="row no-gutters">
                                    <div class="col-6 pr-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Name*">
                                        </div>
                                    </div>   -->
                                    <!-- <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name*">
                                        </div>
                                    </div> -->
                                    <!-- <div class="col-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="diachi" placeholder="Full Address*">
                                        </div>
                                    </div>
                                </div> -->
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
                                    <!-- <div class="col-6 pl-1">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="sodienthoai" placeholder="Telephone *">
                                        </div>
                                    </div> -->
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
                            <div class="text-center"><input type="submit" name="sendemail" value="Nhận Mật Khẩu mới" class="btn_1 full-width"></div>

                            <!-- //form -->
                            </form>
                            <!-- <div class="text-center"><a href="index.php?act=dangxuat"><input type="submit" value="Đăng xuất" class="btn_1 full-width"></a></div> -->
                            <h5 style="color: green;"><?php
                                if(isset($sendMailMess)&&($sendMailMess!="")){
                                    // echo "<script>alert('Đăng ký thành công');</script>";
                                    echo $sendMailMess;
                                }
                            ?></h5>
                        </div>
                        <!-- /form_container -->
                    </div>
            </div>