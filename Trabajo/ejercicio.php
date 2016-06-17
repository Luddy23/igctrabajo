<html>
<head><title>Formulario</title>
<link rel="stylesheet" type="text/css" href="diseno.css">

</head>
<body>
 <div id="global">
 <center>
 <?php

echo "<i>";
echo "<h2>RESULTADO DEL FORMULARIO</h2>";
echo "<dr>";

$num1=495;
$num2=450;
$Mval1=1.0324;
$Mval2=0.19077;
$Mval3=0.15456;
$Fval1=1.29579;
$Fval2=0.35004;
$Fval3=0.221;

$edad=$_REQUEST['edad'];
$porcent="";
$porcentaje="";



if ($_REQUEST['radio1']=="Masculino")
{

$Masculino=($num1/($Mval1-$Mval2*(Log10($_REQUEST['Cintura']-$_REQUEST['Cuello']))+$Mval3*(log10($_REQUEST['Altura'])))-$num2);
	
	echo "El señor :"; 
	echo $_REQUEST['nombre'];
	echo "<br>";
	echo "tiene una  grasa corporal de: ";
	echo $Masculino;
	echo "<br>";
	
	
if (($edad>=19)&&($edad<=24)){
	
    if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&&($Masculino<=9)) {
	$porcent="excelente";}else
	if (($Masculino>=9)&& ($Masculino<=15)) {
	$porcent="bueno";}else	
	if (($Masculino>=15)&&($Masculino<=19)) {
	$porcent="estándar";}else	
	if (($Masculino>=19)&&($Masculino<=23)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=23) {
	$porcent="obesidad";};
}

if (($edad>=25)&&($edad<=29)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&&($Masculino<=10)) {
	$porcent="excelente";}else
	if (($Masculino>=10)&& ($Masculino<=16)) {
	$porcent="bueno";}else	
	if (($Masculino>=16)&& ($Masculino<=19)) {
	$porcent="estándar";}else	
	if (($Masculino>=19)&& ($Masculino<=24)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=24) {
	$porcent="obesidad";};	
	
}
	
if (($edad>=30)&&($edad<=34)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&& ($Masculino<=11)) {
	$porcent="excelente";}else
	if (($Masculino>=11)&& ($Masculino<=17)) {
	$porcent="bueno";}else	
	if (($Masculino>=17)&&($Masculino<=19)) {
	$porcent="estándar";}else	
	if (($Masculino>=19)&& ($Masculino<=25)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=25) {
	$porcent="obesidad";};	
	
}
	
if (($edad>=35)&&($edad<=39)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&&($Masculino<=12)) {
	$porcent="excelente";}else
	if (($Masculino>=12)&& ($Masculino<=18)) {
	$porcent="bueno";}else	
	if (($Masculino>=18)&& ($Masculino<=19)) {
	$porcent="estándar";}else	
	if (($Masculino>=19)&& ($Masculino<=26)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=26) {
	$porcent="obesidad";};	
	
}
	
if (($edad>=40)&&($edad<=44)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&& ($Masculino<=13)) {
	$porcent="excelente";}else
	if (($Masculino>=13)&& ($Masculino<=19)) {
	$porcent="bueno";}else	
	if (($Masculino>=19)&&($Masculino<=20)) {
	$porcent="estándar";}else	
	if (($Masculino>=20)&& ($Masculino<=27)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=27) {
	$porcent="obesidad";};	
	
}
	
if (($edad>=45)&&($edad<=49)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&& ($Masculino<=15)) {
	$porcent="excelente";}else
	if (($Masculino>=15)&&($Masculino<=21)) {
	$porcent="bueno";}else	
	if (($Masculino>=21)&& ($Masculino<=25)) {
	$porcent="estándar";}else	
	if (($Masculino>=25)&& ($Masculino<=28)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=28) {
	$porcent="obesidad";};	
	
	
}
	
if (($edad>=50)&&($edad<=54)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&&($Masculino<=17)) {
	$porcent="excelente";}else
	if (($Masculino>=17)&&($Masculino<=23)) {
	$porcent="bueno";}else	
	if (($Masculino>=23)&& ($Masculino<=26)) {
	$porcent="estándar";}else	
	if (($Masculino>=26)&&($Masculino<=29)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=29) {
	$porcent="obesidad";};	
	
}
	
if (($edad>=55)&&($edad<=59)){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&&($Masculino<=19)) {
	$porcent="excelente";}else
	if (($Masculino>=19)&& ($Masculino<=24)) {
	$porcent="bueno";}else	
	if (($Masculino>=24)&&($Masculino<=28)) {
	$porcent="estándar";}else	
	if (($Masculino>=28)&& ($Masculino<=30)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=30) {
	$porcent="obesidad";};	
	
	
}
	
