<?php
// create and load the HTML
include('simple_html_dom.php');
$html = new simple_html_dom();
ini_set('display_errors', 'On');


$html = file_get_html('humSample.html');
									
// Write into the head
//$appendcode = '    <!-- Inserted with append code -->  <!-- Bootstrap 3 css -->
//    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
//    <!-- Angular.js -->
//    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.0.8/angular.min.js"></script>
//    <!-- Angular-xeditable -->
//    <link href="/css/xeditable.css" rel="stylesheet">
//    <script src="/js/xeditable.js"></script>
//    <!-- app.js -->
//    <script src="app.js"></script>';
//$html->find('head',0)->innertext ;

// Wrap the controler inside the body
$html->find('body',0)->innertext = ' <Div ng-controller="Ctrl">' . $html->find('body',0)->innertext. '</div>';

//all p  into an array - these will be written to the app.js file 
$pTags = array();
foreach($html->find('p') as $header) {
 $pTags[] = $header->plaintext;
 // Replace the innertext with the  referencable inner text 

 // Write the new attribute to the html file 
 
}


//$idli = $html->find('p', 0)->plaintext;
//if($idli) echo 'First p id: '. $idli."<HR>";
//$name = $html->find('p', 2)->plaintext;

// Get the id of the first LI in UL, and change its content

//$html->find('div', 0)->innertext = '<b>------------------------------------------</b>';


//echo $name;

echo $html;
?>