


<?php

require('../config/config.php');
require('../function/function.inc.php');

if(isset($_POST['submit'])) {
        $std_reg_no = mysqli_real_escape_string($conn, $_POST['std_reg_no']);
        $std_area = mysqli_real_escape_string($conn, $_POST['std_area']);
        $std_dep = mysqli_real_escape_string($conn, $_POST['std_dep']);
        $std_qadeem = mysqli_real_escape_string($conn, $_POST['std_qadeem']);
        $std_name = mysqli_real_escape_string($conn, $_POST['std_name']);
        $std_father_name = mysqli_real_escape_string($conn, $_POST['std_father_name']);
        $std_dbo = mysqli_real_escape_string($conn, $_POST['std_dbo']);
        $std_birth_place = mysqli_real_escape_string($conn, $_POST['std_birth_place']);
        $std_address = mysqli_real_escape_string($conn, $_POST['std_address']);
        $guar_name = mysqli_real_escape_string($conn, $_POST['guar_name']);
        $guar_relation = mysqli_real_escape_string($conn, $_POST['guar_relation']);
        $guar_number = mysqli_real_escape_string($conn, $_POST['guar_number']);
        $guar_address = mysqli_real_escape_string($conn, $_POST['guar_address']);
        $pre_school = mysqli_real_escape_string($conn, $_POST['pre_school']);
        $pre_class = mysqli_real_escape_string($conn, $_POST['pre_class']);
        $next_class = mysqli_real_escape_string($conn, $_POST['next_class']);
        $adm_date = mysqli_real_escape_string($conn, $_POST['adm_date']);

        $sql = "INSERT INTO `st_admission`(`std_reg_no`, `std_area`, `std_dep`, `std_qadeem`, `std_name`, `std_father_name`, `std_dbo`, 
        `std_birth_place`, `std_address`, `guar_name`, `guar_relation`, `guar_number`, `guar_address`, `pre_school`, `pre_class`, `next_class`, 
        `adm_date`, `create_by`, `create_date`) 
            VALUES ('$std_reg_no', '$std_area', '$std_dep', '$std_qadeem', '$std_name', '$std_father_name', '$std_dbo', '$std_birth_place', 
            '$std_address', '$guar_name', '$guar_relation', '$guar_number', '$guar_address', '$pre_school', '$pre_class', '$next_class', 
            '$adm_date', 'admin', NOW())";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            ?>
            <script>
                alert("New record created successfully");
                </script>
            <?php
            // echo "New record created successfully";
            header('location: st-admission-form.php');
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } 
?>
