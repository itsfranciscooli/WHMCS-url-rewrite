<?php
// Redirect the Network Status page
add_hook('ClientAreaPageServerStatus', 1, function($vars) {
    header("Location: https://status.tenzix.com");
    exit;
});

// Redirect the Announcements page
add_hook('ClientAreaPageAnnouncements', 1, function($vars) {
    header("Location: https://blog.tenzix.com");
    exit;
});

// Redirect the Knowledgebase page
add_hook('ClientAreaPageKnowledgebase', 1, function($vars) {
    header("Location: https://help.tenzix.com");
    exit; 
});
