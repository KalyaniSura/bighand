<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel="icon" href="images/logo.jpg" type="images/logo.jpg">
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
         color:white;
	
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
	padding-top:10px;
         
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
background-color:#454545;
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
	  height:400px;
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
	  margin-left:100px;
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
			padding:10px;
			font-size:3em;
			color:#fd002a;
			padding-top:15px;
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

.bg1{
background-color:white;
}	
.bg2{
background-color:#54d3f7;
}
.bg3{
background-color:lightgrey;
}	
.bg4{
background-color:red;
}	
.bg5{
background-color:#454545;
}	
.bg6{
background-color:lightgrey;
}
 .aaa{
    //padding:40px 0px 40px 400px;
	background-color:white;
	border-radius:0px 0px 30px 30px;
	
	padding-bottom:50px;
	padding-top:20px;
    }
			
.a1,.a2,.a3,.a4{
			margin-top:60px;
			margin-left:40px;
			
		}
.a11,.a22,.a33,.a44{
			border-radius:30px 30px 30px  30px;
			margin-top:60px;
			margin-left:40px;
		}
.rounded6 {
			background-color:#454545;
			height:550px;
			border-radius:0px 0px 0px  0px;
		}
		#user1{
			border-radius:50px 50px 50px  50px;
			height:40px;
			width:130px;
			color:white;
			float:right;
			border:1px solid #a5a5a5;
			background-color:#a5a5a5;
		}
		#txt{
			border-radius:30px 30px 30px  30px;
			}
		#user{
			border-radius:50px 50px 50px  50px;

		}
         #xyz{
	border:1px solid black;
	}
	#xyz1{
	background-color:#d8d8d8;;
	}
.carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }	
  
 .picColor{ 
 width:60px; 
 height:60px;
 //border:5px solid blue; 

 } 
 .picColor:hover { 
 background:#54d3f7;
 width:60px;
 height:60px; 

 }
 #space{
	padding-top: 20px;
	color:#909090;
	font-size: 30px;
		}
</style>
</head>
<body>
	<div id="openModal1" class="modalDialog">
		<div>
			<a href="#close" title="Close" class="close">X</a>
			<!-- <form method="post" action="Registration.php" > -->
                         <form name="myForm" action="Registration.php"" onsubmit="return validateForm()" method="post">
				<div class="box22">
                                        <input type="text" name="user" placeholder="Username"  class="email" />
					<input type="email" name="emailid" placeholder="E-Mail Id" class="email" />
					<input type="Password" name="password" placeholder="Password"  class="email" />
					<input type="text" name="location" placeholder="location"  class="email" />
                                        <input type="text" name="phonenum" placeholder="phonenum"  class="email" />
					<button id="btn3">Join Us</button> <!-- End Btn3 -->
					
					<a href="twitter.html"><div id="btn5">twitter</div></a> <!-- End Btn5 -->
					<a href="facebook.html"><div id="btn6">facebook</div></a> <!-- End Btn6 -->
					<a href="linkedin.html"><div id="btn7">Linkedin</div></a> <!-- End Btn7 -->
					<a href="instagram.html"><div id="btn8">instagram</div></a> <!-- End Btn8 -->
                                       
				</div> 
			</form>
	     </div>
	</div>
</body>
</html>
