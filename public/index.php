<?php
if (! session_id()) {
    session_start();
}
require '../app/_init.php';

new App;