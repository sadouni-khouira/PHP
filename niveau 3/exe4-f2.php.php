
    <!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>
Test Formulaire PHP
</title>
<style>
table,tr,td {
    
  border: 1px solid black;
}
</style>
</head>
<body>
<div style="width:800px;height:200px;margin-top:150px ;margin-left:400px;">
       <table>
 
        <tr>
              <td>NOM </td>
              <td>Téléphone </td>
              <td>Email </td>
              <td>Adresse </td>
              <td> Code Postal </td>
        </tr>
  
   
        <tr<>
            <td><?php  echo "<div style= text-align:center>";   
             echo  $_POST["nom"]; echo"<br>";
             echo "</div>"; ?>           
          </td>
          <!--  <td> ?php echo "<div style= text-align:center>"; echo $_POST"Téléphone";echo"<br>"; echo "</div>"; ?> ---><!-- </td>--->
          <td> <?php echo "<div style= text-align:center>"; echo $_POST["tel1"];echo $_POST["tel2"];echo $_POST["tel3"]; echo $_POST["tel4"];echo $_POST["tel5"];echo"<br>"; echo "</div>"; ?>  </td>

            <td> <?php echo "<div style= text-align:center>"; echo $_POST["email"];echo"<br>"; echo "</div>"; ?></td>
            <td> <?php echo "<div style= text-align:center>";  echo   $_POST["adresse"];echo"<br>"; echo "</div>"; ?></td>
            <td> <?php echo "<div style= text-align:center>"; echo  $_POST["number"]; echo "</div>"; ?></td>
        </tr>
    
</table> 
 </div>
</body>

</html> 
