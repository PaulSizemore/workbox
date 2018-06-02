<?php
// create and load the HTML
include('simple_html_dom.php');
$html = new simple_html_dom();
ini_set('display_errors', 'On');

																							//  connection variables
																							$servername = "localhost";
																							$username = "root";
																							$password = "root";
																							$dbname = "MailWorkBox";
																							$conn = new mysqli($servername, $username, $password, $dbname);
																							// Check connection
													$sql = "Select   * from pages where id =1  ";
													$pageResult = $conn->query($sql);
													while($row = $pageResult->fetch_assoc()) {   
													$pageContent = $row["htmlCode"];
													$html = file_get_html('humSample.html');
													
													
// Write into the head
$appendcode = '    <!-- Inserted with append code -->  <!-- Bootstrap 3 css -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Angular.js -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
    <!-- Angular-xeditable -->
    <link href="/css/xeditable.css" rel="stylesheet">
    <script src="/js/xeditable.js"></script>
    <!-- app.js -->
    <script src="app.js"></script>';
$html->find('head',0)->innertext .= $appendcode;


// Wrap the controler inside the body
$html->find('body',0)->innertext = ' <Div ng-controller="Ctrl">' . $html->find('body',0)->innertext. '</div>';


//$html->find('body',0)->innertext = '{{ user.name || "empty" }}';



//to find h1 headers from a webpage
$pTags = array();
foreach($html->find('p') as $header) {
 $pTags[] = $header->plaintext;
// $header->editabletext = 'topiclink';

 
$header->plaintext = '{{ user.name || "empty" }}';
//$html->find('div',0)->innertext = '';
// $html->find('p',0)->innertext = '';
}
//print_r($pTags);


$counter = 1; 
foreach ($pTags as $value) {
//strpos


$formatter = new NumberFormatter('en_US', NumberFormatter::SPELLOUT);
$formatter->setTextAttribute(NumberFormatter::DEFAULT_RULESET,
                             "%spellout-ordinal");

$wordCount =  $formatter->format($counter) . PHP_EOL;



// Create the app.js Code 
//echo "  $wordCount: '$value',";


// Create the app.js Code 

    $counter = $counter +1;
}

// Write the existing content into the app.js file , and replace the innertext with the [[ ]] 

// Write     ---  editable-text="xxxx.text"  ---  into all the areas that I want to edit
$pageContent = str_replace("<p ","<p  editable-text= \"pTag.second\" ","$html");

echo  $pageContent;				
}
 $conn->close();
?>