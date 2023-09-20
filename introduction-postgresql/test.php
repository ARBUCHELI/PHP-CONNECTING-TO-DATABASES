<?php
if (extension_loaded('pdo_pgsql')) {
    echo "PostgreSQL PDO extension is enabled.";
} else {
    echo "PostgreSQL PDO extension is not enabled.";
}
