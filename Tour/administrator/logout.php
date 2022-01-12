<?php	
	session_start();
	if (isset($HTTP_GET_VARS['user'])) {
		$colname_adhie = get_magic_quotes_gpc() ? $HTTP_GET_VARS['user'] : addslashes($HTTP_GET_VARS['user']);
	}
	session_unregister($colname_adhie);
	session_destroy();
	header("Location:index.php");
?>