<!--load template function-->

<?php
	function loadTemplate($filename, $tempVars)//function loadtemplate which passes two variable
	{
		extract($tempVars);//imports variable from array
		ob_start();//call back function
		require $filename;//require the array
		$content = ob_get_clean();//get the current buffer and delete it
		return $content;

	}
?>