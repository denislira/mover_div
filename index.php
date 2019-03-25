<html>

<head>

<style type="text/css">
<!--
.janela{position:relative;}
-->
<style>
.cima{
    background-color: #0056ca;
    text-decoration: none;
    float: left;
    color: #0056ca;
    width: 100%;
    height: 50px;   
    margin-top: 0px;
    margin-left: 0px;
}

#topo{
    background-color: #0056ca;
    text-decoration: none;
    float: left;
    color: #ffffff;
    width: 150px;
    height: 80px;   
    margin-top: 20px;
    margin-left: 20px;
}
#topo:hover{
    background-color: #006dff;
    text-decoration: none;
    float: left;
    color: #ffffff;
    width: 147px;
    height: 77px;
    border: 3px solid #cfcfcf;
    margin-top: 17px;
    margin-left: 17px;
}

#topo1{
    background-color: #FF6347;
    text-decoration: none;
    float: left;
    color: #ffffff;
    width: 200px;
    height: 80px;
    margin-top: 20px;
    margin-left: 20px;
}
#topo1:hover{
    background-color: #FF6347;
    text-decoration: none;
    float: left;
    color: #ffffff;
    width: 197px;
    height: 77px;
    border: 3px solid #cfcfcf;
    margin-top: 17px;
    margin-left: 17px;
}
</style>

<script type="text/javascript">

<!-- Início

var ie=document.all;
var nn6=document.getElementById&&!document.all;
var isdrag=false;
var x,y;
var dobj;

function movemouse(e)
{
if (isdrag)
{
dobj.style.left = nn6 ? tx + e.clientX - x : tx + event.clientX - x;
dobj.style.top = nn6 ? ty + e.clientY - y : ty + event.clientY - y;
return false;
}
}

function selectmouse(e)
{
var fobj = nn6 ? e.target : event.srcElement;
var topelement = nn6 ? "HTML" : "BODY";
while (fobj.tagName != topelement && fobj.className != "janela")
{
fobj = nn6 ? fobj.parentNode : fobj.parentElement;
}

if (fobj.className=="janela")
{
isdrag = true;
dobj = fobj;
tx = parseInt(dobj.style.left+0);
ty = parseInt(dobj.style.top+0);
x = nn6 ? e.clientX : event.clientX;
y = nn6 ? e.clientY : event.clientY;
document.onmousemove=movemouse;
return false;
}

}

document.onmousedown=selectmouse;
document.onmouseup=new Function("isdrag=false");
// Fim -->

</script>

</head>
<body>
<a href="#" title="metro"><div  class="cima"></div></a>
<a href="#" title="metro"><div id="topo" class="janela"></div></a>
<a href="#" title="metro"><div id="topo1" class="janela"></div></a>
<a href="#" title="metro"><div id="topo" class="janela"></div></a>
<a href="#" title="metro"><div id="topo1" class="janela"></div></a>
<a href="#" title="metro"><div id="topo" class="janela"></div></a>
<a href="#" title="metro"><div id="topo1" class="janela"></div></a>
<a href="#" title="metro"><div id="topo" class="janela"></div></a>
<a href="#" title="metro"><div id="topo1" class="janela"></div></a>
</body>
</html>
