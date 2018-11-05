<?php include "registerdb.php" ; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Registration Form</title>
  </head>
  <style >
  	.butt:hover{
	background-color: rgb(188, 165, 135,0.5) !important;
    }
    ::placeholder{
    	color: rgb(20, 34, 53);
    }
  </style>
  <body>
    <div style="background-image:url(bg3.jpg);background-size: cover; padding: 15%;">
	<div style="margin: auto;padding: 15px;text-align: left;width: 55%;box-shadow: 0px 0px 19px #444343;background-color: rgb(177, 197, 224,0.2)">

		<form action="register.php" method="POST" >
			<h2 style="padding: 15px;color: #223">The Ten Minute Million (TTMM)</h2>
			<h4 style="color: #260063;margin-bottom:0px">Full Name<br><h6 style="margin-top:3px;color:#260063 ">Details of one of the cofounders</h6></h4>
			<input id="Name" type="text" name="Name" placeholder="Full Name" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[0]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">No. of Cofounders </h4>
			<input type="text" name="Cofounders" placeholder="No. of Cofounders" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[1]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Name of Startup</h4>
			<input type="text" name="Startup" placeholder="Name of Startup" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[2]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Email Id</h4>
			<input type="text" name="Email" placeholder="Email Id" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[3]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Mobile Number<br></h4>
			<input type="text" name="Contact" placeholder="Contact No." style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[4]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Description Of Startup<br><h6 style="margin-top:3px;color:#260063 ">Please mention idea, business model in brief and customer traction so far</h6></h4>
			<input type="text" name="Desc" placeholder="Few words about your Startup" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[5]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Stage of Startup <br><h6 style="margin-top:3px;color:#260063 ">Please mention if your startup is incorporated, has received funding or if you've won any competition</h6></h4>
			<input type="text" name="Stage" placeholder="Stage of Startup" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[6]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Sector of Startup<br></h4>
			<input type="text" name="Sector" placeholder="Sector of Startup" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><span style="color: red; padding: 10px;"><?php echo $info[7]['error'] ; ?></span>
			
			<h4 style="color: #260063;margin-bottom:0px">Link of Video<br><h6 style="margin-top:3px;color:#260063 ">A short video describing your startup idea; Upload the video on google drive and paste the link here. Ensure viewing rights 'on' for 'anyone with the link'</h6></h4>
			<input type="text" name="Link" placeholder="Link of Video" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;">
			
			<h4 style="color: #260063;margin-bottom:0px">Website<br></h4>
			<input type="text" name="Website" placeholder="Website" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;">
			
			<h4 style="color: #260063;margin-bottom:0px">Pitch Deck<br><h6 style="margin-top:3px;color:#260063 ">Upload the pitch deck on google drive and paste the link here. Ensure viewing rights 'on' for 'anyone with the link'</h6></h4>
			<input type="text" name="Pitch" placeholder="Pitch Deck" style="width: 70%;border-top : none;border-left: none;border-right: none; outline: none;background: none;border-bottom: 2px solid #246;color: #414747;padding: 10px;margin-bottom: 35px;"><br>

			<button type="submit" name="Register" class="btn btn-outline-secondary butt"  style="border-radius: 32px;text-align: center;font-size:20px;border: 2px solid #223;background-color: transparent;color:#260063 ">Register Now</button>
		</form>
	</div>
</div>
<!-- <script >
	function myform(){

		var i= document.getElementById('Name').value;
		if(i.length==0){
			document.getElementById('nameerr').innerHTML="Required";
		}

	}
</script> -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>