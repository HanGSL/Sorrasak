<?php
require('./api/connect.php');

$objCon = connectDB();
$strSQL = "SELECT * FROM ceo_manage";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <link rel="stylesheet" href="index2.css">

    <link href="./Not used/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./Not used/css/style.css" rel="stylesheet">

    <?php include "header-link.php"; ?> 
  </head>
  <body>
  <div class="scroll-to-top">
    <i class="fa-solid fa-angles-up" style="color: #ffffff;"></i>
  </div>  
  <div class="container">
    <?php include "header.php"; ?>
  </div>

<main class="curtain-container container">
    <!-- <div id="curtain" class="curtain">
    <?php include "slide-page.php"; ?>
    </div> -->

    <nav class="nav link d-flex flex-wrap justify-content-between">
        <?php include "nav-link.php"; ?>
    </nav>
</div>
<?php include "link-boot.php"; ?> 
    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>อัพเดตผู้บริหาร</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>
        <div class="row gy-5">    

        
            <form action="action_create.php" id="form_create" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
                <div class="row">
                    <div class="col-md-9">
                        <!-- ข้อมูลเนื้อหา -->
                        <div class="row mt-4">
                            <!-- แถวที่ 1 -->
                            
                            <div class="col-md-6 mt-3">
                                <label for="m_name" class="form-label">ชื่อ <span class="text-danger">*</span></label>
                                <input type="text" id="m_name" name="m_name" class="form-control" required>
                            </div>
                            <div class="col-md-6 mt-3">
                                <label for="m_price" class="form-label">ราคา <span class="text-danger">*</span></label>
                                <input type="text" id="m_price" name="m_price" class="form-control" required>
                            </div>
                            <!-- แถวที่ 2 -->
                            <div class="col-md-14 mt-2">
                                <label for="m_description" class="form-label">รายละเอียด <span class="text-danger">*</span></label>
                                <textarea name="m_description" id="m_description" class="form-control" rows="4" required></textarea>
                            </div>
                            <!-- ปุ่มบันทึก -->
                            <div class="col-md-12 mt-3">
                                <button type="submit" class="btn btn-primary btn-lg">บันทึก</button>
                                <button type="reset" class="btn btn-danger btn-lg">ล้างค่า</button>
                            </div>
                        </div>
                    </div>
                    <duv class="col-md-3">
                        <!-- ข้อมูลรูปภาพ -->
                        <div class="row mt-4">
                            <div class="col-md-11 mt-3">
                                <label for="file_name" class="form-label">รูปภาพ</label>
                                <input class="form-control" id="file_name" name="file_name" type="file" onchange="loadFile(event)">
                            </div>
                            <div class="col-md-11 mt-3">
                                <img src="../imgs/noimg.png" class="img-thumbnail" id="file_name_preview" />
                            </div>
                        </div>
                    </duv>
                </div>
            </form>
        </div>




        
      </div>
    </section><!-- End Team Section -->
        
        <br>
        <br>
        <br>
        <br>

        <footer class="blog-footer footer"  data-aos="fade-up">
          <?php include "footer.php"; ?>
        </footer>
    </main>
  </body>
</html>
<script src="person.js"></script>

