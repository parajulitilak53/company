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
      <h1>Abouts</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Abouts</li>
          <li class="breadcrumb-item active">Edit About</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update About
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php
                    if(isset($_GET['id'])){
                        $id= $_GET['id'];

                        $select="SELECT *FROM abouts WHERE id=$id";
                        $select_result = mysqli_query($con, $select);
                        // $data=mysqli_fetch_assoc($select_result);
                        $data=$select_result->fetch_assoc();

                    }
                    if (isset($_POST['updateabout'])) {
                        $title = $_POST['title'];
                        $sub_title = $_POST['sub_title'];
                        $description = $_POST['description'];

                        if ($title != "" && $sub_title != "" && $description != "") {
                            $insert = "UPDATE abouts SET title='$title', sub_title='$sub_title', description='$description' where id= $id";
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
                  <label for="inputTitle" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" value="<?php echo $data['title']; ?>" id="inputTitle">
                </div>
                <div class="col-md-6">
                  <label for="inputSub_Title" class="form-label">Sub_Title</label>
                  <input type="text" name="sub_title" class="form-control" value="<?php echo $data['sub_title']; ?>" id="inputSub_Title">
                </div>
                <div class="col-md-6">
                  <label for="inputDescription" class="form-label">Description</label>
                  <textarea type="text" name="description" class="form-control" value="" id="inputDescription"><?php echo $data['description']; ?></textarea>
                </div>
                <div class="text-start">
                  <button type="submit" name="updateabout" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>