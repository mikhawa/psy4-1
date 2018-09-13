<?php

// src/Controller/HasardController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HasardController {

    public function number() {
        $number = random_int(0, 100);
        return new Response(
                '<html><body>Nombre au hasard: ' . $number . '</body></html>'
        );
    }

}