<h1>{{ page.heading }}</h1>
<div class="idReferrer">
	<ul>
		{% for chapter in page.chapters %}
			{% if chapter.id and chapter.id != "/" and chapter.id-display and chapter.id-display != "/" %}
				<li><a href="#{{ chapter.id }}">{{ chapter.id-display }}</a></li>
			{% endif %}

			{% assign lastSpanOfSectionsBeginningIndex = 0 %}
			{% assign lastSectionIndex = -2 %}
			{% for section in chapter.sections %}
				{% assign lastSectionIndex = lastSectionIndex | plus: 1 %}
				{% if section.style == "verse-missing" or section.id == chapter.sections.last.id %}
					{% if section.id == chapter.sections.last.id %}
						{% assign lastSectionIndex = lastSectionIndex | plus: 1 %}
					{% endif %}
					{% if chapter.sections[lastSectionIndex].id and chapter.sections[lastSectionIndex].id != "/" and chapter.sections[lastSectionIndex].id-display and chapter.sections[lastSectionIndex].id-display != "/" %}
						<li><a href="#{{ chapter.sections[lastSpanOfSectionsBeginningIndex].id }}">
							{{ chapter.sections[lastSpanOfSectionsBeginningIndex].id-display | append: "-" | append: chapter.sections[lastSectionIndex].id-display }}</a>
						</li>
					{% endif %}
					{% assign lastSpanOfSectionsBeginningIndex = lastSectionIndex | plus: 2 %}
				{% endif %}
			{% endfor %}
		{% endfor %}
	</ul>
</div>