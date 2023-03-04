<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
<form name="Calculator" class="calculator">
<table>   
    <tr>
        <td>
            <input type="text" name="Input" id="sr1">
            <br>
        </td>
    </tr> 
        <tr>
            <td>
            <input id="bt3" type="button" value="C" Onclick="opertor(value)">
            <input id="bt3" type="button" value="AC" Onclick="opertor(value)">
            <input id="bt3" type="button" value="%" Onclick="opertor(value)">
            <input id="bt2" type="button" value="/" Onclick="opertor(value)">
            <br>
            <input id="bt1" type="button" value="7" Onclick="val(value)">
            <input id="bt1" type="button" value="8" Onclick="val(value)">
            <input id="bt1" type="button" value="9" Onclick="val(value)">
            <input id="bt2" type="button" value="*" Onclick="opertor(value)">
            <br>
            <input id="bt1" type="button" value="4" Onclick="val(value)">
            <input id="bt1" type="button" value="5" Onclick="val(value)">
            <input id="bt1" type="button" value="6" Onclick="val(value)">
            <input id="bt2" type="button" value="-" Onclick="opertor(value)">
            <br>
            <input id="bt1" type="button" value="1" Onclick="val(value)">
            <input id="bt1" type="button" value="2" Onclick="val(value)">
            <input id="bt1" type="button" value="3" Onclick="val(value)">
            <input id="bt2" type="button" value="+" Onclick="opertor(value)">
            <br>
            <input id="bt4" type="button" value="0" Onclick="val(value)">
            <input id="bt1" type="button" value="." Onclick="val(value)">
            <input id="bt2" type="button" value="=" Onclick="opertor(value)">
            <br>
            </td>
</tr>    
</table>

</form>  
<script src="main.js"></script>

<div>
    <p>Design by kamsong Gaton Anderson</p>
</div>    
</body>
</html>
