<?php 
session_start();
error_reporting(1);
include("connection_db.php");
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

    <form method="post" action="dieutri.php?id=<?php echo $row["id"]; ?>">
      <div class="container ">
        <div style="  margin-left: 2%; margin-right: 2%" class="row chitiet">
          <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section class="background-container background-form" style="background-image: url('Images/backgrDieutri.jpg')">
                <div class="background-overlay"></div>
                <div class="container">
                    <div class="text-inner-background">
                        <h1 class="color-white">Thương Tuấn Spa</h1>
                        <h4 class="color-white">Hãy đến với Tảo Tuấn Hair &amp; Spa để bạn được chăm sóc sức khỏe và sắc đẹp như một chính khách của Hoàng Gia!</h4>
                    </div>
                    <div class="background-home-button">
                        <ul>
                            <li>
                                <a href="home.html">Home
                                </a>
                            </li> 
                        </ul>                                   
                    </div>
                </div>
            </section>
        </div>

        <div class="row wow bounceInUp"data-wow-duration="2s" data-wow-delay="0s" data-wow-interaion="1"">
          <div id="hiddenbackground" class="container-fluid " style="background-image: url(  'Images/background2.jpg'">
            <div class="cacgoidieutri">
              <h1>
                <b>Các gói điều trị tháng 11</b>
            </h1>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="row">  
                  <div class="col-md-3">
                  </div>

                  <div class="col-md-3">                                    
                     <div class="cacgoi">
                        <div id="demo-3" class="demobox">
                          <img src="Images/spdieutri1.jpg" class="img-thumbnail">
                          <div class="details">

                            <img class= "anhtrong" src="Images/anhtrong1.PNG">        
                        </div>
                    </div>
                </div>    
            </div>

            <div class="col-md-3">                                
               <div class="cacgoi">
                  <div id="demo-3" class="demobox">
                    <img src="Images/spdieutri2.jpg" class="img-thumbnail">
                    <div class="details">

                      <img class= "anhtrong" src="Images/anhtrong2.PNG">         
                  </div>
              </div>
          </div>    
      </div>

      <div class="col-md-3">                                 
        <div class="cacgoi">
          <div id="demo-3" class="demobox">
            <img src="Images/spdieutri3.jpg" class="img-thumbnail">
            <div class="details">

              <img class= "anhtrong" src="Images/anhtrong3.PNG">        
          </div>
      </div>
  </div>                
</div>
</div>

<div class="row">
  <div class="col-sm-3">      
  </div>

  <div class="col-sm-3">                                
    <div class="cacgoi">
      <div id="demo-3" class="demobox">
        <img src="Images/spdieutri3.jpg" class="img-thumbnail">
        <div class="details">

          <img class= "anhtrong" src="Images/anhtrong4.PNG">        
      </div>
  </div>
</div>    
</div>

<div class="col-sm-3">                                
    <div class="cacgoi">
      <div id="demo-3" class="demobox">
        <img src="Images/spdieutri1.jpg" class="img-thumbnail">
        <div class="details">

          <img class= "anhtrong" src="Images/anhtrong5.PNG">
      </div>
  </div>
</div>    
</div>

<div class="col-sm-3">                                
    <div class="cacgoi">
      <div id="demo-3" class="demobox">
        <img src="Images/spdieutri2.jpg" class="img-thumbnail">
        <div class="details">
          <img class= "anhtrong" src="Images/anhtrong6.PNG">          
      </div>
  </div>
</div>    
</div>
</div>        
</div>
</div>
</div>
</div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
  <div class="progress">
    <div class="progress-bar progress-bar-success" role="progressbar" style="width:40%">
      <a href="#">Tảo  Tuấn Spa</a>
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
</div>

<!-- menutab -->
<h2>Thông tin chi tiết các gói điều trị</h2>
<p>Chọn mục để xem nội dung chi tiết: </p>

<div class="tab">
    <button class="tablinks" onmouseover="dichvu(event, 'cangda')">Căng da công nghệ Hàn Quốc</button>
    <button class="tablinks" onmouseover="dichvu(event, 'trimun')">Trị mụn chuyên sâu</button>
    <button class="tablinks" onmouseover="dichvu(event, 'trinam')">Trị nám, tàn nhang</button>
    <button class="tablinks" onmouseover="dichvu(event, 'trimundauden')">Trị mụn đầu đen</button>
    <button class="tablinks" onmouseover="dichvu(event, 'trehoada')">Trẻ hóa da</button>
    <button class="tablinks" onmouseover="dichvu(event, 'dapmatna')">Đắp mặt nạ chăm sóc da</button>
</div>


