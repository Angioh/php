const datosJson = require('./datos2.json');

//Ejercicio 1
const años = () =>datosJson.filter(el => el.pais === 'China')
    .reduce((ac,el) => el.anio_coche === 1993? ac= ac+parseFloat(el.precio_coche.replace('$','')):ac,0)
console.log(años())


//Ejercicio 2
const cuentaBank =() => datosJson.filter(el=> el.pais ==='South Africa' && el.anio_coche ===2012)
    .map(x => x.cuenta_bancaria)
console.log(cuentaBank())
