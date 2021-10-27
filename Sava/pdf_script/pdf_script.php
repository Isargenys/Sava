<?php

namespace Dompdf;
require_once 'dompdf/autoload.inc.php';


if (isset($_POST['sendit'])) {
	$pdf = new Dompdf();

	$pdf->loadHtml('
		<style>
			body { font-family: Arial, Helvetica, sans-serif; }
			h3 { text-align: center; font-style: oblique; }
			table { vertical-align: middle; width: 57%; }
			table, th, td { border: 2px solid #000; border-collapse: collapse; }
			th, td { padding: 10px; }
		</style>

    	<h3>Apertura Siniestro</h3>

	<table>
		<tbody>
    		<tr>
    			<td><strong>Compañia</strong></td>
    			<td>' . $_POST['companyName'] . '</td>
    			<td><strong>Descripcion del Siniestro</strong></td>
    			<td colspan="3">' . $_POST['sinisterDescription'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Analista</strong></td>
    			<td>' . $_POST['analistName'] . '</td>
    			<td><strong>Causa del Siniestro</strong></td>
    			<td colspan="3">' . $_POST['sinisterCause'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Ramo</strong></td>
    			<td>' . $_POST['branch'] . '</td>
    			<td><strong>Correo Notificacion</strong></td>
    			<td>' . $_POST['companyName'] . '</td>
    			<td colspan="2">' . $_POST['companyName'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Poliza</strong></td>
    			<td>' . $_POST['policy'] . '</td>
    			<td><strong>Intermediario</strong></td>
    			<td colspan="3">' . $_POST['intermediary'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Siniestro</strong></td>
    			<td>' . $_POST['sinister'] . '</td>
    			<td><strong>Nombre Asegurado</strong></td>
    			<td colspan="3">' . $_POST['secureName'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Amparo Afectado</strong></td>
    			<td colspan="2">' . $_POST['affectedAmparo1'] . '</td>
    			<td colspan="2">' . $_POST['affectedAmparo2'] . '</td>
    			<td colspan="2">' . $_POST['affectedAmparo3'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Bajo Cobertuda</strong></td>
    			<td colspan="2">' . $_POST['underCoverage'] . '</td>
    			<td><strong>NIT/Cedula</strong></td>
    			<td colspan="2">'. $_POST['documentNumber'] .'</td>
    		</tr>
    		<tr>
    			<td><strong>Fecha/Hora Siniestro</strong></td>
    			<td>' . $_POST['datetimeSinister'] . '</td>
    			<td><strong>Fecha/Aviso Siniestro</strong></td>
    			<td>'. $_POST['datenoticeSinister'] .'</td>
    			<td><strong>Fecha inspeccion</strong></td>
    			<td>'. $_POST['checkDate'] .'</td>
    		</tr>
    		<tr>
    			<td><strong>Direccion del Evento</strong></td>
    			<td>' . $_POST['eventAddress'] . '</td>
    			<td><strong>Ciudad</strong></td>
    			<td>'. $_POST['cityName'] .'</td>
    			<td><strong>Departamento</strong></td>
    			<td>'. $_POST['department'] .'</td>
    		</tr>
    		<tr>
    			<td><strong>Archivo Adjunto</strong></td>
    			<td colspan="5">' . $_POST['attachFile'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Valor Asegurado</strong></td>
    			<td colspan="2">' . $_POST['secureValue'] . '</td>
    			<td><strong>Valor Reclamacion</strong></td>
    			<td colspan="2">' . $_POST['claimValue'] . '</td>
    		</tr>
    		<tr>
    			<td><strong>Valor Perdida</strong></td>
    			<td colspan="2">' . $_POST['lostValue'] . '</td>
    			<td><strong>Valor Indemnizacion</strong></td>
    			<td colspan="2">' . $_POST['IndemnityValue'] . '</td>
    		</tr>
		</tbody>
    </table>
   	');

	$pdf->setPaper('A4');
    $pdf->render();
    $pdf->stream("",array("Attachment" => false));
    exit(0);
}

?>