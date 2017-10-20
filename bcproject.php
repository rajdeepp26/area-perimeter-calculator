<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style type="text/css">
<!--
body {
	background-color: #0066FF;
	background-image: url(CATPLE_WALLPAPERS_6560.jpg);
	margin-top: 100px;
}
-->
</style></head>

<body>
<form name="form1" method="post" action="">
  <h1 align="center"><em><strong>Efficient use of button type=button &amp; submit together </strong></em></h1>
  <p>
    <input type="radio" name="shape" value="circle">
  Circle<br>

    <input type="radio" name="shape" value="square">
  Square<br>
    
    <input type="radio" name="shape" value="triangle">
  Triangle<br>
    
    <input type="radio" name="shape" value="rectangle">
  Rectangle
  </p>
  <p>&nbsp;  </p>
  <p>
    <input name="parameter" type="submit" id="parameter" value="Enter parameters">
</p>

  <?php 
$shape=0;
$perimeter=0;
if(isset($_POST["parameter"]))
{
$shape=$_POST["shape"];
 
	if($shape=="circle")
	{
	echo "<p>Enter radius = <input name='radius' type='text' id='radius'>
	
 	 <input name='unit' type='radio' value='cm' id='cm' > cm
	<input name='unit' type='radio' value='m'  id='m' > m
	</p>
	<p>select what you want to calculate </p>
	<p>                                                                         
 	 <input name='action' id='perimeter' type='checkbox' value='perimeter'>  Perimeter     		
 	 <input name='action' id='area' type='checkbox' value='area'> Area
	</p>                                      										
	<input type='button' name='calculate' id='calculate' value='Calculate' onclick='circle();'>";     //button
	echo "<p><br>The circumference is = <input name='outputp' type='text' id='outputp' > </p>";		 //output  textfield
	echo "<p><br>The area is = <input name='outputa' type='text' id='outputa' > </p>";
	}
	echo "<script> 
		function circle()
		{
		var perimeter,area,unit;
		perimeter=document.getElementById('perimeter').checked;
		area=document.getElementById('area').checked;
		
		unit=document.getElementById('cm').checked;
		if(unit==1){
		unit=document.getElementById('cm').value;
		}
		else if(unit==0){
		unit=document.getElementById('m').value;
		}
		
		if(perimeter=='' && area==''){
			alert('please select a category');
			return false;
			}
	   else{
					if(perimeter== true && area==false){
									var rslt=Number(document.form1.radius.value);
									rslt=rslt*3.14*2;
									document.form1.outputp.value= rslt+' '+unit;
									document.form1.outputa.value= 0+' '+unit;
									}
					 if(area== true && perimeter==false){
									var rslt=Number(document.form1.radius.value);
									rslt=rslt*rslt*3.14;
									document.form1.outputp.value=0+' '+unit;
									document.form1.outputa.value=rslt+' '+unit;
									}
					 if(area==1 && perimeter==1){
						 var rslt=Number(document.form1.radius.value);
						 var peri=rslt;
						 var are=rslt;
						 peri=peri*3.14*2;
						 are=are*are*3.14;
						 document.form1.outputp.value=peri+' '+unit;
						 document.form1.outputa.value=are+' '+unit;
						 }
			}
		}
		
		function square()
		{
		var perimeter,area,unit;
		perimeter=document.getElementById('perimeter').checked;
		area=document.getElementById('area').checked;
		
		unit=document.getElementById('cm').checked;
		if(unit==1){
		unit=document.getElementById('cm').value;
		}
		else if(unit==0){
		unit=document.getElementById('m').value;
		}
		
		if(perimeter=='' && area==''){
			alert('please select a category');
			return false;
			}
	   else{
					if(perimeter== true && area==false){
									var rslt=Number(document.form1.side.value);
									rslt=rslt*4;
									document.form1.outputp.value= rslt+' '+unit;
									document.form1.outputa.value= 0+' '+unit;
									}
					 if(area== true && perimeter==false){
									var rslt=Number(document.form1.side.value);
									rslt=rslt*rslt;
									document.form1.outputp.value=0+' '+unit;
									document.form1.outputa.value=rslt+' '+unit;
									}
					 if(area==1 && perimeter==1){
						 var rslt=Number(document.form1.side.value);
						 var peri=rslt;
						 var are=rslt;
						 peri=peri*4;
						 are=are*are;
						 document.form1.outputp.value=peri+' '+unit;
						 document.form1.outputa.value=are+' '+unit;
						 }
			}
		}
		
		function triangle()
		{
		var perimeter,area,unit;
		perimeter=document.getElementById('perimeter').checked;
		area=document.getElementById('area').checked;
		
		unit=document.getElementById('cm').checked;
		if(unit==1){
		unit=document.getElementById('cm').value;
		}
		else if(unit==0){
		unit=document.getElementById('m').value;
		}
		
		if(perimeter=='' && area==''){
			alert('please select a category');
			return false;
			}
	   else{
					if(perimeter== true && area==false){
									var sidea=Number(document.form1.sidea.value);
									var sideb=Number(document.form1.sideb.value);
									var sidec=Number(document.form1.sidec.value);
									rslt=sidea+sideb+sidec;
									document.form1.outputp.value= rslt+' '+unit;
									document.form1.outputa.value= 0+' '+unit;
									}
					 if(area== true && perimeter==false){
									var height=Number(document.form1.height.value);
									var base=Number(document.form1.base.value);
									rslt=0.5*base*height;
									document.form1.outputp.value=0+' '+unit;
									document.form1.outputa.value=rslt+' '+unit;
									}
					 if(area==1 && perimeter==1){
						 var sidea=Number(document.form1.sidea.value);
						 var sideb=Number(document.form1.sideb.value);
						 var sidec=Number(document.form1.sidec.value);
						 var height=Number(document.form1.height.value);
						 var base=Number(document.form1.base.value);
						 var peri=sidea+sideb+sidec;
						 var are=0.5*base*height;
						 document.form1.outputp.value=peri+' '+unit;
						 document.form1.outputa.value=are+' '+unit;
						 }
			}
		}
		
		function rectangle()
		{
		var perimeter,area,unit;
		perimeter=document.getElementById('perimeter').checked;
		area=document.getElementById('area').checked;
		
		unit=document.getElementById('cm').checked;
		if(unit==1){
		unit=document.getElementById('cm').value;
		}
		else if(unit==0){
		unit=document.getElementById('m').value;
		}
		
		if(perimeter=='' && area==''){
			alert('please select a category');
			return false;
			}
	   else{
					if(perimeter== true && area==false){
									var width=Number(document.form1.width.value);
									var length=Number(document.form1.length.value);
									rslt=2*(length+width);
									document.form1.outputp.value= rslt+' '+unit;
									document.form1.outputa.value= 0+' '+unit;
									}
					 if(area== true && perimeter==false){
									var width=Number(document.form1.width.value);
									var length=Number(document.form1.length.value);
									rslt=width*length;
									document.form1.outputp.value=0+' '+unit;
									document.form1.outputa.value=rslt+' '+unit;
									}
					 if(area==1 && perimeter==1){
						 var width=Number(document.form1.width.value);
						var length=Number(document.form1.length.value);
						 var peri=2*(length+width);
						 var are=width*length;
						 document.form1.outputp.value=peri+' '+unit;
						 document.form1.outputa.value=are+' '+unit;
						 }
			}
		}
		</script>  ";
		
		if($shape=="square")
		{
		echo "<p>Enter value of side= <input name='side' type='text' id='side'>
					 <input name='unit' type='radio' value='cm' id='cm' > cm
					<input name='unit' type='radio' value='m'  id='m' > m
					</p>
					<p>select what you want to calculate </p>
					<p>                                                                         
					 <input name='action' id='perimeter' type='checkbox' value='perimeter'>  Perimeter     		
					 <input name='action' id='area' type='checkbox' value='area'> Area
					</p>                                      										
					<input type='button' name='calculate' id='calculate' value='Calculate' onclick='square();'>
				<p><br>
				The perimeter is = 
				  <input name='outputp' type='text' id='outputp' > </p>
				<p><br>The area is = <input name='outputa' type='text' id='outputa' > </p>
				";
		}
		
			if($shape=="triangle")
			{
			echo "
				<p>Enter value of side a= <input name='sidea' type='text' id='sidea'> 
				  Enter value of side b=<input name='sideb' type='text' id='sideb'>     
				  Enter value of side c=<input name='sidec' type='text' id='sidec'>
				</p>
				<p>Enter value of  height=
				  <input name='height' type='text' id='height'>
				</p>
				<p>Enter value of base=
				  <input name='base' type='text' id='base'> 
				  </p>
				<p>
					<input name='unit' type='radio' value='cm' id='cm' > 
					cm
					<input name='unit' type='radio' value='m'  id='m' > 
					m
				</p>
				<p>select what you want to calculate </p>
					<p>                                                                         
					 <input name='action' id='perimeter' type='checkbox' value='perimeter'>  Perimeter     		
					 <input name='action' id='area' type='checkbox' value='area'> Area
					</p>                                      										
					<input type='button' name='calculate' id='calculate' value='Calculate' onclick='triangle();'>
				<p><br>
				The perimeter is = 
				  <input name='outputp' type='text' id='outputp' > </p>
				<p><br>The area is = <input name='outputa' type='text' id='outputa' > </p>
							
			";
			}
				
				if($shape=="rectangle")
				{
				echo "
					<p>Enter value of  Widtht=
   					 <input name='width' type='text' id='width'>
						</p>
						<p>Enter value of Length=
						  <input name='length' type='text' id='length'> 
						  </p>
						<p>
							<input name='unit' type='radio' value='cm' id='cm' > 
							cm
							<input name='unit' type='radio' value='m'  id='m' > 
							m
						</p>
						<p>select what you want to calculate </p>
							<p>                                                                         
							 <input name='action' id='perimeter' type='checkbox' value='perimeter'>  Perimeter     		
							 <input name='action' id='area' type='checkbox' value='area'> Area
							</p>                                      										
							<input type='button' name='calculate' id='calculate' value='Calculate' onclick='rectangle();'>
						<p><br>
						The perimeter is = 
						  <input name='outputp' type='text' id='outputp' > </p>
						<p><br>The area is = <input name='outputa' type='text' id='outputa' > </p>
					";
				}
}
?>

</form> 
   

</body>
</html>
