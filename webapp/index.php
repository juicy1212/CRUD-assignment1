<!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

        <title>Web Application</title>
      </head>
    <body class="container">

      <?php include "app/connection.php" ?>

      <!--Menu Row -->
      <div class="row"> 
          <div class="col">
  
            <ul class ="nav navbar-light bg-light">
       
                <!--run php loop through database and display page names here-->
        
                <?php foreach($result as $page): ?>
                  <li class="nav-item active">
                    <a href="index.php?page='<?php echo $page['pg']; ?>'" class="nav-link"><?php echo $page['pg']; ?></a>
                  </li>

                <?php endforeach; ?>

                <li class="nav-item active">
                  <a href="form.php" class="nav-link">Enter a new Page Record</a>
                </li>
            </ul>
  
          </div>
      </div>

          <!--Database content here for cpanel table "pages" -->
    
          <div class="row"> 
              <div class="col">

          <?php

             if(isset($_GET['page']))
            { 
                //remove single quotes from page get value
                $pg = trim($_GET['page'], "'");

                //run sql command to select record based on get value
                $record = $connection->query("select * from pages where pg='$pg'") or die($connection->error());
          
                //convert $record into an array for us to echo out the inividual fields on screen
                $row = $record->fetch_assoc();

                //create variales to hold data from all table fields 
                $h1 = $row['h1'];
                $h2 = $row['h2'];
                $h3 = $row['h3'];
                $h4 = $row['h4'];  

                $p1 = $row['p1'];
                $p2 = $row['p2'];
                $p3 = $row['p3'];
                $p4 = $row['p4'];
                $p5 = $row['p5'];
                $p6 = $row['p6'];
                $p7 = $row['p7'];
                $p8 = $row['p8'];
                $p9 = $row['p9'];
                $p10 = $row['pg10'];

                $img1 = $row['img1'];
                $img2 = $row['img2'];
                $img3 = $row['img3'];

                $appendix1 = $row['appendix1'];
                $appendix2 = $row['appendix2'];
                $appendix3 = $row['appendix3'];
                $appendix4 = $row['appendix4'];
                $appendix5 = $row['appendix5'];

                $additionalnotes = $row['additionalnotes'];

                //Display information on screen

                echo "
            
                
                  <h1>{$pg}</h1>
                  <h2>{$h1}</h2>
                  
                  <p><img src='{$img1}'></p>

                  <h3>{$h2}</h3>
                  <p>{$p1}</p>

                  <h4>{$h3}</h4>
                  <p>{$p2}</p>

                  <p><img src='{$img2}'></p>
                  <p><img src='{$img3}'></p>

                  <h5>{$h4}</h5>
                  <p>{$p3}</p>

                  <h6>{$appendix1}</h6>
                  <p>{$p5}</p>

                  <h7>{$appendix2}</h7>
                  <p>{$p6}</p>

                  <h8>{$appendix3}</h8>
                  <p>{$p7}</p>

                  <h9>{$appendix4}</h9>
                  <p>{$p8}</p>

                  <h10>{$appendix5}</h10>
                  <p>{$p9}</p>

                  <h11>{$additionalnotes}</h11>
                  <p>{$p10}</p>
                ";


          
            }
            else
            {

              //if this is the first time this page has been accessed then display content below
              echo "
                <h1>Welcome to this database website</h1>
                <p clas='text-center'>use the links above to view pages stored in the database</p>
                <p class='text-center'><img src='images/monkey.jpg'></p>
            
              ";
            }

          ?>

          
  
  
       </div>
    </div>

    

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>