<a href="index.php" id="linkToMenu"><header><span id="title">
	<img src="images/logo-serv.gif" id="logo" />
	ROLISTE UNIVERSE
</span></header></a>
<nav id="totalNav">
	<!-- 
	class:nav 		- Sert a gerrer le style de chaques cellules
	class:underNav	- Sert à donner le style des sous cellules
	id:totalNav		- Id de gestion pour JS
	id:bigClass0 	- Id de gestion pour JS
	id:bigClass1 	- Id de gestion pour JS
	id:bigClass2 	- Id de gestion pour JS
	id:underIndex 	- Id de gestion pour JS
	id:underJdr 	- Id de gestion pour JS
	id:underContact	- Id de gestion pour JS
	-->
	<span class="nav" id="navIndex">
		<a id="bigClass0">Le serveur</a>
		<div id="underIndex" class="underNav" style="height: 0px;"> <!-- Le style est fait pour être compatible avec JS -->
			Présentation<br>
			Réglement
		</div>
	</span>
	<span class="nav" id="navJdr">
		<a id="bigClass1" href="presentation.php">JDR et RP</a>
		<div id="underJdr" class="underNav" style="height: 0px;"> <!-- Le style est fait pour être compatible avec JS -->
			<a href="presentation.php#generale">En général</a><br>
			<a href="presentation.php#serveur">Le serveur</a>
		</div>
	</span>
	<span class="nav" id="navContact">
		<a id="bigClass2">Contact</a>
		<div id="underContact" class="underNav" style="height: 0px;"> <!-- Le style est fait pour être compatible avec JS -->
			Les Admins<br>
			Message
		</div>
	</span>
</nav>
<script src="nav.js"></script>