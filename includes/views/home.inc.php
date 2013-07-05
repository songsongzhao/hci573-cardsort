<!-- Header is already included --> 
<!--<header>
    DROP DOWN DEMO TEST
</header>-->
<nav>
	<ul>
		<li id="login">
			<a id="login-trigger" href="#">
				Login <span>&#x25bc;</span>
			</a>
			<div id="login-content">
				<form name="loginForm" action="?url=login/login"  method="post">
					<fieldset id="inputs">
						<input type="text" id="username"  name="log_name" placeholder="User Name" required>   
                                                <input type="password" id="password"  name="log_user_password" placeholder="User Password" required>
					</fieldset>
					<fieldset id="actions">
						<input type="submit" id="submit" value="Login">
					</fieldset>
				</form>
			</div>                     
		</li>
		
	</ul>
</nav>
<nav>
	<ul>
		<li id="demo">
			<a id="demo-trigger" href="#">
				Demo <span>&#x25bc;</span>
			</a>
			<div id="demo-content">
				<form name="demo" action="#"  method="post">
					<fieldset id="inputs">
						<input type="text" id="username"  name="log_name" placeholder="Demo Name" required>   
                                                <input type="password" id="password"  name="log_user_password" placeholder="Demo Password" required>
					</fieldset>
					<fieldset id="actions">
						<input type="submit" id="submit" value="Start the Demo">
					</fieldset>
				</form>
			</div>                     
		</li>
		
	</ul>
</nav>
<nav>

	<ul>
		<li id="register">
			<a id="register-trigger" href="#">
				Register <span>&#x25bc;</span>
			</a>
			<div id="register-content">
				<form name="registerForm" action="#"  method="post">
					<fieldset id="inputs">
						<!-- User Name -->
                                                <input type="text" id="register_user_name" name="register_user_name" autofocus placeholder="Type a Username" required />
                                                <!-- Password -->
                                                <input type="password" id="register_user_password" name="register_user_password" placeholder="Type a Password" required />
                                                <!-- First Name -->
                                                <input type="text" id="register_user_first_name" name="register_user_first_name" placeholder="First Name" required />
                                                <!-- Last Name -->
                                                <input type="text" id="register_user_last_name" name="register_user_last_name" placeholder="Last Name" required />
                                                <!-- Email -->
                                                <input type="email" id="register_user_email" name="register_user_email" placeholder="Email" required />
					</fieldset>
					<fieldset id="actions">
                                                <!-- Submit button -->
						<input type="submit" id="submit" value="Register">
					</fieldset>
				</form>
			</div>                     
		</li>
		
	</ul>
</nav>
</div>








<!--<header>
    DEMO
</header>
<section id="demo">
    <form id="demoform" name="demo" action="#"  method="post">
        <p>
            Name: DEMO<br />
            Password: DEMO
        </p>
        <label for="log_name">Demo Name</label><input type="text" name="log_name"></input>
        <label for="log_user_password">Demo Password</label><input type="password" name="log_user_password"></input>  
        <button id="btnDemo">Start the Demo</button>
    </form>    
</section>
-->


<!--<header>
    USER REGISTER
</header>
<section id="register">
    <div id="register_error"> <!-- This is used for displaying errors returned from AJAX -->
        <!--<div></div>
    </div>
    <form id="registerForm"> <!-- We don't need a name, action or method here because JavaScript will take care of it -->
        <!-- User Name -->
        <!--<label for="register_user_name">User Name</label>
        <input type="text" id="register_user_name" name="register_user_name" autofocus />
        <!-- Password -->
        <!--<label for="register_user_password">User Password</label>
        <input type="password" id="register_user_password" name="register_user_password" />
        <!-- First Name -->
        <!--<label for="register_user_first_name">First Name</label>
        <input type="text" id="register_user_first_name" name="register_user_first_name" />
        <!-- Last Name -->
        <!--<label for="register_user_last_name">Last Name</label>
        <input type="text" id="register_user_last_name" name="register_user_last_name" />
        <!-- Email -->
        <!--<label for="register_user_email">Email</label>
        <input type="email" id="register_user_email" name="register_user_email" />
        <!-- Submit button -->
        <!--<input id="submit_register" type="submit" value="Register" />
    </form>
</section>
-->
<!--
<header>
    LOGIN
</header>
<section id="login">
    <form id="loginform" name="login" action="#"  method="post">
        <label for="log_name">User Name</label><input type="text" name="log_name"></input>
        <label for="log_user_password">User Password</label><input type="password" name="log_user_password"></input>  
        <button id="btnLogin">Login</button>
    </form>
</section>
-->

<div id="home_content">
    <p>Home content goes here. Probably a couple paragraphs about
        program and a link to view demo.</p>
</div>
<!-- Footer is already included -->