<html lang="en">
  <head>
    <meta charset="utf-8">
	  <title>REBC03 Artjoms Ivanovs Datromacība</title>
<style type="text/css">
   A { font-size: 14px; color: white; }
 </style>
<style>
	footer {
		background-color: white;
		background-position: 100% 100%;
		background-repeat: repeat;
	}
	body {
		background-color: #285955;
		background-position: 100% 100%;
		background-repeat: repeat;
	}
	h2 {
		color: white;
		font-family: verdana;
		font-size: 150%;
	}
	div {
		text-align: center
	}
	h1 {
		color: #285955;
		font-family: verdana;
		font-size: 300%;
	}
	h4 {
		color: #FFFFFF;
		font-family: verdana;
		font-size: 300%;
	}
	p  {
		color: white;
		font-family: courier;
		font-size: 160%;
		text-align: center;
	}
	p1  {
		color: #285955;
		font-family: bold;
		font-size: 100%
	
	}
p.p1  {
		color: #285955;
		font-family: bold;
		font-size: 18pt;
		margin-top: 20px;
		margin-bottom: 20px;
		margin-right: 300px;
		margin-left:250px;
	
}
	h3  {
		color: #285955;
		font-family: verdana;
		font-size: 150%;
	}
	ul { 
    display: block;
    list-style-type: disk;
    margin-top: 1em;
    margin-bottom: 1 em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 750px;
}
ol {
    display: block;
    list-style-type: decimal;
    margin-top: 1em;
    margin-bottom: 1em;
    margin-left: 0;
    margin-right: 0;
    padding-left: 750px;
}
li {
    display: list-item;
	padding-left: 5px;
	color: white
}
li1 {
	list-style-type: circle;
    display: list-item;
	padding-left: 5px;
	color: white
}
li2 {
	list-style-type: circle;
    display: list-item;
	padding-left: 5px;
	color: white;
}
table, th, td {
    border: 1px solid White;
	color: #FFFFFF;
	text-align: center;
	border-collapse: collapse

}
c {
		color: white;
		font-family: courier;
		font-size: 100%;
		text-align: center;
}
A {
	   font-size: 14px; 
	   color: white; 
}
A.link1 {
	font-size: 14px; 
	color: #285955;
}
</style>
  </head>


<footer>
 <hr>
    <div>
      <h1><img src="https://www.rtu.lv/images/logo_lv.svg"><br>Datormacība 
	  <span>
	  <br>
	  Vienkāršu shēmu modelēšana<br>
	  Labaratorijas darba 1. atskaite
	  </span>
	  </h1>
    </div>
 <hr>
</footer>
    <body>
<div>
    <h4 id="S0">Saturs</h4>
	</div>
  <ul>
    <li><a href="#S1">I. Teorētiskā daļa</a></li>
      <dd><li1><a href="#S2">1.1. Ķēdes aprēķins</a></li1></dd>
    <li><a href="#S3">II. Praktiskā daļa</a></li>
      <dd><li1><a href="#S4">2.1. Darbs ar GEDA programmām</a></li1></dd>
      <dd><li1><a href="#S5">2.1.2. Darbs ar gnetlist</a></li1></dd>
      <dd><li1><a href="#S6">2.1.3. Darbs ar ngspice</a></li1></dd>
      <dd><li1><a href="#S7">2.2. Darbs ar QUCS programmām</a></li1></dd>
	  <dd><li1><a href="#S8">2.2.1. Tabula un grafiki</a></li1></dd>
	  <dd><li1><a href="#S9">2.2.2. Secinājumi</a></li1></dd>
   </ul>
	 

<hr>
<div>
	<h4 id="S1">Teorētiskā daļa</h4>
	<h2 id="S2"> 1.1 Ķēdes aprēķins</h2><a href="#S0">Pie Satura</a></li>
    <p>
Sprieguma avota V1 sprieguma vērtību U (Voltos) izvēlejos daļskaitli, kas ir apliecības pēdējie trīs cipari dalīti ar
10. Piemēram. ‘171REB146’ nozīmē V1 = 14.6 (Volti), R1 ir apliecības pēdējo 3 ciparu otrais
numurs+1, R2 ir apliecības numura pēdējais cipars +1. Piemēram, ja apliecības numurs
ir ‘171REB146’ tad ‘R1=5’, ‘R2=7’
    </p>
<center>
   <table style="width:10%">
  <tr>
    <th>Apzīmējums</th>
    <th>Vērtība</th> 

  </tr>
  <tr>
    <td>R<sub>1</sub></td>
    <td>5</td>
  </tr>
  <tr>
    <td>R<sub>2</sub></td>
    <td>7</td>
  </tr>
  <tr>
    <td>V<sub>1</sub></td>
    <td>14.6</td>
  </tr>
    <tr>
    <td>U<sub>R1</sub></td>
    <td>14.6</td>
  </tr>
    <tr>
    <td>U<sub>R2</sub></td>
    <td>8.52</td>
  </tr>
