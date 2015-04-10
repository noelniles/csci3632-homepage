<?php
error_reporting(-1);
ini_set('display_errors', 'On');

/**
 * @param $dir directory where the html files are stored
 */
function display_post_summary($dir)
{

    if ($handle = opendir($dir)) {
        while (false !== ($entry = readdir($handle))) {

            //Don't grab the root or parent directory files
            if ($entry != "." && $entry != "..") {

                //Get the first 500 bytes of a file
                $content = file_get_contents("$dir/" . "$entry",
                    NULL, NULL, 0, 500);

                if ($content === false) {
                    echo "<h1>Something is wrong!</h1>";
                } else {
                    echo $content;
                }
            }
        }
    }
}
