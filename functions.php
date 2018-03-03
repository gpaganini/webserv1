<?php
	function vetor() {
		for ($i = 0; $i <= 364; $i++) {
			$vector[$i] = 0;
			echo $vector[$i];
		}
	}

	function vetorTrueFalse() {
		for ($i = 0; $i <= 11; $i++) {
			if ($i < 6) {
				$vector[$i] = TRUE;
				echo $vector[$i];
			}
			else {
				$vector[$i] = FALSE;
				echo $vector[$i];
			}
		}
	}

?>
