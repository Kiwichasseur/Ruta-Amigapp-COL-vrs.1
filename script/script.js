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
      document.getElementById("resultado").innerHTML = infoClima.main.temp;
    }).catch((err) => {console.log("Info error: ", err);})
}