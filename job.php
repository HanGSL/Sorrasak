<?php
require('./api/connect.php');

$objCon = connectDB();
// $id = $_GET['id'];
$strSQL = "SELECT * FROM job ";
$objQuery = mysqli_query($objCon, $strSQL);
$objResult = mysqli_fetch_array($objQuery, MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <?php include "header-link.php"; ?>
  </head>
  <body>
    <div class="container">
        <?php include "header.php"; ?>
    </div>
    <main class="container">
        <div class="slide-container">
            <?php include "slide-page.php"; ?>
        </div>
        <link rel="stylesheet" href="index2.css">
            <nav class="nav link d-flex flex-wrap justify-content-between">
              <?php include "nav-link.php"; ?>
            </nav>
        <script src="person.js"></script>
        <?php include "link-boot.php"; ?>

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
            <h2><?php echo $objResult['job_name'];?></h2>
            <p>Architecto nobis eos vel nam quidem vitae temporibus voluptates qui hic deserunt iusto omnis nam voluptas asperiores sequi tenetur dolores incidunt enim voluptatem magnam cumque fuga.</p>
            </div>

            <div class="row g-4 g-lg-5" data-aos="fade-up" data-aos-delay="200">

            <div class="col-lg-5">
                <div class="about-img">
                <img src="images/index_pag/<?php echo $objResult['job_img'];?>" class="img-fluid" alt="">
                </div>
            </div>

            <div class="col-lg-7">
                

                <!-- Tabs -->
                <ul class="nav nav-pills mb-3">
                <li><a class="nav-link active" data-bs-toggle="pill" href="#tab1">รับสมัครงาน</a></li>
                <li><a class="nav-link" data-bs-toggle="pill" href="#tab2">ประกาศรับสมัครงาน</a></li>
                </ul><!-- End Tabs -->

                <!-- Tab Content -->
                <div class="tab-content">

                <div class="tab-pane fade show active" id="tab1">

                    
                    <h4><?php echo $objResult['job_title'];?></h4>
                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                    </div>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                    </div>
                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                    </div>
                    <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

                </div><!-- End Tab 1 Content -->

                <div class="tab-pane fade show" id="tab2">

                    <h4><?php echo $objResult['job_title'];?></h4>
                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Repudiandae rerum velit modi et officia quasi facilis</h4>
                    </div>
                    <p>Laborum omnis voluptates voluptas qui sit aliquam blanditiis. Sapiente minima commodi dolorum non eveniet magni quaerat nemo et.</p>

                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Incidunt non veritatis illum ea ut nisi</h4>
                    </div>
                    <p>Non quod totam minus repellendus autem sint velit. Rerum debitis facere soluta tenetur. Iure molestiae assumenda sunt qui inventore eligendi voluptates nisi at. Dolorem quo tempora. Quia et perferendis.</p>

                    <div class="d-flex align-items-center mt-4">
                    <i class="bi bi-check2"></i>
                    <h4>Omnis ab quia nemo dignissimos rem eum quos..</h4>
                    </div>
                    <p>Eius alias aut cupiditate. Dolor voluptates animi ut blanditiis quos nam. Magnam officia aut ut alias quo explicabo ullam esse. Sunt magnam et dolorem eaque magnam odit enim quaerat. Vero error error voluptatem eum.</p>

                </div><!-- End Tab 2 Content -->

                

                </div>

            </div>

            </div>

        </div>
        </section><!-- End About Section -->
        <footer class="blog-footer footer" data-aos="fade-up">
            <?php include "footer.php" ?>
        </footer>
    </main>
    
  </body>
  </html>