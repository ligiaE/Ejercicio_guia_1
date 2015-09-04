<?php if (!empty($_POST['coeficieneA']) && !empty($_POST['coeficienteB']) && !empty($_POST['coeficienteC'])){
				$a = $_POST['coeficienteA'];
                $b = $_POST['coeficienteB'];
				$c = $_POST['coeficienteC'];
				$r1 = (-$b + (sqrt(pow($b,2) - (4*$a*$c))))/2*$a;
				$r2 = (-$b - (sqrt(pow($b,2) - (4*$a*$c))))/2*$a;
				
				if(is_nan($r1) || is_nan($r2)){
					if(is_nan($r1) && is_nan($r2)){
						echo "Ni el primero, ni el segundo tiene solucion";
					}else if(is_nan($r1)){
						echo "El primer resultado no tiene solucion";
						echo "El segundo resultado es: ".$r2."</br>";
					}else if(is_nan($r2)){
						echo "El primer resultado es: ".$r1."</br>";
						echo "El segundo resultado no tiene solucion";
					}
				}else {
					echo "El primer resultado es: ".$r1."</br>";
					echo "El segundo resultado es: ".$r2."</br>";
				}
				
			}
        ?>