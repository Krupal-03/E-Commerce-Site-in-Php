<?php
include_once("/storage/emulated/0/Venter/HopWeb/Projects/My Website/config.php");
?>
<html>
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" id="viewport" content="width=device-width, initial-scale=1">
<style>
td{
border-radius:10%;
}
body{
background-size: cover;


background-repeat:repeat(-y);
}
a{
color: black;
}
th{
text-align: centere;
align-items: centre;
width: 100%;
}
</style>
    </head>
    <body background="bg7.jpeg">


    
        <table width="100%" height="25%"  >
<tr>
<th colspan="5"><h1><?php
echo $title;
 ?></h1>
</th>
</tr>
<tr >
<td border-radius:10px; ><a color="black"  href="index.php">Home</a></td>
<td><a  href="product.php">Product</a></td>
<td><a  href="about.php">About</a></td>
<td><a  href="search.php">🔎</a></td>
<td><a  href="setting.php">⚙️</a></td>

</tr>
</table>
    
	
    </body>

</html>