<div id="cangda" class="tabcontent">
    <h3>Căng da công nghệ Hàn Quốc Baby Skin và Oxy Jet</h3>
    <p>Công nghệ Baby Skin đến từ xứ sở sắc đẹp Hàn Quốc được nhiều chuyên gia trong ngành da liễu thẩm mỹ tín nhiệm do có khả năng giải quyết được nhiều vấn đề về da như:<br>

      – Giải quyết được triệt để các vùng da chũng, chảy xệ, xóa được các nếp nhăn nhỏ một cách tuyệt đối.<br>

      – Làm da trắng sáng bật tông.<br>

      – Thu nhỏ lỗ chân lông cho bề mặt da mịn màng<br>

      – Bề mặt da căng bóng trong veo như da em bé.<br>

      – Da săn chắc, thon gọn.<br>

      – Trẻ hóa da căng bóng (sau liệu trình gói).<br>



  Công nghệ Baby Skin ứng dụng 2 phương pháp Mesotherapy và Ultrasound đã cho thấy sự hiệu quả và an toàn, có thể áp dụng cho nhiều lứa tuổi và mọi làn da. Trong đó, Mesotherapy giúp đưa dưỡng chất vào tận lớp trung bì của làn da, đồng thời kích thích khả năng tái tạo của da, mang đến một làn da căng bóng, mịn màng, trẻ hơn tuổi thật. Còn Ultrasound với sóng siêu âm cung cấp năng lượng đến cấu trúc dưới da, giúp da săn chắc, thon gọn hơn.</p>
</div>
<div id="trimun" class="tabcontent">
    <h3>Trị Mụn chuyên sâu (90 phút)</h3>
    <p>
      Hiệu quả nhận được khi điều trị mụn, thâm tại NGỌC ANH HAIR- SPA:<br>

      – Sạch mụn rõ rệt ngay từ lần đầu trị liệu.<br>

      – Điều trị hết 100% mụn ẩn dưới da, mụn bọc, mụn mủ, mụn đầu đen, mụn đầu trắng, mụn cám…<br>

      – Lấy mụn kết hợp trị thâm không đau, không sưng tấy, không thâm, không sẹo.<br>

      – Sau liệu trình 2- 3 tháng làn da trắng hồng, sáng mịn, hết thâm, hết rỗ, thu nhỏ lỗ chân lông.<br>

      – An toàn cho mọi loại da.<br>

  – Hiệu quả lâu dài, ngăn ngừa mụn quay trở lại.</p> 
</div>


<div id="trinam" class="tabcontent">
    <h3>Trị nám, tàn nhang</h3>
    <p>Tinh chất ngọc trai chứa nhiều dinh dưỡng có lợi cho da như canxi, protein, các vi lượng… có công dụng làm trắng, đánh bật những đốm đem và vết nám trên da hiệu quả. Ngọc trai còn làm da săn chắc, ngăn ngừa lão hóa, hạn chế hình thành vết nhăn, giúp da căng mịn tự nhiên và sáng ngời như những hạt ngọc biển.<br>

      – Bước 1: Thăm khám, tư vấn soi da bằng máy soi thông minh nhập từ Hàn Quốc.<br>

      – Bước 2: Tẩy trang bằng kem tẩy thảo dược giúp làm sạch lớp trang điểm, bụi bẩn và bã nhờn.<br>

      – Bước 3: Rửa mặt bằng sữa rửa mặt  giúp làm sạch da và trắng sáng.<br>

      – Bước 4: Kỳ tế bào chết bằng gel  giúp làm sạch lớp sừng già chết. Xông nóng giúp giãn nở chân lông làm sạch sâu bên trong da.<br>

      – Bước 5: Massage bằng kem thảo dược giúp lưu thông tuần hoàn máu. Bấm huyệt giúp da thư giãn.<br>

      – Bước 6: Đắp khăn nóng. Đắp mặt nạ trắng da và chăm sóc tế bào sừng.<br>

      – Bước 7: Chạy máy nóng với ánh sáng sinh học cùng tinh chất trắng da và giảm sạm nám.<br>

      – Bước 8: Massage đầu, cổ, vai, gáy giúp thư giãn.Đắp khăn lạnh giúp se khít chân lông và săn chắc da.<br>

  – Bước 9: Thoa kem chống nắng giúp bảo vệ da.</p>
</div>

