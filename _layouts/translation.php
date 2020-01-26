---
layout: wrapper
---

{%- comment -%} Process chapters, add missing information {%- endcomment -%}
{%- assign page.chapters = page.chapters | process_chapters: page -%}


<main>
	{%- comment -%} Include heading with chapter links {%- endcomment -%}
	{%- include translation-heading.php -%}

	<div style="margin: auto">
		{%- if page.chapters == nil -%}
			<div class="alert alertYellow" style="max-width: 650px; margin: -30px auto 10px auto;">Diese Seite Seite befindet sich momentan im Aufbau. Versuche es bitte in ein paar Tagen erneut!</div>
		{%- endif -%}

		{%- for chapter in page.chapters -%}
			{%- comment -%} Set ID to be able to be linked from above {%- endcomment -%}
			<div class="chapter"
				{%- if chapter.display-name -%}
					{% if chapter.number and chapter.number != "/" %}
						id="Ch{{ chapter.number }}"
					{% elsif chapter.name and chapter.name != "/" %}
						id="Ch{{ chapter.name }}"
					{%- endif -%}
				{%- endif -%}
			>

				{%- if chapter.display-name -%}
					<h2>{{ chapter.display-name }}</h2>
				{%- endif -%}

				{%- comment -%} If chapter is basic chapter {%- endcomment -%}
				{%- if chapter.latin and chapter.german -%}
					<div class="chapter-item">
						<p>
							{{ chapter.latin }}
						</p>
						<div></div>
						<p>
							{{ chapter.german }}
							{%- if chapter.footnotes != nil -%}
								<br><br>
								<span class="footnotes">
									{%- for footnote in chapter.footnotes -%}
										<sup>{{ footnote.number }}</sup>: {{ footnote.content }}<br>
									{%- endfor -%}
								</span>
							{%- endif -%}
						</p>
					</div>

				{%- comment -%} If chapter consists of multiple sections {%- endcomment -%}
				{%- elsif chapter.sections -%}
					{%- for section in chapter.sections -%}
						{%- comment -%} If section contains translations {%- endcomment -%}
						{%- if section.type == nil or section.type == "translation" -%}
							{%- comment -%} If section is a poem {%- endcomment -%}
							{%- if section.style == "poem" -%}
								{%- if chapter.poem-style == nil or chapter.poem-style == "wide" -%}
									{%- assign suffix = "<span class='ShowOnBigScreen'></span>" -%}
								{%- elsif chapter.poem-style == "thin" -%}
									{%- assign suffix = "<br>" -%}
								{%- endif -%}
								<div id="{{ section.id }}" class="poem-item">
									<p>
										{{ section.number }}
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
							{%- comment -%} If section is a poem verse seperator {%- endcomment -%}
							{%- elsif section.style == "verse-seperator" -%}
								<div class="poem-item verse-seperator">
									<p></p>
									<div></div>
									<p></p>
									<div></div>
									<p></p>
								</div>
							{%- comment -%} If section indicates missing of verse(s) {%- endcomment -%}
							{%- elsif section.style == "verse-missing" -%}
								<div class="poem-item verse-missing">
									<p></p>
									<div></div>
									<p></p>
									<div></div>
									<p></p>
								</div>
							{%- comment -%} If section is default chapter-based {%- endcomment -%}
							{%- elsif section.style == "default" -%}
								<div class="chapter-item">
									<p>
										{{ section.latin }}
									</p>
									<div></div>
									<p>
										{{ section.german }}
										{%- if section.footnotes != nil -%}
											<br><br>
											<span class="footnotes">
												{%- for footnote in section.footnotes -%}
													<sup>{{ footnote.number }}</sup>: {{ footnote.content }}<br>
												{%- endfor -%}
											</span>
										{%- endif -%}
									</p>
								</div>
							{%- endif -%}
						{%- comment -%} If section contains sidestory {%- endcomment -%}
						{%- elsif section.type == "story" -%}
							<div class="story"><hr>{{ section.content }}<hr></div>
						{%- endif -%}
					{%- endfor -%}
				{%- endif -%}
			</div>
			{%- comment -%} Spacing on the bottom of the chapter {%- endcomment -%}
			{%- unless chapter.id == page.chapters.last.id -%}
				<br><br>
			{%- endunless -%}
		{%- endfor -%}
	</div>
</main>
{%- include translation-sources.php -%}
{%- include comments.php -%}