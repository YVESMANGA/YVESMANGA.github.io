<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	<title>jQuery Mobile: Theme Download</title>

	<link rel="stylesheet" href="themes/mytheme.min.css" />
	<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
	<link rel="stylesheet" href="_assets/css/jqm-demos.css">
	<link rel="stylesheet" href="dakar.css"/>

	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
	
	<script src="js/jquery.js"></script>
	<script src="_assets/js/index.js"></script>
	<script src="js/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdYX_lcNetYUX1X6byUCzyENQXuoPM6nA"></script> 
	<script src="dakar.js"></script>


	<style>
		 img{
            width: 200px;
            
        }
		#logo{
            display: block;
            margin-left: auto;
            margin-right: auto;
			
			
        }
		.footer {
			position: fixed;
			left: 0;
			bottom: 0;
			width: 100%;
			
			color: white;
			text-align: center;
			}
			.home{
				width: 30px;
				position: fixed;
				text-align: center;
			}
		iframe{
			border: 8px solid black;
		}
		
		.sub{
			
		}
			p{
				color: black;
			}
            h3{text-align: center;}
            img{
            width: 200px;
            
        }
	</style>
</head>
<body>
	
	<div data-role="page">
		<div data-role="header"> <h1>DAKAR</h1></div>
		
        <div role="main" class="ui-content">  <br/><br/><br/><br/>
        <img id="logo" src="images/AL-modified.png"/>

          <div class="ui-body ui-body-b ui-corner-all">
<h3>Alerte activee</h3>
       <?php
            if(isset($_POST['formsend'])){
                $phone= $_POST['numero'];
                if(!empty($phone)){
                    echo "Vous serez alerté en cas de panne ou de retard concernant le camion poubelle du checkpoint  par sms sur le numero: ".$phone;
                    
                }
            }

        ?>
  </div>


<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
<div class="ui-block-a"><a class="ui-shadow ui-btn ui-corner-all ui-icon-home ui-btn-icon-right ui-btn-inline "data-transition="flow" href="index.html">Accueil</a></div>
       
            
      
        </div>
			
      </div>


		
		</div>
		<div class="footer" data-role="navbar">
			  <nav>
				<ul class="in">
					
					
					<li><a href="index.html"><img class="home" src="images/icone-de-la-maison-verte.png"/> <br/><br/></a> </li>
							<li><a href="tel:771234565"><img class="home" src="images//istockphoto-690623876-1024x1024.jpg"/> <br/><br/></a> </li>
							<li><a href="INFO.html"><img class="home" src="images/icone-d-information-vert.png"/><br/><br/></a> </li>

					
				</ul>   
			</nav>
			</div><!-- /na
	</div>
			         
	
					      
				    
				
		
		

</body>
</html>


