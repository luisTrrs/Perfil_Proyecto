/*
//*************Variables*****************
var a,b,c;
var d = 5;
c = 10;
e ='hola'; "\'palabra\'"
h = 10.89;

//booleanos
verdadero = true;
falso = false;
*/
//*************Arreglos******************
var dias = ['Lunes','Martes','Miercoles','Jueves','Viernes'];
/*
//*************Operadores****************

=
++
--
!

Si var = 0 --> false si var !=0 --> true
Si var = 'Cadena' --> true si var = '' --> false

&&

true && true = true
true && false = false
false && true = false
false && false = false

||

true||true = true
true||false =false
false||true = false
false||false = true

% // 9 % 5 = 4

>, < <= >= == !=
*/
for (i=0; i<5; i++) {
	alert(dias[i]);
}
for(indice in arreglo){

}
for(i in dias){
	alert(dias[i]);
}

arreglo.length;//tamaño del arreglo
+ .concat()//concatenar
cadena.split(' ')//convierte una cadena en texto en un arreglo
arreglo.join(" ")//une los elementos de un arreglo para formar una cadena de texto
array = ["hola", "mundo"];
mensaje = array.join(" ");
alert(mensaje);
//comentar hasta aqui
.pop()//Elimina el ultimo elemento del arreglo
.push() //Aumenta elementos en el arreglo
.shift() //Elimina el primer elemento del arreglo
.unshift() //Añade elemento al principio del arreglo
.reverse() //Altera el orden del arreglo

NaN //valor numerico no definido
isNaN() //comprobar valor no definido
.toFixed(digitos)

var cadena = "En un lugar de la mancha";
var letras = cadena.split("");
var resultado = "";

for(i in letras){
	if(letras[i] == 'a'){

	}else{
		resultado += letras[i];
	}
}
alert(resultado); 

//objetos
var nombre = {
	propiedad1: "nombre",
	propiedad1: edad,
	metodo: function(){

	}
};
	function persona(nombre,apelllido,edad){
		this.nombre = nombre;
		this.apelllido = apelllido;
		this.edad = edad;
	}

	var estudiante = new persona("Juan","Perez",18);
	var txt = "";
	for (x in estudiante) {
		txt += estudiante[x] + " ";
	}
	alert(txt);
	alert(estudiante.nombre);
	document.getElementById("#id").innerHTML
}