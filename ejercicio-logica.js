// Inicializamos la matriz como un array vacio
let matrizDiagonales = [];

// Creamos una función que reciba como parámetro el número n

function crearMatrizNxN(n) {
	// Control de errores qe verifica que sea número, entero y mayor a 0
	if (typeof n != 'number') {
		throw TypeError('El argumento debe ser un número.');
	}
	if (!Number.isInteger(n)) {
		throw TypeError('El argumento debe ser un número entero.');
	}
	if (n <= 0) {
		throw Error('El argumento debe ser un número entero positivo.');
	}

	// Recorremos el arreglo de datos 
	for (let i = 0; i < n; i++) {
		// Arreglo de datos vacío que iremos llenando en el siguiente ciclo
		let numero_random = [];
		for (let j = 0; j < n; j++) {
			// Se escoge un número al azar entre 0 y 9 obteniendo su parte entera
			numero_random.push(Math.floor(Math.random() * (9 - 0)) + 0);
		}

		matrizDiagonales.push(numero_random);
	}

	return matrizDiagonales;

}




try {
	let resultado = crearMatrizNxN(Math.floor(Math.random() * (9 - 0)) + 0);

	// imprimimos por consola la matriz creada

	console.log(resultado);

	// obtenemos la longitud del arreglo de datos que creamos

	let n = matrizDiagonales.length;

	// Definimos variables de la diagonal principal y secundaria como acumuladores
	// Luego definimos x como el valor de n e irá decreciendo con cada incremento en el ciclo z

	let dp = 0;
	let ds = 0;
	let x = n;

	for (let y = 0; y < n; y++) {
		for (let z = 0; z < n; z++) {
			if (y == z) {
				dp = dp + matrizDiagonales[y][z];
			}

			if (z == y) {
				x = x - 1;
				ds = ds + matrizDiagonales[y][x];
			}
		}

	}
	console.log("La suma de la diagonal principal es " + dp);
	console.log("La suma de la diagonal secundaria es " + ds);

} catch (e) {
	console.log(`Error: ${e.message}`);
}