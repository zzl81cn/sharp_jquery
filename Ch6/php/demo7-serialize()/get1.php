<?php 
	header("Content-Type:text/html; charset=utf-8");
// 	$showtime=date("Y-m-d H:i:s");
	echo "<div class='comment'>
			<h6>{$_REQUEST['username']}:</h6>
			<p class='para'>{$_REQUEST['content']}</p>
			<p class='para'>{$_REQUEST['number']}</p>
		</div>";
	
// 	echo "<ul>
// 		<li>
// 			<div class='comment'><h6>{$_REQUEST['username']}:</h6><p class='para'>{$_REQUEST['content']}</p></div>
// 		</li>
// 		<li>
// 			<div class='comment'><h6>{$_REQUEST['username']}:</h6><p class='para'>{$_REQUEST['content']}</p></div>
// 		</li>
// 	</ul>";
?>
