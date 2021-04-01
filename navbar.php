<?php require_once 'environment.php'; ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
        <!--  Linket e listes se parenditur -->
          <a class="navbar-brand px-3" href="#">
         <?= isset($_SESSION['username']) ? $_SESSION['username'] : SITE_TITLE ?>
          </a>
  
          <!-- buton per Toggle/Collapse  -->
  
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#barNavigimi">
          <span class="navbar-toggler-icon"></span>
          </button>
  
          <div class="collapse navbar-collapse" id="barNavigimi">
  
                <ul class="navbar-nav flex-fill">
  
                  <li class="nav-item">
                    <a class="nav-link" href="index.php"> Home</a>
                  </li>
  
  
                  <li class="nav-item">
                    <a class="nav-link" href="leksione.php"> Leksione </a>
                  </li>

                  <li class="nav-item">
                    <a class="nav-link" href="prova/test.html"> About us </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link" href="contact.html"> Contact </a>
                </li>
                </ul>

                <?php
                if(isset($_SESSION['username'])){
                ?>

                <form class="form-inline my-2 my-lg-0" action="logout.php" method="post">
                <button class="btn btn-primary my-2 my-sm-0" type="submit">Log out</button>
                </form>

                <?php
                }
                ?>

  
          </div>
  
      </nav>