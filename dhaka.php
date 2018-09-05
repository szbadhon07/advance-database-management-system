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
  <h1>Welcome to Dhaka</h1>
</div>



  <div class="main">
  </div>
  

  <div class="right">
    <h2>About Dhaka</h2>
    <p>The capital of Bangladesh is Dhaka with its exciting history and rich culture, known the world over as the city of mosques and muslin; it has attracted travelers from far and nearer throughout in all the ages. It has a history dating back to earliest time. But the exact date of its foundation is not known. However, according to recorded history it was founded in 1608 A.D. as the seat of the imperial Mughal Viceroy of Bengal. Dhaka as the capital of Bangladesh has grown into a busy city of about eleven million people with an area of about 815 sq. km. Having a happy blending of old and new architectural trends, Dhaka has been developing fast as a modern city and is throbbing with activities in all spheres of life. It is the centre of industrial commercial, cultural, educational and political activities for Bangladesh. At Tongi, Tejgaon, Demra, Pagla, kanchpur, the industrial establishments turn - out daily necessities. Motijheel is the main commercial area of the city. Dhaka's major waterfront Sadarghat is on the bank of the river Buriganga and is crowded with all kinds of river craft, batches, country boats, motor launches, paddle-steamers, fishermen's boats all bustling with activity. Colourful rickshaws (tricycle) on the city streets are common attractions for the visitors.
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
}
</style>
<body>

<!-- Header -->
<div class="header">
  <h1>Images Grid View</h1>
</div>

<!-- Photo Grid -->
<div class="gallery">
  <a target="_blank" href="dha1.jpg">
    <img src="dha1.jpg"  width="300" height="200">
  </a>
  <div class="desc">DHAKA</div>
<a target="_blank" href="dha2.jpg">
    <img src="dha2.jpg"  width="300" height="200">
  </a>
  
  <a target="_blank" href="dha3">
    <img src="dha3.jpg"  width=300" height="200">
  </a>
  
<a target="_blank" href="dha4.jpg">
    <img src="dha4.jpg"  width="300" height="200">
  </a>
  
</div>

</body>
</html>

</body>
</html>