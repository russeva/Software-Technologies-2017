<form>
    Number: <input type="text" name="num"/>
    <input type="submit" name="result"/>
</form>

<?php
	if(isset($_GET['num'])){
		$num = intval($_GET['num']);
    for($i = 1;$i <= $num; $i++){
			if($i % 2 == 0) {
            echo "$i ";
        }
    }
}
?>