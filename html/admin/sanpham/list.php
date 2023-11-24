<link rel="stylesheet" href="../css/cssadmin.css">

	
</div>
<button><a href="index.php?act=addsp">THÊM</a></button>

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
			<h1>Sản Phẩm</h1>
		</div>
		<!-- /page_header -->
        <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Name</th>
            <th scope="col">Giá</th>
            <th scope="col">Màu</th>
            <th scope="col">Image</th>
            <th scope="col">Size</th>
            <th scope="col">Danh mục</th>
            <th scope="col">Số lượng</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
			foreach($listsanpham as $sp){
				extract($sp);
				$xoasp="index.php?act=xoasp&idsp=".$id;
				$suasp="index.php?act=updatesp&idsp=".$id;
				$hinhpath = "../upload/".$image;
				if(is_file($hinhpath)){
					$hinhpath ="<img src= '".$hinhpath."' width='150px' height='130px' object-fit: cover;>";
				}else{
					$hinhpath = "no file image";
				}
				$stt+=1;
            ?>
            <tr>
                
                <th scope="row"><?=$stt?></th>
                <td><?=$name?></td>
                <td><?=$price?></td>
                <td><?=$color?></td>
                <td>
					<?=$hinhpath?>
				</td>
                <td><?=$size?></td>
                <td><?=$iddm?></td>
                <td><?=$soluong?></td>
                <td>
				<button onclick="return confirm('bạn có muốn xóa không')"><a href="<?=$xoasp?>">XÓA</a></button>
                <button><a href="<?=$suasp?>">SỬA</a></button>
                </td>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
    </table>

		</div>
		<!-- /container -->
	</main>