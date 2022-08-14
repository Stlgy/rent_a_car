<?php

require_once('includes/functions.php');
require_once('includes/classes.php');

?>
<header>
    <div class="wrapper">
        <h1 class="logo">Stigy's Rent a Car</h1>
        <a href="#" class="hamburger"></a>
        <nav id="navbar">
            <?php
			   $log = new Login;
               $log->login();
			?>
            <ul>
                <li><a class="nav-link" href="index.php">Home</a></li>
                <li><a class="nav-link" href="index.php">Rent</a></li>
                <li><a class="nav-link" href="#">About</a></li>
                <li><a class="nav-link" href="#">Contact</a></li>
            </ul>
           
            <?php
						
					?>
        </nav>
    </div>
</header>