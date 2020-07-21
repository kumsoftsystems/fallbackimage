<?php
class TextFallbackPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array('initialize');

    function hookInitialize()
    {
        add_file_fallback_image("application/pdf", dirname(__FILE__) . '/views/shared/images/fallback-pdf.png');
    }
}