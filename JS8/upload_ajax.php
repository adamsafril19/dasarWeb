<?php
if (isset($_FILES['files'])) {
    $errors = array();
    $uploaded_files = array();
    $upload_directory = "documents/";
    $extensions = array("jpg", "jpeg", "png", "gif");
    $max_size = 2097152;
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $file_name = $_FILES['files']['name'][$key];
        $file_size = $_FILES['files']['size'][$key];
        $file_tmp = $_FILES['files']['tmp_name'][$key];
        $file_type = $_FILES['files']['type'][$key];
        @$file_ext = strtolower("" . end(explode('.', $file_name)) . "");
        if (!in_array($file_ext, $extensions)) {
            $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, atau GIF.";
            continue;
        }

        if ($file_size > $max_size) {
            $errors[] = 'Ukuran file ' . $file_name . ' melebihi batas maksimum 2 MB';
            continue;
        }
        $uploaded_file = $upload_directory . $file_name;
        if (move_uploaded_file($file_tmp, $uploaded_file)) {
            $uploaded_files[] = $uploaded_file;
        } else {
            $errors[] = 'Gagal mengunggah file ' . $file_name;
        }
    }
    if (empty($errors)) {
        echo "File berhasil diunggah.";
    } else {
        echo implode("<br>", $errors);
    }
}
?>