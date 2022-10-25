<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!---bootrap5-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
      crossorigin="anonymous"
    />

    <!--header fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@700&display=swap"
      rel="stylesheet"
    />

    <!-- paragraph fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@1,300&display=swap"
      rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Diplomata&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Aclonica&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=STIX+Two+Text:wght@600&display=swap"
      rel="stylesheet"
    />

    <!--icons-->

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />

    <!--css-->
    <link rel="stylesheet" href="css/style.css" />

    <title>NALAPYT</title>
  </head>
  <body>
    <!--navbar responsive-->
    <nav class="navbar navbar-expand-sm">
      <div class="container-fluid">
        <a class="navbar-brand"
          ><img
            src="css/image/311466946_1310190273123495_5836148649356196717_n.png"
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
          aria-controls="navmenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto justify-content-center">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php">NEWS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--endnavbar-->

    <section class="sec-cover">
      <div class="ver-line">
        <!-- <h2>GAME BLOG</h2> -->
        <!-- <p>Online Mmorpg for Mobile Phone</p> -->
      </div>
    </section>
    <!--cover-->

    <!--section 2-->

    <section class="sec-one">
      <div class="container">
        <h2 class="h-alb">ADVENTURE QUEST 3D MMORPG ALBUM</h2>
        <div class="row">
          <div class="col col-sm-0 col-md-4">
            <img
              id="myImg"
              src="css/image/310670398_2063667960488193_2713904041145303394_n.jpg"
              alt="AQ3D"
              style="width: 100%; max-width: 300px"
            />
            <!-- The Modal -->
            <div id="myModal" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img01" />
              <div id="caption"></div>
            </div>
          </div>

          <div class="col-sm-0 col-md-4">
            <img
              id="myImg2"
              src="css/image/307726022_888649105437166_6096391534750249786_n.jpg"
              alt="Aq3d212312"
              style="width: 100%; max-width: 300px"
            />
            <!-- The Modal -->
            <div id="myModal2" class="modal">
              <span class="close">&times;</span>
              <img class="modal-content" id="img02" />
              <div id="caption2"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!---endimagegame-->

    <section class="sec-three">
      <div class="container"></div>
    </section>
    <!--end ABOUT US-->

    <section class="sec-four">
      <div class="container"></div>
    </section>

    <!--footertagcopyright-->

    <footer>
      <div class="container-fluid">
        <div class="foter-algn">
          <p class="copyright-text">
            Copyright &copy; 2022 All Rights Reserved by
            <a>NalapYt</a>
          </p>
        </div>

        <div class="privacy">
          <a class="privacy-page">Disclaimer</a>
          <a class="privacy-page">Terms and Conditions</a>
          <a class="privacy-page">Privacy</a>
        </div>
      </div>
    </footer>

    <!--cdn jquery-->
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
      integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
      crossorigin="anonymous"
    ></script>
    <!--javascript-->
    <script src="js/index.js"></script>
    <script src="js/album.js"></script>
  </body>
</html>
