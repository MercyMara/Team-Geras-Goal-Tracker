<?php

echo <<<_END
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>$pagename</title>
</head>
<body>
  <div class="menu">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <img src="img/star.png" />
          <span>SIMPLIFY LIFE</span>
        </div>
      </div>
      <div class="row center">
        <div class="col-12">
          <img src="img/user.png" class="logo-img" />
          <h6>$user[firstname]</h6>
        </div>
      </div>
      <div class="row margin-50">
        <div class="col-12">
          <ul>
            <li><a href="dashboard.php" class=""><img src="img/dash1.png"> Dashboard</a></li>
            <li><a href=""><img src="img/addgoal.png"> Create Goal</a></li>
            <li><a href="goals.php"><img src="img/goal.png"> Goals</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="container-fluid">
      <div class="row">
        <div class="col-6">
          <a href="#"><b>What have you achieved today?</b></a>
        </div>
        <div class="col-6 justify-content-end text-right">
          <a href="logout.php" class=""><b>Log out</b></a>
        </div>
      </div>
      <div class="row margin-50">
_END;

?>