<?php 
	print '
	<h1>Contact Form</h1>
	<div id="contact">
		<img src="img/contact.png" alt="EURO 2024" title="EURO 2024">	
		    <label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Vaše ime" required>
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Vaše prezime" required>
				
			<label for="email">E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Vaš e-mail" required>

			<label for="country">Država</label>
			<select id="country" name="country">
				<option value="">Odaberite</option>
				<option value="BE">Belgija</option>
				<option value="HR" selected>Hrvatska</option>
				<option value="LU">Luksemgurg</option>
				<option value="HU">Mađarska</option>
			</select>

			<label for="subject">Opis</label>
			<textarea id="subject" name="subject" placeholder="Napišite nešto" style="height:200px"></textarea>

			<input type="submit" value="Pošaljite.">
		</form>
	</div>';
?>