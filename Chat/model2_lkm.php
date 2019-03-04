<?php
		# Tutkitaan viestien määrä lkm-muuttujasta
			if ($lkm > 11) /* jos suurempi kuin 10 niin */
			{
			file_put_contents("data1_chat.txt", "");
			/* koska file_put_contents ei lopu appen -määritykseen niin kaikki tiedot korvautuvat. */
			}
?>