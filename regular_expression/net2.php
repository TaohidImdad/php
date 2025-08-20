<?php 



// Connect to the FTP server
$ftp = ftp_connect("www.intels.co");

if (!$ftp) {
    die("Could not connect to the FTP server.");
}

// Log in with username and password
$login = ftp_login($ftp, "taohid", "taohid@t345;");
if (!$login) {
    ftp_close($ftp);
    die("Could not log in to the FTP server.");
}

echo "Connected and logged in successfully.\n";

// Download a file from the FTP server
$remoteFile = "remotefile.txt";  // Remote file on FTP server
$localFile = "localfile.txt";    // Local file path to save

if (ftp_get($ftp, $localFile, $remoteFile, FTP_AUTOSEEK)) {
    echo "Successfully downloaded $remoteFile to $localFile.\n";
} else {
    echo "Error downloading $remoteFile.\n";
}

// // Upload a file to the FTP server
// $uploadLocalFile = "localfile.txt";  // Local file path to upload
// $uploadRemoteFile = "remotefile.txt";  // Remote file path to save on server

// if (ftp_put($ftp, $uploadRemoteFile, $uploadLocalFile, FTP_ASCII)) {
//     echo "Successfully uploaded $uploadLocalFile to $uploadRemoteFile.\n";
// } else {
//     echo "Error uploading $uploadLocalFile.\n";
// }

// // Close the FTP connection
ftp_close($ftp);
echo "FTP connection closed.\n";



?>