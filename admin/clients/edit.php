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
      <h1>Users</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Users</li>
          <li class="breadcrumb-item active">Edit User</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Update User
                <a href="index.php" class="btn btn-danger float-end">Back</a>
              </h5><br>
              <?php

            if (isset($_GET['id'])) {

                $id = $_GET['id'];
                $query = "SELECT * FROM clients WHERE id=$id";
                $result = mysqli_query($con, $query);
                $data = $result->fetch_assoc();
            }

            ?>

            <?php

            if (isset($_POST['updateclient'])) {
                $title = $_POST['title'];
                $file = $_FILES['dataFile']['name'];
                $file_size = $_FILES['dataFile']['size'];

                // submit previous file
                if ($title != "" && $file == "") {
                    $querry = "UPDATE  clients  SET  title='$title' WHERE id=$id";

                    $result = mysqli_query($con, $querry);
                    if ($result) {
                        echo "You didnot changed any thing ";
                    } else
                        echo "not 1st";
                }

                // submit new file & replace old file
                if ($file != "" && $title != "") {

                    if ($file_size <= 500040) {
                        $explode = explode('.', $file); // explode cuts the name after the dot.
                        $flink = strtolower($explode[0]);
                        $extlink = strtolower($explode[1]);
                        $replace = str_replace(' ', '', $file); //to remove space
                        $finalname = $replace . time() . '.' . $extlink; //concating names with time
                        $targrt_file = '../uploads/' . $finalname;
                        if ($extlink == 'jpg' || $extlink == 'png' || $extlink == 'jpeg') {

                            // replace old file
                            $oldfilelink = $data['img']; //file link from database
                            $finallink = '../uploads/' . $oldfilelink;
                            unlink($finallink);

                            if (move_uploaded_file($_FILES['dataFile']['tmp_name'], $targrt_file)) {

                                $querry = "UPDATE  clients  SET  title='$title', img='$finalname' WHERE id=$id";
                                $result = mysqli_query($con, $querry);
                                if ($result) {
                                    echo "File uploaded";
                                    echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
                                }
                                else{
                                    echo "File is not uploaded";
                                }
                            } else {
                                echo "fiels  upload failed";
                            }
                        } else {

                            echo "extension doesno mattch";
                        }
                    } else {
            ?>
                        <div class="alert alert-primary" role="alert">
                            file size must be less than  5MB
                        </div>

                    <?php

                    }
                } else {
                    ?>
                    <div class="alert alert-primary" role="alert">
                        Filed are required
                    </div>

            <?php
                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=manage-file.php\">";
                }
            }
            ?>
               <form class="row g-3" action="" method="POST" enctype="multipart/form-data">
                <div class="col-md-6">
                  <label for="inputNanme4" class="form-label">Title</label>
                  <input type="text" name="title" class="form-control" value="<?php echo $data['title']  ?>" id="inputNanme4">
                </div>
                <div class="col-md-6">
                  <img src="<?php echo "../uploads/" . $data['img'] ?>" alt="" srcset="" width="150px" height="140px">
                  <label for="inputPhone" class="form-label">Image</label>
                  <input type="file" name="dataFile" class="form-control" id="inputPhone">
                </div>
                <div class="text-start">
                  <button type="submit" name="updateclient" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php") ?>