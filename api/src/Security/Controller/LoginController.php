<?php
/**
 * @author Jonathan Greco <jonathan@superextralab.com>
 * date 31/01/2019
 */
namespace App\Security\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBagInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController
{
    /**
     * @Route("/api/login", name="login", methods={"POST"})
     * @param AuthenticationUtils $authUtils
     * @return Response
     */
    public function login(AuthenticationUtils $authUtils): Response
    {
        $exception = $authUtils->getLastAuthenticationError();

        return new JsonResponse(["success" => $exception ? false : true, "message" => $exception ? $exception->getMessage(): null]);
    }
}
