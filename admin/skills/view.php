<?php require("../inc/header.php") ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">NiceAdmin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <?php require("../inc/navbar.php") ?>
  </header><!-- End Header -->

  <?php require("../inc/sidebar.php") ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Skills</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Skills</li>
          <li class="breadcrumb-item active">View Skill</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Skill
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php
              if(isset($_GET['id'])){
                $id= $_GET['id'];
                
                $select="SELECT *FROM skills WHERE id=$id";
                $select_result = mysqli_query($con, $select);
                // $data=mysqli_fetch_assoc($select_result);
                $data=$select_result->fetch_assoc();
            }
            ?>
             <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputTop_Title" class="form-label">Top_Title</label>
                  <input type="text" name="top_title" class="form-control" readonly value="<?php echo $data['top_title']; ?>" id="inputTop_Title">
                </div>
                <div class="col-md-6">
                  <label for="inputTop_Description" class="form-label">Top_Description</label>
                  <input type="text" name="top_description" class="form-control" readonly value="<?php echo $data['top_description']; ?>" id="inputTop_Description">
                </div>
                <div class="col-md-6">
                  <label for="inputSkill_Title" class="form-label">Skill_Title</label>
                  <input type="text" name="skill_title" class="form-control" readonly value="<?php echo $data['skill_title']; ?>" id="inputSkill_Title">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>