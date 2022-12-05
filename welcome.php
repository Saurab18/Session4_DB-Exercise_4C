<!DOCTYPE html>
<html>

<style>
body, html {
  height: 100%;
  margin: 0;
}

.tech {
  background-image: url('https://wallpaperaccess.com/full/279114.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.stop {
  position: absolute;
  top: 0;
  right: 16px;
  font-size: xx-large;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>

<body>

<div class="tech">

    <div class="stop">
    
      <a href='logout.php'>Logout</a>

    </div>

    <div class="middle">
        <h1>

            <?php
                session_start();
                if (!isset($_SESSION['SESSION_EMAIL'])) {
                    header("Location: index.php");
                    die();
                }

                include 'config.php';

                $query = mysqli_query($conn, "SELECT * FROM optical WHERE email='{$_SESSION['SESSION_EMAIL']}'");

                if (mysqli_num_rows($query) > 0) {
                    $row = mysqli_fetch_assoc($query);

                    echo "Welcome " . $row['Name'];
                }
            ?>

        </h1>
    
</body>
</html>
