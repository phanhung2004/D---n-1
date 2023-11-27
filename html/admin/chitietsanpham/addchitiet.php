
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<form action="index.php?act=add_danhmuc"  style="border: 1px solid; border-radius: 10px; align-items: center; width: 50%;" class="mx-auto p-3 mt-5 mb-5" method="POST">
  <div class="mb-3">
    <!-- <label  class="form-label">Nhập tên san pham muon them size</label> -->
    <div class="row2 mb10 form_content_container">
           <label> Ten san pham</label> <br>
            <select name="tensanpham" id="">
                    <option value="0" selected>tat ca</option>
                    <?php
                        foreach($listchitietsanpham1 as $dm){
                            extract($dm);
                            echo $listchitietsanpham1['id_sanpham'];
                            echo '<option value="'.$id.'">'.$id_sanpham.'</option>';
                        }
                    ?>
            </select>
    </div>
    <h6 style="color: red;">
        <?php
            if(isset($erroName)){
                echo $erroName;
        ?>
    </h6>
        <?php
        }
        ?>
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
    <!-- <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
    </div> -->
  <input type="submit" name="themmoi" value="Thêm Mới" style="border-radius: 10px; background-color: aqua;">
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>