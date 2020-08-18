<?php
file_put_contents( 'data.txt', $_SERVER['HTTP_REFERER'] . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', $_SERVER['REQUEST_METHOD'] . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', var_export( $_REQUEST, true ) . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', "******" . PHP_EOL, FILE_APPEND );
