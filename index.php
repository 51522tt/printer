<?php
    //$pdf = fopen("example_001.pdf", "w");
    
    $pdf = "111.pdf";
    exec('FoxitReader.exe /p "'.$pdf.'"');
?>