</table>
</center>
<br>
<c>1.1.tabula. Sprieguma un pretestības tabula</c>
   <p>
      Elektriska shēma ar SVG
	  <center>
	  <svg width="300" height ="250" version="1.1" xmlns="http://www.w3.org/2000/svg">
  <rect x="150" y="30" width="40" height="15"
  style = "fill:#FFFFFF ; stroke:#000000;stroke-width:1"/>
  <text x="165" y="20" fill="#FFFFFF" font-size="15" >
     R1
</text>
  <text x="280" y="80" fill="#FFFFFF" font-size="15" >
     R2
</text>
  <text x="38" y="85" fill="#FFFFFF" font-size="15" >
     US
</text>
<rect x="252" y="60" width="15" height="40"
  style = "fill:#FFFFFF ; stroke:#000000;stroke-width:1"/>
<circle cx="80" cy="80" r="18" stroke="black" stroke-width="1" fill="white" />
<line x1="80" y1="36" x2="150" y2="36" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="190" y1="36" x2="260" y2="36" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="260" y1="36" x2="260" y2="60" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="260" y1="100" x2="260" y2="120" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="260" y1="120" x2="80" y2="120" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="80" y1="120" x2="80" y2="98" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="80" y1="36" x2="80" y2="62" style="fill:#FFFFFF; stroke:#FFFFFF;stroke-width:1" />
<line x1="75" y1="72" x2="85" y2="72" style="fill:#000000; stroke:#000000;stroke-width:1" />
<line x1="80" y1="68" x2="80" y2="76" style="fill:#000000; stroke:#000000;stroke-width:1" />

<line x1="75" y1="85" x2="85" y2="85" style="fill:#000000; stroke:#000000;stroke-width:1" />
</svg>
</center>
    </p>
</div>
<hr>
<div>
	<h4 id="S3">Prakstiskā daļa</h4>
	<h2 id="S4"> 2.1 Darbs ar GEDA programmām</h2><a href="#S0">Pie Satura</a><br>
     <img src="https://github.com/patatemz/DMI2/blob/master/P01/2.png?raw=true" />
	 <br>
	<c>2.1.att. Elektriska shēma gschem vidē</c>
</div>
<hr>
<div>
    <h2 id="S5">2.1.2. Darbs ar gnetlist</h2><a href="#S0">Pie Satura</a> <br>
	     <img src="https://github.com/patatemz/DMI2/blob/master/P01/3.png?raw=true" />
	 <br>
	<c>2.2.att. Rezultātu parbaude ar gnetlist</c>
</div>
<hr>
<div>
    <h2 id="S6">2.1.3. Darbs ar ngspice</h2><a href="#S0">Pie Satura</a> <br>
	<br>
	     <img src="https://github.com/patatemz/DMI2/blob/master/P01/4.png?raw=true" /><img src="https://github.com/patatemz/DMI2/blob/master/P01/5.png?raw=true" />
	 <br>
	<c>2.3.att. NGspice iegūtaie sprieguma grafiki</c>
</div>
<hr>
<div>
    <h2 id="S7">2.2. Darbs ar QUCS programmām</h2><a href="#S0">Pie Satura</a> <br>
	     <img src="https://github.com/patatemz/DMI2/blob/master/P01/7.png?raw=true" />
	 <br>
	<c>2.4. att. QUCS Shēmas modelis</c>
</div>
<hr>
<div>
    <h2 id="S8">2.2.1 Tabula un grafiks</h2><a href="#S0">Pie Satura</a> <br>
	     <img src="https://github.com/patatemz/DMI2/blob/master/P01/6.png?raw=true" />
	 <br>
	<c>2.5. att. Iegūtie rezultāti QUCS</c>
</div>
 </body>
<footer>
	<hr>
		<div>
    <h3 id="S9">2.2.2 Secinājumi</h3><a href="#S0" class="link1">Pie Satura</a> <br><br>
		</div>
<p class="p1">
	Darba gaita iepzazinos ar tadam programam ka QUCS, ngspice, gschem un netlist un to komandam
</p>
<p class="p1">
	Darboties un apkopot darbu ar HTML man presonīgi bija vieglāk paveikt neka ar Latex,jo HTML man ir kaut kadas zinašanas, bet ar Latex es iepazinos pirmo reizi,
	vajadzeja iepazities ar daudz jaunam komandam Latexa programma, lai varētu kvalitātivi uztaisīt darba atskaiti</p>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      <div>
              <p1> &copy Rīgas Tehniskā universitāte 2018</p1>
      </div>
    </footer>

</html>