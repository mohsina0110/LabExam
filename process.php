<?php
    require('db.php');


    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $fname=$_REQUEST["fname"];
        $lname=$_REQUEST["lname"];
        $email=$_REQUEST["email"];
        $gender=$_REQUEST["r1"];
        $mobile=$_REQUEST["mobile"];
        $dob=$_REQUEST["dob"];
        $hsc=$_REQUEST["hsc"];
        $ssc=$_REQUEST["ssc"];
        $course=$_REQUEST["course"];
        $year=$_REQUEST["year"];
        $semester=$_REQUEST["semester"];

        $data = new db;
        $success_message = '';
        $insert_data = array(
                'fname'    =>     mysqli_real_escape_string($data->con, $_POST['fname']),
                'lname'    =>     mysqli_real_escape_string($data->con, $_POST['lname']),
                'email'    =>     mysqli_real_escape_string($data->con, $_POST['email']),
                'r1'       =>     mysqli_real_escape_string($data->con, $_POST['r1']),
                'mobile'   =>     mysqli_real_escape_string($data->con, $_POST['mobile']),
                'dob'      =>     mysqli_real_escape_string($data->con, $_POST['dob']),                              
                'hsc'      =>     mysqli_real_escape_string($data->con, $_POST['hsc']),
                'ssc'      =>     mysqli_real_escape_string($data->con, $_POST['ssc']),
                'course'   =>     mysqli_real_escape_string($data->con, $_POST['course']),
                'year'     =>     mysqli_real_escape_string($data->con, $_POST['year']),
                'semester' =>     mysqli_real_escape_string($data->con, $_POST['semester'])

            );

        if($data->insert('new_students', $insert_data))
        {
            echo "data inserted successfully";
        }      
    }
?>