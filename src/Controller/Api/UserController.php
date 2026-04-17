<?php

namespace App\Controller\Api;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

final class UserController extends AbstractController
{
    #[Route('/api/me', name: 'api_me', methods: ['GET'])]
    public function me(Request $request, UserRepository $userRepository): JsonResponse
    {
        $token = $request->headers->get('X-AUTH-TOKEN');

        if (!$token) {
            return $this->json([
                'message' => 'Token manquant'
            ], 401);
        }

        $user = $userRepository->findOneBy(['apiToken' => $token]);

        if (!$user) {
            return $this->json([
                'message' => 'Token invalide'
            ], 401);
        }

        return $this->json([
            'id' => $user->getId(),
            'email' => $user->getEmail(),
            'roles' => $user->getRoles(),
        ], 200);
    }
}