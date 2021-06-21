<nav class="navbar navbar-expand-sm col-12">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="row collapse navbar-collapse" id="navbarText">
    <ul class="col-12 navbar-nav navbar-main">
      <li class="col-4 navbar-text-center nav-item">
        <a class="nav-link" href="./index.php?content=home">Home</a>
      </li>
      <li class="col-2 nav-item">
        <a class="nav-link" href="./index.php?content=home"><img src="../images/Georgemarina_logo_2.png" class="logo" alt="Logo"></a>
      </li>
      <ul class="col-6 nav navbar-nav navbar-right">
        <li class="col-2 navbar-text-center nav-item">
            <?php
            if (isset($_SESSION["id"])) {

            switch ($_SESSION["job"]) {
              case 'admin':
                  
                echo '<a class=" nav-link"  href="./index.php?content=a-home" class="nav">AdminPage</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=bartender" class="nav">BartenderPage</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=chefHome" class="nav">ChefPage</a></li>';
                echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=ober" class="nav">OberPage</a></li>';
                echo '<li class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
                break;

                  case 'manager':
                      
                    echo '<a class=" nav-link" href="./index.php?content=m-home" class="nav">ManagerPage</a>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=bartender" class="nav">BartenderPage</a></li>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=chefHome" class="nav">ChefPage</a></li>';
                    echo '<li class="col-2 navbar-text-center nav-item" style="padding-right: 0px; padding-left: 0px;;"><a class="nav-link" href="./index.php?content=ober" class="nav">OberPage</a></li>';
                    echo '<li class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
    
                    break;

              case 'chef':
                echo '<a class="nav-link" href="./index.php?content=chefHome" class="nav">Chef page</a>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';

                break;
              case 'bartender':
                echo '<a class="nav-link" href="./index.php?content=bartender" class="nav">bartenderPage</a>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';

                break;
              case 'ober':
                echo '<a class="nav-link" href="./index.php?content=ober" class="nav">OberPage</a>';
                echo '</div><div class="col-2"><a href="./index.php?content=logout" class="nav-link"><i class="fas fa-sign-out-alt" style="height:132px; font-size:32px;"></i></a></div>';
              break;
              
              default:
                break;
            }
            
          }else{
            echo '<a class="nav-link " href="./index.php?content=login">Login</a>';
          }
            ?>
        </li>
      </ul>
    </ul>
  </div>
</div>
</nav>