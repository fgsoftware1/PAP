<?php 
	include("./header/header.php");

	$loggedin = false;

	function Login(){
		if($loggedin = true) {
			header("Location: ../backoffice/booking/script_ins_booking.php");
		} else {
			print("<script language='javascript'>alert('sessão não iniciada');</script>");
		}
	}
?>	
<div class="main">
	<div class="container">
		<h2>Reservar</h2>
		<form action="../backoffice/booking/script_ins_booking.php"  method="POST" enctype="multipart/form-data">
			<div class="mb-3">
				<label for="produto" class="form-label">Produto</label>
				<select class="form-control" id="product" name="product">
					<?php
						$query = executarSQL("SELECT * FROM produtos");

						while ($row = mysqli_fetch_array($query)) {
							echo "<option value='".$row["ID_Produto"]."'".(isset($product) ? ($product == $row["ID_Produto"] ? 'selected' : '') : '').">".$row["Nome_Produto"]."</option>";
						}
					?>
				</select>
			</div>
			<div class="mb-3">
				<label for="places" class="form-label">Lugares</label>
				<input type="number" class="form-control" id="places" name="places" min="1" max="10" value="1" /><span class="material-icons">
			<div class="mb-3">
				<label for="time" class="form-label">Hora</label>
				<input type="time" class="form-control" id="time" name="time" value="<?php echo (isset($hora) ? $hora : ''); ?>" />
			</div>
			<div class="mb-3">
				<label for="data" class="form-label">Data</label>
				<input type="date" class="form-control" id="date" name="date" value="<?php echo (isset($data) ? $data : ''); ?>" />
			</div>
			<button onClick="Login()" type="submit" name="submit" class="btn btn-primary btn-block mt-4">
				Reservar
			</button>
		</form>
	</div>
</div>
<?php 
	include("./footer/footer.php"); 
?>