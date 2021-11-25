function ejercicioTres(matriz) {
	let sumaDiagonalUno = matriz[0][0] + matriz[1][1] + matriz[2][2]
	let sumaDiagonalDos = matriz[0][2] + matriz[1][1] + matriz[2][0]

	const restaDiagonales = Math.abs(sumaDiagonalUno - sumaDiagonalDos)
	return restaDiagonales
}

const miMatriz = [[1, 2, 3],
[4, 5, 6],
[9, 8, 9]]


const valorAbsoluto = ejercicioTres(miMatriz)
console.log(valorAbsoluto);