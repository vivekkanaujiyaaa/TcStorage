<?
    $path_id = (isset($_POST['path_id']) ? $_POST['path_id'] : 0);
    foreach ($_FILES["files"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $_POST['tmp_name'] = $_FILES["files"]["tmp_name"][$key];
            $_POST['type'] = "file";
            $_POST['name'] = $_FILES["files"]["name"][$key];
            require 'new.php';
        }
    }
?>