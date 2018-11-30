<?PHP
    //$file = fopen("index.html", "r");
    $handle = printer_open('HP LaserJet Professional P1606dn');
    printer_start_doc($handle, "My Documa");
    printer_start_page($handle);

    $lfont = printer_create_font("Arial", 30,30, PRINTER_FW_BOLD, false, false, false, 0);
    printer_select_font($handle, $lfont);

    printer_set_option($handle, PRINTER_MODE, "RAW");
    printer_set_option($handle, PRINTER_PAPER_FORMAT, PRINTER_FORMAT_CUSTOM);
    printer_set_option($handle,PRINTER_PAPER_WIDTH,42);
    printer_set_option($handle,PRINTER_PAPER_LENGTH,30);

    echo printer_get_option($handle,PRINTER_RESOLUTION_X);
    echo '<br ?>';
    echo printer_get_option($handle,PRINTER_RESOLUTION_Y);
    echo "<br />";
    echo 'format'.printer_get_option($handle,PRINTER_PAPER_FORMAT);
    echo "<br />";
    echo "modal".printer_get_option($handle,PRINTER_MODE);
    echo "<br />";
    echo "width".printer_get_option($handle,PRINTER_PAPER_WIDTH);

    printer_draw_text($handle,"564587897687687", 260, 0);
    printer_delete_font($lfont);
    printer_end_page($handle);
    printer_end_doc($handle);
    printer_close($handle);
?>
