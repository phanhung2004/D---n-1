<link rel="stylesheet" href="../css/cssadmin.css">
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
            <th scope="col">Màu</th>
            <th scope="col">Size</th>
            <th scope="col">So luong</th>
            <th scope="col">Trang Thai</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
			foreach($listchitietsanpham as $sp){
				extract($sp);
				// $xoasp="index.php?act=xoasp&idsp=$id&iddm=".$iddm;
				// $suasp="index.php?act=updatesp&idsp=".$id;
                $linkthem = "index.php?act=themchitiet";
				$stt+=1;
            ?>
            <tr>
                
                <th scope="row"><?=$stt?></th>
                <td><?=$color?></td>
                <td><?=$size?></td>
                <td><?=$so_luong?></td>
                <td>
				<button onclick="return confirm('bạn có muốn xóa không')"><a href="<?=$xoasp?>">XÓA</a></button>
                <button><a href="<?=$suasp?>">SỬA</a></button>
                <button><a href="<?=$linkthem?>">Them</a></button>
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