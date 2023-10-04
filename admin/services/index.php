<?php require("../inc/header.php"); ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="../assets/img/logo.png" alt="">
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
      <h1>Manage Services</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Services</li>
          <li class="breadcrumb-item active">Manage Services</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                Manage Services
                <a href="create.php" class="btn btn-primary float-end">Add Services</a>
              </h5>

              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Icon</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT *FROM services";
                  $result = mysqli_query($con, $query);
                  $i = 1;
                  while ($data = mysqli_fetch_array($result)) {
                  ?>
                  <tr>
                    <th scope="row"><?php echo $i++; ?></th>
                    <td><?php echo $data['title']; ?></td>
                    <td><?php echo $data['description']; ?></td>
                    <td> <img src="<?php echo  '../uploads/'.$data['icon'];?>" class="img-fluid" alt="..." width="100" height="100"> </td>
                    <td>
                      <a class="btn-sm btn btn-outline-primary" href="edit.php?id=<?php echo $data['id'];?>" role="button"><i class="bi bi-pen"></i> </a>
                      <a class=" btn-sm btn" href="view.php?id=<?php echo $data['id'];?>" role="button"><i class="bi bi-eye text-info"></i> </a>
                      <a class=" btn-sm btn" href="delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('Are you to delete data??');" role="button"><i class="bi bi-trash text-danger"></i> </a>
                    </td>
                  </tr>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php require("../inc/footer.php"); ?>