
<?php
        // include("check.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel='shortcut icon' href='http://epicloot.us/favicon.png' type='image/x-icon'/ >
    <title>Design</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="jquery-2.1.4.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        </script>
        <script src="jquery-2.1.4.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        <script type="text/javascript" src="botnav.js"></script>
        <script type="text/javascript" src="Nav.js"></script>
        <link rel="stylesheet" href="style.css" type="text/css" />
        <style>
            hr {
                display: block;
                margin-top: 0.1em;
                margin-bottom: 0.1em;
                margin-left: auto;
                margin-right: auto;
                border-style: inset;
                border-width: 1px;
            }
            .jumbotron {

            }
            body {
                background-image: radial-gradient(ellipse farthest-corner at 65% 60% , #FFF042 20%, rgba(129, 121, 33, 1) 50%, #4D4919 70%);
                height:100%;
        }
        .bgimage {
          background-image: url("epiclootlogoBOXColorFlip.png");
          background-repeat: no-repeat;
          background-position: center;
          background-size: 85% 105%;
        }
        </style>

</head>

<body style="overflow:scroll; margin:0">

  <div class="space">
  </div>
  <div class="setup" id="setup">
    <div class="container" id="container1">
      <div class="sidebar">
        <div class="icon-menu">
        </div>
        <ul id="menu">
    			<li><a id="home" href="index.html">Home</a></li>
    			<li><a href="About.html">About</a></li>
    			<li><a href="index.php">Log In</a></li>
    			<li><a href="http://68.35.27.109">wp-site</a></li>
          <li><a href="Marketing.html">Marketing</a></li>
          <li><a href="design.php">Design</a></li>
          <li><a href="http://epicloot.us/InvoiceHourly.html">Pricing</a></li>
    		</ul>
      </div>
      <div class="main-content">
        <a href="#" data-toggle=".container" id="sidebar-toggle">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>
    </div>
  </div>
</div>

    <div id="main" style="border:1px blue">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="jumbotron"  id="par1" style="margin-top:1%; margin-bottom:5%;">
                    <div class="row" id="part2">
                        <div class="col-xs-12">
                        <h1>Development & Design</h1>
                        <hr>
                        </div>
                        <div class="col-xs-12">
                        <br>
                        <h2>Ask us to create something to represent you!</h2>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

                <div class="row">
                <div class="col-xs-6" id="Tchest">
                <div class="jumbotron" id="par1">
                    <div class="graphicd">
                    <dl>
                    <dt><h3>WebDesign</h3></dt>
                    <h4><dd>- highly customizable to meet your exact needs</dd></h4>
                    <h4><dd>- add pictures, videos, and even sound</dd></h4>
                    <h4><dd>- add apps, mobile sites, email, storage and more</dd></h4>
                    <br>
                    <h3><dt>Grahpic Design</dt></h3>
                    <h4><dd>- Proffessional pohotography</dd></h4>
                    <h4><dd>- Photoshop any picture</dd></h4>
                    <h4><dd>- Develop a professional Logo for your company</dd></h4>
                    </dl>
                    </div>
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="pull-right">
                      <div class="bgimage">
                        <p style="font-size:90px;color:rgba(129, 121, 33, 0);">Epic Loot LLC</p>
                        <p style="font-size:90px;color:rgba(129, 121, 33, 0);">Epic Loot LLC</p>
                        <p style="font-size:90px;color:rgba(129, 121, 33, 0);">Epic Loot LLC</p>
                        <!-- <img src="epiclootlogoBOXColorFlip.png" alt="Logo" height="65%" width="80%"> -->
                        <!--<a class="navbar-brand visible-lg visible-sm visible-md visible-xs" href='@Url.Action("Index", "Home")'></a>-->
                      </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <script>
        function autoResizeDiv()
        {
            document.getElementById('main').style.height = window.innerHeight +'px';
        }
        window.onresize = autoResizeDiv;
        autoResizeDiv();
    </script>
        <style>

        #par1 {
                color:rgba(4, 47, 202, 0.8);
                -webkit-transition:  left 1.4s ease-in-out;
                -moz-transition:  left 1.4s ease-in-out;
                -ms-transition:  left 1.4s ease-in-out;
                -o-transition:  left 1.4s ease-in-out;
                transition:  left 1.4s ease-in-out;
                background: #ECE7E7; /* For browsers that do not support gradients */
                background: -webkit-linear-gradient(350deg, #ECE7E7, #CFCFCF); /* For Safari 5.1 to 6.0 */
                background: -o-linear-gradient(350deg, #ECE7E7, #CFCFCF); /* For Opera 11.1 to 12.0 */
                background: -moz-linear-gradient(350deg, #ECE7E7, #CFCFCF); /* For Firefox 3.6 to 15 */
                background: linear-gradient(350deg, #ECE7E7, #CFCFCF); /* Standard syntax */
                background-size: cover;
                background-image: rgba(255, 255, 255, 0.9);
                -webkit-box-shadow: 2px 3px 3px 0px rgba(0,0,0,0.75);
                -moz-box-shadow: 2px 3px 3px 0px rgba(0,0,0,0.75);
                box-shadow: 2px 3px 3px 0px rgba(0,0,0,0.75);
        }
        #par1 h1 {
            text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.9), 1px 1px 1px rgba(4, 47, 202, 0.8), 1px 1px 1px rgba(0, 0, 0, 0.9);

        }
        #par1 h2 {
            color:#000;
            text-shadow:0px 0px 0px rgba(4, 47, 202, 0.9), 1px 0px 1px rgba(255, 255, 255, 0.9);

        }
            .bg-info {
                border: 2px solid black;
                border-radius: 5px;
                font-size: 20px;
                background-color:#fff;

        }
            .graphicd h3 {
                text-shadow:1px 1px 2px color:rgba(4, 47, 202, 0.8);
                font-size: 25px;
                padding-bottom:1%;

        }

            .graphicd h4 {
                color:#1D008A;
                text-shadow:1px 1px 1px #FBFFB3;
                margin-left: 1%;
        }
            #chestpic {

                background-size: contain;
        }
            #tchest {
                /*background-image: url('epiclootlogoBOXColorFlip.png');*/

                background-repeat: no-repeat;
                padding:10px;
            }

        </style>
</body>
</html>
