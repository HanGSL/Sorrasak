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
          <h2>โครงสร้างผู้บริหารโรงพยาบาลป่าตอง</h2>
          <!-- <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p> -->
        </div>
        <div class="row gy-5">    
        <center>
          <div class="col-xl-4 col-md-6 d-flex" data-aos="zoom-in" data-aos-delay="200">
            <div class="team-member">
              <div class="member-img">
                <img src="./images/ceo/ceo.jpg" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                
                <h5>แพทย์หญิงเหมือนแพร บุญล้อม</h5>
                <span>นายแพทย์ชำนาญการ</span>
                <span>ผู้อำนวยการโรงพยาบาลป่าตอง</span>
                <span>โทร 0 7636 2633</span>
              </div>
            </div>
          </center>
        </div>
      </div>
      <br>
      <br>

      <div class="row gy-5" id="ceolist"></div>

      </div>
    </section><!-- End Team Section -->

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>โครงสร้างบริหารงานโรงพยาบาล</h2>
        </div>
        <div class="row gy-5"> 
        <center>
          <div class="row"  data-aos="fade-up">
            <img src="./images/sytem.jpg" alt="">
          </div>
        </center>   
        
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


<!-- <script>
  $(document).ready(function() {
  $.ajax({
    method: 'GET',
    url: './api/ceo.php',
    dataType: 'json',
    success: function(response) {
      if (response.RespCode === 200) {
        var ceoData = response.data; 

        const ceoContainer = document.querySelector("#ceolist");

        ceoData.forEach((ceo, i) => {
          const ceoItem = document.createElement("div");
          ceoItem.classList.add("col-xl-4", "col-md-6","d-flex");
          ceoItem.setAttribute("data-aos", "zoom-in");
          ceoItem.setAttribute("data-aos-delay", `${100 * (i + 1)}`);

          ceoItem.innerHTML = `
            <div class="team-member">
              <div class="member-img">
                <img src="./images/ceo/${ceo.ceo_img}" class="img-fluid" alt="">
              </div>
              <div class="member-info">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
                <h4>${ceo.ceo_name}</h4>
                <span>Product Manager</span>
              </div>
            </div>
          `;

          ceoContainer.appendChild(ceoItem);
        });
      } else {
        console.log("Error: Unable to fetch ceo data");
      }
    },
    error: function(xhr, status, error) {
      console.error(xhr.responseText);
    }
  });
});
</script> -->