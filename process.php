<?php
// show form
if(isset($_REQUEST['action'] ) && $_REQUEST['action'] == "show_form"){
    echo "
    <br>
    <h2>Register Form</h2>
    <br>
    <table >
        
        <tr>
           <td>Enter your Name</td>
           <td><input type='text' name='name' id='name' ></td>
         </tr>
         <tr>
             <td>Enter your Email</td>
             <td><input type='text' name='email'  id='email'></td>
         </tr>
         <tr>
             <td>Enter yoru password</td>
             <td><input type='password' name='password' id='password'></td>
         </tr>
         <tr>
             
             <td colspan='2' style='border:none; text-align:center; padding:10px' >
                 <button  onclick='insert_record()' >Register</button>
                 
             </td>
         </tr>
     </table>
     <br>
    ";

}


// insert record
if(isset($_REQUEST['action'] ) && $_REQUEST['action'] == "insert_record"){
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];

    $connection = mysqli_connect("localhost","root","","student_record");

    if (mysqli_connect_error()) {
        echo "Connection faild";
        echo mysqli_connect_error();
    }
    else{
        // echo "Connection Established";
    }

    $query = "INSERT INTO students (name, email, password) VALUES ('$name','$email','$password')";
    $result = mysqli_query($connection, $query);
    if ($result) {
        echo "Record Inserted";
        
    }
    else{
        echo "Record Not Inserted";
    }
}
    



// <!-- show record -->

if(isset($_REQUEST['action']) && $_REQUEST['action'] == "show_record"){


    $connection = mysqli_connect("localhost","root","","student_record");

if (mysqli_connect_error()) {
    echo "Connection faild";
    echo mysqli_connect_error();
}
else{
    // echo "Connection Established";
}

$query = "SELECT * FROM students ORDER BY id DESC";
$result = mysqli_query($connection, $query);



echo " <div style='background-color: yellow;' align='center'>
<table>
    <thead>
        <th>#</th>
        <th>name</th>
        <th>email</th>
        <th>Actions</th>
    </thead>
";
$no = 1;
while ($row = mysqli_fetch_assoc($result)) {
   
    
    echo "<tr>
    <td> ".$no." </td>
    <td> ".$row['name']." </td>
    <td>". $row['email'] ."</td>
    
    <td><button onclick='edit_record(this.id)' id='".$row['id']."' > Edit </button>
    <button onclick='delete_record(this.id)' id='".$row['id']."'> Delete </button></td>
</tr>

";
 $no++;  
}
echo " </table>
</div>";

}



        // delete Record

        if(isset($_REQUEST['action']) && $_REQUEST['action'] == "delete_record"){

            $id = $_REQUEST['id'];

            $connection = mysqli_connect("localhost","root","","student_record");
        
            if (mysqli_connect_error()) {
                echo "Connection faild";
                echo mysqli_connect_error();
            }
            else{
                // echo "Connection Established";
            }
        
            $query = "DELETE FROM `students` WHERE `id` = ".$id."";
            $result = mysqli_query($connection, $query);
            if ($result) {
                echo "Record Deleted";
                
            }
            else{
                echo "Record Not Deleted";
            }
        }


        
        // select Record form Updating

        if(isset($_REQUEST['action']) && $_REQUEST['action'] == "select_record"){

            $id = $_REQUEST['id'];

            $connection = mysqli_connect("localhost","root","","student_record");
        
            if (mysqli_connect_error()) {
                echo "Connection faild";
                echo mysqli_connect_error();
            }
            else{
                // echo "Connection Established";
            }
        
            $query = "SELECT * FROM `students` WHERE `id` = ".$id."";
            $result = mysqli_query($connection, $query);
            if ($row = mysqli_fetch_assoc($result)) {
                //  print_r($row);
                
                echo "

                <h2>Update Record</h2>
                <table >
          
                <tr>
                    <td>Enter your Name</td>
                    <td><input type='text' name='name' id='myname' value='".$row['name']."' ></td>
                </tr>
                <tr>
                    <td>Enter your Email</td>
                    <td><input type='text' name='email'  id='myemail' value='".$row['email']."'></td>
                </tr>
                <tr>
                    <td>Enter yoru password</td>
                    <td><input type='password' name='password' id='mypassword' value='".$row['password']."'></td>
                </tr>
                <tr>
               
                    <td colspan='2' style='border:none; text-align:center; padding:10px' >
                    <button  onclick='update_record()' >Update</button>
                    <button  onclick='register()' >Register</button>
                    
                </td>
                </tr>
            </table>
                ";
                
            }
            else{
                echo "Record Not Found";
            }
        }


        
        // Update Record

        if(isset($_REQUEST['action']) && $_REQUEST['action'] == "update_record"){

            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];

            $connection = mysqli_connect("localhost","root","","student_record");
        
            if (mysqli_connect_error()) {
                echo "Connection faild";
                echo mysqli_connect_error();
            }
            else{
                // echo "Connection Established";
            }
            $query = "UPDATE `students` SET `name` = '".$name."' , `email` = '".$email."' , `password` = '".$password."' WHERE `id` = '".$id."'"; 
            // $query = "DELETE FROM `students` WHERE `id` = ".$id."";
            $result = mysqli_query($connection, $query);
            if ($result) {
                echo "Record Updated";   
            }
            else{
                echo "Record Not Updated";
            }
        }




?>
   
