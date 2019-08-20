<?php
if (!isset($_GET['e'])) {
    echo "No Error Defined.";
} else {
    $error = array(
        0,
        "Unknown Error",
        ""
    );
    echo $error[$_GET['e']];
}
