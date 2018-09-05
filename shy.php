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
  <h1>Welcome to Shylet</h1>
</div>



  <div class="main">
  </div>
  

  <div class="right">
    <h2>About Shylet</h2>
    <p>Geographically, Sylhet stands on the banks of Surma river surrounded by Khasia and the Jaintia hills on the north, and the Tripura hills on the south. This hilly region adds a variation to the flat land Bangladesh. The terraced tea -gardens, winding mountainous rivers, thick tropical forest and country side extending to the horizon combine to make greater Sylhet a major tourist attraction of the country. Here the lavish forests are full of a variety of greens and many species of wildlife. This region is also well- known for its profound art and culture in which the contribution of the local tribes is mentionable.
Surma and Kushiara are the two main rivers forming Sylhet valley. These are in turns joined with a number of other hill streams. Apart from these streams, sylhet has many haors which are bowl shaped shallow dips. During rainy season these haors go under deep water turning into turbulant seas. While in the dry season the water drains out and leaves rich alluvial soil used extensively for rice cultivation. These haors also provide shelter for a large number of migratory birds flying from cold countries.

Sylhet has also a very rich history. Before the Muslims, it was ruled by local tribal leaders. In 1303, the great Saint Hazrat Shah Jalal (R) came to Sylhet from Delhi with a band of 360 disciples to preach Islam and defeated Raja Gour Gobinda. From then to now Sylhet has improved a lot. In last few decades this development has been remarkable economically due to the remittances by the expatriates living abroad, mainly in Britain.

A fascinating feature of Sylhet is the aboriginal tribes living there. The Monipuris, Garos, Khasias and Tipperas are the main tribes of this region. Their lifestyle on the hills, practicing age-old rites, rituals, traditions and celebrationg festivals continuing from time immemorial has made Sylhet’s culture richer. During festivals like Rash Leela (Full-moon night in February) and Doljatra, charming young tribal girls adorn themselves with colorful robes, Then they dance with their chosen and loved males of the tribe. The famous Monipuri dance is performed on allegorical love themes of the ancient mythology.

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

<div class="header">
  <h1>Images Grid View</h1>
</div>

<!-- Photo Grid -->
<div class="gallery">
  <a target="_blank" href="sy1.jpg">
    <img src="sy1.jpg"  width="300" height="200">
  </a>
  <div class="desc">Sylhet</div>
<a target="_blank" href="sy2.jpg">
    <img src="sy2.jpg"  width="300" height="200">
  </a>
  
  <a target="_blank" href="sy3.jpg">
    <img src="sy3.jpg"  width=300" height="200">
  </a>
  
<a target="_blank" href="sy4.jpg">
    <img src="sy4.jpg"  width="300" height="200">
  </a>
  
</div>

</body>
</html>

</body>
</html>