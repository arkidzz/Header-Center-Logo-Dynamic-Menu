<style>
.nav_cont {
    display: flex;
    justify-content: center;
    align-items: center;
}
.nav_menu {
    display: flex;
    list-style: none;
    padding: 0;
}
.nav_cont p {
    font-size: 30px;
    margin: 0;
    border: 1px solid #000;
    border-radius: 40px;
    padding: 20px;
}
.nav_right {
    margin-left: 20px;
}
.nav_left {
    margin-right: 20px;
}
.nav_menu li {
    width: 70px;
    text-align: center;
    border: 1px solid #000;
    margin: 0 10px;
    padding: 5px 0;
}
</style>
<head class="nav_head">
<nav class="nav_cont">
<?php
	$nav = '';
	$n_row = 9;
	
	for($i=1; $i<=$n_row; $i++){
		$t_count = round($n_row/2);
		if($i == 1) {
			$nav .= '<ul class="nav_menu nav_left">';
		}
		
		if($i <= $t_count){
			$nav .= '<li>Link '.$i.'</li>';
		}
		
		if($i == $t_count) {
			$nav .= '</ul>';
			$nav .= '<p>logo</p>';
			$nav .= '<ul class="nav_menu nav_right">';
		}
		if($i > $t_count) {
			$nav .= '<li>Link '.$i.'</li>';
		}
		
		if($i == $n_row){
			$nav .= '</ul>';
		}
	}
	
	echo $nav;
?>
</nav>
</head>