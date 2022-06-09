function consultaClima() {
  let ciudad = document.getElementById("ciudad").value;

  const options = {
    method: "GET"
  };
  
  // Petición HTTP
  fetch(`https://api.openweathermap.org/data/2.5/weather?q=${ciudad}&appid=96ddeac7568d65fa1431f5838aa93523`, options)
    .then(response => {return response.text()})
    .then(data => {
      //convertimos formato json cadena en objeto de javascript
      let infoClima = JSON.parse(data);
      let newClima = (parseFloat(infoClima.main.temp) - 270.15).toFixed(2);
      let newClima1 = parseFloat(infoClima.main.humidity);
      let newClima2 = parseFloat(infoClima.main.pressure);
      document.getElementById("resultado").innerHTML = newClima + " °C";
      document.getElementById("resultado1").innerHTML = newClima1 + " °C";
      document.getElementById("resultado2").innerHTML = newClima2 + " Pa";
    }).catch((err) => {console.log("Info error: ", err);})
}