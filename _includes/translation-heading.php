<h1>{{ page.heading }}</h1>
<div class="idReferrer">
	<ul>
		{%- for chapter in page.chapters -%}
			{%- if chapter.id and chapter.id != "/" and chapter.id-display and chapter.id-display != "/" -%}
				<li><a href="#{{ chapter.id }}">{{ chapter.id-display }}</a></li>
			{%- endif -%}

			{%- comment -%} TODO: comments and clean-up {%- endcomment -%}
			{%- if page.chapters.size <= 1 -%}
				{%- assign processedSpansOfSections = 0 -%}
				{%- assign lastSpanOfSectionsBeginningIndex = 0 -%}
				{%- assign lastSectionIndex = -2 -%}
				{%- for section in chapter.sections -%}
					{%- assign lastSectionIndex = lastSectionIndex | plus: 1 -%}
					{%- if section.style == "verse-missing" or section.id == chapter.sections.last.id and section.style == "poem" -%}
						{%- if section.id == chapter.sections.last.id -%}
							{%- if processedSpansOfSections == 0 -%}
								{%- continue -%}
							{%- endif -%}
							{%- assign lastSectionIndex = lastSectionIndex | plus: 1 -%}
						{%- endif -%}
						{%- if chapter.sections[lastSectionIndex].id and chapter.sections[lastSectionIndex].id != "/" and chapter.sections[lastSectionIndex].id-display and chapter.sections[lastSectionIndex].id-display != "/" -%}
							<li><a href="#{{ chapter.sections[lastSpanOfSectionsBeginningIndex].id }}">
								{{ chapter.sections[lastSpanOfSectionsBeginningIndex].id-display | append: "-" | append: chapter.sections[lastSectionIndex].id-display }}</a>
							</li>
						{%- endif -%}
						{%- assign lastSpanOfSectionsBeginningIndex = lastSectionIndex | plus: 2 -%}
						{%- assign processedSpansOfSections = processedSpansOfSections | plus: 1 -%}
					{%- endif -%}
				{%- endfor -%}
			{%- endif -%}
		{%- endfor -%}
	</ul>
</div>