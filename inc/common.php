<?php
error_reporting(-1);
ini_set('display_errors', 'On');


function tsl($path)
{
    if (substr($path, strlen($path) - 1) != '/') {
        $path .= '/';
    }
}


function get_root_path()
{
    $pos = strrpos(dirname(__FILE__), DIRECTORY_SEPARATOR . 'inc');
    $adm = substr(dirname(__FILE__), 0, $pos);
    $pos2 = strrpos($adm, DIRECTORY_SEPARATOR);

    return tsl(substr(__FILE__, 0, $pos2));
}


/**
 * Define some constants
 *
 * */
define('ROOT', get_root_path());
define('BOOTSTRAP', ROOT . 'res/css/bootstrap.css');
define('CSS', ROOT . 'res/css/custom.css');
define('JS', ROOT . 'res/js/');
define('PAGES', ROOT . 'pages/');


function get_page_content()
{

    if (isset($_GET['page'])) {
        $thisPage = htmlspecialchars($_GET['page']);
    } else {
        $thisPage = 'home';
    }

    switch ($thisPage) {

        case "quizzer-source";
            $includeFile = PAGES . "source_code/addition_quizzer_src.php";
            break;

        case "gallery-source";
            $includeFile = PAGES . "source_code/galsrc.php";
            break;

        default:
            $includeFile = PAGES . "home.php";
            break;

    }
    require_once($includeFile);
}


/**
 * @param $dir directory where the html files are stored
 */
function display_post_summary($dir)
{
    if ($handle = opendir($dir)) {
        while (false !== ($entry = readdir($handle))) {

        if (!preg_match("/\.(swp|jpg|png|java|c|py)*$/i", $entry, $matches)) {
            //Don't grab the root or parent directory files
            if ($entry != "." && $entry != "..") {

                //Get the first 500 bytes of a file
                if (file_exists("$dir/" . "$entry"))
                    include("$dir/" . "$entry");

                /*
                if ($content === false) {
                    echo "<h1>Something is wrong!</h1>";
                } else {
                    echo $content;
                }
                 */
            }
        }
    }
}
}

function loadPages($pagesDir)
{
    $pagesDirContents = scandir($pagesDir);

    foreach ($pagesDirContents as $possiblePage) {
        if (!preg_match('/^\./', $possiblePage) &&
            preg_match('/.+\.(php|html)/', $possiblePage)) {
            $page = $possiblePage;
            include("$pagesDir/$page");
        }
    }
}


function getzip()
{
  $zip = isset($_POST["zipcode"]) ? $_POST["zipcode"]: 'blank';
  echo $zip;
}

