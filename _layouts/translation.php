---
layout: wrapper
---

<!-- Assign missing chapter numbers -->
{% assign chapterNumber = 0 %}
{% for chapter in page.chapters %}
	{% assign chapter.number = 0 %}
	{% if chapter.number == nil %}
		{% assign chapter.number = chapterNumber | plus: 1 %}
		{% assign chapterNumber = chapterNumber | plus: 1 %}
		{{ chapter.number | append: "x" }}
	{% else %}
		{% assign chapterNumber = chapter.number %}
	{% endif %}

	<!-- Assign display name -->
	{% if chapter.number == 0 %}
		{% assign chapter.display-name = "Prolog" %}
	{% else %}
		{% assign chapter.display-name = "Kapitel " | append: chapter.number %}
	{% endif %}
	{% if chapter.name != '/' %}
		{% assign chapter.display-name = chapter.display-name | append: ": " | append: chapter.name %}
	{% endif %}

	<!-- Assign missing footnote numbers -->
	{% assign footnoteNumber = 0 %}
	{% for footnote in chapter.footnotes %}
		{% if footnote.number == nil %}
			{% assign footnote.number = footnoteNumber | plus: 1 %}
			{% assign footnoteNumber = footnote.number %}
		{% else %}
			{% assign footnoteNumber = footnote.number %}
		{% endif %}
	{% endfor %}
{% endfor %}






<main>
	{% include translation-heading.php %}

	<div style="margin: auto">
		{% if page.chapters == nil %}
			<div class="alert alertYellow" style="max-width: 600px; margin: -30px auto 10px auto;">Diese Seite Seite ist momentan im Aufbau. Versuche es bitte in ein paar Tagen erneut!</div>
		{% endif %}

		{% for chapter in page.chapters %}
			<div id="Ch{{ chapter.number }}" class="chapter">
				<h2>{{ chapter.display-name }}</h2>

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
										<sup>{{ footnote.number }}</sup>: {{footnote.content}}<br>
									{% endfor %}
								</span>
							{% endif %}
						</p>
					</div>
				{% elsif chapter.sections %}
					{% assign poemLine = -1 %}
					{% for section in chapter.sections %}
						{% if section.type == nil or section.type == "translation" %}
							{% if section.style == "poem" or section.style == nil and chapter.style == "poem" %}
								{% if section.number  == nil %}
									{% assign poemLine = poemLine | plus: 2 %}
								{% else %}
									{% assign poemLine = section.number %}
								{% endif %}

								{% if chapter.poem-style == nil or chapter.poem-style == "wide" %}
									{% assign suffix = "<span class='ShowOnBigScreen'></span>" %}
								{% elsif chapter.poem-style == "thin" %}
									{% assign suffix = "<br>" %}
								{% endif %}
								<div class="poem-item">
									<p>
										{{ poemLine }}
									</p>
									<div></div>
									<p>
										{{ section.latin | newline_to_br | replace: "<br />", suffix }}
									</p>
									<div></div>
									<p>
										{{ section.german | newline_to_br | replace: "<br />", suffix }}
									</p>
								</div>
							{% elsif section.style == "verse-seperator" %}
								<div class="poem-item verse-seperator">
									<p></p>
									<div></div>
									<p></p>
									<div></div>
									<p></p>
								</div>
							{% elsif section.style == "verse-missing" %}
								<div class="poem-item verse-missing">
									<p></p>
									<div></div>
									<p></p>
									<div></div>
									<p></p>
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
			{% unless chapter.latin == page.chapters.last.latin %}
				<br><br>
			{% endunless %}
		{% endfor %}
	</div>
</main>
{% include translation-sources.php %}