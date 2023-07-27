<!DOCTYPE html>
<html lang="en">
  <head>
    @extends('layouts.head')
    <title>Welcome to OnPlots!</title>
  </head>

  <body
    class="d-flex justify-content-center flex-column align-items-center"
    style="
      background-image: url('img/background/registerbetter.png');
      background-size: cover;
      backdrop-filter: blur(5px);
    "
  >
    <!-- BEGIN CONTENT -->
    <div class="container pb-5">
      <div class="position-fixed top-0 start-0 end-0 p-4">
        <div
          class="d-flex justify-content-between align-items-center container"
        >
          <a href="#">
            <img
              src="img/branding/light_long.svg"
              class="d-none d-md-block img-fluid"
              style="
                -webkit-filter: drop-shadow(0 1px 4px rgba(0, 0, 0));
                filter: drop-shadow(0 1px 4px rgba(0, 0, 0)); width: 164px;
              "
              width="240"
            />
            <img
              src="img/branding/dark_icon.svg"
              class="d-block d-md-none img-fluid"
              style="
                -webkit-filter: drop-shadow(0 1px 4px rgba(0, 0, 0));
                filter: drop-shadow(0 1px 4px rgba(0, 0, 0));
              "
              width="46"
            />
          </a>
          <a
            href="#"
            class="btn btn-light px-3 me-2"
            style="box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4)"
            ><i class="bi-unlock me-2 text-lg align-middle lh-1"></i>Log In</a
          >
        </div>
      </div>
      <div class="row justify-content-center text-center">
        <div class="col-md-8">
          <div
            class="text-3xl fw-semibold text-white mb-1"
            style="text-shadow: 0 1px 4px rgba(0, 0, 0, 0.8)"
          >
            Create, Build, and Explore
          </div>
          <div class="mb-3" style="text-shadow: 0 1px 3px rgba(0, 0, 0, 0.8)">
          Where creativity thrives! Build, play, and connect in a boundless world of imagination. Join us now!
          </div>
          <div>
            <a
              href="#"
              class="btn btn-primary px-3 me-2"
              style="box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4)"
              ><i class="bi-person-plus me-2 text-lg align-middle lh-1"></i
              >Create an Account</a
            >
          </div>
        </div>
      </div>
    </div>
    <div
      class="position-sticky top-100 text-center w-100 p-3"
      style="text-shadow: 0 1px 2px rgba(0, 0, 0, 0.8)"
    >
      &copy; Copyright OnPlots. All rights reserved.
    </div>
    <!-- END CONTENT -->

    <!-- JS imports -->
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/custom.js"></script>
  </body>
</html>
