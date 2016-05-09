<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	
    <script type="text/javascript">
    var slideimages = new Array() 
	slideimages[0] = new Image() 
	slideimages[0].src = "big1.jpg" 
	slideimages[1] = new Image()
	slideimages[1].src = "big2.jpg"
	slideimages[2] = new Image()
	slideimages[2].src = "big3.jpg"

</script>
<style>
#anu{
background-color:white;
border-bottom-color:white;
border-left-color:white;
border-right-color:white;
margin-bottom:0px;
}
#shu{
  border: 2px solid red;
  padding-top:0px;
  padding-left:0px;
 }

#shu1{
padding-top:50px;
}
.box{
	background-color:#6b6b6b;
	text-align:center;
    border:1px solid lightgrey;
	border-bottom-color:#6b6b6b;
	border-top-color:#6b6b6b;
	height:50px;
	padding:12px;
	
}
.box1 {
    padding:0px;
    }
.box2 {
   padding:60px;
   background-color:#54d3f7;
   border-radius:0 0 30px 30px;
    }
	.bo{
    padding:40px 0px 0px 400px;
	background-color:black;
	border-radius:30px 30px 30px 30px;
    }
	.bo2{
    //padding:40px 0px 40px 400px;
	background-color:lightgrey;
	border-radius:0px 0px 30px 30px;
	padding-bottom:50px;
	padding-top:20px;
    }
	.bo1{
    //padding:40px 300px 40px 300px;
	background-color:#54d3f7;
	border-radius:0px 0px 30px 30px;
	padding-bottom:70px;
	padding-top:40px;
    }
	.b1, .b2, .b3, .b4{
	display:inline-block;
	//position: relative;
	margin: 5px;
	//float:left;
	width:23%;
	height:150px;
	border-radius:20px;
	border:1px solid black;
	}
	.b11, .b22, .b33, .b44{
	display:inline-block;
	//position: relative;
	margin: 5px;
	//float:left;
	width:23%;
	height:150px;
	border-radius:20px;
	border:1px solid black;
	}
   .frame{
   width:200px;
   height:200px;
   border: white 2px solid;
   border-radius:30px;
	}
	#para{
    margin:0px;
	padding:40px 220px 40px 250px;
}
.bo3{
background-color:lightgrey;
border-radius:0px 0px 30px 30px;
padding-bottom:80px;
padding-top:80px;
}
.bo4{
background-color:#fd002a;
//height:200px;
border-radius:0px 0px 30px 30px;
padding-bottom:100px;
padding-top:80px;
}
.bo5{
background-color:black;
//height:200px;
//border-radius:0px 0px 30px 30px;
padding-bottom:50px;
padding-top:50px;
}
 #ravi{
 border: 2px solid white;
  border-radius: 50%;
  //margin-left:180px;
  padding:10px;
  }
  



