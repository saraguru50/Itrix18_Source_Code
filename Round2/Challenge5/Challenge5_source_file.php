<html>

	<script>
		
			// Generating word for Ramya: 
			
			function generate(s) {
				var len = s.length;
				var res = "";
				res = res + s.charAt(len - 1);
				for(var i=0;i<5;i++) {
					res = res + String.fromCharCode(Math.floor(Math.random() * Math.floor(26)) + 97);
				}
				return res;
			}



			function func() {
				var t1 = document.getElementById("t1").value;
				var value = document.getElementById("word").value;
				var cnt = parseInt(document.getElementById("t2").value);
				var prev = document.getElementById("t3").value;
				var check = document.getElementById("t4").value;

				// Input Validation: 
				if(value.length == 0) {
					alert("The word cannot be empty!!!!!");
					return;
				}
				var x = value.indexOf(" ");
				if(x != -1) {
					alert("Space is not allowed!!!!!");
					return;
				}
				var flag = 1;
				for(var i=0;i<value.length;i++) {
					x = value.charCodeAt(i);
					if((x >= 65 && x <= 90) || (x >= 97 && x <= 122)) continue;
					else flag = 0;
				}
				if(flag == 0) {
					alert("Only lower and upper case letters are allowed!!!!!");
					return;
				}
				value = value.toLowerCase();
				if(prev.length > 0) {
					if(value.charAt(0) != prev.charAt(prev.length - 1)) {
						alert("Your starting character does not meet game's requirements!!!!!");
						return;
					}
				}



				// Generating a word: 
				var s = generate(value);


				cnt = cnt + 1;
				var t = t1 +  "<tr> <td> " + value + "</td> <td>" + s + "</td> </tr>";


				// Chanting the spell to get the flag:
				check = check + s.charAt(0); 
				flag = 1;
				for(i=0;i<26;i+=4) {
					if(check.indexOf(String.fromCharCode(i + 97)) == -1) {
						flag = 0;
					}
				}



				if(flag == 1) {

					// You have successfully made her chant the spell and so you will get the flag :):)
					// Ajax call to get the flag
					
					t = ""; cnt = 0; s = "";
					var xhttp = new XMLHttpRequest();
  					xhttp.onreadystatechange = function() {
    					if (this.readyState == 4 && this.status == 200) {
      						document.getElementById("ans").innerHTML = this.responseText;
      						check = "";
    					}
  					};
  					xhttp.open("GET", "answer_5a.php?value="+check, true);
  					xhttp.send();
				}
				var t1 = t;
				if(cnt >= 10) {

					// Setting the initial values for the next round:  
					t = ""; cnt = 0; s = ""; check = "";
					t1 = "<tr> <th> Player </th> <th> Mirror </th></tr>";
					alert("10 rounds are over.....Mirror got bored and went.....Bye bye...Try again.....");
				}


				// Updating the values: 
				document.getElementById("status").innerHTML = t;
				document.getElementById("t1").value = t1;
				document.getElementById("t2").value = cnt;
				document.getElementById("t3").value = s;
				document.getElementById("t4").value = check;
			}

	</script>
	

	<body background="/source_code/blue.jpg">

		<font color="red"> <h2> <marquee> Welcome to the word game!!!!! </marquee> </h2> </font><br><br><br>

			Enter a word: <input type="text" id="word" value="" placeholder="Enter a word"> <br><br>
			<button onclick=func();> Submit </button> 
				<input type="hidden" value="<tr> <th> Player's words </th> <th> Ramya's Words </th></tr>" id="t1">
				<input type="number" value=0 id="t2" hidden>
				<input type="hidden" value="" id="t3">
				<input type="hidden" value="" id="t4">	
			
		<center>
		<table id="status" border=1></table>
		
		<br><br><br><br>
		<font color="darkblue" size="6" id="ans"></font>
		</center> 
		<br><br>
		<a href="/source_code/challenges/Web/challenge5.php"> Go to Challenge 5 page </a> <br><br><br><br>
		<a href="/source_code/challenges/"> Go to Challenges page </a>


	</body>

</html>
