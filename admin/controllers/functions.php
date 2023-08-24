<?php
// Function to delete a file from a folder by filename
function deleteFile($folderPath, $filename) {
    $filePath = $folderPath . DIRECTORY_SEPARATOR . $filename;

    if (file_exists($filePath)) {
        if (unlink($filePath)) {
            echo "File '{$filename}' has been deleted successfully.";
        } else {
            echo "Error deleting file '{$filename}'.";
        }
    } else {
        echo "File '{$filename}' not found in the folder.";
    }
}

?>
