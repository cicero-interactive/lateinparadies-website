---
layout: non-translation
---

<div class="big4">
	{% if page.author %}
		Wähle den gewünschten {{ page.author | replace: ' ', '-' }}-Text:
	{% else %}
		Wähle den gewünschten Abschnitt:
	{% endif %}
</div>
<div class="sectionLinksTranslation">
	<ul>
		{% for file in site.pages %}
			{% if file.path contains page.dest_path %}
				{% if file.title_nav %}
					{% if file.title_nav == "/"%}
						{% continue %}
					{% endif %}
					<li style="width: 60%"><a href="{{ file.url }}">{{ file.title_nav }}</a></li>
				{% elsif file.title %}
					<li style="width: 60%"><a href="{{ file.url }}">bb</a></li>
				{% else %}
					<li style="width: 60%"><a href="{{ file.url }}">{{ file.name | replace: '-', ' ' | replace: '.php', '' }}</a></li>
				{% endif %}
			{% endif %}
		{% endfor %}
	</ul>
</div>