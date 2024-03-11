<?php
// Set the path to the PDF file
$pdfFilePath = 'javascript.pdf';

// Check if the file exists
if (file_exists($pdfFilePath)) {
    // Set the appropriate headers for PDF rendering
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($pdfFilePath) . '"');
    header('Content-Length: ' . filesize($pdfFilePath));

    // Send the PDF file content
    readfile($pdfFilePath);
} else {
    // File not found, handle error
    echo 'PDF file not found.';
}
?>
