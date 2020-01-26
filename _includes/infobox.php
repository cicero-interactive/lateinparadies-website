<div class="infobox">
	{%- assign author_photo_url = baseurl | append: "/assets/img/" | append: page.author | append: ".png" -%}

	{%- capture author_photo -%}
		{%- file_exists {{ author_photo_url }} -%}
	{%- endcapture -%}
	{%- if author_photo == "true" -%}
		<div class="infobox__picture" style="background-image: url(' {{ author_photo_url }} ');"></div>
	{%- endif -%}
	
	<div class="infobox__right">
		<div class="infobox__right__title">
			<p class="big4">
				{%- if page.author-fullname -%}
					{{ page.author-fullname }}
				{%- elsif page.author -%}
					{{ page.author }}
				{%- endif -%}
			</p>
			<hr>
		</div>
		<div class="infobox__right__content">
			<p>
				{{ page.description }}
			</p>
		</div>
	</div>
</div>