.modalDialog {
    position: fixed;
    font-family: Arial, Helvetica, sans-serif;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
   
    z-index: 99999;
    opacity:0;
    -webkit-transition: opacity 400ms ease-in;
    -moz-transition: opacity 400ms ease-in;
    transition: opacity 400ms ease-in;
    pointer-events: none;
}
.modalDialog:target {
    opacity:1;
    pointer-events: auto;
}
.modalDialog > div {
    width: 400px;
    position: relative;
    margin: 10% auto;
    padding: 5px 20px 13px 20px;
    border-radius: 10px;
    background: #fff;
    background: -moz-linear-gradient(#fff, #999);
    background: -webkit-linear-gradient(#fff, #999);
    background: -o-linear-gradient(#fff, #999);
}
.close {
    background: #606061;
    color: #FFFFFF;
    line-height: 25px;
    position: absolute;
    right: -12px;
    text-align: center;
    top: -10px;
    width: 24px;
    text-decoration: none;
    font-weight: bold;
    -webkit-border-radius: 12px;
    -moz-border-radius: 12px;
    border-radius: 12px;
    -moz-box-shadow: 1px 1px 3px #000;
    -webkit-box-shadow: 1px 1px 3px #000;
    box-shadow: 1px 1px 3px #000;
}
.close:hover {
    background: #00d9ff;
}



	p{
	  font-size:12px;
	  text-decoration: none;
	  color:black;
	}

	h1{
	  font-size:1.5em;
	  color:#525252;
	}

	.box21{
	  background:#ecf0f1;
	  width:300px;
	  border-radius:6px;
	  margin: 0 auto 0 auto;
	  padding:0px 0px 20px 0px;
	  text-align:center; 
	}

	.email{
	  background:white;
	  border: black 1px solid;
	  padding: 8px;
	  width:250px;
	  color:#AAAAAA;
	  margin-top:10px;
	  font-size:1em;
	
	  text-align:center;
	}

	.password{
	  
	  background:white;
	  border: #ccc 1px solid;
	  padding: 8px;
	  width:250px;
	  font-size:1em;
	  text-align:center;
	}

	.btn1{
	  background:red;
	  width:125px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  
	  border: black 1px solid;
	  opacity:0.7;
	  margin-top:20px;
	  margin-bottom:20px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}

	.btn:hover{
	  opacity:1;
	}

	#btn2{
	  float:left;
	  background:white;
	  width:125px;  
	  padding-top:5px;
	  padding-bottom:5px;
	  color:#00d9ff;
	  border: black 1px solid;
	  opacity:0.6;
	  margin-top:20px;
	  margin-bottom:20px;
	  margin-left:10px;
	  font-weight:800;
	  font-size:0.8em;
	}

	#btn2:hover{ 
	opacity:1;
	}
	.box22{
	  background:#ecf0f1;
	  width:300px;
	  height:330px;
	  margin: 0 auto 0 auto;
	  padding:0px 0px 20px 0px;
	   text-align:center;
	}

	#btn3{
	  background:red;
	  width:125px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  border: black 1px solid;
	  opacity:0.7;
	  margin-top:20px;
	  margin-bottom:2px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}

	#btn3:hover{
	  opacity:1;
	}

	#btn4{
	  float:left;
	  background:#00d9ff;
	  width:125px;  
	  padding-top:5px;
	  padding-bottom:5px;
	  color:black;
	  border: black 1px solid;
	  opacity:0.6;
	  margin-top:20px;
	  margin-bottom:20px;
	  margin-left:10px;
	  font-weight:800;
	  font-size:0.8em;
	}

	#btn4:hover{ 
	opacity:1;
	}
	#btn5{
	  background:#848482;
	  width:125px;
	  height:30px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  border: black 1px solid;
	  margin-top:20px;
	  margin-bottom:0px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}
	
	#btn6{
	  background:#848482;
	  width:125px;
	  height:30px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  border: black 1px solid;
	  margin-top:20px;
	  margin-bottom:10px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}

	#btn7{
	  background:#848482;
	  width:125px;
	  height:30px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  border: black 1px solid;
	  margin-top:0px;
	  margin-bottom:0px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}

	#btn8{
	  background:#848482;
	  width:125px;
	  height:30px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  border: black 1px solid;
	  margin-top:0px;
	  margin-bottom:0px;
	  float:left;
	  margin-left:16px;
	  font-weight:800;
	  font-size:0.8em;
	}
.box23{
	  background:#ecf0f1;
	  width:300px;
	  height:190px;
	  border-radius:6px;
	  margin: 0 auto 0 auto;
	  padding:0px 0px 20px 0px;
	  text-align:center; 
	}
.btn9{
	  background:red;
	  width:125px;
	  padding-top:5px;
	  padding-bottom:5px;
	  color:white;
	  float:right;
	  border: black 1px solid;
	  opacity:0.7;
	  margin:20px;
	  margin-bottom:20px;
	  margin-left:16px;
	  margin-right:16px;
	  font-weight:800;
	  font-size:0.8em;
	  text-decaration:none;
	}
	.btn9:hover{
	  opacity:1;
	}

#rcorners9 {
			border: 2px solid red;
			background-color:white;
			border-radius: 50%;
			padding:20px;
			font-size:4em;
			color:#fd002a;
			padding-top:10px;
		}

.form-control{
     width: 330px ;
	 height: 40px; 
    background: white;
	border: 1px solid balck;
    border-radius: 30px;
}
.form-factor{
  width: 400px;
  height: 210px;
  border-radius: 30px;
  border: 1px solid black;
   background:white;
}
.box31{
	background-color:red;
	text-align:center;
    border:1px solid red;
	height:50px;
	padding:12px;
	
}
.box32 {
    padding:0px;
    }		
