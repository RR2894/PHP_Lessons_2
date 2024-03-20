<?php
// The MySQL service named in the docker-compose.yml.
$host = 'db';

// Database user name
$user = 'lionUser';

//database user password
$pass = 'lionPass';

?>

<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

  <aside class="col-sm-4">

    <?php Navigation(); ?>

  </aside>
  <!--SIDEBAR-->

  <article class="main-content col-sm-8">
    <div class="jumbotron">
      <h2 class="text-muted">Important</h2>

      <?php echo "Welcome to PHP World ";
      echo "</br>";
      // check the MySQL connection status
      $conn = new mysqli($host, $user, $pass);
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      } else {
        echo "Connected to MySQL server successfully!";
      }
      ?>

      <h3>Personal message</h3>

      <p>Welcome to learn PHP</p>

      <p>
      </p>

      <h3>Contact</h3>


      <p>PS: If you have some suggestions or questions make them at the discussion page or contact me directly at <a
          href="mailto:santosh.kalwar@bc.fi" target="_top">santosh.kalwar@bc.fi </a></p>

    </div>

    <div class="row">


    </div>


    <div class="row">


      <?php include "includes/footer.php"; ?>