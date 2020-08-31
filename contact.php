<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Zeren Liu Art|Contact</title>
		<link rel="stylesheet" type="text/css" href="style.css">
		<link rel="shortcut icon" type="image/x-icon" href="linkimage.jpg"/>
		<link href='https://fonts.googleapis.com/css?family=Advent Pro' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	</head>
	<body>

		<div class="adventpro" id = 'header_1_art'>
			<div id = 'header_2_art'>
				<a href="ZerenArt.html"  class = 'class1'>ZEREN LIU</a>
			</div>
		</div>

		<div> 
			<div id = 'subheaderleft'>
				<nav>
					<a href ='ZerenArt.html' class = 'class2'>Home</a>
				
					<a  href='Artwork.html' class = 'class2'>Art work</a> 
				
					<a  href='bio.html' class = 'class2'>Bio</a>

				</nav>
			</div>
			<div  id = 'subheaderright'>
				<nav>	
					<a href='store.html' class = 'class2'>Store</a>
					
					<a href='contact.html' class = 'class2'>Contact</a>
				</nav>
			</div>
					
		</div>
		
		<div style="border: 100px solid linen " >
		
			<FORM action="" method="post">
				<TABLE class='centertable'>
					<TR>
						<TD >Name:</TD>
						<TD ><INPUT TYPE="text" NAME="name" SIZE="40" ></TD>
					</TR>
					<TR>
						<TD>Email:</TD>
						<TD><INPUT TYPE="text" NAME="email" SIZE="40" ></TD>
					</TR>
					<TR>
						<TD>Address:</TD>
						<TD><TEXTAREA NAME="Address" COLS="43" ROWS="4">
						</TEXTAREA></TD>
					</TR>
					<TR>
						<TD>Postcode:</TD>
						<TD><INPUT TYPE="text" NAME="postcode" SIZE="20" ></TD>
					</TR>
					
					<TR>
						<TD></TD>
						<TD><input type="submit" name="submit" value="Submit"></TD>
					</TR>
				</TABLE>
			</FORM>
		</div>
		<div id = 'sociallink'>
		<a href="https://www.facebook.com/liu.oscar.3192" class="fa fa-facebook" ></a>
		<a href="https://www.instagram.com/liuzerenoscar/?hl=en" class="fa fa-instagram" ></a>
		</div>
		
		
		<?php 
			if(isset($_POST['submit'])){
				$to = "zliu27@student.gsu.edu"; // this is your Email address
				$from = $_POST['email']; // this is the sender's Email address
				$name = $_POST['name'];
				$Address= $_POST['Address'];
				$subject = "Form submission";
				$subject2 = "Copy of your form submission";
				$message = $name .  " wrote the following:" . "\n\n" . $_POST['Address'];
				

				$headers = "From:" . $from;
				$headers2 = "From:" . $to;
				mail($to,$subject,$message,$headers);
				mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
				echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
				// You can also use header('Location: thank_you.php'); to redirect to another page.
				}
			?>


	</body>
</html>