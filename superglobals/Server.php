<?php

// $_SERVER['PHP_SELF']	The filename of the currently executing script, relative to the root directory.
// $_SERVER['SERVER_NAME']	The name of the server host (e.g., example.com).
// $_SERVER['HTTP_HOST']	The Host header from the request, typically the domain name.
// $_SERVER['SERVER_PORT']	The port on the server being used for the request (usually 80 for HTTP and 443 for HTTPS).
// $_SERVER['REMOTE_ADDR']	The IP address of the client making the request.
// $_SERVER['REMOTE_PORT']	The port on the client machine used for the connection.
// $_SERVER['REQUEST_METHOD']	The HTTP method used for the request (e.g., GET, POST, PUT, DELETE).
// $_SERVER['QUERY_STRING']	The query string if the URL contains parameters (e.g., id=10&name=John).
// $_SERVER['HTTP_USER_AGENT']	The user agent string of the client’s browser.
// $_SERVER['HTTP_REFERER']	The URL of the referring page if the user came to this page from another page.
// $_SERVER['SCRIPT_NAME']	The path of the currently executing script.
// $_SERVER['REQUEST_URI']	The URI used to access the page, including the path and query string.
// $_SERVER['SERVER_SOFTWARE']	The server software and version (e.g., Apache/2.4.41 (Ubuntu)).
// $_SERVER['SERVER_PROTOCOL']	The name and version of the protocol used for the request (e.g., HTTP/1.1).
// $_SERVER['SCRIPT_FILENAME']	The absolute pathname of the currently executing script.
// $_SERVER['DOCUMENT_ROOT']	The document root directory for the current script.
// $_SERVER['REQUEST_TIME']	The timestamp of the start of the request (in seconds since the Unix epoch).
// $_SERVER['HTTPS']	Set to on if the request is made over HTTPS, or not set otherwise.
// $_SERVER['PATH_INFO']	Contains any additional path information provided by the client (useful in RESTful applications).
// $_SERVER['HTTP_ACCEPT']	The Accept header from the client, which indicates the types of content the client can understand.
// $_SERVER['HTTP_ACCEPT_LANGUAGE']	The Accept-Language header from the client, which indicates the preferred language(s) of the client.
// $_SERVER['SERVER_ADMIN']	The email address of the server’s administrator as defined in the server configuration.


// echo "Current Script: " . $_SERVER['PHP_SELF'] . "<br>";
// echo "Server Name: " . $_SERVER['SERVER_NAME'] . "<br>";
// echo "Client IP Address: " . $_SERVER['REMOTE_ADDR'] . "<br>";
// echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "<br>";
// echo "Query String: " . $_SERVER['QUERY_STRING'] . "<br>";
// echo "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
// echo "Request URI: " . $_SERVER['REQUEST_URI'] . "<br>";

 print_r($_SERVER);
?>