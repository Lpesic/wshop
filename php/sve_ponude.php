<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web-shop mobiteli</title>
    <!-- link rel="stylesheet" href="../css/stil.css" -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

</head>

<body>
    <div class="w3-container">
        <nav>
            <div class="w3-bar w3-black">
                <a href="index.html" class="w3-bar-item w3-button">Početna stranica</a>
                <a href="" class="w3-bar-item w3-button">Sve ponude</a>
                <a href="kontakt.html" class="w3-bar-item w3-button">Kontakt</a>
				<a href="registracija.html" class="w3-bar-item w3-button">Registracija</a>
            </div>          
        </nav>
    </div>
    <div class="w3-container">
    <h1>Web shop - mobiteli</h1>    
    <p></p>
    <?php
       $server = "localhost";
       $database = "lpesic";
       $username = "root";
       $password = "";
       $conn = mysqli_connect($server,$username,$password,$database);
       $query = "SELECT * FROM mobiteli";
       $res = mysqli_query($conn,$query);
    ?>
    <div>Popis svih mobitela:
        <table class="w3-table-all">
            <tr class="w3-red">
                <th></th>
                <th>Naziv uređaja</th>
                <th>Proizvođač</th>
                <th>Opis</th>
                <th>Slika</th>
                <th>Cijena</th>
            </tr>
            <?php
                while($row = mysqli_fetch_array($res)){
                   
                  echo "<tr>";
                  echo "<td>".$row['id']."</td>";
                  echo "<td>".$row['naziv']."</td>";
                  echo "<td>".$row['proizvodac']."</td>";
                  echo "<td>".$row['opis']."</td>";
                  echo "<td><img src ='".$row['slika']."'width='100px' alt ='".$row['naziv']."'></td>";
                  echo "<td>".$row['cijena']."</td>";
                  echo "</tr>";
                }
                mysqli_close($conn);
            ?>          
        </table>     
    </div>
    </div>
</body>
</html>