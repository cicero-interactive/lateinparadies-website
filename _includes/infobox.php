<div class="infobox">
    <?php
        $author_photo_url = "{{ site.basurl }}/assets/img/{{ page.author }}.png";
        if (file_exists($_SERVER['DOCUMENT_ROOT'].$author_photo_url)) { ?>
            <div class="infobox__picture" style="background-image: url('<?php echo $author_photo_url ?>');"></div>
    <?php
        } ?>

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
