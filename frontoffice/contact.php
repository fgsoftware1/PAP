<?php
	include("./header/header.php");
?>
<div class="container">
   	<div class="contact">
		<div class="col span_2_of_3">
			<div class="contact-form">
				<h3>Contacte-nos</h3>
				<form>
					<div>
						<span><label>Nome</label></span>
						<span><input name="name" type="text" class="form-control"></span>
					</div>
					<div>
						<span><label>E-Mail</label></span>
						<span><input name="email" type="text" class="form-control"></span>
					</div>
					<div>
						<span><label>Telemóvel</label></span>
						<span><input name="phone" type="text" class="form-control"></span>
					</div>
					<div>
						<span><label>Assunto</label></span>
						<span><textarea name="cc"></textarea></span>
					</div>
					<div>
						<button class="btn1 btn-8 btn-8a">Submeter</button>
					</div>
				</form>
			</div>
  		</div>
		<div class="col span_1_of_3">
			<div class="contact_info">
		 		<h3>Veja até nós</h3>
				<div class="map">
					<iframe 
						src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d376.9640798472652!2d-7.929954!3d40.900118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd2350ee5792ddad%3A0xa68102762268e8af!2sAv.%20Jo%C3%A3o%20Rodrigues%20Cabrilho%203%2C%203600-180%20Castro%20Daire!5e0!3m2!1spt-PT!2spt!4v1648651652779!5m2!1spt-PT!2spt"
						style="width:375px; height:375px; border:3px solid black;" allowfullscreen="" loading="lazy">
					</iframe>
				</div>
	  		</div>
	  		<div class="company_address">
				<h3>Endereço</h3>
				<p>Av. João Rodrigues Cabrilho 3</p>
				<p>3600-180 Castro Daire</p>
				<p>telemóvel: <span><a href="tel:912442666">912442666</a></span></p>
				<p>Email: <span><a href="mailto:info@spicyfoods.pt">info@spicyfoods.pt</a></span></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>
<?php
	include("./footer/footer.php");
?>
</body>
</html>



