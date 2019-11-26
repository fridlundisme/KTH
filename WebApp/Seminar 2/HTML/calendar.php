<!DOCTYPE html>
<?php session_start(); ?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="../CSS/reset.css">
  <link rel="stylesheet" type="text/css" href="../CSS/calendar.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Maven+Pro" rel="stylesheet">
            <title>Calendar</title>
</head>
  <body>
    <div>
      <div class="icon">
    <h1>
      <a href="index.php">Tasty Recipes</a>
      <div class="loginborder">
        <?php if(!isset($_SESSION['logged-in'])){ ?>
      <a class="login" href="../Login/login.html">Login</a>
    </div>
  <?php }else{ ?>
    <a class="login" href="../login/logout.php">Logout</a>
    </div>
  <?php } ?>
      <br>
        <a href="index.php" class="home">Home</a>
          <a href="calendar.html" class="calendar">Calendar</a>
          </h1>
    </div>
    </div>
        <p class="calendar-head">Explore the meals in the calendar!</p>
          <div class="week-days">
            <p class="week-days">Monday Tuesday Wednesday Thursday Friday Saturday Sunday</p>
    <div class="grid-container">
    <div class="grid-item pancake">1
      <a href="pancakes.php" class="day"></a>
    </div>
    <div class="grid-item">2</div>
    <div class="grid-item">3</div>
    <div class="grid-item meatballs">4
      <a href="meatballs.php" class="day"></a>
    </div>
    <div class="grid-item">5</div>
    <div class="grid-item">6</div>
    <div class="grid-item">7</div>
    <div class="grid-item">8</div>
    <div class="grid-item">9</div>
    <div class="grid-item">10</div>
    <div class="grid-item">11</div>
    <div class="grid-item">12</div>
    <div class="grid-item">13</div>
    <div class="grid-item">14</div>
    <div class="grid-item">15</div>
    <div class="grid-item">16</div>
    <div class="grid-item">17</div>
    <div class="grid-item">18</div>
    <div class="grid-item">19</div>
    <div class="grid-item">20</div>
    <div class="grid-item">21</div>
    <div class="grid-item">22</div>
    <div class="grid-item">23</div>
    <div class="grid-item">24</div>
    <div class="grid-item">25</div>
    <div class="grid-item">26</div>
    <div class="grid-item">27</div>
    <div class="grid-item">28</div>
</div>
</div>
  </body>
</html>
