<link rel="stylesheet" href="../css/cssadmin.css">

	
</div>

<main class="bg_gray">
		<div class="container margin_30">
		<div class="page_header">
			<div class="breadcrumbs">

			</div>
			<h1>Thống Kê</h1>
		</div>
		<!-- /page_header -->
        <h6>Thống kê theo năm tháng ngày</h6>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Năm </th>
            <th scope="col">Tháng</th>
            <th scope="col">Tuần</th>
            <th scope="col">Doanh thu</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
			foreach($listthongke as $sp){
				extract($sp);
				$stt+=1;
            ?>
            <tr>
                
                <th scope="row"><?=$stt?></th>
                <td><?=$nam?></td>
                <td><?=$thang?></td>
                <td><?=$tuan?></td>
                <td><?=$tong_tien?></td>
            </td>
        </tr>
        <?php
        }
        ?>

    </tbody>
    </table>

    <h6>Thống kê theo sản phẩm</h6>

    <table class="table">
        <thead>
            <tr>
            <th scope="col">STT</th>
            <th scope="col">Năm </th>
            <th scope="col">Tháng</th>
            <th scope="col">Tuần</th>
            <th scope="col">Số sản phảm đã bán</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stt = 0;
			foreach($listthongke_sanpham as $sp){
				extract($sp);
				$stt+=1;
            ?>
            <tr>
                
                <th scope="row"><?=$stt?></th>
                <td><?=$nam?></td>
                <td><?=$thang?></td>
                <td><?=$tuan?></td>
                <td><?=$so_luong?></td>
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