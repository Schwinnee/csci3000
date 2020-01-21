

<?

$classes = array("CSCI 1301" => array("name"=>"Computer Science 1","days"=>"MWF"),
				"CSCI 1302"=> array("name"=>"Computer Science 2","days"=>"MWF"),
				"CSCI 3000"=>array("name"=>"Web Programming","days"=>"TTr"));

?>


<table width='100%' border='1'>
	<?
		foreach($classes as $key => $class)
		{
			?>
			<tr>
				<td><?=$key?></td>
				<td><?=$class["name"]?></td>
				<td><?=$class["days"]?></td>
			</tr>
			<?
		}
	?>
</table>