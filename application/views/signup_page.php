<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->
    <link href="http://localhost/code/css/bootstrap-1.1.0.css" rel="stylesheet">

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
  </head>
<body>

 <body>

    <div class="topbar">
      <div class="fill">
        <div class="container">
          <h3><a href="#">Project Name</a></h3>
          <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
            <li><a href="#">Link</a></li>
          </ul>
          <form action="">
            <input type="text" placeholder="Search">
          </form>
          <ul class="nav secondary-nav">
            <li class="menu close">
              <a href="#" class="menu">Dropdown</a>
              <ul class="menu-dropdown">
                <li><a href="#">Secondary link</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Another link</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div> <!-- /fill -->
    </div>
<div class='clear'></div>
    <div class="container">
 <div class="clearfix"></div>
      <!-- Example row of columns -->
      <div class="row">
        <div class="span11">
<div class="alert-message error"><a class="close" href="#">X</a>
		<?php echo validation_errors('<p>'); ?>
		</div>
		
		
         <?php 
		echo form_open('home/create_member');
		?>
        <fieldset>
          <legend>Sign Up</legend>
		   <div class="clearfix">
            <label for="xlInput">Username</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="username" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
          <div class="clearfix">
            <label for="xlInput">Email</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="email" size="30" type="text">
            </div>
          </div><!-- /clearfix -->
		   <div class="clearfix">
            <label for="xlInput">Password</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="password" size="30" type="password">
            </div>
          </div><!-- /clearfix -->
		   <div class="clearfix">
            <label for="xlInput">Password Confirm</label>
            <div class="input">
              <input class="xlarge" id="xlInput" name="password2" size="30" type="password">
            </div>
          </div><!-- /clearfix -->
        </fieldset>
        <fieldset>
          <div class="actions">
            <button type="submit" class="btn primary">Sign up</button>&nbsp;<button type="reset" class="btn">Cancel</button>
          </div>
        </fieldset>
      </form>
        </div>
		 <div class="span5">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          <p><a class="btn" href="#">View details &raquo;</a></p>
        </div>
      </div>
	  
	 

      <footer>
        <p>&copy; Company 2011</p>
      </footer>

    </div> <!-- /container -->

  </body>
</html>