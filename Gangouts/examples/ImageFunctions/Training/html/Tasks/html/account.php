	<!DOCTYPE html>
    <html>
        <head>
            <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<link rel="stylesheet" type="text/css" href="../../../css/box.css">
            <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
			<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
			<script type="text/javascript" src="../js/check.js"></script>
			<script type="text/javascript" src="../js/jquery1.js"></script>
            <script type="text/javascript" src="../js/validateSignup.js"></script>
            <script type="text/javascript" src="../js/toggle.js"></script>  
			<script type="text/javascript" src="../js/validateSignin.js"></script>  		
			<script type="text/javascript">

    $(function() {
      $('#slides').slidesjs({
        width: 940,
        height: 528,
       
	     play: {
          active: true,
          auto: true,
          interval: 2000,
          swap: true
        }
      });
    });
</script>
	   </head>
            <body>
                 <h1>
                    <header> 
						<image align="left" src="../../../Images/lines.png" width=3% height=2%/>
						<text style="font:monospace; font-size:150%"> &nbsp Welcome ></text>
						<a href="template.html" style="font-size:130%; text-decoration:none"> Home</a> >
						<a href="template.html" style="font-size:130%; text-decoration:none"> Departments</a> >
						<a href="template.html" style="font-size:130%; text-decoration:none"> Career </a> >
						<a href="template.html" style="font-size:130%; text-decoration:none"> Contact Us</a>
					</header>
                 </h1>
<!------------------------LEFT BOX-------------------------------->                
                <div class="left">
					<div id="slides"> 
							
								<img src="http://farm8.staticflickr.com/7308/15783866983_27160395b9_m.jpg" alt="" width=110% height=100% />
							 
							
								<img src="http://farm3.staticflickr.com/2880/10346743894_0cfda8ff7a_m.jpg" alt="" width=110% height=100%/>
							 
							
								<img src="http://farm4.staticflickr.com/3857/14395875498_c43e5c4415_m.jpg" alt="" width=110% height=100%/>
							
						
								<img src="http://farm8.staticflickr.com/7475/15723733583_b4a7b52459_m.jpg" alt="" width=110% height=100%/>
						
					</div>
					<div id="slides" align = "center" >
								<img id="1" src="../../../Images/hd1.jpg" border="0" alt="hd1" width="100%" height="100%"/>	
								<img id="2" src="../../../Images/hd2.jpg" border="0" alt="hd2" width="100%" height="100%"/>	
								<img id="3" src="../../../Images/hd3.jpg" border="0" alt="hd3" width="100%" height="100%"/>	
								<img id="4" src="../../../Images/hd4.jpg" border="0" alt="hd4" width="100%" height="100%"/>	
					</div>
			   </div>
			   
				<!-------------------Center BOX-------------------------------->	
			<div id="center">
                  <?php  
                   if (@$_POST["submit"] <> "") {
                        $email = $_POST['email'];
                        $name = $_POST['name'];
                        $mobile = $_POST['mobile'];
                        $street = $_POST['street'];
                        $city = $_POST['city'];   
                        $country = $_POST['country'];
                        $website = $_POST['website'];
                        $nationality = $_POST['nationality'];
                        $gender =      $_POST['gender'];    
                        echo "<h1> Welcome </h1>"." ".$name . "!!!<br/>";
                        echo "Email: ".$email ;
                   		echo $gender	;     
                   }
                    ?>
                    </div>
			</body>
	</html>			 
