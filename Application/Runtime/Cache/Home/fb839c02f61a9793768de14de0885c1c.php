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
    <link rel="stylesheet" href="/sciii2/Public/static/css/conference-detail.css">

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
        <li class="active"><a href="../Index/index.html">Home</a></li>
        <li><a href="AllConferences.html">Conferences</a></li>
        <li><a href="http://www.natscipub.org">Journals</a></li>
        <li><a href="#">Articles</a></li>
        <li><a href="../Index/service.html">Services</a></li>
        <li><a href="../Index/SponsorShip.html">Sponsorship</a></li>
        <li><a href="../Index/about_us.html">About Us</a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

      <!-- carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3 sidebar">
  <div class="sidebar__block">
    <h2>Select by Subject</h2>
    <p>
      <a href="ConferenceSubject?subject=BLS">Biomedical &amp; Life Sciences</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=BE">Business &amp; Economics</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=CMS">Chemistry &amp; Materials Science</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=CSC">Computer Science &amp; Communications</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=EES">Earth &amp; Environmental Sciences</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=EG">Engineering</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=MH">Medicine &amp; Healthcare</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=PM">Physics &amp; Mathematics</a>
    </p>
    <p>
      <a href="ConferenceSubject?subject=SSH">Social Sciences &amp; Humanities</a>
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

          <div class="col-md-9">
        <div id="sitmeStyle">
        <div id="siteMapStyle">
            &nbsp;</div>
        <div id="muenfieldset" style="color: Black;">
            <a href="../Index/index.html">Home</a>&nbsp;&gt;&nbsp;<a href="AllConferences.html"
                class="a5">Conferences</a>&nbsp;&gt;&nbsp;<span id="ctl00_ContentPlaceHolder_center_span_field" class="spstyle5" style="color: #C82227;"><?php echo ($SubjectName); ?></span>
        </div>
    </div>
    <fieldset class="fieldsetStyle">
        <div class="distyle12">
            <ul>
                       <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/workshop/CSB/" target="_blank" style='font-weight: 400;'
                                    title='The 3rd Conference on Structural Biology'>The 3rd Conference on Structural Biology&nbsp;(CSB 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;Mar. 18, 2017&nbsp;&nbsp;Xi'an
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/workshop/CB/" target="_blank" style='font-weight: 400;font-weight: bold;'
                                    title='The 4th Conference on Botany'>The 4th Conference on Botany&nbsp;(CB 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;Mar. 18, 2017&nbsp;&nbsp;Xi'an
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/workshop/CACB/" target="_blank" style='font-weight: 400;'
                                    title='The 3rd Conference on Advances in Cell Biology'>The 3rd Conference on Advances in Cell Biology&nbsp;(CACB 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;Mar. 18, 2017&nbsp;&nbsp;Xi'an
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/workshop/cpp/" target="_blank" style='font-weight: 400;'
                                    title='The 4th Conference on Protein and Proteomics'>The 4th Conference on Protein and Proteomics&nbsp;(CPP 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;Mar. 18, 2017&nbsp;&nbsp;Xi'an
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/conference/iCBBE/" target="_blank" style='font-weight: 400;'
                                    title='The 11th International Conference on Bioinformatics and Biomedical Engineering'>The 11th International Conference on Bioinformatics and Biomedical Engineering&nbsp;(iCBBE 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;May 21, 2017&nbsp;&nbsp;Hangzhou
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/conference/CAPTC/" target="_blank" style='font-weight: 400;'
                                    title='The 3rd Conference on Advances in Prevention and Treatment of Cancer'>The 3rd Conference on Advances in Prevention and Treatment of Cancer&nbsp;(CAPTC 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;May 21, 2017&nbsp;&nbsp;Hangzhou
                            </div></li>

                        <li class="new1">
                            <div style="float: left; text-align: left; width: 520px; overflow: hidden; white-space: nowrap;
                                text-overflow: ellipsis;">
                                &nbsp;<a href="http://www.engii.org/conference/CETM/" target="_blank" style='font-weight: 400;'
                                    title='The 3rd Conference on Ethnomedicine and Traditional Medicine'>The 3rd Conference on Ethnomedicine and Traditional Medicine&nbsp;(CETM 2017)</a></div>
                            <div style="float: right; color: #999; font-family: Century Gothic; font-size: 11px;
                                font-style: italic;">
                                &nbsp;&nbsp;May 21, 2017&nbsp;&nbsp;Hangzhou
                            </div></li>
            </ul>
        </div>
    </fieldset>
  </div>
          </div>
        </div>
      </div>
      <div class="footer">
  <div class="footer__img">
    <a class="" href=""><img src="/sciii2/Public/img/srp.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/hans.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/cross-ref.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/openaccess-engii.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/ebsco.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/proquest.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/thompson-reuters.jpg" alt=""></a>
    <a class="" href=""><img src="/sciii2/Public/img/index-copernicus.jpg" alt=""></a>
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