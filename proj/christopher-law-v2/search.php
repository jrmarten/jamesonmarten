<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/material-design.css" rel="stylesheet">

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
  </head>
  <body>
  <div class="page">
  <!--========================================================
                            HEADER
  =========================================================-->
    <header class="bg-variant-2 text-center">
       <section class="well3">

              <div id="stuck_container" class="stuck_container">
                  <div class="container">

                      <div class="row">
                          <div class="col-md-6 col-sm-5 left-sm">

                              <!--address-->
                              <address>
                                  <dl>
                                      <dt>CALL US:</dt>
                                      <dd>
                                          <a href="callto:#">(800) 123 1234</a>,
                                          <a href="callto:#">(800) 123 1235</a>
                                      </dd>
                                  </dl>
                              </address>
                              <!--address-->

                          </div>
                          <div class="col-md-6 col-sm-7 right-sm">

                              <!--address-->
                              <address>
                                  <p>USA – CHICAGO, 901 EAST E STREET, PHOENIX, CA 90744</p>
                              </address>
                              <!--END address-->

                          </div>
                      </div>
                      <nav class="navbar navbar-default navbar-static-top">

                          <div class="navbar-header">
                              <h1 class="navbar-brand">
                                  <a href="./">
                                      <span class="material-design-bookmark46"></span> education
                                  </a>
                              </h1>
                          </div>

                          <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                              <li>
                                  <a href="./">Home</a>
                              </li>
                              <li class="dropdown">
                                  <a href="index-1.html">About us</a>
                                  <ul class="dropdown-menu">
                                    <li>
                                      <a href="#">News</a>
                                    </li>
                                    <li>
                                      <a href="#">Events</a>
                                      <ul class="dropdown-menu">
                                        <li>
                                          <a href="#">History</a>
                                        </li>
                                        <li>
                                          <a href="#">Testimonials</a>
                                        </li>
                                        <li>
                                          <a href="#">Archive</a>
                                        </li>
                                      </ul>
                                    </li>
                                    <li>
                                      <a href="#">Contacts</a>
                                    </li>
                                  </ul>
                              </li>
                              <li>
                                <a href="index-2.html">Programs</a>
                              </li>
                              <li>
                                <a href="index-3.html">Events</a>
                              </li>

                              <li>
                                  <a href="index-4.html">Contacts</a>
                              </li>
                          </ul>
                      </nav>

                  </div>
              </div>

          </section>
    </header>


  <!--========================================================
                            CONTENT
  =========================================================-->
  <main>
    <section id="content" class="content well1">
        <div class="container">

            

            <div class="search-form">
                <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                    <label class="search-form_label" for="in">
                        <input id="in" class="search-form_input" type="text" name="s"
                               placeholder="Search"/>
                        <span class="search-form_liveout"></span>
                    </label>
                    <button type="submit" class="search-form_submit"></button>
                </form>
            </div>
            <h3>Search Results</h3>
            <div id="search-results"></div>
        </div>
    </section>
  </main>  

  <!--========================================================
                            FOOTER
  =========================================================-->
  <footer>

  <section>      
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1 class="navbar-brand">
              <a href="./">
                <span class="material-design-bookmark46"></span> education
              </a>
            </h1>
            <div class="row flow-offset-3">
              <div class="col-sm-4 col-xs-4">
                <ul class="list text-uppercase">
                  <li><a href="./">HOME</a></li>
                  <li><a href="index-1.html">ABOUT US</a></li>
                  <li><a href="index-2.html">PROGRAMS</a></li>
                  <li><a href="index-3.html">EVENTS</a></li>
                  <li><a href="index-4.html">CONTACTS</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-xs-4">
                <ul class="list text-uppercase">
                  <li><a href="#">History</a></li>
                  <li><a href="#">Staff Directory</a></li>
                  <li><a href="#">Directions</a></li>
                  <li><a href="#">Photo Album</a></li>
                </ul>
              </div>
              <div class="col-sm-4 col-xs-4">
                <ul class="list text-uppercase">
                  <li><a href="#">Admissions</a></li>
                  <li><a href="#">Departments</a></li>
                  <li><a href="#">Classes</a></li>
                  <li><a href="#">Guidance</a></li>
                </ul>
              </div>
            </div>

              <p class="rights pull-left">
                &#169; <span id="copyright-year"></span> |
                <a href="index-5.html">Privacy Policy</a>
              </p>
              <ul class="list-inline pull-right">
                <li><a class="icon material-design-blogger12" href="#"></a></li>
                <li><a class="icon material-design-facebook56" href="#"></a></li>
                <li><a class="icon material-design-twitter47" href="#"></a></li>
              </ul>

          </div>
          <div class="col-sm-6 inset-1">
            <div class="map">
              <div id="google-map" class="map_model"></div>
              <ul class="map_locations">
                <li data-x="-73.9874068" data-y="40.643180">
                  <p> 9870 St Vincent Place, Glasgow, DC 45 Fr 45. <span>800 2345-6789</span></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div> 
    </section> 
  </footer>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->         
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tm-scripts.js"></script>    
  <!-- </script> -->


  </body>
</html>
