var $table = document.getElementById("tetelTabla"),
$n = 5,
$rowCount = $table.rows.length,
$firstRow = $table.rows[0].firstElementChild.tagName,
$hasHead = ($firstRow === "TH"),
$tr = [],
$i,$k,$j = ($hasHead)?1:0,
$th = ($hasHead?$table.rows[(0)].outerHTML:"");
var $pageCount = Math.ceil($rowCount / $n);
if ($pageCount > 1) {	
	for ($i = $j,$k = 0; $i < $rowCount; $i++, $k++)
		$tr[$k] = $table.rows[$i].outerHTML;	
	$table.insertAdjacentHTML("afterend","<div class='d-flex justify-content-center'"+" id='buttons'></div");	
	sort(1);
}

function sort($p){

	var $rows = $th,$s = (($n * $p)-$n);
	for ($i = $s; $i < ($s+$n) && $i < $tr.length; $i++)
		$rows += $tr[$i];	
	
	$table.innerHTML = $rows;
	
	document.getElementById("buttons").innerHTML = pageButtons($pageCount,$p);
	
	document.getElementById("id"+$p).setAttribute("class","active");
}

function pageButtons($pCount,$cur) {

	var	$prevDis = ($cur == 1)?"disabled":"",
		$nextDis = ($cur == $pCount)?"disabled":"",
		$buttons = "<input type='button' class='pageButtons' value='<< Előző' onclick='sort("+($cur - 1)+")' "+$prevDis+">";
	for ($i=1; $i<=$pCount;$i++)
		$buttons += "<input type='button' class='pageButtons' id='id"+$i+"'value='"+$i+"' onclick='sort("+$i+")'>";
	$buttons += "<input type='button' class='pageButtons' value='Következő >>' onclick='sort("+($cur + 1)+")' "+$nextDis+">";
	return $buttons;
}

