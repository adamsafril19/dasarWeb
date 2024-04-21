<?php
// if (isset($_POST["submit"])) {
//     $targetDirectory = "uploads/"; // Direktori tujuan untuk menyimpan file
//     $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
//     $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

//     $allowedExtensions = array("jpg", "jpeg", "png", "gif");

//     $maxFileSize = 5 * 1024 * 1024;

//     if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
//         if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
//             echo "File berhasil diunggah.";

//             // Buat thumbnail
//             $thumbnailWidth = 200;
//             $thumbnailHeight = 200; // Atur tinggi sesuai proporsi gambar asli

//             // Tentukan tipe file berdasarkan ekstensi
//             switch ($fileType) {
//                 case 'jpg':
//                 case 'jpeg':
//                     $image = imagecreatefromjpeg($targetFile);
//                     break;
//                 case 'png':
//                     $image = imagecreatefrompng($targetFile);
//                     break;
//                 case 'gif':
//                     $image = imagecreatefromgif($targetFile);
//                     break;
//                 default:
//                     $image = false;
//                     break;
//             }

//             // Buat thumbnail dengan menggunakan imagecopyresampled
//             if ($image) {
//                 $thumbnail = imagecreatetruecolor($thumbnailWidth, $thumbnailHeight);
//                 imagecopyresampled($thumbnail, $image, 0, 0, 0, 0, $thumbnailWidth, $thumbnailHeight, imagesx($image), imagesy($image));

//                 // Simpan thumbnail ke direktori
//                 $thumbnailFileName = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
//                 imagejpeg($thumbnail, $thumbnailFileName);
//                 imagedestroy($thumbnail);

//                 echo "Thumbnail berhasil dibuat.";
//             } else {
//                 echo "Gagal membuat thumbnail.";
//             }
//         } else {
//             echo "Gagal mengunggah file.";
//         }
//     } else {
//         echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
//     }
// }

if (isset($_POST["submit"])) {
    $targetDirectory = "documents/"; // Direktori tujuan untuk menyimpan dokumen
    $targetFile = $targetDirectory . basename($_FILES["documentToUpload"]["name"]);
    $documentFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    
    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    
    $maxFileSize = 10 * 1024 * 1024;
    
    if (in_array($documentFileType, $allowedExtensions) && $_FILES["documentToUpload"]["size"] <= $maxFileSize) {
    if (move_uploaded_file($_FILES["documentToUpload"]["tmp_name"], $targetFile)) {
    echo "Dokumen berhasil diunggah.";
    } else {
    echo "Gagal mengunggah dokumen.";
    }
    } else {
    echo "Jenis dokumen tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