</style>
</head>
<body>
 <nav class="navbar navbar-default" id="anu">
		<div class="container-fulid">
			<div class="navbar-header">
			<a href="#"><img src="logo.jpg" alt="noimage" width="80px" height="100px" style="margin-left:18px;"/></a>
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span> 
				</button>
			</div>
		    <div class="collapse navbar-collapse" id="myNavbar">
				<p id="shu"></p>
				<ul class="nav navbar-nav navbar-right">
					<li><a  href="#" id="shu1">About</a></li>
					<li><a  href="#" id="shu1">Categories</a></li>
					<li><a  href="#" id="shu1">Donated</a></li>
					<li><a  href="#" id="shu1">Received</a></li>
					<li><a  href="#" id="shu1">Storyboard</a></li>
					<li><a  href="#openModal" data-toggle="#openModal"style="color:#00BFFF;margin-right:15px;" id="shu1">JoinUs/LogIn</a></li>
				</ul>
		    </div>
		</div>
	</nav>
  <!--recipient-->
	<div id="openModal" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
				<form method="post" action="index.html">
					<div class="box21">
						<input type="email" name="E-Mail Id" placeholder="E-Mail id"  class="email"/>
						<input type="Password" name="Password" placeholder="Password"  class="email" />
						<a href="#"><div class="btn1">login In</div></a> <!-- End Btn -->
						<a href="#openModal1"><div id="btn2">Join Us</div></a> <!-- End Btn2 -->
						<a href="#openModal2"><center>Forgot your password?</center></a>
					</div> <!-- End Box -->
				</form>
		</div>
	</div>
	<!--join us code-->
	<div id="openModal1" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<form method="post" action="index.html">
				<div class="box22">
					<input type="email" name="E-Mail Id" placeholder="E-Mail Id" class="email" />
					<input type="Password" name="Password" placeholder="Password"  class="email" />
					<input type="email" name="E-Mail Id" placeholder="E-Mail Id"  class="email" />
					<a href="#"><div id="btn3">Join Us</div></a> <!-- End Btn3 -->
					<a href="#"><div id="btn4">login In</div></a> <!-- End Btn4 -->
					<a href="#"><div id="btn5">twitter</div></a> <!-- End Btn5 -->
					<a href="#"><div id="btn6">facebook</div></a> <!-- End Btn6 -->
					<a href="#"><div id="btn7">Linkedin</div></a> <!-- End Btn7 -->
					<a href="#"><div id="btn8">instagram</div></a> <!-- End Btn8 -->
				</div> 
			</form>
	     </div>
	</div>
	<!--forgot password-->
	<div id="openModal2" class="modalDialog">
		<div>
		    <a href="#close" title="Close" class="close">X</a>
			<form method="post" action="index.html">
				<div class="box23">
					<input type="email" name="E-Mail Id"  placeholder="E-Mail id"  class="email"/>
					<input type="Password" name="Password" placeholder="Password"  class="email" />
					<input type="Re-enter Password" name="Password" placeholder="Re-enter Password"  class="email" />
					<a href="#"><div class="btn9">submit</div></a> <!-- End Btn -->
				</div> <!-- End Box -->
            </form>
		</div>				
   </div>
   <img src="big1.jpg" id="slide" style="position:relative;width:100%;win-width:600px;height:100px auto;padding-top:0px;padding-left:0px;"/>
    <script type="text/javascript">
		var step=0
		function slideit(){
		 if (!document.images)
		  return
		 document.getElementById('slide').src = slideimages[step].src
		 if (step<2)
		  step++
		 else
		  step=0
		 setTimeout("slideit()",4400)
		}

		slideit()

	</script>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-4 col-lg-4 col-sm-6 box1"><div class="box">donate</div></div>
	<div class="col-md-4 col-lg-4 col-sm-6 box1"><div class="box">exchange</div></div>
	<div class="col-md-4 col-lg-4 col-sm-6 box1"><div class="box">raise a request</div></div>
	</div>
	</div>
	<div id="sweety">	
<div class="container-fluid box2">
<h5>ABOUT:</br> love.friendship,respect,edmiration are the emotional response of the one man to the virtues of another the spiritual patment given in the exchange
for the personal ,selfish pleasure which one man derives from virtues of another man's character.only a bruteor altruist would calm that the appreciation of 
another persons virtues is an act of selflessness,that as for as ones own self interst and pleasure are concerned.its makes no difference wheather oe deals
with a genius or a fool,wheather one meets a hero or a thug,wheather one marries an ideal womenor a sult.</h5>
</div>
</div>
<div id="sweety1">
<div class="container-fluid bo2">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"><h3 style="text-align:center;">Donated</h3>
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTUIDswDdBz6GJkPANr8n3uilEu28JXTq9G2YtXBCII54hPe_2Q"  style="border-radius:30px;width:280px;"alt="Cinque Terre">
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"><h3 style="text-align:center;">Received</center></h3>
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSF4aon4fr5Up-URoZ0tz6mVSFRBE7egOyEYa6x5nC9WLD0YmdeZg" style="border-radius:30px;width:280px;" alt="Cinque Terre">
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
		</div>
	</div>
