<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
   <style>
     th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
     }
    th{
      background-color: #04AA6D;
      color: #fff;
      cursor: pointer;
    }
    
   </style>
</head>

<body>
   
    <div class="container my-5">
        <h2>List of Customers</h2>
        <br>
        <table class="table">
            <thead>
            <tr>
                <th style="background-color: #04AA6D;">ID</th>
                <th style="background-color: #04AA6D;">Name</th>
                <th style="background-color: #04AA6D;">Email</th>
                <th style="background-color: #04AA6D;">Contact</th>
                <th style="background-color: #04AA6D;">Gender</th>


            </tr>
            </thead>
            <tbody>
            <?php
    $connection = mysqli_connect("localhost", "root", "", "demo");

    if($connection->connect_error){
        die("Connection Failed:" . $connection->connect_error);
    }

    $sql ="SELECT * FROM registration";
    $result = $connection->query($sql);

    if(!$result){
        die("Invalid query:" . $connection->error);
    }else{
        while($row = $result->fetch_assoc()){
       $id = $row["id"];
       $name = $row["name"];
       $email = $row["email"];
       $contact = $row["contact"];
       $gender = $row["gender"];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$contact.'</td>
        <td>'.$gender.'</td>

        </tr>';

    }
}
    ?>

            </tbody>
         
        </table>
    </div>
    
</body>
</html>