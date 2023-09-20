<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/login.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>All artwork</title>
</head>
<body>
<section>
        <img src="../img/feather.png" width="90" height="90" class="d-inline-block align-top mt-5" alt="">
        <div class="title">ALL ARTISTS IN THE DATABASE</div>
        <?php
        $conn = mysqli_connect('localhost','root','','artgallery');
        $query = "SELECT * FROM artist";
        echo '<table bgcolor=#ffffff border="2" cellspacing="5" cellpadding="5"> 
      <tr> 
          <td> <font face="Arial">AID</font> </td> 
          <td> <font face="Arial">  name</font> </td> 
          <td> <font face="Arial">  age</font> </td> 
          <td> <font face="Arial">  phno</font> </td> 
          <td> <font face="Arial">  gender</font> </td> 
          <td> <font face="Arial">  address</font> </td> 
          <td> <font face="Arial">  email</font> </td> 
          <td> <font face="Arial">  desciption</font> </td> 
          <td> <font face="Arial">  imagelink</font> </td> 
      </tr>';

if ($result = $conn->query($query)) 
{
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["AID"];
        $field2name = $row["name"];
        $field3name = $row["age"];
        $field4name = $row["phno"];
        $field5name = $row["gender"]; 
        $field6name = $row["address"]; 
        $field7name = $row["email"]; 
        $field8name = $row["description"]; 
        $field9name = $row["imgsrc"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
                  <td>'.$field9name.'</td>
              </tr>';
    }
    $result->free();
} 
echo '<form action="admin-home.html">
<input type="submit" value="home" />
</form>';
?>
</body>
</html>