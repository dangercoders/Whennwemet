<?php
/************************************************
	The Search PHP File
************************************************/


/************************************************
	MySQL Connect
************************************************/

// Credentials
$dbhost = "localhost";
$dbname = "whennwemet";
$dbuser = "dangercoders";
$dbpass = "QzrHbpr{1tkW";

//	Connection
global $tutorial_db;

$tutorial_db = new mysqli();
$tutorial_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$tutorial_db->set_charset("utf8");

//	Check Connection
if ($tutorial_db->connect_errno) {
    printf("Connect failed: %s\n", $tutorial_db->connect_error);
    exit();
}

/************************************************
	Search Functionality
************************************************/

// Define Output HTML Formating
/*$html = '';
$html .= '<li class="result">';
$html .= '<a target="_blank" href="urlString">';
$html .= '<h3>nameString</h3>';
$html .= '<h4>functionString</h4>';
$html .= '</a>';
$html .= '</li>';
*/
// Get Search
$search_string = preg_replace("/[^A-Za-z0-9]/", " ", $_POST['query']);
$search_string = $tutorial_db->real_escape_string($search_string);

// Check Length More Than One Character
if (strlen($search_string) >= 1 && $search_string !== ' ') {
	// Build Query
	$query = 'SELECT * FROM userdata WHERE name LIKE "%'.$search_string.'%"';

	// Do Search
	$result = $tutorial_db->query($query);
	while($results = $result->fetch_array()) {
		$result_array[] = $results;
	}

	// Check If We Have Results
	if (isset($result_array)) {
	echo'<div class="row">
        <div class="col-xs-12 col-sm-offset-3 col-sm-6">
            <div class="panel panel-default">
            	<ul class="list-group" id="contact-list">';
		foreach ($result_array as $result) {

			// Format Output Strings And Hightlight Matches
			$display_name = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['name']);
			$display_username = preg_replace("/".$search_string."/i", "<b class='highlight'>".$search_string."</b>", $result['username']);
			$display_url = 'http://whennwemet.com/'.urlencode($result['username']);
			$display_pic=$result['profilepic'];
			echo'<a href="'; echo $display_url; echo'"><li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="';echo $display_pic; echo '" alt="Scott Stevens" class="img-responsive img-circle" width="80px"/>
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">'; echo $display_name; echo'</span><br/>
                            <span class="name">'; echo $display_username; echo'</span><br/>

                        </div>
                        <div class="clearfix"></div>
                    </li></a>';
		/*
			// Insert Name
			$output = str_replace('nameString', $display_name, $html);

			// Insert Function
			$output = str_replace('functionString', $display_function, $output);

			// Insert URL
			$output = str_replace('urlString', $display_url, $output);

			// Output
			echo($output); */
		}
		echo '</ul>
            </div>
        </div>
	</div>';
	}else{

		// Format No Results Output
		$output = str_replace('urlString', 'javascript:void(0);', $html);
		$output = str_replace('nameString', '<b>No Results Found.</b>', $output);
		$output = str_replace('functionString', 'Sorry :(', $output);

		// Output
		echo($output);
	}
}


/*
// Build Function List (Insert All Functions Into DB - From PHP)

// Compile Functions Array
$functions = get_defined_functions();
$functions = $functions['internal'];

// Loop, Format and Insert
foreach ($functions as $function) {
	$function_name = str_replace("_", " ", $function);
	$function_name = ucwords($function_name);

	$query = '';
	$query = 'INSERT INTO search SET id = "", function = "'.$function.'", name = "'.$function_name.'"';

	$tutorial_db->query($query);
}
*/
?>