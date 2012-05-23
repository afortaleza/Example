<form action="<?php echo plugin_page('config_update') ?>" method="post">
    <?php echo form_security_field('plugin_Example_config_update') ?>

    <label>Foo or Bar?<br/>
        <input name="foo_or_bar" value="<?php echo string_attribute( $t_foo_or_bar ) ?>"/>
    </label>
    <br/>
    <label>
        <input type="checkbox" name="reset"/> Reset
    </label>
    <br/>
    <input type="submit"/>
</form>