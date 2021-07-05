<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- mobile metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1">
        <!-- site metas -->
        <title>DB Project</title>
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Responsive-->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- fevicon -->
        <link rel="icon" href="images/fevicon.png" type="image/gif" />
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
        <!-- Tweaks for older IEs-->
        <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
     </head>
<body>

   <div id="Arrivals" class="about">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Cities</h2>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-md-12 ">
               <!-- <div class="about_box ">
                  <figure><img src="images/about_img.png" alt="#"/></figure>
                  <a class="read_more" href="#">Read more</a>
               </div> -->

               <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Code</th>
                      <th scope="col">City Name</th>
                    </tr>
                  </thead>
                  <tbody>
                     <?php 
                        include("dbconn.php");
                        $query = "SELECT * FROM city";


                     $result = mysqli_query($dbconn,$query);
                     while($row = mysqli_fetch_array($result))
                        {
                        echo "<tr>";
                        echo "<td>" . $row['code'] . "</td>";
                        echo "<td>" . $row['name'] . "</td>";
                        echo "</tr>";
                        }
                     ?>
  
                  </tbody>
                </table>
            </div>
         </div>
      </div>
   </div>
    <div id="" class="request">
        <div class="container">
           <div class="row">
              <div class="col-md-12">
                 <div class="titlepage">
                    <h2>Add a City</h2>
                 </div>
              </div>
           </div>
           <div class="row">
              <div class="col-sm-12">
                 <div class="black_bg">
                    <div class="row">
                       <div class="col-md-7 ">
                          <form class="main_form" method="POST">
                             <div class="row">
                                <div class="col-md-12 ">
                                   <input class="contactus" placeholder="Name" type="text" name="name">
                                </div>
                                <div class="col-md-12">
                                   <input class="contactus" placeholder="City Code" type="number" name="code">
                                </div>
                                <div class="col-sm-12">
                                <input class="send_btn" type="submit" name="submit" id="submit" value="Submit" ></input>
                                </div>
                             </div>
                          </form>
                       </div>
                       <div class="col-md-5">
                          <div class="mane_img">
                             <figure><img src="images/cities2.jpeg" alt="#"/></figure>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/jquery-3.0.0.min.js"></script>
        <script src="js/plugin.js"></script>
        <!-- sidebar -->
        <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="js/custom.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
</body>
</html>