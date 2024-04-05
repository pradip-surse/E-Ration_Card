<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<title>Javascript Addition</title>

<style>

body
{
    background-color:#093;
    padding:0px;
    margin:0px;
    font-family:Verdana, Geneva, sans-serif;
    font-size:12px;
}

.frm1
{
    border:2px solid #006;
}





</style>










</head>

<body>


<script>


function sum1() 
{
        var txtFN1 = parseInt(document.getElementById('txt4').value);
        var txtSN1 = parseInt(document.getElementById('txt5').value);
        var result = parseInt(txtFN1) + parseInt(txtSN1);
        document.getElementById('txt6').value = result;

}



</script>




<h1>Addition Using Javascript (KeyUp)</h1>
<form>
Frist No : <input type="text"  id="txt4" /><br />
Second No : <input type="text" id="txt5"  onkeyup="sum1()" />
<!--<button type="button" onclick="sum1()">Result</button>
<button type="button" onclick="clr()">Reset</button><br />--><br />
Result : <input type="text" id="txt6" />
</form>





</center>
</body>
</html>