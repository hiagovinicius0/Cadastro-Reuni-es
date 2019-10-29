<?php

	session_start();

unset($_COOKIE['intranet']);
setcookie("reuniao[IdUsuario]","value",time()-3600);
setcookie("reuniao[NomeUsuario]","value",time()-3600);

header("Location: ./");

?>