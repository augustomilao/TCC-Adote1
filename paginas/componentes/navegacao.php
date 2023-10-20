<?php
// $cep = "01238010";
// chave de API = AIzaSyBlSnX7jiIhdmCyc22IzO5hIelackQGaaY
// $geocode = file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$cep.'&sensor=false');
// $output = json_decode($geocode);
// var_dump($output);
// $lat = $output->results[0]->geometry->location->lat;
// $long = $output->results[0]->geometry->location->lng;
?> 

<head>
    <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #39D2FF;
}

li {
  float: left;
  border-right: 1px solid #5E98AA;
}

li a {
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-weight: bold;
}

li:last-child {
  border-right: none;
}

li a:hover {
  background-color: #FF9B38;
  color: white;
}
    </style>
</head>

<nav>
    <ul>
        <li><a href="principal.php">Home</a></li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="pets.php">Pets</a></li>
        <li style="float:right"><a class="active" href="perfil.php">Perfil</a></li>
    </ul>
</nav>