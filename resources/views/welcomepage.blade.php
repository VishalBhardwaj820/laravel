<!DOCTYPE html>
<html>
<head>
	<title></title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href=" {{asset('css/welcomepage.css')}}">

</head>
<body>

	<div id="hero">
    <div id="system-name"> Welcome To Online Quiz System</div>
		<div class="form-box">
<!-- ============kogin and signup========= -->
			<div class="button-box">

				<div id="btn"></div>
				<button type="button" class="toggle-btn"
				onclick="login()">Login</button>
				<button type="button" class="toggle-btn"
				onclick="register()">Register</button>
				</div>
<!-- ==================================================== -->
<!-- =================socail icon========= -->
				<div class="social-icon">
			   		<span><i class="fab fa-google"></i></span>
			   		<span><i class="fab fa-facebook"></i></span>
				</div>
<!-- ============================================= -->
<!-- ====================== Loginform box ================-->

				<form id="login" class="input-group" action="/welcomepage/login">
					<input type="text" class="input-feild"
					placeholder="User Id"
					name="username">

					<input type="text" class="input-feild"
					placeholder="User Password"
					name="password">

					<input type="radio" class="check-box" name="login" value="teacher">
                    <span id="Rember"> As a Teacher</span>

					<input type="radio" style="margin-left:120px" class="check-box" name="login" value="student">
					<span id="Rember" style="margin-left:px">As a Student</span>

					<button type="submit" class="submit-btn">Login</button>

				</form>



<!-- =====================sign up form =================-->

				<form id="register" class="input-group" action="/welcomepage/register">
					<input type="text" class="input-feild"
					placeholder="User Id"
					name="username">

					<input type="text" class="input-feild"
					placeholder="User Password"
					name="password">

					<input type="email" class="input-feild"
					placeholder="User Password"
					name="">

					<input type="radio" class="check-box" name="register" value="teacher">
                    <span id="Rember"> As a Teacher</span>

					<input type="radio" style="margin-left:120px" class="check-box" name="register" value="student">
					<span id="Rember" style="margin-left:px">As a Student</span>


					<button type="submit" class="submit-btn">Register</button>

				</form>


<!-- =================================================== -->
            </div>
            <div class="" id="system-footer"></div>


		</div>



		<script type="text/javascript">
			var x=document.getElementById("login");
			var y=document.getElementById("register");
			var z=document.getElementById("btn");

			function register()
			{
				x.style.left= "-400px";
				y.style.left= "50px";
				z.style.left= "110px";
			}

			function login()
			{
				x.style.left= "50px";
				y.style.left= "450px";
				z.style.left= "0px";
			}
		</script>
</body>
</html>
