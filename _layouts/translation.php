---
layout: wrapper
---
<main>
	{% include translation-heading.php %}

	<div style="margin: auto">
		{% assign chapterNumber = 0 %}
		{% for chapter in page.chapters %}
			{% if chapter.number == nil %}
				{% assign chapterNumber = chapterNumber | plus: 1 %}
			{% else %}
				{% assign chapterNumber = chapter.number %}
			{% endif %}

			<div id="Ch{{ chapterNumber }}" class="chapter">
				{% assign str = "" %}
				{% if chapter.number == 0 %}
					{% assign str = "Prolog" %}
				{% else %}
					{% assign str = "Kapitel " | append: chapterNumber %}
				{% endif %}
				{% if chapter.name %}
					{% assign str = str | append: ": " | append: chapter.name %}
				{% endif %}
				<h2>{{ str }}</h2>

				{% if chapter.latin and chapter.german %}
					<div class="chapter-item">
						<p>
							{{ chapter.latin }}
						</p>
						<div></div>
						<p>
							{{ chapter.german }}
							{% if chapter.footnotes != nil %}
								<br><br>
								<span class="footnotes">
									{% for footnote in chapter.footnotes %}
										<sup>{{footnote.number}}</sup>: {{footnote.content}}<br>
									{% endfor %}
								</span>
							{% endif %}
						</p>
					</div>
				{% elsif chapter.sections %}
					{% assign  lastPoemLine = -1 %}
					{% for section in chapter.sections %}
						{% if section.type == nil or section.type == "translation" %}
							{% if section.style == "poem" or section.style == nil and chapter.style == "poem" %}
								<div class="poem-item">
									<p>
										{% if section.number != nil %}
											{{ section.number }}
											{% assign lastPoemLine = section.number %}
										{% else %}
											{% assign lastPoemLine = lastPoemLine | plus: 2 %}
											{{ lastPoemLine }}
										{% endif %}
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
								<div class="chapter-item">
									<p>
										{{ section.latin }}
									</p>
									<div></div>
									<p>
									{{ section.german }}
									{% if chapter.footnotes != nil %}
										<br><br>
										<span class="footnotes">
											{% for footnote in section.footnotes %}
												<sup>{{footnote.number}}</sup>: {{footnote.content}}<br>
											{% endfor %}
										</span>
									{% endif %}
									</p>
								</div>
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