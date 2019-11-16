---
layout: wrapper
---
<main>
	{% include translation-heading.php %}

	<div style="max-width: 1000px; margin: auto">
		{% for chapter in page.chapters %}
			<div id="Ch{{ chapter.number }}" class="chapter">
				{% assign str = "" %}
				{% if chapter.number == 0 %}
					{% assign str = "Prolog" %}
				{% else %}
					{% assign str = "Kapitel " | append: chapter.number %}
				{% endif %}
				{% if chapter.name %}
					{% assign str = str | append: ": " | append: chapter.name %}
				{% endif %}
				<h2>{{ str }}</h2>

				{% if chapter.latin and chapter.german %}
					<p>
						{{ chapter.latin }}
					</p>
					<div></div>
					<p>
						{{ chapter.german }}
						<br><br>
						<span class="footnotes">
							{% for footnote in chapter.footnotes %}
								<sup>{{footnote.number}}</sup>: {{footnote.content}}<br>
							{% endfor %}
						</span>
					</p>
				{% elsif chapter.sections %}
					{% for section in chapter.sections %}
						{% if section.type == nil or section.type == "translation" %}
							{% if section.style == "poem" or section.style == nil and chapter.style == "poem" %}
								<div class="poem-item">
									<p>
										{{ section.number }}
									</p>
									<div></div>
									<p>
										{{ section.latin | newline_to_br }}
									</p>
									<div></div>
									<p>
										{{ section.german | newline_to_br }}
									</p>
								</div>
							{% elsif section.style == nil or section.style == "default" %}
								<p>
									{{ section.latin }}
								</p>
								<div></div>
								<p>
								{{ section.german }}
									<br><br>
									<span class="footnotes">
										{% for footnote in section.footnotes %}
											<sup>{{footnote.number}}</sup>: {{footnote.content}}<br>
										{% endfor %}
									</span>
								</p>
							{% endif %}
						{% elsif section.type == "story" %}
							<div class="story"><hr>{{ section.content }}<hr></div>
						{% endif %}
					{% endfor %}
				{% endif %}

			</div>
			{% unless chapter.number == page.chapters.last.number %}
				<br><br><br>
			{% endunless %}
		{% endfor %}
	</div>
</main>
{% include translation-sources.php %}