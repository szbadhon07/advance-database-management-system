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
  <h1>Welcome to Cox's Bazar</h1>
</div>



  <div class="main">
  </div>
  

  <div class="right">
    <h2>About Cox's Bazar</h2>
    <p>Cox's Bazar 
	(Bengali: কক্সবাজার) is a town, 
	a fishing port and district
	headquarters in Bangladesh. 
	It is known for its wide 
	sandy beach which is the
	world's longest natural sandy 
	sea beach. It is an unbroken 
	125 km sandy sea beach with a
	gentle slope. It is located
	150 km south of Chittagong.
	Cox’s Bazar is also known by
	the name "Panowa", the literal
	translation of which means 
	"yellow flower". Its other 
	old name was "Palongkee". 
	The modern Cox's Bazar 
	derives its name from Captain
	Cox (died 1799), an officer 
	serving in British India. 
	In the 18th century, an officer 
	of British East India Company, 
	Captain Hiram Cox was appointed
	as the Superintendent of Palongkee 
	outpost after Warren Hastings became 
	the Governor of Bengal. Captain Cox
	was specially mobilised to deal with 
	a century long conflict between 
	Arakan refugees and local Rakhains. 
	The Captain was a compassionate 
	soul and the plight of the people
	touched his heart. He embarked upon
	the mammoth task of rehabilitating 
	refugees in the area, and made
	significant progress. A premature
	death took Captain Cox in 1799
	before he could finish his work. But
	the work he had done earned him 
	a place in the hearts of the locals
	and to commemorate his role in 
	rehabilitation work a market was 
	established and named after him
	as Cox's Bazaar ("Cox's Market").
	Although Cox's Bazar is one of the 
	most visited tourist destinations 
	in Bangladesh, it has yet to become
	a major international tourist
	destination, due to lack of publicity.
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

<!-- Header -->
<div class="header">
  <h1>Images Grid View</h1>
</div>

<!-- Photo Grid -->
<div class="gallery">
  <a target="_blank" href="cox.jpeg">
    <img src="cox.jpeg"  width="300" height="200">
  </a>
  <div class="desc">cox bazar</div>
<a target="_blank" href="cox1.jpg">
    <img src="cox1.jpg"  width="300" height="200">
  </a>
  
  <a target="_blank" href="cox2.jpg">
    <img src="cox2.jpg"  width=300" height="200">
  </a>
  
<a target="_blank" href="cox4.jpg">
    <img src="cox4.jpg"  width="300" height="200">
  </a>
  
</div>

</body>
</html>

</body>
</html>