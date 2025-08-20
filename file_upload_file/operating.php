<?php 

// function         Description                                                   Output
// exec()	        Executes a command, returns the last line of output.	      String, Array (optional)
// shell_exec()	    Executes a command, returns the entire output as a            string.	String
// system()	        Executes a command, outputs line-by-line, returns last line.  String
// passthru()	    Executes a command, outputs raw data directly.	              Direct output



// $output = [];
// $returnStatus = null;
// $lastLine = exec("dir", $output, $returnStatus);

// echo "Last line of output: $lastLine\n";
// print_r($output);       // Prints each line of output as an array
// echo "Return status: $returnStatus\n";


// $returnStatus = null;
// $lastLine = system("ls -la", $returnStatus);

// echo "Last line of output: $lastLine\n";
// echo "Return status: $returnStatus\n";


// $ps= passthru("dir");

// echo $ps;


// $output = shell_exec("dir");
// echo "<pre>$output</pre>";


// $output = shell_exec("wmic logicaldisk get size,freespace,caption");
// echo "<pre>$output</pre>";


// $output = shell_exec("date");
// echo "<pre>$output</pre>";


// shell_exec("type nul > newfile.txt");
// echo "File created.";


// $output = shell_exec("type newfile.txt");
// echo "<pre>$output</pre>";

// shell_exec("del newfile.txt");
// echo "File deleted.";

// $output = shell_exec("systeminfo");
// echo "<pre>$output</pre>";



// $output = shell_exec("tasklist");
// echo "<pre>$output</pre>";


?>