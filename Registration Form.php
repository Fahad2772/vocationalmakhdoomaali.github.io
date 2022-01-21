<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<style>
body
{background-image:url(SP/pexels-s-migaj-747964.jpg);
background-position:center center;
background-size:cover;
background-attachment:fixed;
font-family:"Times New Roman", Times, serif;
margin-top:40px;

}
.registration
{
width:800px;
background-color:#006666;
margin:auto;
color:#FFFFFF;
font-size:26px;
text-align:center;
border-radius:30px 30px 0px 0px;
}
.form
{background-color:rgb(0,0,0,0.5);
width:800px;
margin:auto;
}
form
{
padding:10px;
}
.name
{width:100%;
height:100px;
font-size:18px;
margin-left:25px;
margin-top:50px;
width:125px;
font-weight:700;
color:white;
}
.fullname
{position:relative;
left:200px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
}
.fathername
{
position:relative;
left:450px;
top:-185px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
color:#555;
}
.firstlabel
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:203px;
top:-116px;
}
.lastlabel
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:457px;
top:-180px;
}
.scnic
{
position:relative;
left:225px;
top:-125px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
}
.fcnic
{
position:relative;
left:125px;
top:-125px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
}

.label1
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:-20px;
top:-90px;
}
.label2
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:-120px;
top:-90px;
}
.phone
{
position:relative;
left:225px;
top:-125px;
width:60px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
}
.area_code
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
right:-120px;
top:-92px;
}
.cellphone
{
position:relative;
left:283px;
top:-125px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
}
.phone_number
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
right:-39px;
top:-92px;
}
.option
{
position:relative;
left:220px;
top:-122px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
height:40px;
overflow:hidden;
outline:none;
width:500px;
}
.trade
{
position:relative;
left:220px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
height:40px;
overflow:hidden;
outline:none;
width:500px;
}

.vti
{
position:relative;
left:220px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
height:40px;
overflow:hidden;
outline:none;
width:500px;
}

.submit
{
background-color:#3BAF9A;
display:block;
margin:20px 0px 0px 20px
text-align:center;
border-radius:12px;
border:2px solid #366473;
padding:14px 110px;
outline:none;
color:white;
font-size:18px;
position:absolute;
margin-left:101px;
cursor:pointer;
}
.reset
{
background-color:#3BAF9A;
display:block;
margin:20px 0px 0px 20px
text-align:center;
border-radius:12px;
border:2px solid #366473;
padding:14px 110px;
outline:none;
color:white;
font-size:18px;
position:absolute;
margin-left:401px;
cursor:pointer;
}
.age
{position:relative;
left:222px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
width:100px;
}
.sage
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:73px;
top:-86px;
}
.date
{position:relative;
left:240px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
width:150px;
}
.Date
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:89px;
top:-86px;
}
.adress
{position:relative;
left:222px;
top:-120px;
line-height:40px;
border-radius:6px;
padding:0 22px;
font-size:16px;
width:440px;
}
.Adress
{
position:relative;
color:#E5E5E5;
text-transform:capitalize;
font-size:18px;
left:-268px;
top:-86px;
}
</style>
</head>

<body>
<div class="registration"><h1>Registration Form</h1></div>
<div class="form">
<form>
<div class="name">
<h2 class="name">Student& Father Name</h2>
<input class="fullname" type="text" name="full_name" />
<label class="firstlabel">Student Name</label>
<input class="fathername" type="text" name="father_name" />
<label class="lastlabel">Father/Guardian Name</label>
</div>
<h2 class="name">Age and Date</h2>
<input class="age" type="number" name="age" />
<label class="sage">Student Age</label>

<input class="date" type="date" name="date" />
<label class="Date">Date</label>

<h2 class="name">Student CNIC</h2>
<input class="scnic" type="code" name="cnic" />
<label class="label1">Student CNIC</label>
<input class="fcnic" type="code" name="cnic" />
<label class="label2">Father CNIC</label>

<h2 class="name">Adress</h2>
<input class="adress" type="text" name="adress" />
<label class="Adress">Adress</label>
<h2 class="name">Phone Number</h2>
<input class="phone" type="code" name="area_code" />
<label class="area_code">Area code</label>
<input class="cellphone" type="code" name="phone_number" />
<label class="phone_number">Phone number</label>

<h2 class="name">VTI</h2>
<select class="vti" name="subject">
<option disabled="disabled" selected="selected">--Chosse option</option>
<option>VTI Makhdoom Aali</option>
<option>VTI Dunya Pur</option>

</select>

<h2 class="name">Qualification</h2>
<select class="option" name="subject">
<option disabled="disabled" selected="selected">--Chosse option</option>
<option>Elementary</option>
<option>Middle</option>
<option>Matric</option>
<option>Intermediate</option>
<option>Graduation</option>
<option>Master</option>
<option>M.Fil</option>
</select>

<h2 class="name">Trades</h2>
<select class="trade" name="subject">
<option disabled="disabled" selected="selected">--Chosse option</option>
<option>Computer</option>
<option>RAC</option>
<option>Electrical</option>
<option>Dress Making</option>
<option>Beaution</option>
<option>Clinical Assistant</option>
</select>
<button class="submit">Submit</button>
<button class="reset">Reset</button>
</form>
</div>
</body>
</html>
