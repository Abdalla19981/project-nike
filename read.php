<?php 
    include("./connect_db.php");

    $sql = "SELECT * FROM `nike`";

    $result = mysqli_query($conn, $sql);

    mysqli_fetch_assoc($result);
    $row = "";
    while ( $record = mysqli_fetch_assoc($result)){
        // var_dump($record);

        $row .= "<tr>
                 <td>{$record["ID"]}</td> 
                 <td>{$record["Name"]}</td> 
                 <td>{$record["Email"]}</td>
                 <td>{$record["Phone"]}</td>
                 <td>{$record["Message"]}</td>
                </tr>";
    }
?>
                 
