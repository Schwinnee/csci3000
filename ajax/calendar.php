<?

$currmonth = (isset($_POST["month"]) ? $_POST["month"] : date("m"));

$prev = ($currmonth - 1) % 12;
$next = ($currmonth + 1) % 12;

?>


<button class="month" data-month="<?=$prev?>">&laquo;</button>
<button class="month" data-month="<?=$next?>">&raquo;</button>

CALENDAR HERE <?=$currmonth?>
