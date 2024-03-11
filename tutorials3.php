<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Page</title>
    <style>
        /* CSS styles for the tutorial page */
        body {
            font-family: Arial, sans-serif;
        }
        
        .language {
            display: inline-block;
            width: 25%;
            padding: 20px;
            background-color: #f2f2f2;
            border: 1px solid #ccc;
            cursor: pointer;
        }
        
        .language:hover {
            background-color: #e6e6e6;
        }
        
        .pdf-container {
            display: none;
        }
        
        .pdf-container.active {
            display: block;
        }
    </style>
    <script>
        // JavaScript code for handling the PDF display
        window.onload = function() {
            var languages = document.getElementsByClassName('language');
            
            for (var i = 0; i < languages.length; i++) {
                languages[i].addEventListener('mouseover', function() {
                    var pdfContainers = document.getElementsByClassName('pdf-container');
                    
                    for (var j = 0; j < pdfContainers.length; j++) {
                        pdfContainers[j].classList.remove('active');
                    }
                    
                    var languageName = this.getAttribute('data-language');
                    var pdfContainer = document.getElementById(languageName);
                    pdfContainer.classList.add('active');
                });
            }
        };
    </script>
</head>
<body>
    <div class="language" data-language="c">C</div>
    <div class="language" data-language="cpp">C++</div>
    <div class="language" data-language="java">Java</div>
    <div class="language" data-language="python">Python</div>
    
    <div class="pdf-container" id="c">
        <embed src="<a href="file:///C:/xampp/htdocs/tutorials/C.pdf" type="application/pdf" width="100%" height="600px" />
    </div>
    
    <div class="pdf-container" id="cpp">
        <embed src="path/to/cpp.pdf" type="application/pdf" width="100%" height="600px" />
    </div>
    
    <div class="pdf-container" id="java">
        <embed src="path/to/java.pdf" type="application/pdf" width="100%" height="600px" />
    </div>
    
    <div class="pdf-container" id="python">
        <embed src="path/to/python.pdf" type="application/pdf" width="100%" height="600px" />
    </div>
</body>
</html>
<a href="C:\xampp\htdocs/C.pdf" target="">Download PDF</a>
<?php 

// The location of the PDF file 
// on the server 
$filename = "C:\xampp\htdocs\tutorials\c.pdf"; 

// Header content type 
header("Content-type: application/pdf"); 

header("Content-Length: " . filesize($filename)); 

// Send the file to the browser. 
readfile($filename); 
?> 