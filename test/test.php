<?php
function test() {
	echo "printed in test!<br/>";
	return function() { echo "printed in embeded function!"; exit(1); };
}

echo "printed before test() invoking!<br/>";
$af = test();
$af();
echo "printed after test() invoking!<br/>";

?>