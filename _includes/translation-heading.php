<h1>{{page.heading}}</h1>
<div class="idReferrer">
	<ul>
		{% for chapter in page.chapters %}
			<li><a href="#Ch{{chapter.number}}">{{chapter.number}}</a></li>
		{% endfor %}
	</ul>
</div>