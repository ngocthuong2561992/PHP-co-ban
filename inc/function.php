<?php
function kt_query($result, $query)
{
    global $dbc;
    if(!$result) {
        die("Query {$query} \n <br/> MYSQL Error:".mysqli_error($dbc));
    }
}
?>