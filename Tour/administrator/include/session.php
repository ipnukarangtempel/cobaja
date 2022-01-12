<?php
session_start();
if (!session_is_registered("user")) {
	echo("Maaf, Anda Harus Login untuk masuk ke sini");
	exit;
	}

?> 