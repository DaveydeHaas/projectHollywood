<nav class="navbar navbar-expand-sm col-12">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="row collapse navbar-collapse" id="navbarText">
    <ul class="col-12 navbar-nav navbar-main">
      <li class="col-5 navbar-text-center nav-item">
        <a class="nav-link" href="./index.php?content=home">Home</a>
      </li>
      <li class="col-1 nav-item" style="margin-right: 5%; padding-left:4%;">
        <a class="nav-link" href="./index.php?content=home"><img src="../images/Georgemarina_logo_2.png" class="logo" alt="Logo"></a>
      </li>
      <ul class="col-5 nav navbar-nav navbar-right">
          <?php
          if (isset($_SESSION["id"])) {

            switch ($_SESSION["job"]) {
              case 'admin':
                  
                echo '<li class="col-2 navbar-text-center nav-item"><a class=" nav-link"  href="./index.php?content=a-home" class="nav">Admin</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=bartender" class="nav">Bartender</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=chefHome" class="nav">Chef</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=ober" class="nav">Ober</a></li>';
                echo '<li class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
                break;

                  case 'manager':
                      
                    echo '<li class="col-2 navbar-text-center nav-item"><a class=" nav-link" href="./index.php?content=m-home" class="nav">Manager</a>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=bartender" class="nav">Bartender</a></li>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=chefHome" class="nav">Chef</a></li>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=ober" class="nav">Ober</a></li>';
                    echo '<li class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
    
                    break;

              case 'chef':
                echo '<li class="col-2 navbar-text-center nav-item"><a class="nav-link" href="./index.php?content=chefHome" class="nav">Chef </a>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';

                break;
              case 'bartender':
                echo '<li class="col-2 navbar-text-center nav-item"><a class="nav-link" href="./index.php?content=bartender" class="nav">bartender</a>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';

                break;
              case 'ober':
                echo '<li class="col-2 navbar-text-center nav-item"><a class="nav-link" href="./index.php?content=ober" class="nav">Ober</a>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=reserveList" class="nav">Reserveringen</a></li>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
                break;

              default:
                break;
            }
          } else {
            echo '<div class="col-2"></div>';
            echo '<li class="col-2 navbar-text-center nav-item"><a class="nav-link " href="./index.php?content=login">Login</a>';
          }
          ?>
        </li>
      </ul>
    </ul>
  </div>
  </div>
</nav>