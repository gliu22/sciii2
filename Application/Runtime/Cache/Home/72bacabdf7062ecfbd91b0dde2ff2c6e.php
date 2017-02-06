<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Science Information Institute</title>
    <link rel="stylesheet" href="/sciii2/Public/static/css/normalize.css">
    <link href="/sciii2/Public/assets/home/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="/sciii2/Public/static/css/common.css">
    <link rel="stylesheet" href="/sciii2/Public/static/css/index.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>


  <body>
    <div class="wrapper">
    <!-- logobar -->
<div class="logobar">
  <div class="logo__wrap">
    <span class="logobar__logo"></span>
    <span>Science</span>
    <span>Information Institute</span>
    <p>Sharing, Cooperating and Improving</p>
  </div>
  <label class="searchbar" for="searchbar">
    Search:
    <input id="searchbar" type="search" name="" value="">
  </label>
</div>
<!-- navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.html">Home</a></li>
        <li><a href="../conference/AllConferences.html">Conferences</a></li>
        <li><a href="http://www.natscipub.org">Journals</a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="service.html">Services</a></li>
        <li><a href="SponsorShip.html">Sponsorship</a></li>
        <li><a href="about_us.html">About Us</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>
<!-- carousel -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="/sciii2/Public/img/sample1.jpg">
    </div>
    <div class="item">
      <img src="/sciii2/Public/img/sample2.jpg">
    </div>
    <div class="item">
      <img src="/sciii2/Public/img/sample3.jpg">
    </div>
    <div class="item">
      <img src="/sciii2/Public/img/sample4.jpg">
    </div>
    <div class="item">
      <img src="/sciii2/Public/img/sample5.jpg">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

      <!-- content -->
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 sidebar">
  <div class="sidebar__block">
    <h2>Select by Subject</h2>
    <p>
      <a href="../conference/ConferenceSubject?subject=BLS">Biomedical &amp; Life Sciences</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=BE">Business &amp; Economics</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=CMS">Chemistry &amp; Materials Science</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=CSC">Computer Science &amp; Communications</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=EES">Earth &amp; Environmental Sciences</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=EG">Engineering</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=MH">Medicine &amp; Healthcare</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=PM">Physics &amp; Mathematics</a>
    </p>
    <p>
      <a href="../conference/ConferenceSubject?subject=SSH">Social Sciences &amp; Humanities</a>
    </p>
  </div>
  <div class="sidebar__block">
    <h2>Select by City</h2>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Bangkok.jpg" alt="">Bangkok</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Beijing.jpg" alt="">Beijing</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Chengdu.jpg" alt="">Chengdu</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Guilin.jpg" alt="">Guilin</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Xiamen.jpg" alt="">Hangzhou</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/LosAngeles.jpg" alt="">Los Angeles</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Nanjing.jpg" alt="">Nanjing</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/USA.jpg" alt="">Reston, Virginia</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Sanya.jpg" alt="">Sanya</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Shanghai.jpg" alt="">Shanghai</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Shenzhen.jpg" alt="">Shenzhen</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Suzhou.jpg" alt="">Suzhou</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Wuhan.jpg" alt="">Wuhan</a>
    </p>
    <p>
      <a href=""><img class="sidebar__thumb" src="/sciii2/Public/img/Xi'an.jpg" alt="">Xi'an</a>
    </p>
  </div>
  <div class="sidebar__block">
    <h2>Contact Us</h2>
  </div>
</div>

          <div class="col-md-9 main">
            <h3 style="color: #C82227;">
            Services</h3>
        <ul>
            <li>1.&nbsp;Make conference
                proceedings in PDF OR XML format.</li>
            <li>2.&nbsp;Help to organize conferences, including conference promotion, registration,
                hotel logistics,<br /> tickets and touring.</li>
        </ul>

    </div>
    </div>
  </div>
      <div class="footer">
  <div class="footer__img">
    <a class="" href=""><img src="../../../public/img/srp.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/hans.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/cross-ref.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/openaccess-engii.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/ebsco.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/proquest.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/thompson-reuters.jpg" alt=""></a>
    <a class="" href=""><img src="../../../public/img/index-copernicus.jpg" alt=""></a>
  </div>
  <div class="footer__links">
    <a href="">Home</a>
    <span>|</span>
    <a href="">About Engii</a>
    <span>|</span>
    <a href="">Conference</a>
    <span>|</span>
    <a href="">Sponsorship</a>
    <span>|</span>
    <a href="">Contact us</a>
    <span>|</span>
  </div>
  <div class="footer__copyright">
    Copyright © 2007 - 2016 Engineering Information Institute. All rights reserved.
  </div>
</div>

    </div>
    <script src="../../../public/assets/home/jquery/dist/jquery.min.js"></script>
    <script src="../../../public/assets/home/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>

</html>