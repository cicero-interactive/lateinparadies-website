<li><a href="{{ site.baseurl }}/">Home</a></li>
{%- capture page_urls -%}{{ page.url | remove: "/index.php" }}{%- endcapture -%}
{%- assign splitted_url_parts = page_urls | split: '/' -%}
{%- for url_part in splitted_url_parts -%}
	{%- if url_part == site.baseurl -%}
		{%- capture previous_url -%}{{ site.baseurl }}{%- endcapture -%}
	{%- else -%}
		{%- if forloop.last == false -%}
			<li class="spc">>></li>
			<li>
				<a href="{{ previous_url }}/{{ url_part }}.php">{{ url_part | replace: '-', ' ' | replace: "Caesar", "Cäsar" | replace: "Grosse", "Große" }}</a>
			</li>
			{%- capture previous_url -%}{{ previous_url }}/{{ url_part }}{%- endcapture -%}
		{%- else -%}
			{%- unless page.title_nav and page.title_nav == "/" -%}
				<li class="spc">>></li>
			{%- else -%}
				{%- continue -%}
			{%- endunless -%}

			{%- if page.title_nav -%}
				{%- capture last_breadcrumb -%}{{ page.title_nav }}{%- endcapture -%}
			{%- elsif page.title -%}
				{%- capture last_breadcrumb -%}{{ page.title }}{%- endcapture -%}
			{%- else -%}
				{%- capture last_breadcrumb -%}{{ url_part | remove: ".php" }}{%- endcapture -%}
			{%- endif -%}
			<li>
				<a href="{{ previous_url }}/{{ url_part }}">{{ last_breadcrumb }}</a>
			</li>
		{%- endif -%}
	{%- endif -%}
{%- endfor -%}