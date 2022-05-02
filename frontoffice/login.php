<?php
	include("./header/header.php");
?>
<div class="main">
   	<div class="contact">
		<div class="col span_2_of_3">
			<div class="content-last">
				<div class="col_1_of_2 span_1_of_2">
					<h2>Iniciar sessão</h2>

					<form name="f1" action="scripts/script_signin.php" onsubmit="validate()" method="POST">
						<div>
							<span><label>E-Mail</label></span>
							<span><input id="email" name="email" type="email" class="form-control"></span>
						</div>
						<div>
							<span><label>Password</label></span>
							<span><input id="pass" name="pass" type="password" class="form-control"></span>
						</div>
						<p>
						<div>
							<input type="submit" class="btn1 btn-8 btn-8a" name="login" value="submeter">
						</div>
					</form>
				</div>
			<div class="col_1_of_2 span_1_of_2">
				<h2> Registar</h2>

				<form action="scripts/script_signup.php" method="POST">
					<div>
						<span><label>Nome</label></span>
						<span><input name="nome" type="text" class="form-control"></span>
					</div>
					<div>
						<span><label>Data de nascimento</label></span>
						<span><input name="datanasc" type="date" class="form-control"></span>
					</div>
					<div>
						<span><label>E-Mail</label></span>
						<span><input name="email" type="email" class="form-control"></span>
					</div>
					<div>
						<span><label>Password</label></span>
						<span><input name="pass" type="password" class="form-control"></span>
					</div>
					<p>
					<div>
						<input type="submit" class="btn1 btn-8 btn-8a" name="login" value="submeter">
					</div>
				</form>
			</div>
			<div class="clear"></div>
		</div>
  	</div>
	<div class="clear"></div>
</div>
<?php
	include("./footer/footer.php");
?>
<script src="scripts/signinValidation.js"></script>
</body>
</html>