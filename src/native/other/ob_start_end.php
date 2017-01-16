<?php
function callback($buffer)
{
	// replace all the apples with oranges
	return (str_replace("apples", "oranges", $buffer));
}

ob_start("callback");
?>

<html>
<body>
<p>It's like comparing apples to oranges.</p>
</body>
</html>

<?php
ob_end_flush();

/*
ob_get_contents(); // Return the contents of the output buffer
ob_end_clean(); // Clean (erase) the output buffer and turn off output buffering
ob_end_flush(); // Flush (send) the output buffer and turn off output buffering
ob_implicit_flush(); // Turn implicit flush on/off
*/
?>