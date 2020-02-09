<div id="menu">
    <?php
        $pages = simplexml_load_file('Data/menu.xml');
        echo "<ul>";
        foreach ($pages->children() as $page){
            $linkName = $page->NameEN;
            echo "<li><a href='$page->URL'>$linkName</a></li>";
        }
        echo "</ul>";
    ?>
</div>