<div id="trimundauden" class="tabcontent">
    <h3>Trị mụn đầu đen</h3>
    Trị mụn đầu đen hiệu quả nhanh chóng cho Nam & Nữ

    Tại Sunny Spa, điều đầu tiên quan trọng để trị mụn đầu đen là xác định lý do gây ra mụn để tư vấn trị mụn hiệu quả, kết hợp với qui trình các bước chăm sóc da đặc biệt chuyên sâu loại bỏ bã nhờn, bụi bẩn trên da, lấy sạch cồi mụn, và đắp mặt nạ nuôi dưỡng da điều trị vết thâm mụn và se khít lỗ chân lông ngăn ngừa các tác nhân bên ngoài gây mụn.

    Các bước thực hiện:<br>
    Bước 1: Bắt đầu liệu trình cần thực hiện thao tác kiểm tra tình trạng da, xác định nguyên nhân gây mụn.<br>
    Bước 2: Làm sạch da sâu<br>
    Bước 3: Loại bỏ các vết mụn ẩn sâu trên da<br>
    Bước 4: Lấy sạch nhân mụn<br>
    Bước 5: Tái tạo làn da mới.<br>
    Bước 6:  Massage đầu kết hợp ấn huyệt thư giãn.<br>
</div>

<div id="trehoada" class="tabcontent">
    <h3>Trẻ hóa da</h3>
    Liệu trình trẻ hóa da bằng tinh chất serum vitamin C đặc biệt được massage bằng sóng điện rất nhỏ đủ đưa tinh chất Vitamin C vào lớp hạ bì của da kích thích elastin & collagen mới tái sinh, phục hồi các tế bào da có dấu hiệu tổn thương, duy trì tế bào da trẻ hóa lâu dẫn đến các nếp nhăn nhanh chóng biến mất, da sáng đẹp căng tràn sức sống.<br>
    Liệu trình trẻ hóa da vitamin C này vô cùng độc đáo chỉ có duy nhất tại Sunny Spa Đà Nẵng bởi lẽ Vitamin C được dẫn truyền nhanh chóng vào sâu giúp làn da mới nhanh chóng sản sinh, làm đều sắc tố da, ngăn lão hóa và làm mờ vết nhăn hữu hiệu.
    Các bước thực hiện:<br>
    Bước 1: Làm sạch da và rửa mặt, làm ẩm da với sản phẩm cao cấp chiết xuất tự nhiên<br>
    Bước 2: Tẩy tế bào chết sạch sâu, loại bỏ lớp á sừng và bụi bẩn tích tụ trên da, gây thâm xỉn sạm da.<br>
    Bước 3: Massage da mặt để đánh thức các tế bào sâu bên trong da, kích thích các mô cơ mềm trên mặt để da săn chắc và hấp thu hưỡng chất. Xông hơi bằng tinh dầu giúp hoạt hóa tuần hoàn máu dưới da, giãn nở lỗ chân lông.<br>
    Bước 4: Thực hiện phương pháp trẻ hóa da bằng điện di vitamin C ( điện di ion viotaliont) của Nhật Bản. Cho các dưỡng chất quan trọng được thẩm thấu vào sâu trong da một cách tối ưu. Serum vitamin C được thẩm thấu mạnh và sâu, tạo ra nồng độ cao dưới da nên hoạt tính được tăng cường.<br>
    Bước 5: Đắp mặt nạ, chiếu ánh sáng.<br>
    Bước 6: Phun oxy cung cấp độ ẩm.<br>
    Bước 7: Thoa kem dưỡng da mềm dịu, kem chống nắng và kết thúc quá trình chăm sốc da bằng serum vitamin C.<br>
</div>

<div id="dapmatna" class="tabcontent">
    <h3>Đắp mặt nạ chăm sóc da</h3>
    Đối với phụ nữ, làn da là một chuẩn mực quan trọng để góp phần đánh giá vẻ đẹp của họ. Sunny spa ngoài việc cung cấp các dịch vụ chuyên điều trị, chăm sóc da mặt chuyên sâu, cao hơn đó chúng tôi cung cấp dịch chăm sóc đắp mặt nạ trẻ hóa da từ Yến dưỡng chất cao cấp tăng khả năng hấp thụ dinh dưỡng cho da mang đến vẻ đẹp thanh toát tự nhiên, căng mịn đúng như mơ ước của bạn.<br>

    Vấn đề da thô ráp, tàn nhan, nám…hay lão hóa luôn là nổi ám ảnh khó phai mờ trong lòng phái đẹp. Vì thế, liệu trình chăm sóc da mặt chuyên sâu tại Sunny là giải pháp lý tưởng dành cho các chị em làm chậm quá trình lão hóa da, giúp phục hồi làn da trắng sáng tự nhiên và khuôn mặt luôn tươi trẻ.<br>

    Sunny spa với liệu trình chăm sóc da chuyên sâu khoa học nhằm phục hồi, cải thiện và đào thải hoàn toàn các tác nhân ảnh hưởng xấu đến làn da tự nhiên, độ khỏe và mịn màng. Nhờ đó, sau quá trình chăm sóc đặc biệt này bạn sẽ cảm nhận được sự mềm mịn, căng bóng, tươi sáng rõ rệt trên làn da của mình.<br>
</div>
<div class="clearfix"></div>




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