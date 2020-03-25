<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>exo1</title>
	</head>
	<body BGCOLOR="green" >

    <?php
$tab=[1,2,3,4,5,6,7,8,9,10];//array(1,2,3,4,5,6,7,8,9,10);
$total=count ($tab);
const nbParPag=2;
$nbDePag=ceil($total/nbParPag);

for ($i=1;$i<=$nbDePag;$i++){
    echo "<a href='pagi.php?page=$i'>$i.</a>";
}





?>

</body>
</html>