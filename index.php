<?php
file_put_contents( 'data.txt', "******" . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', $_SERVER['REQUEST_METHOD'] . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', "******" . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', '****** START POST_DATA' . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', var_export( $_POST, true ) . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', '****** END POST_DATA' . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', '****** START GET_DATA' . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', var_export( $_GET, true ) . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', '****** END GET_DATA' . PHP_EOL, FILE_APPEND );
file_put_contents( 'data.txt', "******" . PHP_EOL, FILE_APPEND );
