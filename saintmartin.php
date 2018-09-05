<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}
.menu {
  float:left;
  width:20%;
  text-align:center;
}
.menu a {
  background-color:#e5e5e5;
  padding:8px;
  margin-top:7px;
  display:block;
  width:100%;
  color:black;
}
.main {
  float:left;
  width:60%;
  padding:0 20px;
}
.right {
  background-color:#e5e5e5;
  float:left;
  width:20%;
  padding:15px;
  margin-top:7px;
  text-align:center;
}

@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width:100%;
  }
}
</style>
</head>
<body style="font-family:Verdana;color:#aaaaa;">

<div style="background-color:#e5e5e5;padding:15px;text-align:center;">
  <h1>Welcome to SaintMartin</h1>
</div>



  <div class="main">
  </div>
  

  <div class="right">
    <h2>About SaintMartin</h2>
    <p>SaintMartin 
		is a town, 
	a fishing port and district
	headquarters in Bangladesh. 
With a pictures queen hinterland of large hill forests and lakes,Chittagong is a good vacation spot. It is the second largest city of Bangladesh and a busy of Bangladesh and a busy international sea port. Its green hills and forests, broad sandy beaches and fine cool climate always attract holiday makers. It combines the hump of a restless seaport with the pleasure of a charming hill town with its undulating topography. Chittagong is the country's chief port and is the main site for the establishment of heavy, medium and light industries. Bangladesh's only steel mill and oil refinery are also located here. Chittagong is connected with Dhaka by rail, road, air and water. It is also connected with Cox's Bazar and Calcutta by Air.

	
		</p>
  </div>
</div>


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
    padding: 0 4px;
}

.column img {
    margin-top: 8px;
    vertical-align: middle;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 800px) {
    .column {
        -ms-flex: 50%;
        flex: 50%;
        max-width: 50%;
    }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
    .column {
        -ms-flex: 100%;
        flex: 100%;
        max-width: 100%;
    }
	
	div.gallery {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;
}


}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Images Grid View</h1>
</div>

<!-- Photo Grid -->
<div class="gallery">
  <a target="_blank" href="sain1.jpg">
    <img src="sain1.jpg"  width="300" height="200">
  </a>
  <div class="desc">saint martin</div>
<a target="_blank" href="saint2.jpg">
    <img src="saint2.jpg"  width="300" height="200">
  </a>
  <div class="desc">saint martin</div>
  <a target="_blank" href="saint3.jpg">
    <img src="saint3.jpg"  width=300" height="200">
  </a>
  <div class="desc">saint martin</div>
<a target="_blank" href="saint4.jpg">
    <img src="saint4.jpg"  width="300" height="200">
  </a>
  <div class="desc">saint martin</div>
</div>



</body>
</html>