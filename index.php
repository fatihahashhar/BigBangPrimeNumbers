<?php
$page_title = "Big Bang Prime Numbers";
include('includes/header.php');
?>

<style>
    .img-fluid {
      width: 100%;
      height: auto;
    }

    .container-fluid {
      position: relative;
      padding: 0;
    }

    .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5); /* Adjust the opacity/fade as needed */
    }

    .overlay-content {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      text-align: center;
      color: #fff;
    }

    .overlay-content p {
      margin-bottom: 20px;
    }

    .overlay-content a {
      display: inline-block;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      background-color: #475053;
      color: #ffffff;
      text-decoration: none;
    }

    body {
    overflow-x: hidden;
  }
  </style>

    <!-- Volunteer Now -->
    <section>
          <div style="position: relative;">
            <div class="row">
              <div class="col">
                <div class="position-relative">
                  <img src="https://www.worldatlas.com/upload/c9/18/46/358626f5-a5e9-4da7-87af-8bafcf54a0c9.jpeg" class="img-fluid" alt="Background Image" />
                  <div class="overlay"></div>
                  <div class="overlay-content">
                    <h4>There was a tale when 2 prime numbers collided and a big bang happened</h4>
                    <br>
                    <p>Want to know when the big bang will happen again?"</p>
                    <p>Click button below now!"</p>
                    <form action="generate.php" method="post">
                    <div><button class="btn btn-primary btn-lg col-sm-4 mb-2" type="submit" name="submit"><i class="far fa-eye"></i> &nbsp VIEW </button></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      <!-- Volunteer Now -->