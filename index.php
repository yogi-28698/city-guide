<?php
  include 'outer_includes/head.php';
  include 'outer_includes/header.php';
?>
    
    <!-- Features -->

    <section id = "features">

        <div class="row">

          <div class="col-md-6 feature-box">

            <i class="fas fa-check-circle fa-4x icon"></i>
            <h2>Easy to Use</h2>
            <p class="desc-para">You can explore places in Few Clicks</p>

          </div>

          <div class="col-md-6 feature-box">

            <i class="fas fa-bullseye fa-4x icon"></i>
            <h2>Reliable</h2>
            <p class="desc-para">We Accept Reviews After Several Filters</p>

          </div>

        </div>

    </section>

    <!-- Grid of some cities -->

    <section id="features">

      <h1 id = "city-grid">Explore Your City</h1>

          <!-- Search Form -->

    <section id = "search-city">

      <div class="search-box">
        <div class="input-group">
          <input type="text" id = "cityName" class="form-control placehld" placeholder="City Name" aria-label="Recipient's username with two button addons" aria-describedby="button-addon4">
          <div class="input-group-append" id="button-addon4">
            <button class="btn btn-outline-secondary" type="button" onclick = "openfile()"><span 
              class="search-butto"><span class="search-button">Search</span></button>
          </div>
        </div>
    </div>

      <div class="row city-row">
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/kanpur.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Kanpur</h5>
              <a href="Kanpur.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/lucknow.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Lucknow</h5>
              <a href="Lucknow.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/agra.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Agra</h5>
              <a href="Agra.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
      </div>

      <div class="row city-row">
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/delhi.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Delhi</h5>
              <a href="Delhi.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/mumbai.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Mumbai</h5>
              <a href="Mumbai.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card">
            <img class = "city-image" src="HatchfulExport-All/bangalore.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title city-name">Bangalore</h5>
              <a href="Bangalore.php" class="btn btn-outline-dark places-btn">Explore City</a>
            </div>
          </div>
        </div>
      </div>

    </section>


   </section>

   <?php
      include 'outer_includes/footer.php'
   ?>

   <script type = "text/javascript">

      function openfile() {
        window.location = document.getElementById("cityName").value + ".php";
      }

  </script>


</body>
</html>
