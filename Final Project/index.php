<!DOCTYPE html>
  <html>
      <head>
            <title>iTECH online computer shop</title>
            <!-- for-mobile-apps -->
             <link rel="stylesheet" href="css/bootstrap.min.css"/>
              <script src="js/jquery2.js"></script>
              <script src="js/bootstrap.min.js"></script>
              <script src="main.js"></script>
              <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
              <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
              <link rel="stylesheet" href="css/demo.css"> <!-- Demo style -->
              <link rel="stylesheet" type="text/css" href="style.css">
              <style>
                      body{
                  background:#fff;
                  font-family:'Open Sans', sans-serif;
              }
              /*logo........*/
                .ite{
                  padding-top: 10px;
                  
                }

              .w3l_logo h1 a{
                  font-size:3.1em;
                  color:#212121;
                  text-decoration:none;
                  font-family: 'Glegoo', serif;

              }
              .w3l_logo h1 a span {
                  display: block;
                  font-size: .3em;
                  text-transform: capitalize;
                  letter-spacing: 7px;
                  padding-left: 4px;
                  text-align: center;
                  margin-top: 0.5em;
              }
              .w3l_logo {
                  margin-left:2em;
                }
              /*footer........*/

              .footer{
                padding:4em 0;
                background:#fff;
              }
              .w3_footer_grid h3{
                color: #212121;
                  font-size: 1.5em;
                  margin-bottom: 2em;
                  padding-bottom: .5em;
                  position: relative;
                  text-transform: uppercase;
              }
              .w3_footer_grid h3:after{
                content:'';
                background:#3c43a4;
                width:20%;
                height:2px;
                position:absolute;
                bottom:0;
                left:0;
              }
              .w3_footer_grid p{
                color:#999;
                line-height:1.8em;
                margin-bottom:2em;
              }
              .w3_footer_grid ul li {
                  list-style-type: none;
                  margin-bottom: 1em;
                  color: #999;
                  font-size: 14px;
              }
              .w3_footer_grid ul.address li i {
                  color:#414141;
                  border: 1px solid #414141;
                  padding: .5em;
                  margin-right: 1em;
              }
              .w3_footer_grid ul.address li span {
                  display: block;
                  margin-left: 3em;
              }
              .w3_footer_grid ul li a {
                  color: #999;
                  text-decoration: none;
              }
              .w3_footer_grid ul li a:hover {
                color:#212121;
              }
              .w3_footer_grid ul.info li a {
                  padding-left:2.2em;
                  background: url(../images/img-sp.png) no-repeat -6px -98px;
              }
              .w3_footer_grid h4{
                margin:2em 0 1em;
                font-size:1.2em;
                color:#3c43a4;
              }

        </style>
      </head> 
<body>
<div class="w3l_logo">
  <h1 ><a href="index.html"><div class="ite"><font color="coral">i</font>TECH</div><span><font color="coral">THE BIGGEST CHOISE ON THE WEB.</font></span></a></h1>
</div>
<form class="navbar-form navbar-left" style="padding-bottom:50px">
            <div class="form-group" style="margin-left: 35em;">
              <input type="text" class="form-control" placeholder="Search" id="search">
            </div>
            <button type="submit" class="btn btn-primary" id="search_btn"><span class="glyphicon glyphicon-search"></span></button>
         </form>
