<?php
include_once 'header.php';
?>

<html>
<head>
    <style>

        .container > #main_body {background:#e08d21;
            border-radius: 20px;
            margin:25px;
            padding: 50px;
            text-align:center;
            color:black;

        }

        form {background-color:#3333;
            border-radius:5px;
            margin:20px;
            padding:10px;
            text-align:center;
            width:50%;
            center;
        }
        form > input{
            display: inline-block;
            font-size:1.5em;
            margin:10px;
            padding:5px;
            border-radius:4px;
        }
    </style>
</head>
<body>

<div class="container">
    <div id="main_body">
         <h1> Sansa's Medicine Cabinet</h1>
    </div>
</div>
<?php
require_once "presentation/views/_searchProducts.php";

require_once "presentation/views/_searchUsers.php";
?>




</body>





</html>