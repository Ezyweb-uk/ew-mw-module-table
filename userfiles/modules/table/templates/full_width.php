<?php
/*

type: layout

name: Full Width

description: Full Width

*/
?>

<style>
.modtable {
  float:left;
  width:100%;
  overflow-x: auto;
  margin-bottom:10px;
  margin-top:10px;
}

table {
  border-collapse:collapse;
  width:100%;
}

th{
	height=10;
	border:1px solid #cacaca;
	background: rgb(231, 235, 245);
	padding:4px;
}

td {
	border:1px solid #cacaca;
	text-align:left;
	height=10px;
	padding:4px;
}

tr:nth-child(even) {
  background-color: #fafafa;
  height=10;
}
</style>

<script>

mw.moduleJS('<?php print module_url(); ?>js/table.js');

$(document).ready(function () {
	try {
	  var json = <?php print $json;?>;
	  var jdata = json.tabledata;
	  var tableId = '<?php print $params['id'];?>';
	  $("#"+tableId+" thead").children().remove();
	  $("#"+tableId+" tbody").children().remove();
	  buildTable(tableId,jdata);
	} catch (e) {
	  console.log('No json data found');
	}
});
</script>

<div class="modtable">

  <table id="<?php print $params['id'];?>" align="left" cellspacing="0" celpadding="0">
	<thead>
		<tr>
			<th class="th h1" classname="th h1"></th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td class="col r1c1" classname="col r1c1">Data not found</td>
		</tr>
	</tbody>
  </table>
</div>