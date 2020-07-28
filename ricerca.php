<?php
  $con= new mysqli("localhost","airflight","","my_airflight");
  if (mysqli_connect_errno()) {
    echo "connessione non effettuata: ".mysqli_connect_error(). "<BR>";
    exit();
  }

	$partenza= $_REQUEST["partenza"];
	$arrivo= $_REQUEST["arrivo"];
	$data_partenza= $_REQUEST["data_partenza"];
	$data_ritorno= $_REQUEST["data_ritorno"];



	$sql_query1="SELECT v.ora, v.data, v.prezzo FROM paese p, volo v, aeroporto a, citta c WHERE v.data = '$data_partenza'
								AND (c.nome = '$partenza' OR p.paese ='$partenza') AND c.ID_citta = a.id_citta AND a.ID_aeroporto = v.id_aeroporto_p
								AND p.ID_paese= c.id_paese AND (v.id_aeroporto_a = (SELECT a.ID_aeroporto FROM paese p, volo v, aeroporto a, citta c
								WHERE c.nome = '$arrivo' AND c.ID_citta = a.id_citta AND a.ID_aeroporto = v.id_aeroporto_a
								AND p.ID_paese= c.id_paese GROUP BY c.ID_citta) OR v.id_aeroporto_a = (SELECT a.ID_aeroporto
								FROM paese p, volo v, aeroporto a, citta c WHERE p.paese = '$arrivo' AND c.ID_citta = a.id_citta
								AND a.ID_aeroporto = v.id_aeroporto_a AND p.ID_paese= c.id_paese GROUP BY p.ID_paese))";

	$ris= $con -> query($sql_query1) or die ("Query fallita!!!");
    if($ris->num_rows != 0){
	echo "<TABLE><CAPTION>Da $partenza verso $arrivo </CAPTION>";
	echo "<TR><TH>Ora<TH>Data<TH>Prezzo €</TR>";
	foreach ($ris as $riga) {
	  echo "<TR><TD>".$riga["ora"];
	  echo "<TD>".$riga["data"];
	  echo "<TD>".$riga['prezzo'];
	}
	echo "</TR></TABLE>";
    }
   else{
     echo '<div class="alert">
          <strong>Non è stato trovato nessun volo corrispondente alle tue esigenze!</strong> Prova a cambiare data.
        </div>';
           }

if ($data_ritorno!=1) {

						$sql_query2="SELECT v.ora, v.data, v.prezzo FROM paese p, volo v, aeroporto a, citta c WHERE v.data = '$data_ritorno'
													AND (c.nome = '$arrivo' OR p.paese ='$arrivo') AND c.ID_citta = a.id_citta AND a.ID_aeroporto = v.id_aeroporto_p
													AND p.ID_paese= c.id_paese AND (v.id_aeroporto_a = (SELECT a.ID_aeroporto FROM paese p, volo v, aeroporto a, citta c
													WHERE c.nome = '$partenza' AND c.ID_citta = a.id_citta AND a.ID_aeroporto = v.id_aeroporto_a
													AND p.ID_paese= c.id_paese GROUP BY c.ID_citta) OR v.id_aeroporto_a = (SELECT a.ID_aeroporto
													FROM paese p, volo v, aeroporto a, citta c WHERE p.paese = '$partenza' AND c.ID_citta = a.id_citta
													AND a.ID_aeroporto = v.id_aeroporto_a AND p.ID_paese= c.id_paese GROUP BY p.ID_paese))";



						$ris2= $con -> query($sql_query2) or die ("Query fallita!!!");
                        if($ris2->num_rows != 0){
						echo "<BR><BR><BR><BR><TABLE><CAPTION>Da $arrivo verso $partenza </CAPTION>";
						echo "<TR><TH>Ora<TH>Data<TH>Prezzo €</TR>";
						foreach ($ris2 as $riga) {
							echo "<TR><TD>".$riga["ora"];
							echo "<TD>".$riga["data"];
							echo "<TD>".$riga["prezzo"];
							}
						echo "</TR></TABLE>";
                        }
   else{
     echo '<div class="alert">
          <strong>Non è stato trovato nessun volo corrispondente alle tue esigenze!</strong> Prova a cambiare data.
        </div>';
           }
}

  $con->close();
 ?>
