 <?php 
 session_start();
 error_reporting(1);
 include("connection_db.php");
 session_start();
 
 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Home</title>


  <link rel="stylesheet" type="text/css" href="CSS/style.css">
  <link rel="stylesheet" href="swiper-master/dist/css/swiper.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script language="javascript"></script>
  <script type="text/javascript" src="JS/script.js"></script>
  <meta name="Viewport" content="width=device-width.initial-scale=1">
  <meta http-equiv="X-UA-compatible" content="IE=edge"> 
  <link rel="stylesheet" type="text/css" href="animate/animate.css">
  <script type="text/javascript" src="animate/wow.min.js"></script>

  <script type="text/javascript">
    new WOW().init();
</script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<meta charset="utf-8">
</head>

<body  style="background: #effcfa;">
  <?php
  require_once "top.php";
  ?>
  <div id="wapper">

    <form method="post" action="chitiet.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <section class="background-container background-form" style="background-image: url('Images/baiviet.jpg')">
                        <div class="background-overlay"></div>
                        <div class="container">
                            <div class="text-inner-background">
                                <h1 class="color-white">Tảo Tuấn Spa </h1>
                                <p   style="font-size: 25px;color: white; 
                                ">Phương châm chỉ cung cấp các dòng sản phẩm Spa thuần thiên nhiên, bạn chắc chắn sẽ hài lòng với chất lượng cùng công hiệu tuyệt vời từ dòng Sản phẩm Spa do Ngọc Anh Spa cung cấp </p>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="row wow bounceInUp"data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1">

                    <div class=" col-sm-4  ">
                       <h2 style="margin-top: 117px;font-style: italic;color: #f60bce;font-weight: bold;font-size: 40px;">Dịch vụ <br>Tảo Tuan Spa</h2>
                       <span class="beautypress-gradient-separetor"></span>
                       <br>
                       <p style="font-size: 16px;color: #607070;">Hãy đến với Tảo Tuan Spa để bạn được chăm sóc sức khỏe và sắc đẹp như một chính khách của Hoàng Gia !</p> <br>
                       <a href="gioithieu.php"><button type="button" class="btn btn-danger">Về Chúng Tôi</button></a>
                   </div>
                   <div class="  col-sm-1  ">

                   </div>
                   <div class="  col-sm-7  ">
                    <div class="row">
                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-spa-u-trang.jpg" style="width: 315px;height: 340px;">
                        </div>
                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-spa.jpg" style="    width: 315px;height: 170px;"  >
                        </div>

                        <div class="  col-sm-6  ">
                            <img class="img-rounded"  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/ngoc-anh-salon-hair-quan-3.jpg"style=" margin-top: 10px;width: 315px;height: 340px;"  >
                        </div>
                        <div class="  col-sm-6  ">
                            <img class="button" src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/07/spa-cao-thang-tphcm-chat-luong.jpg"  style="  margin-top: -190px;  width: 315px;height: 170px;"  >

                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="progress">
                            <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
                                <a href="#">Tảo Tuấn Spa</a>
                            </div>
                            <div class="progress-bar progress-bar-warning" role="progressbar" style="width:20%">
                               <a href="#">Chất lượng</a>
                           </div>
                           <div class="progress-bar progress-bar-danger" role="progressbar" style="width:20%">
                            <a href="#">Nhiệt tình</a>
                        </div>
                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100" style="width:20%">
                        <a href="#">Nhiều ưu đãi</a>
                    </div>
                </div>
                <div class="row">
                    <h2>Các sản phẩm thịnh hành hiện nay!</h2>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">
                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-8.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title">BOTULIN EFFECT CREAM.</a>
                                <p>( KEM CHỐNG LÃO HÓA ĐẶC TRỊ CÁC NẾP NHĂN BIỂU HIỆN TRÊN KHUÔN MẶT)
                                    THÀNH PHẦN : SNAP – 25 ANTAGONIST, HIBISKUS PEPTIDE, VITAMIN E, PUFA…
                                    CÔNG DỤNG:
                                    Điều trị tích cực giảm các nếp nhăn động .
                                    Cung cấp dưỡng chất, chống oxy hóa .
                                    Cung cấp ẩm sâu.
                                    Tăng cường hiệu quả sau các thủ thuật thẩm mỹ : phẫu thuật căn da mặt và cổ , nâng cơ Rf, VENUS…
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">

                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-2.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title"> EYE CREAM CHỐNG NHĂN VÙNG MẮT</a>
                                <p>(KEM DƯỠNG CHỐNG NHĂN VÙNG MẮT)
                                    THÀNH PHẦN : ARGANIA SPINOSAT, DECAPEPTIDE – 4, ACETYL – TETRAPEPTIDE 9, PHOSPHOLIPIDS, SODIUM HYALURINATE.
                                    CÔNG DỤNG:
                                    Giãm rãnh nhăn vùng mắt .
                                    Tăng Collagen, giúp da vùng mắt săn chắc và tăng độ đàn hồi .
                                    Cung cấp ẩm và giữ ẩm vùng mắt .
                                    Da vùng mắt có dấu hiệu lão hóa do ánh sáng và thói quen sinh hoạt.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="  col-sm-6">
                        <div class="thumbnail" style="background: #e7ecec;">
                            <img src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-7.jpg" style="width: 500px;">
                            <div class="caption">
                                <a href="#" class="beautypress-service-title">KEM   BAMBOO WHITENING AQUA</a>
                                <p>Bamboo Whitening Aqua với thành phần chính là 3-mer EGF Peptide được phát hiện năm 1986 bởi nhà khoa học Stanley Cohen với giải thưởng Nobel cho nghiên cứu quan trọng.
                                 EGF là yếu tố tăng trưởng đóng vai trò quan trọng trong việc điều tiết tăng trưởng tế bào, sự sinh sôi và phân bào. EGF hoạt động bằng cách gắn lên bề mặt tế bào, giúp sắp xếp lại tổ chức nhằm kích thích sản xuất năng lượng và tổng hợp protein. EGF có độ hoạt hóa và thẩm thấu cao cho hiệu quả sử dụng ngay lập tức chỉ sau 1 lần sử dụng.

                                 Dung tích: 150ml/chai.


                                 Tác dụng:
                                 - Da căng bóng, sáng mịn.
                                 - Tái tạo da mới, làm mờ vết thâm, phục hồi các tế bào bị tổn thương.
                                 - Thúc đẩy da hấp thụ chất dinh dưỡng tốt hơn.
                                 - Thúc đẩy sản sinh collagen và chống oxy hóa, cho da đàn hồi và khỏe mạnh hơn.


                                 Cách dùng:
                             Sử dụng như sản phẩm chăm sóc da hàng ngày, đặc biệt đối với da vừa bong do điều trị laser, lăn kim, thay da sinh học,…</p>
                         </div>
                     </div>
                 </div>
                 <div class="  col-sm-6">
                    <div class="thumbnail" style="background: #e7ecec;">
                        <img  src="http://ngocanhhairspa.com.vn/wp-content/uploads/2018/08/my-pham-ngoc-anh-spa-chat-luong-1.jpg"style="width: 500px;">
                        <div class="caption">
                            <a href="#" class="beautypress-service-title">SIÊU PHẨM KEM CELL FEED</a>
                            <p>Kem Cell Feed là siêu phẩm đặc trị sau laser với những thành phần là nguyên liệu cấu tạo tế bào và sợi collagen nhằm mục đích tái tạo da hư tổn, cung cấp dưỡng ẩm, kích thích sự phát triển của tế  bào và tái cấu trúc mô.
                               Không có bất kỳ phản ứng phụ nào kể cả với da nhạy cảm, chứa thành phần nồng độ peptide cao. Hiệu quả trị liệu tuyệt vời đối với hồi phục, giảm viêm và tái tạo da sau laser, lăn kim, peeling,…


                               Thành phần:
                               PEG-100, Palmitoyle sh-Tripeptide-4 Amide, dầu Olive, Polyacrylamide, C13-14 Isoparaffin, Sodium Hydroxide, Palimitcyle sh-Tripeptide-53 Amide, Arbutin.


                               Công dụng:
                               - Tăng cường sự đàn hồi cho da.
                               - Cải thiện lớp biểu bì của da bị hư tổn.
                           - Tái tạo phục hồi tổn thương một cách hiệu quả.</p>
                       </div>
                   </div>
               </div>



           </div>
           <div class="row">
              <?php include('bottom.php'); ?>
          </div>
      </div>
      
  </form>


</div>

</body>
<script>
 function addCart(id)  
 {  
  $.ajax({  
    url:"add_cart.php",  
    method:"POST",  
    data:{id:id, quantity:quantity}, 
    dataType:"text",  
    success:function(data){  
      alert(data);
  }  
});  
}

$(document).on('click','a[data-role=delete]',function(){
  var id  = $(this).data('id');

  addCart(id);  


});

</script>

</html>