<?php
session_start();
session_destroy();
header('Location: index.php?logged-out=true');
exit();
