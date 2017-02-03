<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: black;
    font-weight: normal;
}

.tabs li {
    float: left;
    font-size: 20px;
}

.login a{
    float: right;
    font-size: 20px;
}

.mid-content a{
   float: center;
   font-size: 20px;
}

li a, .ddbut{
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
} 

li.dropdown {
    display: inline-block;
}

.ddtabs {
    display: none;
    position: absolute;
    min-width: 140px;
}

.ddtabs a {
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown:hover .ddtabs {
    display: block;
}

a.log {
    text-color: white;
}

@-webkit-keyframes fadein {
    from { opacity: 0; }
    to   { opacity: 1; }
}
a.aho{
  -webkit-animation: fadein 1s;
}
a.apr{
  -webkit-animation: fadein 2s;
}
a.aga{
  -webkit-animation: fadein 3s;
}
a.aco{
  -webkit-animation: fadein 4s;
}
a.aem{
  -webkit-animation: fadein 1s;
}
a.frm{
  -webkit-animation: fadein 2s;
}
a.acom{
  -webkit-animation: fadein 3s;
}
a.log{
  -webkit-animation: fadein 5s;
}
.tabs:hover{
   text-size: 22px;
}
</style>
</head>
<body>
<div class="head">
    <ul>
      <div class="tabs">
      <li><a class="aho" href="/index.php">Home</a></li>
      <li class="dropdown">
          <a class="apr" href="#" class="ddbut">Projects</a>
          <div class="ddtabs">
              <a class="aem" href="#">E-Mail Form</a>
              <a class="frm" href="/forums/forum.php">Forum</a>
              <a class="acom" href="#">Company Site</a>
          </div>
      </li>
      <li><a class="aga" href="/gallery.php">Gallery</a></li>
      <li><a class="aco" href="mailto:luddenisean@gmail.com">Contact</a></li>
      </div>
      <div class="mid-content">
      </div>
      <div class="login">
         <li><a class="log" href="/login.php">Login</a></li>
      </div>

</ul>
</div>

</body>
</html>