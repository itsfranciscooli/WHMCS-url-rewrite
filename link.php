<?php

use WHMCS\View\Menu\Item as MenuItem;

add_hook('ClientAreaPrimaryNavbar', 1, function (MenuItem $primaryNavbar)
{
   if (!is_null($primaryNavbar->getChild('Knowledgebase'))) {
       $primaryNavbar->getChild('Knowledgebase')
                       ->setURI('https://help.xmhosts.com');
   }

   if (!is_null($primaryNavbar->getChild('Support'))) {
       $primaryNavbar->getChild('Support')
                       ->getChild('Knowledgebase')
                       ->setURI('https://help.xmhosts.com');
   }
});
