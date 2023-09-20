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
        <div class="title">ALL ARTWORK IN THE DATABASE</div>
        <?php
        $conn = mysqli_connect('localhost','root','','artgallery');
        $query = "SELECT * FROM artwork";
        echo '<table bgcolor=#ffffff border="2" cellspacing="10" cellpadding="10"> 
      <tr> 
          <td> <font face="Arial">AWID</font> </td> 
          <td> <font face="Arial">  name</font> </td> 
          <td> <font face="Arial">  category</font> </td> 
          <td> <font face="Arial">  description</font> </td> 
          <td> <font face="Arial">  price</font> </td> 
          <td> <font face="Arial">  AID</font> </td> 
          <td> <font face="Arial">  loginID</font> </td> 
          <td> <font face="Arial">  imagelink</font> </td> 
      </tr>';

if ($result = $conn->query($query)) 
{
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["AWID"];
        $field2name = $row["name"];
        $field3name = $row["category"];
        $field4name = $row["description"];
        $field5name = $row["price"]; 
        $field6name = $row["AID"]; 
        $field7name = $row["loginid"]; 
        $field8name = $row["imgsrc"]; 

        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  <td>'.$field4name.'</td> 
                  <td>'.$field5name.'</td> 
                  <td>'.$field6name.'</td>
                  <td>'.$field7name.'</td>
                  <td>'.$field8name.'</td>
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