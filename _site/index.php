<!DOCTYPE html>
<html>
	<head>
		<title>
			
				Lateinparadies - kostenlose Latein Übersetzungen
			
		</title>
		<link rel="icon" href="/assets/img/favicon.ico">
		<link rel="stylesheet" href="/assets/css/stylesheet.css">
		<meta name="viewport" content="width=device-width, initial-scale=0.70">
		<meta name="Copyright" content="Copyright (c) 2016-<?php echo date("Y"); ?> by Cicero Interactive"/>
		<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="/assets/js/breadcrumb_cleaner.js"></script>-->
		<meta charset="utf-8">
		<!----><script type="text/javascript" src="http://livejs.com/live.js"></script><!---->
	</head>
	
	<body>
		<div class="background ShowOnSmallScreen"></div>
		<div style="width: 100%; max-width: 1100px; margin: auto;">
			<div class="alert alertBlue">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    <!--Cicero Interactive bedankt sich bei all den großzügigen Spendern,
    durch deren selbstlosen Opfergaben wir das Lateinparadies für mindestens ein weiteres halbes Jahr konstant mit Updates und Fehlerverbesserungen versorgen können!
    Auflistung aller Spender:-->
    Auflistung aller Unterstützer des Lateinparadieses: <a style="text-decoration: underline;" href="/Hall-of-Fame.php">Hall of Fame</a>
</div>
<div class="alert alertRed">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    Durch ein technisches Problem wurden alle "ä"-, "ö"- und "ü"-Zeichen in Kleinbuchstaben konvertiert.
    Trotz detaillierter Fehlersuche kann es sein, dass ein paar übersehen wurden. Sollte Ihnen ein solcher Fehler auffallen, kontaktieren Sie uns bitte unter unserer E-Mail Adresse.
</div>
<div class="alert alertGreen">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    Das Lateinparadies wird momentan großflächig geupdatet. Freut Euch auf neue Übersetzungen, Infotexte und generell mehr Konsistenz! Verbleibende Zeit bis zum Release:
    <!-- Display the countdown timer in an element -->
    <span id="countdown" style="color: #FFCC00"></span>
    <span id="countdownSuffix"></span>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Nov 24, 2019 18:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Display the result in the element with id="countdown"
            document.getElementById("countdown").innerHTML = days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

            // If the count down is finished, write some text
            if (distance < 0) {
                document.getElementById("countdown").innerHTML = '0d 0h 0m 0s';
                document.getElementById("countdownSuffix").innerHTML = '| Klicke <a href="">hier</a>, um die Seite zu aktualisieren!';
            }
        }, 1000);
    </script>
</div>
			<header>
	<div class="ShowOnBigScreen headerBg">
		<div class="headerFace headerFaceLeft"></div>
		<div class="headerFace headerFaceRight"></div>
	</div>
	<div class="ShowOnSmallScreen headerMobile">
		<span class="helperVerticalAlignment"></span><img src="/assets/img/header_mobile.png" style="vertical-align: middle;">
	</div>
</header>
			

<nav>
	<hr>
	<ul>
		<li><a href="/">Home</a></li>



	
		
	

	
		
			
				
		<div class="navRight ShowOnBigScreen">
			<li><a href="/Datenschutzerklaerung.php">Datenschutzerklärung</a></li>
			<li>|</li>
			<li><a href="/Impressum.php">Impressum</a></li>
		</div>
	</ul>
	<hr>
</nav>
			<main style="padding-left:15px; padding-right:15px;">
	<div style="max-width: 720px; margin: auto;">
	<h1>Hilfe bei der Lateinhausaufgabe!</h1>
	<p style="margin: auto">
		Nach 4 Jahren mühseliger Lateinarbeiten haben wir, eine Gruppe von Lateinschülern, beschlossen,
		unsere Lösungen der Hausaufgaben und Übungen, die sich über die Jahre angesammelt haben,
		mit den nachfolgenden Generationen zu teilen.
		<br><br>
	</p>
	<p style="max-width: 600px; margin: 0px auto 100px auto">
		<strong>
			Wir bitten jedoch um Verständnis, dass auch wir nicht allwissend sind
			und sich somit in den Lösungsvorschlägen trotzdem Fehler befinden können.
		</strong>
	</p>
	<h1>Los geht's!</h1>
	<span class="big5">
		Wähle den gewünschten Autor...
	</span>
	<div class="sectionLinksTranslation" style="margin-bottom: 50px;">
		<ul>
			<li><a href="Caesar.php">Cäsar</a></li>
			<li><a href="Cicero.php">Cicero</a></li>
			<li><a href="Gregor-der-Grosse.php">Gregor der Große</a></li>
			<li><a href="Jacobus-de-Voragine.php">Jacobus de Voragine</a></li>
			<li><a href="Martial.php">Martial</a></li>
			<li><a href="Nepos.php">Nepos</a></li>
			<li><a href="Ovid.php">Ovid</a></li>
			<li><a href="Sueton.php">Sueton</a></li>
		</ul>
	</div>
	<span class="big5">
		...oder Text:
	</span>	
	<div class="sectionLinksTranslation">
		<ul>
			<li><a href="Carmina-Burana.php">Carmina Burana</a></li>
		</ul>
	</div>
</div>
</main>
			<footer>
	<div>
		Besuche insgesamt:<br>
		<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=zvmxnka&nd=9&style=44" alt="hit counter"></a>
	</div>
	<div class="ShowOnBigScreen">
		<div class="copyright">
			Copyright © 2016 - 2019 <a href="https://cicero-interactive.de.cool/" target="_blank">Cicero Interactive</a>.
		</div>
		<!--<div class="nav_btm">
			<li><a href="/Sitemap.php">Sitemap</a></li>
			<li>-</li>
			<li><a href="https://cicero-interactive.de.cool/">Cicero Interactive</a></li>
			<li>-</li>
			<li><a href="https://cicero-interactive.de.cool/news.php?show=lateinparadies">News</a></li>
			<li>-</li>
			<li><a href="/Kontakt.php">Kontakt</a></li>
		</div>-->
		Fragen oder Verbesserungsvorschläge? Kontaktieren Sie uns unter: <a href="mailto:lateinparadies.de.cool@gmail.com">lateinparadies.de.cool@gmail.com</a>!
	</div>
	<div>
		Besuche dieser Seite:<br>
		<a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=zuuumxnkf&nd=9&style=44" alt="hit counter"></a>
	</div>
	<div class="ShowOnSmallScreen"">
		<span class="copyright">
			Copyright © 2016 - 2019 <a href="https://cicero-interactive.de.cool/" target="_blank">Cicero Interactive</a>.
		</span>
		<div class="nav_btm">
			<hr>
			<li><a href="/Impressum.php">Impressum</a></li>
			<li>-</li>
			<li><a href="/Datenschutzerklaerung.php">Datenschutzerklärung</a></li>
		</div>
	</div>
</footer>
		</div>
	</body>
</html>