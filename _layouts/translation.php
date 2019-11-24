---
layout: wrapper
---
<main>
	{% include translation-heading.php %}

	<div style="margin: auto">
		{% if page.chapters == nil %}
			<div class="alert alertYellow" style="max-width: 600px; margin: -30px auto 10px auto;">Diese Seite Seite ist momentan im Aufbau. Versuche es bitte in ein paar Tagen erneut!</div>
		{% endif %}
		
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
									{% assign footnoteNumber = 0 %}
									{% for footnote in chapter.footnotes %}
										{% if footnote.number == nil %}
											{% assign footnoteNumber = footnoteNumber | plus: 1 %}
										{% else %}
											{% assign footnoteNumber = footnote.number %}
										{% endif %}
										<sup>{{ footnoteNumber }}</sup>: {{footnote.content}}<br>
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