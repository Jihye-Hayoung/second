<?php
include("configure.php");
include("connect.php");
include("session.php");

$connect=connect_db($host, $dbid, $dbpw, $dbname);

?>

<!doctype html>
<html>
<head>
<!-- Basic Page Needs
    ================================================== -->
<meta charset="utf-8">

<?php
echo $_SESSION['user_id'];
?>
<!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>글쓰기</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="#" type="/image/x-icon">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="/css/font-awesome.css">

<!-- Slider
    ================================================== -->
<link href="/css/owl.carousel.css" rel="stylesheet" media="screen">
<link href="/css/owl.theme.css" rel="stylesheet" media="screen">
<link href="/css/animate.css" rel="stylesheet" media="screen">

<!-- Stylesheet
    ================================================== -->

<link rel="stylesheet" type="text/css"  href="/style.css">
<link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700|Montserrat:100,200,300,300i,400,500,600,700,800,900|Lato:300,400|Crimson+Text:400,400i,600' rel='stylesheet' type='text/css'>
<!--<link rel="stylesheet" type="text/css"  href="color-orange.css">-->

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="single">
<header id="menutop">

  <!-- Navigation
    ==========================================-->
  <nav id="top-menu" class="navbar navbar-default navbar-fixed-top">

    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html">HUFS GO</a> </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <!--search-cart-block -->
        <div class="search-cart-block">
          <!--search form-->

          <form method="get" action="/search" id="search">
            <input name="q" type="text" size="40" placeholder="Search..." />
          </form>
          <!--/search form-->
          <div class="cart-notify"><a href="#"><i class="fa fa-cart-plus"><span>0</span></i></a></div>
        </div>
        <!--/search-cart-block -->

        <ul class="nav navbar-nav navbar-right">
          <li><a href="/index.html" class="page-scroll active-on">Home</a></li>
          <li  ><a href="/blog-post.html" class="page-scroll">Search</a>
            <ul class="sub-menu">
              <li><a href="#">Sub Menu 1</a></li>
              <li><a href="#">Sub Menu 2</a></li>
              <li><a href="#">Sub Menu 3</a></li>
              <li ><a href="#">Sub Menu 4 </a>
                <ul>
                  <li ><a href="#">Deep Menu 1 </a>
                    <ul class="sub-menu">
                      <li><a href="#">Sub Deep 1</a></li>
                      <li><a href="#">Sub Deep 2</a></li>
                      <li><a href="#">Sub Deep 3</a></li>
                      <li><a href="#">Sub Deep 4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Deep Menu 2</a></li>
                </ul>
              </li>
              <li><a href="#">Sub Menu 5</a></li>
            </ul>
          </li>
          <li><a href="blog.html">Review</a></li>
          <li><a href="page.html">Board</a></li>
          <li><a href="mylist.html">My page</a></li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->

    </div>
    <!-- /.container-fluid -->

  </nav>
</header>

<!--blog body-->

<div id="Blog-post">

  <!-- banner Page
    ==========================================-->

  <header class="entry-header" style="background-image: url(/img/s-1.jpg);">
    <div class="content  wow fadeInUp">
      <div class="container">
        <h1>글쓰기</h1>
    </div>
  </header>


  <div class="container">
    <div class="row wow fadeInUp">
      <!--blog posts container-->
      <div class="col-md-10 col-sm-10 col-md-offset-1 single-post">
        <article class="post">
          <h4><strong>글쓰기</strong></h4>

          <tr>
            <td>작성자 </td>
            <td><input type=text name=name size=10 maxlength=8></td>
          </tr><br><br>

          <tr>
            <td>제 목 </td>
            <td><input type=text name=title size=40></td>
          </tr><br><br>

          <tr>
            <td>내 용</td>
            <td><textarea name=content rows ="10" cols="100"></textarea></td>
          </tr><br><br>

          <tr>
            <td>비밀번호</td>
            <td><input type=password name=password size=15 maxlength=15></td>
          </tr>

          <tr>
            <td colspan=2><hr size=1></td>
          </tr>

          <tr>
            <td colspan="2"><div align="center">

              <a class="btn btn-default" href="/page.html"><strong>작성 취소</strong></a>
              <a class="btn btn-default" href="/page.html"><strong>등 록</strong></a></div>
            </td>
          </tr>

        </table>
      </form>
    </article>

		<br>	<br>	<br>

  </div>
</div>
<!-- Footer
    ==========================================-->

<footer class="bottom-footer">
  <div class="container">
    <div class="row">

      <!--site details-->
      <div class="col-md-3 col-sm-12 col-xs-12 site-identity"> <a class="navbar-brand" href="/index.html">Numero</a>
        <p>Numero that can help you
          prototyping easy entire websites
          in Photoshop and Sketch. </p>
        <ul class="socio">
          <li><a href="#"><i class="fa fa-facebook"></i></a></li>
          <li><a href="#"><i class="fa fa-rss"></i></a></li>
          <li><a href="#"><i class="fa fa-twitter"></i></a></li>
          <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          <li><a href="#"><i class="fa fa-youtube"></i></a></li>
          <li><a href="#"><i class="fa fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
          <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
        </ul>
      </div>
      <!--/site details-->

      <!--col-1-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <h6>Company</h6>
        <ul>
          <li><a href="#">About us</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">History</a></li>
          <li><a href="#">Team</a></li>
        </ul>
      </div>
      <!--/col-1-->

      <!--col-2-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <h6>Products</h6>
        <ul>
          <li><a href="#">Mobile Apps</a></li>
          <li><a href="#">Web Design</a></li>
          <li><a href="#">Navigation</a></li>
          <li><a href="#">Branding</a></li>
          <li><a href="#">Motion Design</a></li>
          <li><a href="#">Icons</a></li>
        </ul>
      </div>
      <!--/col-2-->
      <!--col-3-->
      <div class="col-md-2 col-sm-4 col-xs-4 root-widget">
        <h6>Shop</h6>
        <ul>
          <li><a href="#">Accessories</a></li>
          <li><a href="#">Print</a></li>
          <li><a href="#">Book</a></li>
          <li><a href="#">Gifts</a></li>
          <li><a href="#">Maps</a></li>
        </ul>
      </div>
      <!--/col-3-->

      <!--contact details-->
      <div class="col-md-3 col-sm-12 col-xs-12  subcribe-block">
        <h6>subscribe</h6>
        <p>Subscribe to our newsletter and get
          some freebies stuff every week. </p>
        <form class="form">
          <div class="form-group">
            <input type="email" placeholder="Your Email Address" class="form-control" />
          </div>
          <div class="form-group">
            <button class="btn btn-default btn-block "><i class="fa fa-send"></i></button>
          </div>
        </form>
      </div>
      <!--/contact details-->
      <div class="col-md-12"><p class="copyright">© 2018 <a href="https://devfloat.net/">Numero</a>. All rights reserved</p></div>
    </div>
  </div>
</footer>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script type="text/javascript" src="/js/bootstrap.js"></script>
<script type="text/javascript" src="/js/SmoothScroll.js"></script>
<script type="text/javascript" src="/js/jquery.isotope.js"></script>
<script src="/js/owl.carousel.js"></script>
<script src="/js/jquery.waypoints.min.js"></script>
<!-- Custom Javascripts
    ================================================== -->
<script type="text/javascript" src="/js/main.js"></script>
<script src="/js/wow.min.js"></script>
<script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 1000
        });
    });
</script>
<script>
new WOW().init();
</script>
</body>
</html>
