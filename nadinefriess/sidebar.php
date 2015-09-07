
<form class=" form-signin" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <div class="search-input-group input-group">
        <input type="text" class="form-control" placeholder="Suchbegriff" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
        <span class="input-group-btn">
            <input id="suchbtn" class="btn btn-default" type="submit" id="search_submit" value="Suchen" />
        </span>
    </div>
</form>

<div id="kategorien-bereich">
    <h3 id="kategorien-titel">Kategorien</h3>

    <?php if (function_exists('wp_tag_cloud')) : ?>
        <ul id="kategorien-cloud">
            <li><?php wp_tag_cloud(array('taxonomy' => 'category')); ?></li>
        </ul>
    <?php endif; ?>
</div>


<!--<h3>Tag Cloud</h3>
<?php wp_tag_cloud(); ?>
<h3>Seiten </h3>
<?php wp_list_pages(); ?>
<h3>Blogroll </h3>
<?php wp_list_bookmarks(); ?>-->

