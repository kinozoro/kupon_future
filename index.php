<!doctype html>
<html>
<head>
    <!-- jquery from google and mobile jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <!-- end of jquery from google and mobile jquery -->
</head>
<body>
  <input type="checkbox" name="notid" id="notid">
  <input type="checkbox" name="aliexpress" id="aliexpress">
  <input type="checkbox" name="nobooks" id="nobooks">

<div id="categs">
        <select id="Select">
            <value>товары</value>
            <value>продукты</value>
            <value>услуги</value>
            <value></value>
        </select>
        <select id="Select2">
            <value>товары</value>
            <value>продукты</value>
            <value>услуги</value>
            <value></value>
        </select>

</div>
<div>
    <input id="input" type="text" onchange="moreload()"/>
</div>
<button class="startbutton" onclick="searchXML()">нажмите для старта </button>

    <div id="pagination">

    </div>

<div id="results">

</div>
</body>


<script src="search-product.js" ></script>