<div id="sweety2">
<div class="container-fluid bo1">
		<div class="row ">
		<h3><center>Storyboard</center></h3><br>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTUIDswDdBz6GJkPANr8n3uilEu28JXTq9G2YtXBCII54hPe_2Q"  style="border-radius:30px;width:220px;height;230px;"alt="Cinque Terre">
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSF4aon4fr5Up-URoZ0tz6mVSFRBE7egOyEYa6x5nC9WLD0YmdeZg" style="border-radius:30px;width:220px;height;230px;" alt="Cinque Terre">
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTUIDswDdBz6GJkPANr8n3uilEu28JXTq9G2YtXBCII54hPe_2Q"  style="border-radius:30px;width:220px;height;230px;"alt="Cinque Terre">
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcSF4aon4fr5Up-URoZ0tz6mVSFRBE7egOyEYa6x5nC9WLD0YmdeZg" style="border-radius:30px;width:220px;height;230px;" alt="Cinque Terre">
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>
		</div>
	</div>
<div class="container-fluid bo3">
		<div class="row">
		<h3><center></center></h3>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			  <iframe src="https://www.youtube.com/embed/lzgY7qHafm0" style="border-radius:30px;width:220px;height;230px;"></iframe>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <iframe src="https://www.youtube.com/embed/_g2qFMo_EW8?feature=player_embedded" style="border-radius:30px;width:220px;height;230px;"></iframe>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <iframe src="https://www.youtube.com/embed/sTLy5tlfLy0" style="border-radius:30px;width:220px;height;230px;"></iframe>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12">
			 <iframe src="https://www.youtube.com/embed/lzgY7qHafm0" style="border-radius:30px;width:220px;height;230px;"></iframe>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>
		</div>
	</div>
	<div class="container-fluid bo4">
		<div class="row">
		<h3 style="color:white;"><center>Download the app</center></h3><br><br><br>
			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
			 <a href="#" id="rcorners9"><i class="fa fa-apple" ></i></a>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">
			 <a href="#" id="rcorners9"><i class="fa fa-android" ></i></a>
			</div>
			<div class="col-md-2 col-lg-2 col-sm-4 col-xs-12">					
			 <a href="#" id="rcorners9"><i class="fa fa-windows"></i></a>
			</div>

			<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12"></div>

		</div>
	</div>
	
	<div class="container-fluid bo5">
	<h1 style="color:white;"><center>Contact Us</center></h1>
		<div class="row">
			 <div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>
			<form>
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="form-group ">
							 <input class="form-control"  name="name1" placeholder="Name" type="text"/>
							</div>

							<div class="form-group">
							 <input class="form-control" name="email" placeholder="Subject" type="text"/>
							</div>

							<div class="form-group">
							 <input class="form-control"  name="mobile" placeholder="Phone Number" type="text"/>
							</div>

							<div class="form-group">
							 <input class="form-control"  name="mobile" placeholder="Email" type="text"/>
							</div>
						</div>$nbsp
					</div>
				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<div class="form-group ">
					 <textarea class="form-factor" name="text" placeholder="    Decsription"></textarea>
					</div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<button type="button" class="btn btn-primary" style="border-radius:30px;padding-right:120px;background-color:lightgrey;border:#a5a5a5;margin:10px;">send</button>	
				</div>
				<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12"></div>					
            </form>
			
			
		</div>					

    </div>
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 box32"><div class="box31"></div></div>
	<div class="col-md-2 col-lg-2 col-sm-12  col-xs-12 box32"><div class="box31"><a  href="#" style="color:white;">Team</a></div></div>
	<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 box32"><div class="box31"><a  href="#" style="color:white;">Privacy Policy</a></div></div>
	<div class="col-md-2 col-lg-2 col-sm-12 col-xs-12 box32"><div class="box31"><a  href="#" style="color:white;">Terms&Conditions</a></div></div>
	<div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 box32"><div class="box31"></div></div>
	</div>
	</div>
</body>
</html>