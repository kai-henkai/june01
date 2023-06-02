<?php




?>

<!DOCTYPE html>
<html>
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
  font-family: Arial;
}

.header {
  text-align: center;
  padding: 32px;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  padding: 0 4px;
}

/* Create four equal columns that sits next to each other */
.column {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
  max-width: 25%;
  padding-right:9px;
  padding-left:119px;
}

.column img {
  margin-top: 8px;
  vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    -ms-flex: 50%;
    flex: 50%;
    max-width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 980px) {
  .column {
    -ms-flex: 100%;
    flex: 100%;
    max-width: 100%;
  }
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>OJT Works</h1>
  <p>Trust Believe Success</p>
</div>

<!-- Photo Grid -->
<div class="row"> 
  <div class="column">
    <img src="1.JPG" style="width:100%" height="25%">
    <img src="2.jpg" style="width:100%" height="20%">
    <img src="3.jpg" style="width:100%" height="20%">
    <img src="4.jpg" style="width:100%" height="20%">
    <img src="5.jpg" style="width:100%">
    
  </div>
 
  <div class="column">
    <img src="aa1.jpg" style="width:100%" height="20.7%">
    <img src="aa2.jpg" style="width:100%" >
    <img src="aa3.jpg" style="width:100%">
    <img src="aa4.jpg" style="width:100%">
    <img src="aa5.jpg" style="width:100%">
    
  </div>
  <div class="column">
    <img src="aa6.jpg" style="width:100%" height="19%">
    <img src="aa7.jpg" style="width:100%">
    <img src="aa8.jpg" style="width:100%">
    <img src="aaa1.jpg" style="width:100%">
    <img src="a10.jpg" style="width:100%" height="21.1%">
  </div>
</div>

</body>
</html>