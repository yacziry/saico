
<?php

$galletita = $_POST['galletita'];
$link = $_POST['link'];
$cmd = "wkhtmltopdf --margin-top 10 --margin-bottom 10 --margin-left 30 --margin-right 30 --cookie PHPSESSID ".$galletita." -O landscape --dpi 55 --footer-center [page]/[topage] ".$link." ./tmp/ReporteBocaTubo.pdf";
$output = system($cmd);

$filename = "./tmp/ReporteBocaTubo.pdf";

if(file_exists($filename)){

    //Get file type and set it as Content Type
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    header('Content-Type: ' . finfo_file($finfo, $filename));
    finfo_close($finfo);

    //Use Content-Disposition: attachment to specify the filename
    header('Content-Disposition: attachment; filename='.basename($filename));

    //No cache
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');

    //Define file size
    header('Content-Length: ' . filesize($filename));

    ob_clean();
    flush();
    readfile($filename);
    exit;
}

?>

