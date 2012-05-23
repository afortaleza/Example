<?php
    echo '<p>Here is a link to <a href="', plugin_page( 'foo' ), '">page foo</a>.</p>';
    echo '<link rel="stylesheet" type="text/css" href="', plugin_file( 'foo.css' ), '"/>',
         '<p class="foo">';

    		event_signal('EVENT_EXAMPLE_FOO');

    		$t_string = 'A setence with the word "foo" in it';
    		$t_new_string = event_signal('EVENT_EXAMPLE_BAR', array($t_string));

	echo $t_new_string, '</p>';
?>