<br><br><br><br><br><br><br>
<div class="navbar navbar-inverse navbar">
  <div class="container-fluid"> 
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse" aria-expanded="false">
          <span class="sr-only">navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
    <div class="collapse navbar-collapse" id="collapse">
      <ul class="nav navbar-nav">
        <li><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
        <li><a href="contact us.php"><span class="glyphicon glyphicon-modal-window"></span>Contact</a></li>
         <li class="abt"><a href="about.php"  ><span class="glyphicon glyphicon-modal-window"></span>About Us</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-shopping-cart"></span>Cart<span class="badge">0</span></a>
          <div class="dropdown-menu" style="width:400px;">
            <div class="panel panel-success">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in TK.</div>
                </div>
              </div>
              <div class="panel-body">
                <div id="cart_product">
                <!--<div class="row">
                  <div class="col-md-3">Sl.No</div>
                  <div class="col-md-3">Product Image</div>
                  <div class="col-md-3">Product Name</div>
                  <div class="col-md-3">Price in TK.</div>
                </div>-->
                </div>
              </div>
              <div class="panel-footer"></div>
            </div>
          </div>
        </li>
        <li><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span>SignIn</a>
          <ul class="dropdown-menu">
            <div style="width:300px;">
              <div class="panel panel-primary">
                <div class="panel-heading">Login</div>
                <div class="panel-heading">
                  <form onsubmit="return false" id="login">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" required/>
                    <label for="email">Password</label>
                    <input type="password" class="form-control" name="password" id="password" required/>
                    <p><br/></p>
                    <a href="#" style="color:white; list-style:none;">Forgotten Password</a><input type="submit" class="btn btn-success" style="float:right;">
                  </form>
                </div>
                <div class="panel-footer" id="e_msg"></div>
              </div>
            </div>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class="banner">
    
  </div>
<style> 
.banner{
    background:url(product_images/1.jpg) no-repeat center 0px; 
    background-size:cover;
    -webkit-background-size:cover;
    -moz-background-size:cover;
    -o-background-size:cover;
    -ms-background-size:cover;
    min-height:700px;
    position: relative;
     top: -20px; 
} 

}
</style>
  <p><br/></p>
  <p><br/></p>
  <p><br/></p>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-2 col-xs-12">
        <div id="get_category">
        </div>
        <!--<div class="nav nav-pills nav-stacked">
          <li class="active"><a href="#"><h4>Categories</h4></a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
        </div> -->
        <div id="get_brand">
        </div>
        <!--<div class="nav nav-pills nav-stacked">
          <li class="active"><a href="#"><h4>Brand</h4></a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Categories</a></li>
        </div> -->
      </div>
      <div class="col-md-8 col-xs-12">
        <div class="row">
          <div class="col-md-12 col-xs-12" id="product_msg">
          </div>
        </div>
        <div class="panel panel-info">
          <div class="panel-heading">Products</div>
          <div class="panel-body">
            <div id="get_product">
              <!--Here we get product jquery Ajax Request-->
            </div>
            
        </div>
          <div class="footer">
    <div class="container">
      <div class="w3_footer_grids">
        <div class="col-md-3 w3_footer_grid">
          <h3>Contact</h3>
          <p>iTECH computer accesories store</p>
          <ul class="address">
            <li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Dhanmondi,store no-13/2 <span>Dhaka-1205.</span></li>
            <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:@gmail.com">itech09@gmail.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>0175 655 4558</li>
          </ul>
        </div>

        <div class="col-md-3 w3_footer_grid">
          <h3>CUSTOMER SERVICE</h3>
          <ul class="info"> 
            <li><a href="contact us.php">Contact with us</a></li>
            <li><a href="login_form.php">Account log in</a></li>
            <li><a href="customer_registration.php?register=1.php">Creat Account</a></li>
          </ul>
        </div>

        <div class="col-md-3 w3_footer_grid">
          <h3>Information</h3>
          <ul class="info"> 
            
            <div class="box">
            <li><a  href="about.php">About Us</a></li>
            <li><a href="terms.php">Terms and Conditions</a></li>
            <li><a href="policy.php">Privacy Policy</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="footer-copy">
      
      <div class="container">
        <p>&copy; 2018.iTECH computer|accesories. <a href="http://iTECH.com/">iTECH</a></p>
      </div>
      <a href="#0" class="cd-top js-cd-top">Top</a>
  <script src="js/main.js"></script> 
    </div>
  </div>
  <!-- //footer --> 
  <!-- cart-js -->
  <script src="js/minicart.js"></script>   
 </body>
</html>
















































