<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Contact - Bistro Otto</title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "../CommonStyling/BistroOttoCommon.css"/>
		<link rel="stylesheet" type="text/css" href="Contact.css">
   		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    	<script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>
	</head>
	<body>
	<!--------Navigation Bar------->
    <?php include("../HeaderFooter/header.php"); ?>

     <div class = "background">
     	<div class = "pageTitle">
            <header class = "pageHeader"> Contact </header>
        </div>
		<table id = "core">
			<tr><td id = "left">
		<h1>
			<img src="https://www.flaticon.com/svg/static/icons/svg/64/64113.svg" width="24" height="24" alt="Drop pin" title="Local">Location
		</h1>
		<p>143 Mont-Royal Est,</p>
		<p>Montreal, QC. H2T 1N9</p>
		<p>Canada</p>
		<p>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/Montreal_Metro.svg/768px-Montreal_Metro.svg.png" width="24" height="24" alt="Mont Royal Metro" title="Metro" id="metroPic"> Mont-Royal
		</p>
		<p>&nbsp;</p>
		<h1>
			<img src="https://www.flaticon.com/svg/static/icons/svg/44/44059.svg" width="24" height="24" alt="Clock" title="Time">
		Hours</h1>
		<table>
			<tr>
				<th>Mon</th>
				<td>Closed</td>
			</tr>
			<tr>
				<th>Tue - Sun</th>
				<td>12:00 PM - 2:00 PM<br>5:00 PM - 8:00 PM</td>
			</tr>
		</table>

		<p>&nbsp;</p>
		<h1>
			<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8a/Bimetrical_icon_clipboard_black.svg/1200px-Bimetrical_icon_clipboard_black.svg.png" width="24" height="24" alt="clipboard" title="Form"> Contact
		</h1>
		<p class="Contact">
			<p>
			<a href="tel:4383834700">(438)383-4700</a>
			</p>
			<p>
			<a href="mailto:ottobistro143@gmail.com">ottobistro143@gmail.com</a>
			</p>
			</p>
		</td>

		<td id="right">
			<p><h2 id="surveyBio">For messages or comments, please fill out this form</h2></p>
			<p>
			<label>Your name*<br><input name = "mame" type = "text" placeholder="First & Last Name" class = "inputBox" required>
			</label>
			</p>
			<p>
			<label>Phone number<br><input name = "phone" type = "text" placeholder="(123)456-7890 or 1928374650" class = "inputBox">
			</label>

			</p>
			<p>
			<label>Email*<br><input class = "inputBox" type = "email" name = "email" placeholder="any@email.com" required>
			</label>
			</p>
			<p>
			<label>Branch*<br>
				<select name="location" class = "inputBox"  onchange="otherCheck()">
					<option value="option" selected disabled>Place:</option>
					<option value = "montreal">Montreal</option>
					<option value = "vancouver">Vancouver</option>
					<option value = "toronto">Toronto</option>
					<option value = "other">Other</option>
				</select>
				<span id = "boxOpt"></span>
			</label>
			<script>

				function otherCheck()
				{
				var others = document.getElementsByClassName("inputBox")[3].value;
				if(others == "other")
				{
					document.getElementsByClassName("inputBox")[3].options[4].textContent = "Info of branch:";
					var node = document.createElement("input");
					node.type = "text";
					node.className = "inputBox";
					document.getElementById("boxOpt").appendChild(node);
					document.getElementById("boxOpt").removeAttribute("id");
				}

				}
			</script>
			</p>
			<p>
			<label for="textarea">Your Message<br></label>
			<textarea placeholder="Maximum 200 characters." maxlength="200" class = "inputBox"></textarea>
			</p>

			<button type="submit" id = "button" onclick="validate()">Send message</button>
		</td>
		</tr>
		</table>
		<script>
		var refButton = document.getElementById("button");

		function validate() {
			var name = document.getElementsByClassName("inputBox")[0].value;
		    var mail = document.getElementsByClassName("inputBox")[2].value;
		    var phone = document.getElementsByClassName("inputBox")[1].value;
		    var position0 = name.search(/([A-Za-z]{2,}\s[A-Za-z]{2,})|([A-Za-z]{2,})/);
		    var position1 = mail.search(/\w+@[a-z]+\.[a-z]+/);
		    var position2 = phone.search(/(\d{10})|(\(\d{1,3}\)\d{3}-\d{4})/);
		    if (position0 != 0) {
		        alert("Incorrect name format!");
		    }
		    else
		    {
		        alert("Correct name format!");
		    }

		    if (position2 != 0) {
		        alert("Incorrect phone format!");
		    }
		    else
		    {
		        alert("Correct phone format!");
		    }

		    if (position1 != 0) {
		        alert("Incorrect email format!");
		    } 
		    else 
		    {
		        alert("Correct email format!");
		    }

		};
		</script>
	</div>
		</body>

		<!----Footer of the page---->
<?php include("../HeaderFooter/footer.php"); ?>

	</html>
	