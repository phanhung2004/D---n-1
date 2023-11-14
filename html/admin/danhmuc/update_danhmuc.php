
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php
    if(is_array($onedanhmuc)){
        extract($onedanhmuc);
    }
?>
<form action="index.php?act=sua_danhmuc"  style="border: 1px solid; border-radius: 10px; align-items: center; width: 50%;" class="mx-auto p-3 mt-5 mb-5" method="POST">
    <label  class="form-label">Cập Nhật Danh Mục (Sửa)</label>
    <div class="mb-3">
    <label  class="form-label">Sửa tên danh mục vào</label>
    <input type="text" name="name" value="<?=$name?>" class="form-control">
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

        <input type="hidden" name="id" value="<?=$id?>">
  <input type="submit" name="sua" value="Sửa" style="border-radius: 10px; background-color: aqua;">
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>