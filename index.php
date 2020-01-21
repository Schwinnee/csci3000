<?

require("template/header.php");

$page = $_GET["page"];

switch($page)
{
	case 'about':
		include("pages/about.php");
	break;
	case 'classes':
		include("pages/classes.php");
	break;
	default:
		include("pages/home.php");
	break;
}

require("template/footer.php");

?>
