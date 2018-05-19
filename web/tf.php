<?php

$data = 'data:image/png;base64,AAAFBfj42Pj4';

$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $data));

file_put_contents('/var/www/html/image.png', $data);
