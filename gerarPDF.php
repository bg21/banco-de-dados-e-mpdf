<?php
    ob_start();
    include('template.php');
    $conteudo = ob_get_contents();
    ob_end_clean();

    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($conteudo);
    $mpdf->Output();
?>