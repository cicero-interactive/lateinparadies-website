<div id="alertCookies" class="alert alertYellow" style="position: sticky; top: 8px;">
    <span class="closebtn" onclick="this.parentElement.style.display='none'; setCookie('closedCookieAlert', true, 1000);">&times;</span>
    Um euch ein besseres Nutzererlebnis zu bieten, verwenden wir Cookies. Durch Nutzung unserer Dienste stimmst du unserer Verwendung von Cookies zu. <a href="{{ site.baseurl }}/Datenschutzerklaerung.php">Weitere Informationen</a>
</div>
<script>
    if (checkCookie("closedCookieAlert") && getCookie("closedCookieAlert") == "true") {
        document.getElementById("alertCookies").style.display = "none";
    }
</script>
<div class="alert alertBlue">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    <!--Cicero Interactive bedankt sich bei all den großzügigen Spendern,
    durch deren selbstlosen Opfergaben wir das Lateinparadies für mindestens ein weiteres halbes Jahr konstant mit Updates und Fehlerverbesserungen versorgen können!
    Auflistung aller Spender:-->
    Auflistung aller Unterstützer des Lateinparadieses: <a href="{{ site.baseurl }}/Hall-of-Fame.php">Hall of Fame</a>.
    Aktuelle News zum Lateinparadies gibt es  <a href="https://cicero-interactive.de.cool/news.php" target="_blank">hier</a>.
</div>
<div class="alert alertRed">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    Durch ein technisches Problem wurden alle "ä"-, "ö"- und "ü"-Zeichen in Kleinbuchstaben konvertiert.
    Trotz detaillierter Fehlersuche kann es sein, dass ein paar übersehen wurden. Sollte dir ein solcher Fehler auffallen, melde ihn bitte auf
    <a href="{{ site.github-issues }}" target="_blank">GitHub</a> oder kontaktiere uns unter unserer <a href="mailto:{{ site.email }}">E-Mail-Adresse</a>.
</div>
<div class="alert alertGreen">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    Das Lateinparadies wurde großflächig geupdatet! Die Änderungen seht ihr <a href="https://cicero-interactive.de.cool/news.php" target="_blank">hier</a>.
    Außerdem sind wir nun open-source! Verfolgt die Entwicklung auf <a href="{{ site.github }}" target="_blank">GitHub</a>.
    Die  <a href="{{ site.baseurl }}/legacy/">alte Version</a> der Website existiert noch, falls jemand mit der neuen Probleme hat.
</div>