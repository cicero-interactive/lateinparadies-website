<div id="alertCookies" class="alert alertYellow" style="position: sticky; top: 8px;">
    <span class="closebtn" onclick="this.parentElement.style.display='none'; setCookie('closedCookieAlert', true, 1000);">&times;</span>
    Um euch ein besseres Nutzererlebnis zu bieten, verwenden wir Cookies. Durch Nutzung unserer Dienste stimmst du unserer Verwendung von Cookies zu. <a href="{{ site.baseurl }}/Datenschutzerklaerung.php">Weitere Informationen</a>
</div>
<script>
    if (checkCookie("closedCookieAlert") && getCookie("closedCookieAlert") == "true") {
        document.getElementById("alertCookies").style.display = "none";
    }
</script>
{%- comment -%} <div class="alert alertBlue">
    <!--<span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>-->
    <!--Cicero Interactive bedankt sich bei all den großzügigen Spendern,
    durch deren selbstlosen Opfergaben wir das Lateinparadies für mindestens ein weiteres halbes Jahr konstant mit Updates und Fehlerverbesserungen versorgen können!
    Auflistung aller Spender:-->
    Auflistung aller Unterstützer des Lateinparadieses: <a href="{{ site.baseurl }}/Hall-of-Fame.php">Hall of Fame</a>.
    Aktuelle News zum Lateinparadies gibt es  <a href="https://cicero-interactive.de.cool/news.php" target="_blank">hier</a>.
</div> {%- endcomment -%}
