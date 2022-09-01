<?php include('NishorgoServer.php');  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content="" />
    <meta name="author" content="Responsive Blog" />
    <link
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap"
      rel="stylesheet"
    />

    <title>Nishorgo | Blogs</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/template.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  </head>

  <body>
    <!-- Header -->
    <!-- header section starts  -->

    <header class="header">

        <a href="index.php" class="logo"> <i class="fas fa-solid fa-leaf"></i> Nishorgo </a>

        <nav class="navbar">
            <a href="index.php">home</a>
            <a href="product.php">products</a>
            <a href="blog.php">blogs</a>
            
            
        </nav>
        <div class="besidenav">
        <?php if (isset($_SESSION["username"])) : ?>
                            <a href="UserProfile.php" style="color: black">
                                    <?php echo $_SESSION["username"]; ?></a>
                           
                            <a href="index.php?logout='1'" style=" color: black">Log Out</a>
                        <?php else : ?>
                            <a href="login.php">Login</a>
                        <?php endif ?>
        </div>

        <div class="icons">
            <div class="fas fa-bars" id="menu-btn"></div>
            <div class="fas fa-search" id="search-btn"></div>
            <div class="fas fa-shopping-cart" id="cart-btn"></div>
             <!--<div class="fas fa-user" id="login-btn"></div> -->
             
            


        </div>
       
        

        

        <div class="shopping-cart">
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-1.png" alt="">
                <div class="content">
                    <h3>watermelon</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-2.png" alt="">
                <div class="content">
                    <h3>onion</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="box">
                <i class="fas fa-trash"></i>
                <img src="image/cart-img-3.png" alt="">
                <div class="content">
                    <h3>chicken</h3>
                    <span class="price">$4.99/-</span>
                    <span class="quantity">qty : 1</span>
                </div>
            </div>
            <div class="total"> total : $19.69/- </div>
            <a href="checkout.html" class="btn">checkout</a>
        </div>

        <form action="" class="login-form">
            <h3>login now</h3>
            <input type="email" placeholder="your email" class="box">
            <input type="password" placeholder="your password" class="box">
            <p>don't have an account <a href="registration-form.html">create now</a></p>
            <input type="submit" value="login now" class="btn">
        </form>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="content">
            <h3>The best <span>plant</span> under one roof</h3>
            <p>The most important things are not things so we will design experiences.</p>
            <a href="product.php" class="btn">shop now</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          <div class="item">
            <img src="assets/images/banner-item-01.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Fruits</span>
                </div>
                <a href="post-details.html"><h4>Lorem Ipsum is simply</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 28, 2022</a></li>
                  <li><a href="#">12 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-02.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Vegetables</span>
                </div>
                <a href="post-details.html"><h4>Lorem Ipsum is simply</h4></a>
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 27, 2022</a></li>
                  <li><a href="#">24 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-03.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Lifestyle</span>
                </div>
                <a href="post-details.html"
                  ><h4>Lorem Ipsum is simply</h4></a
                >
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 28, 2022</a></li>
                  <li><a href="#">36 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-04.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Farming</span>
                </div>
                <a href="post-details.html"
                  ><h4>Lorem Ipsum is simply</h4></a
                >
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 18, 2022</a></li>
                  <li><a href="#">48 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-05.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Tools</span>
                </div>
                <a href="post-details.html"
                  ><h4>Lorem Ipsum is simply</h4></a
                >
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 24, 2022</a></li>
                  <li><a href="#">64 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="item">
            <img src="assets/images/banner-item-06.jpg" alt="" />
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span>Health</span>
                </div>
                <a href="post-details.html"
                  ><h4>Lorem Ipsum is simply</h4></a
                >
                <ul class="post-info">
                  <li><a href="#">Admin</a></li>
                  <li><a href="#">May 26, 2021</a></li>
                  <li><a href="#">72 Comments</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Feel free to browse through our BLogs</span>
                  <h4>Read through our Blogs</h4>>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                  <a href="allblogs.php?show=all" target="_blank"
                                        >More Blogs!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
                     $dbCart = mysqli_connect('localhost','root', '', 'nishorgo');
                     if(mysqli_connect_errno()){
                      echo 'could not connect to server.';
                    } else { 
                        
                        
                        $sql = "SELECT * FROM blog;";
                        $result = mysqli_query($dbCart,$sql) or die("Error in $sql");

                        $resultCheck = mysqli_num_rows($result);
                        
                    }
                    ?>

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
              <?php

$count = 1;

if($resultCheck>0):
    
