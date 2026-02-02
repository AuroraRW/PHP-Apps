<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $search_query = $_GET["query"]; // Vulnerable line, if input <script>alert('Hacked')</script>
    echo "Search: " . $search_query;


    // correct version:  <script>  to   &lt;script&gt;
//     $search_query = htmlspecialchars(trim($_GET["query"]));
//     echo "Search: " . $search_query;
}

?>