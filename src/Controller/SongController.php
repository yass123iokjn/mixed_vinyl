<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]
    public function getSong(int $id): Response
    {

        $songs = [

            1 => ['name' => 'Gangsta\'s Paradise', 'url' => '/Songs/gangstas-paradise.mp3'],
            2 => ['name' => 'Waterfalls', 'url' => '/Songs/Waterfalls.mp3'],
            3 => ['name' => 'Creep', 'url' => '/Songs/creep.mp3'],
            4 => ['name' => 'Kiss from a Rose', 'url' => '/Songs/kiss from a rose.mp3'],
            5 => ['name' => 'On Bended Knee', 'url' => '/Songs/on bended knee.mp3'],
            6 => ['name' => 'Fantasy', 'url' => '/Songs/fantasy.mp3'],
        ];

        if (array_key_exists($id, $songs)) {
            return $this->json($songs[$id]);
        }
    }
}
