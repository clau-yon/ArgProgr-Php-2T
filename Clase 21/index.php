<?php
	class Persona{
		public $nombre;
		public $edad;
		public function __construct($nombre,$edad){
			$this->nombre = $nombre;
			$this->edad = $edad;
		}

	}
	$persona1 = new Persona("Carlos",35);
	echo "Nombre " . $persona1->nombre . "<br>";
	echo "Edad " . $persona1->edad . " años";

	echo "<br>";
	class Calculadora{
		public function sumar($n1,$n2){
			return $n1 + $n2;
		}
		public function restar($n1,$n2){
			return $n1 - $n2;
		} 
		public function multiplicar($n1,$n2){
			return $n1 * $n2;
		}
		public function dividir($n1,$n2){
			if($n2 !=0){
				return $n1 / $n2;
			}
			else{
			return "Error un numero no se puede dividir entre 0 .";
			}
		}
	}
	// Ejercicio 2
	$calculadora = new Calculadora();

	$n1 = 12;
	$n2 = 2;

	$suma = $calculadora->sumar($n1,$n2);
	$resta = $calculadora->restar($n1,$n2);
	$multiplica = $calculadora->multiplicar($n1,$n2);
	$dividir = $calculadora->dividir($n1,$n2);

	echo $n1 . "+" . $n2 . " = " . $suma . "<br>";
	echo $n1 . "-" . $n2 . " = " . $resta . "<br>";
	echo $n1 . "*" . $n2 . " = " . $multiplica . "<br>";
	echo $n1 . "/" . $n2 . " = " . $dividir . "<bra>";	

	//Ejercicio3
	interface Animal {
		public function comer();
		public function dormir();
	}
	// Clase Perro implementa la interfaz Animal
	class Perro implements Animal {
		public function comer() {
			echo "El perro esta comiendo. <br>";
		}
	
		public function dormir() {
			echo "El perro esta durmiendo. <br>";
		}
	
		public function ladrar() {
			echo "¡Guau! <br>";
		}
	}
	
	// Crear un objeto de la clase Perro
	$miPerro = new Perro();
	$miPerro->comer();
	$miPerro->dormir();
	$miPerro->ladrar();
?>
