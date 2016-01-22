<?php 
/*Realizzare:
	- pagina con form di login;
	- pagina con form di logout;
	- funzione che verifichi user e password;
	- pagina privata (visibile solo dopo il login).
*/

//funzione di autenticazione


		

function verifica($user,$pass) {
	
	$utenti=array(
			array("andrea","6e6bc4e49dd477ebc98ef4046c067b5f"), //ciao
			array("ciro","b5dfb5c8035df90c9a4006d8318354dc"),	//traca
			array("laura","f27f6f1c7c5cbf4e3e192e0a47b85300")	//ppp
	);
	
	foreach ($utenti as $u) {
		if($user == $u[0] && md5($pass) == $u[1]) {
			return true;
			}
		}
		
	return false;
	}

function isLogged() {

	if (isset($_SESSION['login_user']) && $_SESSION['login_user'] != "") {
		return true;
		}
	else {
		return false;
		}
	}

	