while($row = mysqli_fetch_assoc($result)):
?>

                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                    <?php echo "<img src = '{$row['blog_img']}'>";?>
                    </div>
                    <div class="down-content">
                      
                    <a href="postdetails.php?blog_id=<?php echo $row['blog_id']?>"><h4><?php echo $row['title'];?></h4></a
                      >
                      <ul class="post-info">
                        <li><a href="#">Admin</a></li>
                        <li><a href="#"><?php echo $row['date'];?></a></li>
                      </ul>
                      <p>
                      <?php echo $row['content'];?>
                      </p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a href="allblogs.php?show=<?php echo $row['tag']?>" target="_blank"
                                        ><?php echo $row['tag']?></a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                        endwhile;
                        endif;
                        ?>

                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="all-blogs.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <!-- Search Option Here -->
                <!-- <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input
                        type="text"
                        name="q"
                        class="searchText"
                        placeholder="type to search..."
                        autocomplete="on"
                      />
                    </form>
                  </div>
                </div> -->

                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Most Popular Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li>
                          <!-- NAFIU: Write query to display 3 trendy post titles 
                          Add Trigger when post is visited +1 everytime to count MOST VIEWED/TRENDY-->
                          <a href="post-details.html">
                            <h5>
                              Lorem Ipsum is simply dummy text of the printing
                              and typesetting
                            </h5>
                            <span>May 28, 2022</span>
                          </a>
                        </li>
                        <li>
                          <a href="post-details.html">
                            <h5>
                              There are many variations of passages of Lorem
                              Ipsum available
                            </h5>
                            <span>May 28, 2022</span>
                          </a>
                        </li>
                        <li>
                          <a href="post-details.html">
                            <h5>
                              The standard chunk of Lorem Ipsum used since the
                              1500s is reproduced
                            </h5>
                            <span>May 27, 2022</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <!-- View by Category -->
                <!-- <div class="col-lg-12">
                  <div class="sidebar-item categories">
                    <div class="sidebar-heading">
                      <h2>Categories</h2>
                    </div>
                    <div class="content">
                      <ul>
                        <li><a href="#">- Nature Lifestyle</a></li>
                        <li><a href="#">- Great Reponsive Blog</a></li>
                        <li><a href="#">- Creative Ideas</a></li>
                        <li><a href="#">- Responsive Website</a></li>
                        <li><a href="#">- HTML5 / CSS3 </a></li>
                        <li><a href="#">- Dedication &amp; Unique</a></li>
                      </ul>
                    </div>
                  </div>
                </div> -->
                <div class="col-lg-12">
                  <div class="sidebar-item tags">
                    <div class="sidebar-heading">
                      <h2>Tag Clouds</h2>
                    </div>
                    <div class="content">
                      <ul>
                      <li><a href="allblogs.php?show=fruit" 
                                        >Fruits</a></li>
                        <li><a href="allblogs.php?show=vegetable">Vegetables</a></li>
                        <li><a href="allblogs.php?show=flower">Flowers</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer section starts  -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3> nishorgo <i class="fas fa-solid fa-leaf"></i> </h3>
                <p>The most important things are not things so we will design experiences.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <a href="tel:+8801781737438" class="links"> <i class="fas fa-phone"></i> +880-1781737438 </a>
                <a href="tel:+8801781737438" class="links"> <i class="fas fa-phone"></i> +880-1781737438 </a>
                <a href="https://mail.google.com/mail/" class="links"> <i class="fas fa-envelope"></i> jaidmonwar.edu@gmail.com </a>
                <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Dhaka, Bangladesh - 1209 </a>
            </div>

            <div class="box">
                <h3>quick links</h3>
                <a href="index.php" class="links"> <i class="fas fa-arrow-right"></i> home </a>
                <a href="product.php" class="links"> <i class="fas fa-arrow-right"></i> categories </a>
                <a href="product.php" class="links"> <i class="fas fa-arrow-right"></i> products </a>
                <a href="blog.html" class="links"> <i class="fas fa-arrow-right"></i> blogs </a>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <input type="email" placeholder="your email" class="email">
                <input type="submit" value="subscribe" class="btn">
                <img src="image/payment.png" class="payment-img" alt="">
            </div>

        </div>

        <div class="credit"> created by <span> Jaid Monwar Chowdhury </span> | all rights reserved </div>

    </section>

    <!-- footer section ends -->



    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/blog.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>

    <script language="text/Javascript">
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t) {
        //declaring the array outside of the
        if (!cleared[t.id]) {
          // function makes it static and global
          cleared[t.id] = 1; // you could use true and false, but that's more typing
          t.value = ""; // with more chance of typos
          t.style.color = "#fff";
        }
      }
    </script>
  </body>
</html>
