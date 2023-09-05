<?php
$page_title = "Big Bang Prime Numbers";
include('includes/header.php');
?>

<head>
    <title>Big Bang Prime Numbers</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 5px;
        }

        .bigbang-card {
            background-color: #010b19;
            color: white;
        }

        .bang-card {
            background-color: #173a68;
            color: white;
        }

        .big-card {
            background-color: #5484af;
            color: white;
        }
    </style>
</head>
<body>

    <?php
    $result = array();

    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            $result[] = "BIGBANG";
        } elseif ($i % 3 == 0) {
            $result[] = "BIG";
        } elseif ($i % 5 == 0) {
            $result[] = "BANG";
        } else {
            $result[] = strval($i);
        }
    }

    file_put_contents('output.json', json_encode($result));
    
    // Read and display the generated result from output.json
    $result = json_decode(file_get_contents('output.json'));

    echo '<div class="container-fluid">
    <div class="row">';
    foreach ($result as $value) {
        $cardClass = '';
        if ($value === "BIGBANG") {
            $cardClass = " bigbang-card";
        } elseif ($value === "BIG") {
            $cardClass = " big-card";
        } elseif ($value === "BANG") {
            $cardClass = " bang-card";
        }        
        
        echo '
        <div class="col-md-2">
            <div class="card border rounded-4 shadow my-4' . $cardClass . '">
                <div class="card-body" style="height: 100px; overflow: auto;">
                    <h5 class="card-title">' . $value . '</h5>
                </div>
            </div>
        </div>';
    }
    echo '</div></div>';
    ?>

</body>
