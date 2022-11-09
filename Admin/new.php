<?php
include 'connectdb.php';
                    $sqlrent = "SELECT * FROM rent where statusin = 0 ";
                    $resultrent = $conn->query($sqlrent);

                    $rowcountrent = mysqli_num_rows($resultrent);
echo $rowcountrent ;
                    ?>