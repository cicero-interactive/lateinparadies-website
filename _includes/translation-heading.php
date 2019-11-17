<h1>{{page.heading}}</h1>
<div class="idReferrer">
	<ul>
		{% assign chapterNumber = 0 %}
		{% for chapter in page.chapters %}
			{% if chapter.number == nil %}
				{% assign chapterNumber = chapterNumber | plus: 1 %}
			{% else %}
				{% assign chapterNumber = chapter.number %}
			{% endif %}

			<li><a href="#Ch{{chapter.number}}">{{chapterNumber}}</a></li>
		{% endfor %}
	</ul>
</div>