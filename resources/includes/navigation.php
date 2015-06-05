<?php
/**
 * Created by PhpStorm.
 * User: dominicdowding
 * Date: 03/06/15
 * Time: 22:30
 */

echo '
<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
	  <div class="container">
	    <div class="navbar-header">
	      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <!-- Your Logo -->
	      <a href="../" class="navbar-brand">Promo</a>
	    </div>
	    <!-- Start Navigation -->
	    <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">';

        $nav = new Navigation(false);
        $navString = $nav->getNavString();
        echo $navString;
        if ($navString) {
            echo '<ul class="nav navbar-nav navbar-right header-button">';
        }
	   echo '     <li>
	          <button type="button" class="btn btn-primary">Get the do da</button>
	        </li>
	      </ul>
	    </nav>
	  </div>
	</header>';