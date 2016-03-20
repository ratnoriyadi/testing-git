<!--
    Basic Information
    ============================== 
    Author: Ahmad Fauzi
    Creator: Ahmad Fauzi
    Other Name: Noric
    Tyoe: Blog
    Email: ahmad.uji1902@gmail.com 
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a modern responsive CSS framework based on Material Design by Google. ">
    <title>Parallax - Materialize</title>
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="images/favicon/apple-touch-icon-152x152.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <link rel="icon" href="images/favicon/favicon-32x32.png" sizes="32x32">
    <!--  Android 5 Chrome Color-->
    <meta name="theme-color" content="#EE6E73">
    <!-- CSS-->

    <!-- Materialize WebPage -->

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-wbp/css/ghpages-materialize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-wbp/css/prism.css">
    <!-- DIST -->
    <!-- DIST CSS -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-wbp/dist/css/materialize.min.css">
    <!-- EXTRAS NOUISLIDER -->
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-wbp/extras/noUiSlider/nouislider.css">

    <!-- JS -->
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/materialize.js"></script>
    <!-- EXTRAS NOUISLIDER -->
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/extras/noUiSlider/nouislider.js"></script>
    <!-- JADE -->
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/jade/lunr.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/jade/search.js"></script>
    <!-- JS -->
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/js/init.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/js/jquery.timeago.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/js/prism.js"></script>

    <!-- End Materialize WebPage -->

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-land/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-land/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-wbp/dist/css/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/materialize-land/extras/nouislider.css">

    <link href="<?=base_url()?>assets/materialize-wbp/css/prism.css" rel="stylesheet">
    <link href="<?=base_url()?>assets/materialize-wbp/css/ghpages-materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <link href="http://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="http://cdn.transifex.com/live.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/js/materialize.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/materialize-wbp/extras/nouislider/nouislider.js"></script>
</head>
<body class="parallax-demo">
  <header>
  <!-- SUBMENU -->
  <!-- MOBILE DROPDOWN -->
    <?php 
      $menu = $this->db->get_where('n_menu', array('dropdown'=>"Y"));
      foreach ($menu->result() as $row) { ?>
        <ul id="dropdown<?=$row->id_menu?>mobile" class="dropdown-content">
              <?php $q_sub_menu = $this->db->get_where('n_submenu', array('id_menu'=>$row->id_menu, 'status'=>'enabled', 'permission'=>'guest'));
              foreach ($q_sub_menu->result() as $rows) { ?>
                <li><a href=""><?=$rows->submenu;?></a></li> 
              <?php } ?>
        </ul> 
    <?php } ?>
    <!-- END OF MOBILE DROPDOWN -->
    <!-- REGULAR DROPDOWN -->
    <?php 
      $menu = $this->db->get_where('n_menu', array('dropdown'=>"Y"));
      foreach ($menu->result() as $row) { ?>
        <ul id="dropdown<?=$row->id_menu?>" class="dropdown-content">
              <?php $q_sub_menu = $this->db->get_where('n_submenu', array('id_menu'=>$row->id_menu, 'status'=>'enabled', 'permission'=>'guest'));
              foreach ($q_sub_menu->result() as $rows) { ?>
                <li><a href="#!"><?=$rows->submenu;?></a></li>
              <?php } ?>
        </ul> 

        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!"></a></li>
        </ul>
    <?php } ?>
    <!-- END OF REGULAR DROPDOWN -->
    <!-- END OF SUBMENU -->

    <!-- NAVBAR -->
    <!-- <nav id="nav">
    <div class="container">
      <div class="nav-wrapper">
        <a href="index-2.html" class="brand-logo">Materialize</a>
        <ul id="nav-mobile" class="right side-nav" style="left: -250px;">
          <li class="hide-on-small-only">
            <a href="parallax.html">
              <i class="mdi-navigation-arrow-back"></i>
            </a>
          </li>
        </ul>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
          <li>
          <?php 
            $query = $this->db->get('n_menu');
            foreach ($query->result() as $row) {
              if ($row->dropdown == "Y") { ?>
                <li>
                <a class="dropdown-button" href="#!" data-activates="dropdown<?=$row->id_menu?>">
                  <?=$row->menu;?>
                <i class="material-icons right">arrow_drop_down</i></a>
                </li>
              <?php } else { ?>
                <li><a href=""><?=$row->menu;?></a></li>
            <?php } } ?>
          </li>
          <li>
            <a href="collapsible.html">Home</a>
          </li>
        </ul>
        <a class="button-collapse" href="#" data-activates='nav-mobile'>
          <i class="mdi-navigation-menu"></i>
        </a>
      </div>
    </div>
    </nav> -->
    <nav>
    <div class="container">
    <div class="nav-wrapper ">
      <a href="index-2.html" class="brand-logo">Noric's Blog</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li>
          <?php 
            $query = $this->db->get_where('n_menu', array('status'=>'enabled', 'permission'=>'guest'));
            foreach ($query->result() as $row) {
              if ($row->dropdown == "Y") { ?>
                <li>
                <a class="dropdown-button" href="#!" data-activates="dropdown<?=$row->id_menu?>">
                  <?=$row->menu;?>
                <i class="material-icons right">arrow_drop_down</i></a>
                </li>
              <?php } else { ?>
                <li><a href=""><?=$row->menu;?></a></li>
            <?php } } ?>
          </li>
          <li>
            <a href="collapsible.html">Home</a>
          </li>
      </ul>

      <ul class="side-nav" id="mobile-demo">

      <!-- <li class="no-padding">
          <ul class="collapsible collapsible-accordion">
            <li class="bold"><a class="collapsible-header  waves-effect waves-teal">Components</a>
              <div class="collapsible-body" style="display: none;">
                <ul>
                  <li><a href="badges.html">Badges</a></li>
                  <li><a href="buttons.html">Buttons</a></li>
                  <li><a href="breadcrumbs.html">Breadcrumbs</a></li>
                  <li><a href="cards.html">Cards</a></li>
                  <li><a href="chips.html">Chips</a></li>
                  <li><a href="collections.html">Collections</a></li>
                  <li><a href="footer.html">Footer</a></li>
                  <li><a href="forms.html">Forms</a></li>
                  <li><a href="icons.html">Icons</a></li>
                  <li><a href="navbar.html">Navbar</a></li>
                  <li><a href="pagination.html">Pagination</a></li>
                  <li><a href="preloader.html">Preloader</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </li> -->

        <li>
          <?php 
            $query = $this->db->get_where('n_menu', array('status'=>'enabled', 'permission'=>'guest'));
            foreach ($query->result() as $row) {
              if ($row->dropdown == "Y") { ?>
                <li class="no-padding">
                  <ul class="collapsible collapsible-accordion">
                    <li class="bold">
                      <a class="collapsible-header waves-effect waves-teal"><?=$row->menu?></a>
                      <div class="collapsible-body" style="display: block;">
                        <ul>
                        <?php $s_menu = $this->db->get_where('n_submenu', array('id_menu'=>$row->id_menu));
                          foreach ($s_menu->result() as $rows) { ?>
                          <li><a><?=$rows->submenu?></a></li>
                        <?php } ?>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </li>
              <?php } else { ?>
                <li><a href=""><?=$row->menu;?></a></li>
            <?php } } ?>
          </li>
          <li>
            <a href="collapsible.html">Home</a>
          </li>
          
      </ul>



    </div>
    </div>
  </nav>
          
  <!-- END OF NAVBAR -->
  </header>


