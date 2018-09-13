<?php

// src/Controller/HasardController.php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HasardController extends AbstractController {

    public function number() {
        $number = random_int(0, 100);
        return new Response(
                '<html><body>Nombre au hasard: ' . $number . '</body></html>'
        );
    }

    public function number2($n) {

        return $this->render('number2.html.twig', [
                    'number' => $n,
        ]);
    }

}
