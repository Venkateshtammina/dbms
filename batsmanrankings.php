<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body style="margin: 50px;">
    <table class="table">
        <thead>
            <tr>
                <th>Player Name</th>
                <th>Runs</th>
                <th>Team</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "cricket";

            $connection = new mysqli($servername , $username, $password, $database);
             if($connection->connect_error){
                die("Connection failed:" . $connection->connect_error);
             }
             $sql="SELECT * FROM player where type= 'batsman' order by runs desc";
             $result = $connection->query($sql);
             if(!$result){
                die("Invalid query:" . $connection->error);
             }
             while($row = $result->fetch_assoc()){

             
             echo "<tr>
             <td>" . $row["playername"] . "</td>
             <td>" . $row["runs"] . "</td>
             <td>" . $row["name"] . "</td> 
             </tr>";
             }
            ?>
        </tbody>
    </table>
</body>
</html>