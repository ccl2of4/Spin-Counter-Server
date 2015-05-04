<?php
	include('utils.php');


	if (!isset($_POST['following_user_id']) ||
		!isset($_POST['followed_user_id'])) {
		http_response_code(400);
		exit;
	}

	$followed_user_id = @$_POST['following_user_id'];
	$following_user_id = @$_POST['followed_user_id'];

	followUser($followed_user_id, $following_user_id);
	http_response_code(201);
?>
