<html>

<body>
    <?php
    echo '<body style="background-color:skyblue">';
    echo '<FONT COLOR="red">';
    echo "<center><h1>This is My First Web Page in PHP</h1><br>";
    echo "<h2><u>Basic of PHP</u></h2><br>";
    echo "PHP is a language for <b>Web designing</b>. this is little bit similar like <b>HTML</b><br>";
    echo "<ol><b>MY FAVORITE SPORT</b></ol>";
    echo "<li> Cricket </li>";
    echo "<li> Football </li>";
    echo "<li> Volyball </li>";
    echo "<li> Badminton </li><br><br>";
    echo "<table border='5'>
          <tr>
          <th>Id</th>
          <th>name</th>
          <th>Mobile</th>
          <th>email</th>
          </tr>";
    echo "<tr>";

    echo "<td> Mohit18</td>";

    echo "<td> Mohit Tiwari </td>";

    echo "<td> 123456789 </td>";

    echo "<td> mohit@gmail.com </td>";

    echo "</tr>";
    echo "<tr>";

    echo "<td> virat18</td>";

    echo "<td> virat kohli </td>";

    echo "<td> 123456789 </td>";

    echo "<td> Virat@gmail.com </td>";

    echo "</tr>";
    echo "<tr>";

    echo "<td> Dhoni07</td>";

    echo "<td> MSDhoni </td>";

    echo "<td> 123456789 </td>";

    echo "<td> MSDhoni@gmail.com </td>";

    echo "</tr>";




    echo "</table><br><br><br>";
    echo '<form action="upload.php" method="post" enctype="multipart/form-data">';
    echo "Select image to upload:";
    echo '<input type="file" name="fileToUpload" id="fileToUpload">';
    echo '<input type="submit" value="Upload Image" name="submit">';
    echo '</form>';
    ?>
</body>

</html>