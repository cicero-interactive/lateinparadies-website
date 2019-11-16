<div class="translation-sources">
    Quelle des lateinischen Textes:

    {% if page.source_latin.first %}
        {% for link in page.source_latin %}
            <a target="_blank" href="{{ link }}">
                {% if link contains "thelatinlibrary.com" %}
                    TheLatinLibrary
                {% else %}
                    {% assign str = link | remove: "https://" | remove: "http://" | remove: "www." | split: '/' %}
                    {{ str[0] | capitalize }}
                {% endif %}
            </a>
            {% unless link == page.source_latin.last %}
                <span style="margin-left: -0.4ex;">,</span>
            {% endunless %}
        {% endfor %}

    {% else %}
        <a target="_blank" href="{{ page.source_latin }}">
            {% if page.source_latin contains "thelatinlibrary.com" %}
                TheLatinLibrary
            {% else %}
                {% assign str = page.source_latin | remove: "https://" | remove: "http://" | remove: "www." | split: '/' %}
                {{ str[0] | capitalize }}
            {% endif %}
        </a>
    {% endif %}

    <br>
    Fehler gefunden? Kontaktieren Sie uns unter: <a href="mailto:lateinparadies.de.cool@gmail.com">lateinparadies.de.cool@gmail.com</a>!
</div>