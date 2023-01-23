
<?php
// include('./middlewares/isLoggedin.php');
// include("./middlewares/isadmin.php");

// $islogedin = new IslogedIn();
// $isadmin = new IsAdmin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CultureDev</title>
  <!-- cdn -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

<body>
  <div class='dashboard'>
    <div class="dashboard-nav">
      <header><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a><a href="#" class="brand-logo"><i
            class="fas fa-code"></i> <span>CultureDev</span></a></header>
      <nav class="dashboard-nav-list"><a id="Home" href="category.php" class="dashboard-nav-item"><i class="fas fa-home"></i>
          Home </a><a href="dashboard.php" class="dashboard-nav-item active"><i class="fas fa-tachometer-alt"></i> dashboard</a>
          <a href="userprofile.php" class="dashboard-nav-item"><i class="fas fa-user"></i> Profile </a>
        <div class="nav-item-divider"></div>
        <a href="logout.php" class="dashboard-nav-item"><i class="fas fa-sign-out-alt"></i> Logout </a>
      </nav>
    </div>
    <div class='dashboard-app'>
      <header class='dashboard-toolbar'><a href="#!" class="menu-toggle"><i class="fas fa-bars"></i></a></header>
      <div class='dashboard-content'>
        <div class='container'>