if ($edad>=60){
    
	if (($Masculino>0)&&($Masculino<=2)) {
	$porcent="esencial";}else
	if (($Masculino>=2)&& ($Masculino<=6)) {
	$porcent="atleta";}else
	if (($Masculino>=6)&& ($Masculino<=20)) {
	$porcent="excelente";}else
	if (($Masculino>=20)&& ($Masculino<=25)) {
	$porcent="bueno";}else	
	if (($Masculino>=25)&& ($Masculino<=29)) {
	$porcent="estándar";}else	
	if (($Masculino>=29)&& ($Masculino<=31)) {
	$porcent="sobrepeso";}else	
	if ($Masculino>=31) {
	$porcent="obesidad";};	
	
}

    echo "<br>";
	echo "su estado nutricional es de:","  ";
	echo $porcent;
	
	

}
if ($_REQUEST['radio1']=="Femenino")

{
	
	$Femenino=($num1/($Fval1-$Fval2*(Log10($_REQUEST['Cintura']+$_REQUEST['Cadera']-$_REQUEST['Cuello']))+$Fval3*(log10($_REQUEST['Altura'])))-$num2);
	
		
	echo "La señora :";
	echo  $_REQUEST['nombre'];
	echo "<br>";
	echo "Tiene una grasa corporal  de: ";
	echo $Femenino;
	echo "<br>";
	echo "su peso es de:  ";
	echo $_REQUEST['peso'];
	 
	
	if (($edad>=19)&&($edad<=24)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=15)) {
	$porcentaje="excelente";}else
	if (($Femenino>=15)&& ($Femenino<=20)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=20)&& ($Femenino<=25)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=25)&& ($Femenino<=30)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=30) {
	$porcentaje="obesidad";};
	
	}
	
	
	if (($edad>=25)&&($edad<=29)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=16)) {
	$porcentaje="excelente";}else
	if (($Femenino>=16)&& ($Femenino<=21)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=21)&& ($Femenino<=26)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=26)&& ($Femenino<=31)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=31) {
	$porcentaje="obesidad";};
	
	}
		if (($edad>=30)&&($edad<=34)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&&($Femenino<=17)) {
	$porcentaje="excelente";}else
	if (($Femenino>=17)&& ($Femenino<=22)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=22)&&($Femenino<=27)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=27)&& ($Femenino<=32)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=32) {
	$porcentaje="obesidad";};
	
		}
		if (($edad>=35)&&($edad<=39)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=19)) {
	$porcentaje="excelente";}else
	if (($Femenino>=19)&& ($Femenino<=23)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=23)&& ($Femenino<=28)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=28)&& ($Femenino<=33)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=33) {
	$porcentaje="obesidad";};
	
		}
		if (($edad>=40)&&($edad<=44)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=21)) {
	$porcentaje="excelente";}else
	if (($Femenino>=21)&& ($Femenino<=24)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=24)&& ($Femenino<=29)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=29)&& ($Femenino<=34)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=34) {
	$porcentaje="obesidad";};
	
		}
		if (($edad>=45)&&($edad<=49)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=23)) {
	$porcentaje="excelente";}else
	if (($Femenino>=23)&& ($Femenino<=26)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=26)&& ($Femenino<=31)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=31)&& ($Femenino<=36)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=36) {
	$porcentaje="obesidad";};
	
		}
	
		if (($edad>=50)&&($edad<=54)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=25)) {
	$porcentaje="excelente";}else
	if (($Femenino>=25)&& ($Femenino<=28)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=28)&& ($Femenino<=33)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=33)&& ($Femenino<=37)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=37) {
	$porcentaje="obesidad";};
	
		}
	
	if (($edad>=55)&&($edad<=59)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=26)) {
	$porcentaje="excelente";}else
	if (($Femenino>=26)&& ($Femenino<=29)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=29)&& ($Femenino<=34)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=34)&& ($Femenino<=38)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=38) {
	$porcentaje="obesidad";};
	
	}
	
	if (($edad>=50)&&($edad<=54)){
	
    if (($Femenino>0)&&($Femenino<=7)) {
	$porcentaje="esencial";}else
	if (($Femenino>=7)&& ($Femenino<=12)) {
	$porcentaje="atleta";}else
	if (($Femenino>=12)&& ($Femenino<=27)) {
	$porcentaje="excelente";}else
	if (($Femenino>=27)&& ($Femenino<=30)) {
	$porcentaje="bueno";}else	
	if (($Femenino>=30)&& ($Femenino<=35)) {
	$porcentaje="estándar";}else	
	if (($Femenino>=35)&& ($Femenino<=39)) {
	$porcentaje="sobrepeso";}else	
	if ($Femenino>=39) {
	$porcentaje="obesidad";};
	
	
	
	
}
	
	echo "<br>";
	echo "su estado nutricional es de:","  ";
	echo $porcentaje;
	
	
	
}	


 




?></center>
</div>
</body>
</html>
