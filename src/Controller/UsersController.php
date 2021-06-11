<?php

declare(strict_types=1);
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UsersController {

    /**
     * @Route("/users", name="users_index")
     */
    
    public function users(): Response {

        // Una acción siempre devolver una respuesta,
        // por defecto deberá ser un objeto de la clase,
        // Symfony\Component\HttpFoundation\Response
        return new Response('adios');
    }
}