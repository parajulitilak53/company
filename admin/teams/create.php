<?php require("../inc/header.php"); ?>

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

    <?php require("../inc/navbar.php"); ?>
  </header><!-- End Header -->

  <?php require("../inc/sidebar.php"); ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Sliders</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item">Sliders</li>
          <li class="breadcrumb-item active">Create Sliders</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Add Slider
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php
                  if (isset($_POST['saveteam'])) {
                    $top_title = $_POST['top_title'];
                    $top_description = $_POST['top_description'];
                    $name = $_POST['name'];
                    $position = $_POST['position'];
                    $filename = $_FILES['dataFile']['name'];
                    $filesize = $_FILES['dataFile']['size'];
                    $explode = explode(".", $filename);
                    $file = strtolower($explode['0']);
                    $ext = strtolower($explode['1']);
                    $newfile = str_replace(" ", "", $file);

                    $finalname = $newfile . time() . "." . $ext;
                    if ($filesize <= 5000000) {
                      if ($ext == 'jpg' || $ext == 'png' | $ext == 'jpeg') {
                        if(move_uploaded_file($_FILES['dataFile']['tmp_name'],'../uploads/'.$finalname)){
                          $query= "INSERT INTO teams (top_title,top_description,img,name,position) Values('$top_title', '$top_description', '$finalname', '$name', '$position')";
                          $result=mysqli_query($con, $query);
                          if($result){
                            ?>
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Your File is submitted successfully</strong> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                <?php
                            // header("Refresh:2; url=index.php");
                            echo "<script>window.location.href='index.php'</script>";
                          }
                          else{
                            echo "file is not submitted";
                          }
                        }
                        else{
                          echo "file is not uploaded";
                        }
                      }
                      else{
                        echo " extension does not match";
                      }
                    } else {
                      echo "file size must be 5 mb";
                    }
                  }
                ?>
              <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Top Title</label>
                  <input type="text" name="top_title" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Top Description</label>
                  <input type="text" name="top_description" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Name</label>
                  <input type="text" name="name" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Position</label>
                  <input type="text" name="position" class="form-control" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputPhone" class="form-label">Image</label>
                  <input type="file" name="dataFile" class="form-control" id="inputPhone">
                </div>
                <div class="text-start">
                  <button type="submit" name="saveteam" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>