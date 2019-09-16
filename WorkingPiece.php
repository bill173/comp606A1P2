<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tabs Introduction</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <style>
#tabs{/*style the tabs*/
    width:800px;
    margin:auto;
    border-radius:10px;
    padding:10px 20px 300px;
    margin-top:10px;
    background-color:lightgreen;
    }
body{background-color: powderblue;}/*style the background color*/
p   {color: blue;}/*style the paragraph color*/
</style>

  <script>
  $( function() {//collapse
    $( "#tabs" ).tabs({
      collapsible: true
    });
  } );
  </script>
    <script>
  $( function() {//make it sortable
    var tabs = $( "#tabs" ).tabs();
    tabs.find( ".ui-tabs-nav" ).sortable({
      axis: "x",
      stop: function() {
        tabs.tabs( "refresh" );
      }
    });
  } );
  </script>
    <script>
  $( function() {//mouseover, so here we mouse over twice means we collapse the tab
    $( "#tabs" ).tabs({
      event: "mouseover"
    });
  } );
  </script>
</head>
<body>
 
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">COMP606</a></li>
    <li><a href="#tabs-2">COMP601</a></li>
    <li><a href="#tabs-3">INF0701</a></li>
    <li><a href="#tabs-4">ITPD711</a></li>
    <li><a href="#tabs-5">INFO601</a></li>
  </ul>
  <div id="tabs-1">
    <p><strong>Web Programming</strong></p>
    <p>The purpose of this course is to enable students to gain the in depth knowledge and skills required to be able to write programs in web programming languages that solve various web programming tasks.</p>
  </div>
  <div id="tabs-2">
    <p><strong>Object Oriented Programming</strong></p>
    <p>This course further develops your knowledge of good programming principles and procedures of software development by exploring the object oriented programming paradigm. The Java programming language is used in the course.</p>
  </div>
  <div id="tabs-3">
    <p><strong>Project Management</strong></p>
    <p>This module examines the processes of project management with particular reference to Information Technology projects.  This course uses both the Project Management Body of Knowledge (PMBOK) and the PRINCE2 methodologies to provide a comprehensive introduction to project management.  It is important that you log in regularly and keep up with the forums, class preparation and readings.</p>
  </div>
  <div id="tabs-4">
    <p><strong>IT Essentials</strong></p>
    <p>The aim of this module is to enable students grasp a broad operational knowledge of System analysis and design, Database's and Programming.</p>
  </div>
  <div id="tabs-5">
    <p><strong>Data Modelling and SQL</strong></p>
    <p>This module will provide you with practical knowledge of data modelling and SQL and its role in industry.</p>
  </div>
</div>
 
</body>
</html>