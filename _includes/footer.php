<footer>
    <div>{%- comment -%}
        Besuche insgesamt:<br>
        <a href="https://www.webfreecounter.com/" target="_blank"><img src="https://www.webfreecounter.com/hit.php?id=zvmxnka&nd=9&style=44" alt="hit counter"></a>
    {%- endcomment -%}</div>
    <div class="ShowOnBigScreen">
        <div class="copyright">
            Copyright © 2016 - <?php echo date("Y"); ?> <!--<a href="https://cicero-interactive.de.cool/" target="_blank">-->Cicero Interactive<!--</a>-->.
        </div>
        <!--<div class="nav_btm">
            <li><a href="{{ site.baseurl }}/Sitemap.php">Sitemap</a></li>
            <li>-</li>
            <li><a href="https://cicero-interactive.de.cool/">Cicero Interactive</a></li>
            <li>-</li>
            <li><a href="https://cicero-interactive.de.cool/news.php?show=lateinparadies">News</a></li>
            <li>-</li>
            <li><a href="{{ site.baseurl }}/Kontakt.php">Kontakt</a></li>
        </div>-->
        Fragen oder Verbesserungsvorschläge? Kontaktiere uns unter: <a href="mailto:{{ site.email }}">{{ site.email }}</a>!
    </div>
    <div>{%- comment -%}
        Besuche dieser Seite:<br>
        <a href="https://www.webfreecounter.com/" target="_blank"><img src="{{ page.counter }}" alt="hit counter"></a>
    {%- endcomment -%}</div>
    <div class="ShowOnSmallScreen">
        <span class="copyright">
            Copyright © 2016 - <?php echo date("Y"); ?> <a href="https://cicero-interactive.de.cool/" target="_blank">Cicero Interactive</a>.
        </span>
        <div class="nav_btm">
            <hr>
            <li><a href="{{ site.baseurl }}/Impressum.php">Impressum</a></li>
            <li>-</li>
            <li><a href="{{ site.baseurl }}/Datenschutzerklaerung.php">Datenschutzerklärung</a></li>
        </div>
    </div>
</footer>
