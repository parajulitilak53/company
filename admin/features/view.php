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
      <h1>Features</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Features</li>
          <li class="breadcrumb-item active">View Feature</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">View Feature
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php
              if(isset($_GET['id'])){
                $id= $_GET['id'];
                
                $select="SELECT *FROM features WHERE id=$id";
                $select_result = mysqli_query($con, $select);
                // $data=mysqli_fetch_assoc($select_result);
                $data=$select_result->fetch_assoc();
            }
            ?>
              <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" readonly value="<?php echo $data['title']  ?>" id="inputNanme4">
                </div>
                <div class="col-md-6 overflow-hidden">
                  <img src="<?php echo "../uploads/" . $data['icon'] ?>" alt="" srcset="" width="150px" height="140px">
                  <label for="inputPhone" class="form-label"><?php echo $data['icon']  ?></label>
                  <!-- <input type="file" name="dataFile" class="form-control" readonly id="inputPhone"> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>