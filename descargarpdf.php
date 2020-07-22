<?php
require_once __DIR__ . '/vendor/autoload.php';

$fileContents = stripslashes($_POST['fileContents']);
$css = $_POST['css'];
$fileName = $_POST['fileName'];

//==============================================================
//==============================================================
//==============================================================

//settup
try {
    ob_end_clean();
    $mpdf = new \Mpdf\Mpdf([
        'mode' => 'utf-8'
    ]);
$mpdf->debug = true;
$mpdf->showImageErrors = true;
$mpdf->curlAllowUnsafeSslRequests = true;
$mpdf->SetDisplayMode('fullpage');

// LOAD a stylesheet
$stylesheet = file_get_contents($css);
$mpdf->WriteHTML($stylesheet,1);	
// The parameter 1 tells that this is css/style only and no body/html/text
$mpdf->WriteHTML($fileContents);
$mpdf->Output($fileName,'I');
//I: send the file inline to the browser. The plug-in is used if available. The name given by filename is used when one selects the "Save as" option on the link generating the PDF.
//D: send to the browser and force a file download with the name given by filename.
//F: save to a local file with the name given by filename (may include a path).
//S: return the document as a string. filename is ignored.
} catch (\Mpdf\MpdfException $e) { // Note: safer fully qualified exception 
    //       name used for catch
// Process the exception, log, print etc.
echo $e->getMessage();
}
exit;
//==============================================================
//==============================================================
//==============================================================
?>