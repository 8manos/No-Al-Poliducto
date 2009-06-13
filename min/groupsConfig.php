<?php
/**
 * Groups configuration for default Minify implementation
 * @package Minify
 */

/** 
 * You may wish to use the Minify URI Builder app to suggest
 * changes. http://yourdomain/min/builder/
 **/

return array(
    'js' => array('//wp-content/plugins/cforms/js/cforms.js', '//wp-content/themes/noalpoli/js/jquery.scrollTo-1.4.2-min.js', '//wp-content/themes/noalpoli/js/scroll.js', '//wp-content/themes/noalpoli/js/jquery.jplayer.js'),

    'css' => array('//wp-content/themes/noalpoli/style.css', '//wp-includes/js/thickbox/thickbox.css', '//wp-content/plugins/cforms/styling/calendar.css', '//wp-content/plugins/cforms/styling/wide_form.css'),
    // 'js' => array('//js/file1.js', '//js/file2.js'),
    // 'css' => array('//css/file1.css', '//css/file2.css'),

    // custom source example
    /*'js2' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => create_function('$a', 'return $a;')
        ))
    ),//*/

    /*'js3' => array(
        dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
        // do NOT process this file
        new Minify_Source(array(
            'filepath' => dirname(__FILE__) . '/../min_unit_tests/_test_files/js/before.js',
            'minifier' => array('Minify_Packer', 'minify')
        ))
    ),//*/
);
