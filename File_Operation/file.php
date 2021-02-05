<?php
//file write
 // $file=fopen('nihad.pdf','w');
 // $string="Laravel is a web application framework with expressive, elegant syntax. We’ve already laid the foundation — freeing you to create without sweating the small things.";
 // fwrite($file,$string);
 // fclose($file);



 //file read
 $file=fopen('nihad.pdf', 'r');
 echo fread($file, filesize('nihad.pdf'));
 fclose($file);
