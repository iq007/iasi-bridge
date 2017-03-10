	<?php 
		$currentURL = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
	?>
	
	<div class="navbar navbar-inverse">
        <div class="container" role="menu">
          <div class="navbar-header">
            <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a href="index.php" class="navbar-brand">Bridge Club Iasi</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li id="br_menu_noutati" <?php if ($currentURL == "index.php") echo "class=\"active\"";?> ><a href="index.php">Noutati</a></li>
              <li id="br_menu_rezultate" <?php if ($currentURL == "rezultate.php")  echo "class=\"active\"";?>><a href="rezultate.php">Rezultate</a></li>
              <li id="br_menu_resurse" <?php if ($currentURL == "resurse.php")  echo "class=\"active\"";?>><a href="resurse.php">Resurse</a></li>
              <li id="br_menu_concurs" <?php if ($currentURL == "concurs.php")  echo "class=\"active\"";?>><a href="concurs.php">Concurs Iasi 2017</a></li>
              <li class="dropdown">
                <a data-toggle="dropdown" class="dropdown-toggle" href="#">Legaturi <span class="caret"></span></a>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="http://www.frbridge.ro" target="_new">Federatia Romana de Bridge</a></li>
                  <li><a href="http://www.locomotiva.ro" target="_new">Locomotiva Bridge Club Bucuresti</a></li>
                  <li><a href="http://www.bridgewinners.com" target="_new">Bridge Winners</a></li>
                  <li class="divider"></li>
                  
                  <li><a href="http://online.bridgebase.com" target="_new">Bridge Base Online (BBO)</a></li>
                  <li><a href="http://bboskill.com" target="_new">BBO Skill</a></li>
				  <li class="divider"></li>
                  
                  <li><a href="https://ebooksbridge.com/www/ebb/" target="_new">E-BooksBridge</a></li>

                  <li class="divider"></li>

                  <li><a href="http://www.madscape.ro/" target="_new">Madscape - Escape Room Iasi</a></li>
                  <li><a href="http://www.teatruidiot.ro/" target="_new">Trupa de teatru IDIOT</a></li>

                </ul>
              </li>
            </ul>
              <div class="social">
                  <a target="_blank" href="https://www.facebook.com/bridgeiasi"><i class="fa fa-inverse fa-facebook-official fa-2x"></i></a>
              </div>
        </div><!--/.nav-collapse -->

        </div>


      </div>
