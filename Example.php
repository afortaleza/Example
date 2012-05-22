<?php
    class ExamplePlugin extends MantisPlugin {
        function register() {
            $this->name = 'Example';    # Proper name of plugin
            $this->description = '';    # Short description of the plugin
            $this->page = '';           # Default plugin page

            $this->version = '1.0';     # Plugin version string
            $this->requires = array(    # Plugin dependencies, array of basename => version pairs
                'MantisCore' => '1.2.0',  #   Should always depend on an appropriate version of MantisBT
                );

            $this->author = 'Anderson Fortaleza';         # Author/team name
            $this->contact = 'afortaleza@hotmail.com';        # Author/team e-mail address
            $this->url = 'https://www.github.com/afortaleza';            # Support webpage
        }
    }
?>