<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!--- NAVBAR -->
    <nav class="navbar navbar-expand-lg pt-4">
      <div class="container-fluid px-3">
        <a href="#" class="navbar-brand">
          <img src="../user/image/foodea1.png" alt="" width="45" height="50" />
          FOODEA
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasNavbar"
          aria-controls="offcanvasNavbar"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div
          class="offcanvas offcanvas-end"
          tabindex="-1"
          id="offcanvasNavbar"
          aria-labelledby="offcanvasNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Foodea</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a href="#" class="nav-link active">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a
                  href="#"
                  class="nav-link dropdown-toggle"
                  role="button"
                  data-bs-toggle="dropdown"
                  >Services</a
                >
                <ul class="dropdown-menu">
                  <li><a href="#" class="dropdown-item">Rider</a></li>
                  <li><a href="#" class="dropdown-item">Partner</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">About Us</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Contact Us</a>
              </li>
            </ul>
            <button
              type="button"
              class="btn btn-primary btn-sm py-2 px-5 rounded"
            >
              Login
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!--- SHOWCASE -->
    <section class="pt-5 text-center text-sm-start">
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center">
          <div>
            <h2>Deliver Food With Foodea</h2>
            <p class="my-3">
              Try becoming your own boss with Foodea as an alternative to
              conventional food delivery professions where the hours are fixed.
            </p>
            <button
              type="button"
              class="btn btn-primary btn-sm py=2 px-5 rounded"
            >
              Apply Now
            </button>
          </div>
          <img
            src="../user/image/pic.png"
            alt=""
            class="img-fluid w-50 d-none d-sm-block"
          />
        </div>
      </div>
    </section>
    <!---BOXES-->
    <div class="p-5">
      <div class="container text-center">
        <div class="row align-items-center justify-content-between">
          <div class="col-md">
            <img class="img-fluid w-50" src="../user/image/rider.PNG" alt="" />
            <p class="mx-5">
              As a delivery driver, you'll make reliable money working anytime,
              anywhere.
            </p>
            <a href="#">Start earning</a>
          </div>
          <div class="col-md">
            <img class="img-fluid w-50" src="../user/image/market.PNG" alt="" />
            <p class="text-center mx-5">
              Grow your business and reach new customers by partnering with us.
            </p>
            <a href="#">Start earning</a>
          </div>
          <div class="col-md">
            <img class="img-fluid w-50" src="../user/image/phone.PNG" alt="" />
            <p class="mx-5">
              Experience the best your neighborhood has to offer, all in one
              app.
            </p>
            <a class="link-danger text-decoration-none" href="#"
              >Start earning</a
            >
          </div>
        </div>
      </div>
    </div>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
