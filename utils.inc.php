<?php
function start_page ($title)
{
    echo '<!DOCTYPE html> ' . PHP_EOL .
        '<html lang=fr> ' . PHP_EOL .
        '<head>
                    <title>' . $title . '</title>
                  </head>
                  <body>' . PHP_EOL;
};
function end_page (){
    echo '</body>
                  </html>';
}