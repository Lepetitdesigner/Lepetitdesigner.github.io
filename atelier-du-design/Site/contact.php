<?php 
include 'inc/header.php'
?>
		<div class="information">
			<div class="gaucheC">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2596.5155987184817!2d2.778065015693603!3d49.39915447934415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e7d3f617864283%3A0xe067228ec8ec12e9!2s335+Rue+des+Vignes%2C+60880+Jaux!5e0!3m2!1sfr!2sfr!4v1547651453727" width="447" height="403" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div class="droiteC">
				<form action="/ma-page-de-traitement" method="post">
       			<label for="name">Nom ( obligatoire )</label>
        		<input type="text" id="name" name="user_name">
        		<label for="mail">E-mail ( obligatoire )</label>
        		<input type="email" id="mail" name="user_mail"> </form>
			</div>
			<div class="droiteC">
				<label for="name">Sujet</label>
        		<input type="text" id="sujet" name="user_sujet">
        		<label for="msg">Votre message</label>
        		<textarea id="msg" name="user_message"></textarea>
        		<div class="envoyer">
					<input type="submit">
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
<?php 
include 'inc/footer.php'
?>