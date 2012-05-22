<?php
    echo '<p>Here is a link to <a href="', plugin_page( 'foo' ), '">page foo</a>.</p>';
    echo '<link rel="stylesheet" type="text/css" href="', plugin_file( 'foo.css' ), '"/>',
         '<p class="foo">This is red text.</p>';
?>