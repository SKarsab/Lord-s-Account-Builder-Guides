<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- For rendering/touch zooming for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Custom CSS -->
    <link rel = "stylesheet" type = "text/css" href = "EquipmentCalculator.css" />

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Monsterrat and Roboto Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <title>Equipment Simulator</title>
    <link rel="icon" href="./Assets/lordsMobileLogo.jpg">
  </head>
  <body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="./HomePage.html">Home</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Equipment Simulator</a></li>
                    <li><a href="./TroopCalculator.php">Troop Calculator</a></li>
                    <li><a href="./GuideHome.html">Guides</a></li>
                    <li><a href="./About.html">About</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Layout for the whole page -->
    <div class="container-fluid text-center"> 
        <div class="row content">
            
            <h1>Equipment Simulator</h1>

            <!-- Left hand well for filters -->
            <div class="col-sm-3">
                <div class="card statCard">
                    Filters go here
                </div>
            </div>

            <!-- Center area for equipment and jewel selection rows -->
            <div class="col-sm-6"> 

                <!-- Preset selection box -->
                <div class="row">

                    <button class="btn btn-outline-secondary" type="button">Save</button>
                    <button class="btn btn-outline-secondary" type="button">Load</button>

                    <select class="custom-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                        <option selected>Choose your preset...</option>
                        <option value="1">Default Infantry</option>
                        <option value="2">Default Ranged</option>
                        <option value="3">Default Cavalry</option>
                    </select>
                </div>

                <!-- Equipment options 1 and 2 -->
                <div class="row">

                    <!-- Equipment slot -->
                    <div class="col-sm-6">
                        <button type="button">
                            <img src="./Assets/youtube.png" class="img-fluid">
                        </button>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>

                    <!-- Equipment slot -->
                    <div class="col-sm-6">
                        <button type="button">
                            <img src="./Assets/youtube.png" class="img-fluid">
                        </button>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>                 
                </div>

                <!-- Equipment options 3 and 4 -->
                <div class="row">
                    <div class="col-sm-3">

                        <!-- Equipment slot -->
                        <div class="row">
                            <button type="button">
                                <img src="./Assets/youtube.png" class="img-fluid">
                            </button>
                        </div>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>

                        <!-- Equipment slot -->
                        <div class="row">
                            <button type="button">
                                <img src="./Assets/youtube.png" class="img-fluid">
                            </button>
                        </div>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>

                    <!-- Center Hero -->
                    <div class="col-sm-6">
                        <div class="text-center">
                            <img src="./Assets/centerHero.png" class="img-fluid">
                        </div>
                    </div>

                    <!-- Equipment options 5 and 6 -->
                    <div class="col-sm-3">

                        <!-- Equipment slot -->
                        <div class="row">
                            <button type="button">
                                <img src="./Assets/youtube.png" class="img-fluid">
                            </button>
                        </div>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>

                        <!-- Equipment slot -->
                        <div class="row">
                            <button type="button">
                                <img src="./Assets/youtube.png" class="img-fluid">
                            </button>
                        </div>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>
                </div>

                <!-- Equipment options 7 and 8 -->
                <div class="row">
                    <div class="col-sm-6">

                        <!-- Equipment Slot -->
                        <button type="button">
                            <img src="./Assets/youtube.png" class="img-fluid">
                        </button>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <!-- Equipment Slot -->
                        <button type="button">
                            <img src="./Assets/youtube.png" class="img-fluid">
                        </button>

                        <!-- Jewels below equipment slot -->
                        <div class="row">
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                            <button class="jewel" type="button"></button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right hand well for stats -->
            <div class="col-sm-3">
                <div class="card statCard">
                    Stats go here
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container-fluid text-center">
      <h1>Want to Contribute?</h1>
      <h4>Join the official <a href="https://discord.gg/UJ2WQfc3ZP">Discord</a> to see how you can contribute to the project!</h4> 

      <!-- Disclaimer about assets, and affiliation -->
      <div class="row text-center">
        <p>Images of Lord's Mobile content are all property/assets of IGG. None of the assets are owned or liscened by me. This website is a non-profit passion project. This website is not affiliated with IGG.</p>
      </div>
    </footer>
  </body>
</html>