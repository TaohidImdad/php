<!-- fopen()	Open a file
fwrite()	Write data to a file
fread()	Read data from a file
fclose()	Close a file
file_get_contents()	Read entire file as a string
file_put_contents()	Write data to file
fgets()	Read a single line from a file
feof()	Check if end of file is reached
file_exists()	Check if file exists
unlink()	Delete a file
copy()	Copy a file
rename()	Rename/move a file
mkdir()	Create a new directory
rmdir()	Remove an empty directory
scandir()	List files/directories in a directory
chmod()	Change file permissions
basename()	Get filename from a path
dirname()	Get directory path
filesize()	Get file size in bytes
is_file() -->

<?php 


$file = fopen("example.txt", "w"); // Opens file in write mode
if ($file) {
    echo "File opened successfully.";
    fclose($file); // Close the file after opening
}


$file = fopen("example.txt", "w");
fwrite($file, "Hello, World!"); // Writes "Hello, World!" to example.txt
fclose($file);


$file = fopen("example.txt", "r");
$content = fread($file, filesize("example.txt")); // Reads the entire file
echo $content;
fclose($file);



$file = fopen("example.txt", "r");
while ($line = fgets($file)) {
    echo $line; // Prints each line in the file
}
fclose($file);



$file = fopen("example.txt", "r");
while (!feof($file)) {
    echo fgets($file); // Reads line by line until end of file
}
fclose($file);




$content = file_get_contents("example.txt");
echo $content;

file_put_contents("example.txt", "New content for the file.");


if (file_exists("example.txt")) {
    echo "File exists!";
} else {
    echo "File does not exist.";
}


if (file_exists("example.txt")) {
    unlink("example.txt"); // Deletes example.txt
    echo "File deleted.";
}


copy("example.txt", "example_copy.txt"); // Creates a copy of example.txt

mkdir("new_folder"); // Creates a new directory called new_folder


rmdir("new_folder"); // Removes the directory called new_folder

$files = scandir("."); // Lists all files in the current directory
print_r($files);


chmod("example.txt", 0644); // Sets file permissions for example.txt

echo basename("/path/to/example.txt"); // Outputs: example.txt

echo dirname("/path/to/example.txt"); // Outputs: /path/to

echo filesize("example.txt"); // Outputs the size of example.txt in bytes


if (is_file("example.txt")) {
    echo "It's a file.";
} else {
    echo "It's not a file.";
}




?>