<?php
add_hook('ClientAreaPageServerStatus', 1, function($vars) {
    header("Location: https://status.franciscooliveira.me");
});