<main>
<!--  Parallax Section  -->
  <div class="parallax-container">
    <div class="parallax"><img src="<?=base_url()?>assets/materialize-wbp/images/parallax1.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
    <div class="row container">
      <h4 class="light">Parallax Demo HTML</h4>
      <pre><code class="language-markup col s12">
  <div class="parallax-container">
    <div class="parallax"><img src="images/parallax1.jpg"></div>
  </div>
  <div class="section white">
    <div class="row container">
      <h2 class="header">Parallax</h2>
      <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="images/parallax2.jpg"></div>
  </div>
      </code></pre>
    </div>
  </div>
  <div class="parallax-container">
    <div class="parallax"><img src="<?=base_url()?>assets/materialize-wbp/images/parallax2.jpg"></div>
  </div>    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l4 s12">
            <h5 class="white-text">Help Materialize Grow</h5>
            <p class="grey-text text-lighten-4">We hope you have enjoyed using Materialize! If you feel Materialize has helped you out and want to support the team, send us over a donation! Any amount would help support and continue development on this project and is greatly appreciated.</p>
            <form id="paypal-donate" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----
">
<button class="btn waves-effect waves-light red lighten-3" type="submit" name="action" alt="PayPal - The safer, easier way to pay online!">Donate Now
</button>
</form>

          </div>
          <div class="col l4 s12">
            <h5 class="white-text">Join the Discussion</h5>
            <p class="grey-text text-lighten-4">We have a Gitter chat room set up where you can talk directly with us. Come in and discuss new features, future goals, general problems or questions, or anything else you can think of.</p>
            <a class="btn waves-effect waves-light red lighten-3" target="_blank" href="https://gitter.im/Dogfalo/materialize">Chat</a>
          </div>
          <div class="col l4 s12" style="overflow: hidden;">
            <h5 class="white-text">Connect</h5>
            <iframe src="http://ghbtns.com/github-btn.html?user=dogfalo&amp;repo=materialize&amp;type=watch&amp;count=true&amp;size=large" allowtransparency="true" frameborder="0" scrolling="0" width="170" height="30"></iframe>
            <br>
            <a href="https://twitter.com/MaterializeCSS" class="twitter-follow-button" data-show-count="true" data-size="large" data-dnt="true">Follow @MaterializeCSS</a>
            <br>
            <div class="g-follow" data-annotation="bubble" data-height="24" data-href="https://plus.google.com/u/0/108621217639287104137" data-rel="publisher"></div>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
        © 2014-2015 Materialize, All rights reserved.
        <a class="grey-text text-lighten-4 right" href="https://github.com/Dogfalo/materialize/blob/master/LICENSE">MIT License</a>
        </div>
      </div>
    </footer>
    <!--  Scripts-->
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script>if (!window.jQuery) { document.write('<script src="<?=base_url()?>assets/materialize-wbp/bin/jquery-2.1.1.min.html"><\/script>'); }
    </script>
    <script src="<?=base_url()?>assets/materialize-wbp/js/jquery.timeago.min.js"></script>
    <script src="<?=base_url()?>assets/materialize-wbp/js/prism.js"></script>
    <script src="<?=base_url()?>assets/materialize-wbp/jade/lunr.min.js"></script>
    <script src="<?=base_url()?>assets/materialize-wbp/jade/search.js"></script>
    <script src="<?=base_url()?>assets/materialize-wbp/bin/materialize.js"></script>
    <script src="<?=base_url()?>assets/materialize-wbp/js/init.js"></script>
    <!-- Twitter Button -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

    <!-- Google Plus Button-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    <!--  Google Analytics  -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','http://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-56218128-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
    </script>

    <script type="text/javascript">
      $(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
    </script>

  </body>

<!-- Mirrored from materializecss.com/parallax-demo.html by HTTrack Website Copier/3.x [XR&CO'2013], Sat, 19 Mar 2016 04:45:31 GMT -->
</html>