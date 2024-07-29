{%- assign current_url = site.baseurl -%}
{%- assign url_parts = page.url | split: "/" -%}
<nav>
    <hr>
    <ul>
        {%- include breadcrumbs.php -%}
        <div class="navRight ShowOnBigScreen">
            <li><a href="{{ site.baseurl }}/Datenschutzerklaerung.php">Datenschutzerklärung</a></li>
            <li>|</li>
            <li><a href="{{ site.baseurl }}/Impressum.php">Impressum</a></li>
        </div>
    </ul>
    <hr>
</nav>
