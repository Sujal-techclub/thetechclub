<?php
include 'data.html';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sync</title>
    <link rel="stylesheet" type="text/css" media="screen and (max-width: 360px)" href="portrait.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 361px) and (max-width: 480px)" href="landscape.css">
<link rel="stylesheet" type="text/css" media="screen and (min-width: 481px)" href="desktop.css">
    <link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap-responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
    <!-- partial:index.partial.html -->
    <main>
        <ul id="scene" data-friction-x="0.1" data-friction-y="0.1" data-scalar-x="25" data-scalar-y="15" data-limit-y="50" class="scene">
            <li class="layer" data-depth="0.40">
                <img src="Sync Logo.png" alt="" width="80px" class="sync-logo" style="position: relative; filter: drop-shadow(4px 4px 4px #000000); left: 47%; top: 20px;">
                <div class="content" style="top: 5%; position: relative;">
                    <h1 id="title">Coming Soon</h1>
                    <p class="one-stop">Your One Stop Shop, For Everything</p>
                </div>
            </li>
            <li class="layer" data-depth="0.60">
                <div class="footer"></div>
            </li>
            <li class="layer" data-depth="0.35">
                <div class="cloud-back">
                    <img src="Back.png" alt="Site Launching Soon!" />
                </div>
            </li>
            <li class="layer" data-depth="0.40">
                <div class="rocket">
                    <img src="Device.png" alt="Site Launching Soon!" style="position: relative; left: -200px;" />
                </div>
            </li>
            <li class="layer" data-depth="0.40">
                <div class="cloud-front">
                    <img src="Front.png" alt="Site Launching Soon!" />
                </div>
                <div class="ui-card form-email shadow-card" style="right: 17.5%; top: -35%;" ">
                    <div class="header-card ">
                        <h4 class="heading-text ">We will notify you</h4>
                    </div>
                    <div class="body-card ">
                        <!-- FORM -->
                        <form class="callback" action="#" method="POST">
                            <div class="form-group ">
                                <div class="input-group ">
                                    <input class="input-form-mail " type="email" name="email" placeholder="E-mail" required data-validation-error-msg="Coloca tu email" />
                                </div>
                                <div class="input-group-btn ">
                                    <button type="submit" name="submit" class="btn-color btn-notify btn ">
					  Notify me <i class="fas fa-moon "></i>
					</button>
                                </div>
                            </div>
                        </form>
                        <!-- FORM -->
                    </div>
                </div>
            </li>
        </ul>
        <div class="social ">Follow Us:
            <div class="section ">
                <div class="actions social-icon ">
                    <a href="https://www.instagram.com/eventsync/?hl=en " target="blank " class="btn btn-gradient-peach btn-circle shadow-btn "><span class="fab fa-instagram " id="insta"></span
			  ></a>
                </div>
            </div>
        </div>
    </main>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/parallax/2.1.3/parallax.min.js'></script>
    <script src="./script.js "></script>

</body>

</html>
