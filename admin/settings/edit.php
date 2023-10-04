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
      <h1>Settings</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Settings</li>
          <li class="breadcrumb-item active">Edit Setting</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update Setting
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php
                    if(isset($_GET['id'])){
                        $id= $_GET['id'];

                        $select="SELECT *FROM settings WHERE id=$id";
                        $select_result = mysqli_query($con, $select);
                        // $data=mysqli_fetch_assoc($select_result);
                        $data=$select_result->fetch_assoc();

                    }
                    if (isset($_POST['updatesetting'])) {
                        $site_key = $_POST['site_key'];
                        $site_value = $_POST['site_value'];

                        if ($site_key != "" && $site_value != "") {
                            $insert = "UPDATE settings SET site_key='$site_key', site_value='$site_value' where id= $id";
                            $result = mysqli_query($con, $insert);
                            if ($result) {
                    ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Your Data is Updated successfully</strong> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                    <?php
                                // header("Refresh:2; url=index.php");
                                echo "<script>window.location.href='index.php'</script>";
                            } else {

                                ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Your Data is not Updated successfully</strong> 
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>

                    <?php
                                header("Refresh:2; url=create.php");
                            }
                        } else {
                            echo "all field are required";
                            header("Refresh:2; url=create.php");
                        }
                    }
                    ?>
              <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
              <div class="col-md-6">
                  <label for="inputKey" class="form-label">Key</label>
                  <input type="text" name="site_key" readonly class="form-control" value="<?php echo $data['site_key']; ?>" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <label for="inputValue" class="form-label">Value</label>
                  <input type="text" name="site_value" class="form-control" value="<?php echo $data['site_value']; ?>" id="inputValue">
                </div>
                <div class="text-start">
                  <button type="submit" name="updatesetting" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>