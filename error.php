<?php

$message = "I'm a nasty error!";

error_log($message);

echo "I just logged error message: $message";