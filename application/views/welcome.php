<!-- <section>
  <div class="quote">
    <cite>
   Full Calendar Using Codeigniter 3.0.3 -Boominathan

    </cite>
    <br>
 <a href="<?php echo base_url();?>calendar" class="btn"> Start Now</a>
  </div>
</section>

<footer>
   Happy to Help  - By <a href="https://www.facebook.com/eboominathan">Boominathan</a>
</footer>


<style type="text/css">

.btn {
    color: #FFF;
    text-shadow: 0px -1px 0px rgba(0, 0, 0, 0.25);
    display: inline-block;
    text-decoration: none;
    font-weight: 200;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 0.5em;
    padding: 0.8em 1.2em;
    background-color: #ED303C;
    background-image: linear-gradient(to bottom, #ED303C, #8D121A);
    background-repeat: repeat-x;
    box-shadow: 0px 1px 0px rgba(255, 255, 255, 0.1) inset, 0px 1px 5px rgba(0, 0, 0, 0.25);
    font-size: 15px;
    margin: 46px;
}



#dex-sign.play {
  -moz-animation: sign-anim 3.5s 0.2s steps(85) forwards;
  -o-animation: sign-anim 3.5s 0.2s steps(85) forwards;
  -webkit-animation: sign-anim 3.5s 0.2s steps(85) forwards;
  animation: sign-anim 3.5s 0.2s steps(85) forwards;
}
a#dex-sign {
  opacity: .9;
}
a#dex-sign:hover {
  opacity: 1;
  -webkit-filter: invert(30%) brightness(80%) sepia(100%) contrast(110%) saturate(953%) hue-rotate(165deg);
}
@-webkit-keyframes sign-anim {
  to {
    background-position: 0 -7140px;
  }
}
@-moz-keyframes sign-anim {
  to {
    background-position: 0 -7140px;
  }
}
@keyframes sign-anim {
  to {
    background-position: 0 -7140px;
  }
}
* {
  margin: 0;
  padding: 0;
}
body,
html {
  font-size: 1em;
  color: #2C2C2C;
  height: 100%;
  font-family: 'Raleway', sans-serif;
}
::selection {
  background: white;
}
::-moz-selection {
  background: white;
}
section {
  height: 100%;
  min-height: 335px;
  background-color: #ffffff;
  background-image: radial-gradient(center top, circle cover, #ffffff, #d6d6d6);
  background-image: -o-radial-gradient(center top, circle cover, #ffffff, #d6d6d6);
  background-image: -ms-radial-gradient(center top, circle cover, #ffffff, #d6d6d6);
  background-image: -moz-radial-gradient(center top, circle cover, #ffffff, #d6d6d6);
  background-image: -webkit-radial-gradient(center top, circle cover, #ffffff, #d6d6d6);
  text-align: center;
}
section:before {
  content: '';
  position: absolute;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  min-height: 335px;
  pointer-events: none;
  opacity: .30;
  background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAQAAAAECAYAAACp8Z5+AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoV2luZG93cykiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6QkYzRUQ1MTgxRjlBMTFFM0FGQjJCNDdCQ0I4MkE3RDUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6QkYzRUQ1MTkxRjlBMTFFM0FGQjJCNDdCQ0I4MkE3RDUiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpCRjNFRDUxNjFGOUExMUUzQUZCMkI0N0JDQjgyQTdENSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpCRjNFRDUxNzFGOUExMUUzQUZCMkI0N0JDQjgyQTdENSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PvRiGgkAAAAkSURBVHjaYvj//z8DCKuqqqaBaEYQgQyY1NTU0pAFMFQABBgAKcEQowsz06AAAAAASUVORK5CYII=');
}
section #replay {
  position: absolute;
  z-index: 9999;
  bottom: -45px;
  left: 0;
  display: inline-block;
  padding: 10px;
  background: rgba(240, 240, 240, 0.44);
  border: 1px solid #BABABA;
  color: #696969;
  text-transform: uppercase;
  text-decoration: none;
  font-size: .6em;
  -moz-transition: left 6s cubic-bezier(1, 0.01, 1, 0.01);
  -o-transition: left 6s cubic-bezier(1, 0.01, 1, 0.01);
  -webkit-transition: left 6s cubic-bezier(1, 0.01, 1, 0.01);
  transition: left 6s cubic-bezier(1, 0.01, 1, 0.01);
}
section #replay:hover {
  left: -100000%;
  -moz-transition: none;
  -o-transition: none;
  -webkit-transition: none;
  transition: none;
}
section #replay:hover + .play {
  -moz-animation: none !important;
  -o-animation: none !important;
  -webkit-animation: none !important;
  animation: none !important;
}
section .quote {
  position: absolute;
  left: 25%;
  right: 25%;
  top: 20%;
  padding: 30px 0 15px 0;
}
section .quote cite {
  color: #000;
  font-family: "Adobe Caslon Pro", "Hoefler Text", Georgia, Garamond, Times, serif;
  letter-spacing: 0.1em;
  text-align: center;
  line-height: 110%;
  font-size: 1.7em;
  font-variant: small-caps;
}
section .quote cite:before {
  content: '’’';
  position: absolute;
  left: -120px;
  top: 48px;
  width: 100%;
  height: 100%;
  pointer-events: none;
  font-size: 8em;
  text-align: left;
  font-family: Arial;
  letter-spacing: -16px;
  font-style: normal;
  font-weight: bold;
  color: rgba(0, 0, 0, 0.1);
}
section .quote #dex-sign {
  position: absolute;
  bottom: -95px;
  right: 0;
}
footer {
  background-color: #2C2C2C;
  color: #8A8A8A;
  padding: 25px;
  text-align: center;
}
footer a {
  text-decoration: none;
  color: #4384E6;
}
footer a:hover {
  color: white;
}

</style>
 -->

 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Mushola STT-NF</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="free islamic templates, free, islamic, templates. website templates, prayer times for website, icons, vectors, website themes, islamic themes" />
<meta name="description" content="Free Islamic website templates, resources, icons, vectors, prayer times for your website, and Islamic content." />
<meta name="viewport" content="width=device-width">
<link rel="stylesheet" href="<?php echo base_url(); ?>assets2/css/uncss.css">
<script src="three/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<link rel="shortcut icon" href="three/favicon.ico">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url(); ?>assets2/ico/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo base_url(); ?>assets2/images/ico/apple-touch-icon-57-precomposed.png"></head>
<body>
<header class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </a> <a id="logo" class="pull-left" href="<?php echo base_url(); ?>"></a>
      <div class="nav-collapse collapse pull-right">
        <ul class="nav">
          <li class="active"><a href="<?php echo base_url(); ?>">Beranda</a></li>
          <li><a href="<?php echo site_url('tentang'); ?>">Tentang Kami</a></li>
          <li><a href="<?php echo site_url('prayers'); ?>">Prayers</a></li>
          <li><a href="three-templates">Artikel</a></li>
          <li><a href="<?php echo site_url('Calendar'); ?>">Peminjaman</a>
          </li>
          <!-- <li><a href="<?php echo site_url('welcome'); ?>">Login</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</header>
<section id="slide-show">
  <div class="slider-shadow">
    <div id="da-slider" class="da-slider">
      <div class="da-slide">
        <h2>Sistem Informasi Masjid</h2>
        <p>Visit <a href="https://freeislamictemplates.appspot.com/">https://simasnf.com/</a></p>
        <a href="#" class="da-link">Read more</a>
        <div class="da-img"><img src="<?php echo base_url(); ?>assets2/images/slider/1.png" alt="Masjid Template 1" height="165" width="307"/></div>
      </div>
      <div class="da-slide">
        <h2>Info Kegiatan</h2>
        <p>Visit <a href="https://freeislamictemplates.appspot.com/">https://simasnf.com/</a></p>
        <a href="#" class="da-link">Read more</a>
        <div class="da-img"><img src="<?php echo base_url(); ?>assets2/images/slider/2.png" alt="Masjid Template 2" height="165" width="307"/></div>
      </div>
      <nav class="da-arrows"> <span class="da-arrows-prev"></span> <span class="da-arrows-next"></span> </nav>
    </div>
  </div>
</section>
<section id="services">
  <div class="container">
    <div class="center">
      <h2><a href="https://freeislamictemplates.appspot.com/">Free Islamic Templates</a></h2>
    </div>
    <div class="row-fluid">
      <div class="middle-box span3">
        <div class="media">
          <div class="pull-left"> <i class="icon-globe icon-medium"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Website Templates</h4>
            <p>There are two available, but more will be added later.</p>
          </div>
        </div>
      </div>
      <div class="middle-box span3">
        <div class="media">
          <div class="pull-left"> <i class="icon-thumbs-up-alt icon-medium"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Logos</h4>
            <p>Coming soon.</p>
          </div>
        </div>
      </div>
      <div class="middle-box span3">
        <div class="media">
          <div class="pull-left"> <i class="icon-leaf icon-medium icon-rounded"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Prayer Times</h4>
            <p>Prayer times added to templates.</p>
          </div>
        </div>
      </div>
            <div class="middle-box span3">
        <div class="media">
          <div class="pull-left"> <i class="icon-leaf icon-medium icon-rounded"></i> </div>
          <div class="media-body">
            <h4 class="media-heading">Prayer Times</h4>
            <p>Prayer times added to templates.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="recent-works">
  <div class="container">
    <div class="center">
      <h2>Recent Templates</h2>
      <p class="lead">Latest items will be added below.</p>
    </div>
    <ul class="gallery col-4">
      <li>
        <div class="preview"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/thumb/item1.jpg" alt="Image" height="128" width="213">
          <div class="overlay"> </div>
          <div class="links"><a href="">Preview</a></div>
        </div>
        <div class="desc">
          <h5>Masjid Template 1</h5>
        </div>
        <div id="modal-1" class="modal hide fade"> <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
          <div class="modal-body"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/full/item1.jpg" alt="Image" height="180" width="300"> </div>
        </div>
      </li>
      <li>
        <div class="preview"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/thumb/item2.jpg" alt="Image" height="128" width="213">
          <div class="overlay"> </div>
          <div class="links"><a href="">Preview</a></div>
        </div>
        <div class="desc">
          <h5>Masjid Template 2</h5>
        </div>
        <div id="modal-1" class="modal hide fade"> <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
          <div class="modal-body"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/full/item2.jpg" alt="Image" height="180" width="300"> </div>
        </div>
      </li>
      <li>
        <div class="preview"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/thumb/item1.jpg" alt="Image" height="128" width="213">
          <div class="overlay"> </div>
          <div class="links"><a href="">Preview</a></div>
        </div>
        <div class="desc">
          <h5>Masjid Template 1</h5>
        </div>
        <div id="modal-3" class="modal hide fade"> <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
          <div class="modal-body"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/full/item1.jpg" alt="Image" height="180" width="300"> </div>
        </div>
      </li>
      <li>
        <div class="preview"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/thumb/item2.jpg" alt="Image" height="128" width="213">
          <div class="overlay"> </div>
          <div class="links"><a href="">Preview</a></div>
        </div>
        <div class="desc">
          <h5>Masjid Template 2</h5>
        </div>
        <div id="modal-4" class="modal hide fade"> <a class="close-modal" href="javascript:;" data-dismiss="modal" aria-hidden="true"><i class="icon-remove"></i></a>
          <div class="modal-body"> <img src="<?php echo base_url(); ?>assets2/images/portfolio/full/item2.jpg" alt="Image" height="180" width="300"> </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<section id="bottom" class="main"> 
  <div class="container"> 
    <div class="row-fluid"> 
      <div class="span3">
        <h4>INFO</h4>
        <ul class="unstyled address">
          <li> <i class="icon-home"></i><strong>Address:</strong><a href="https://plus.google.com/b/100537539023412941569/100537539023412941569/" target="_blank">Google+</a></li>
          <li> <i class="icon-envelope"></i> <strong>Forum: </strong><a href="#">Google Group</a></li>
          <li> <i class="icon-globe"></i> <strong>Website:</strong><a href="/">Free Islamic Templates</a></li>
        </ul>
      </div>
      <div id="tweets" class="span3">
        <h4>SITEMAP</h4>
        <div>
          <ul class="arrow">
            <li><a href="three">Home</a></li>
            <li><a href="three-about">About Me</a></li>
            <li><a href="three-prayers">Prayers</a></li>
            <li><a href="three-templates">Templates</a></li>
            <li><a href="three-blog">Blog</a></li>
            <li><a href="three-services">Services</a></li>
          </ul>
        </div>
      </div>
      <div id="archives" class="span3">
        <h4>WEBSITE TEMPLATES</h4>
        <div>
          <ul class="arrow">
            <li><a href="#">Template 1</a></li>
            <li><a href="#">Template 2</a></li>
            <li><a href="#">Template 3</a></li>
          </ul>
        </div>
      </div>
      <div class="span3">
        <h4>RESOURCES</h4>
        <div>
          <ul class="arrow">
            <li><a href="http://freeislamiccalligraphy.com/" target="_blank">Islamic Calligraphy</a></li>
            <li><a href="http://www.islamicfinder.org/world.html" target="_blank">Islamic Prayer Times</a></li>
            <li><a href="http://findicons.com/search/islamic" target="_blank">Islamic Icons 1</a></li>
            <li><a href="http://www.iconarchive.com/tag/icon-islam" target="_blank">Islamic Icons 2</a></li>
            <li><a href="http://www.freepik.com/free-photos-vectors/islamic" target="_blank">Islamic Vectors 1</a></li>
            <li><a href="http://vector.me/search/islamic" target="_blank">Islamic Vectors 2</a></li>
            <li><a href="http://www.madaniwallpaper.com/" target="_blank">Islamic Wallpaper</a></li>
          </ul>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>
<footer id="footer">
  <div class="container">
    <div class="row-fluid">
      <div class="footer5 span5 cp"> &copy; <a href="https://freeislamictemplates.appspot.com/">Free Islamic Templates 2014</a> . All Rights Reserved. <a href="https://plus.google.com/100537539023412941569" rel="publisher"></a>
</div>
      <div class="footer6 span6">
        <ul class="social pull-right">
          <li><a href="https://plus.google.com/b/100537539023412941569/100537539023412941569/" target="_blank"><i class="icon-google-plus"></i></a></li>
        </ul>
      </div>
      <div class="span1"> <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a> </div>
    </div>
  </div>
</footer>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54987858-1', 'auto');
  ga('send', 'pageview');

</script><script src="<?php echo base_url(); ?>assets2/js/all.js"></script> 
<script type="text/javascript">
            $(function() {
                $('#da-slider').cslider({
                    autoplay    : true,
                    bgincrement : 450
                });
            });
        </script>
</body>
</html>