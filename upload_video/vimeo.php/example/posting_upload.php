<?php

require_once('../vimeo.php');

if (!function_exists('json_decode')) {
    throw new Exception('We could not find json_decode. json_decode is found in php 5.2 and up, but not found on many linux systems due to licensing conflicts. If you are running ubuntu try "sudo apt-get install php5-json".');
}

$config = json_decode(file_get_contents('./config.json'), true);

if (empty($config['access_token'])) {
    throw new Exception('You can not upload a file without an access token. You can find this token on your app page, or generate one using auth.php');
}

$lib = new Vimeo($config['client_id'], $config['client_secret'], $config['access_token']);

try {
	if(isset($_FILES['file'], $_POST['title'], $_POST['description'])) {
		$file  = $_FILES['file'];
		$title = $_POST['title'];
		$description = $_POST['description'];

		if(!empty($file) && !empty($title) && !empty($description)) {
			$file_path = $file['tmp_name'];

			$vimeo->upload($file_path);
		} else {
			echo "Please all fields are required.";
		}
	} else {
		echo "Error!";
	}
	
} catch(VimeoUploadException $e) {
	print 'Error uploading ' . $file_name . "\n";
	print 'Server reported: ' . $e->getMessage() . "\n";
}

//$redirect_url = 'posting_upload.php';
//$vimeo->request('/me/videos', array('type' => 'POST', 'redirect_url' => $redirect_target), 'POST')

?>

<form action="posting_upload.php" method="post" enctype="multipart/form-data">
	<label for="file">Please choose a file:</label><input name="file" type="file">
	<label for="title">Title:</label><input name="title" type="text">
	<label for="description">Description:</label><input name="description" type="text">
	<input type="submit" value="Upload">
</form>