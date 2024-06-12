<?php

namespace App\Controller;


use App\Entity\Echelle;
use App\Entity\Entite;
use App\Entity\Genre;
use App\Entity\SourceNumber;
use App\Entity\TypeNumber;
use Doctrine\ORM\EntityManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Exception\JsonException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ElectionController extends AbstractController
{
    #[Route('/election/init', name: 'app_init_bdd', methods: 'POST')]
    public function addElection(Request $request, EntityManager $entityManager): Response
    {

        $sourceRepo = $entityManager->getRepository(SourceNumber::class);
        $source = new SourceNumber();
        $source->setNom("Ministère de l'Intérieur");
        $source->setLien("https://www.archives-resultats-elections.interieur.gouv.fr/");
        $entityManager->persist($source);
        $entityManager->flush();
        $sourceId = $source->getId();

        $genreRepo = $entityManager->getRepository(Genre::class);
        $genre = new Genre();
        $genre->setNom("Election");
        $genre->setSourceId($sourceId);
        $entityManager->persist($genre);
        $entityManager->flush();
        $genreId = $genre->getId();

        $typeRepo = $entityManager->getRepository(TypeNumber::class);
        $type = new TypeNumber();
        $type->setNom("Election");
        $type->setGenreId($genreId);
        $entityManager->persist($type);
        $entityManager->flush();
        $typeId = $type->getId();

        $echelleRepo = $entityManager->getRepository(Echelle::class);
        $echelle = new Echelle();
        $echelle->setNom("Pays");
        $entityManager->persist($echelle);
        $entityManager->flush();
        $echelleId = $echelle->getId();

        $entiteRepo = $entityManager->getRepository(Entite::class);
        $entite = new Entite();
        $entite->setNom("France");
        $entite->setEchelleId($echelleId);
        $entityManager->persist($entite);
        $entityManager->flush();
        $entiteId = $entite->getId();



        return $this->render('election/index.html.twig', [
            'controller_name' => 'ElectionController',
        ]);
    }
    #[Route('/election', name: 'app_add_election', methods: 'POST')]
    public function addElection(Request $request, EntityManager $entityManager): Response
    {
        try {
            $data = json_decode($request->getContent(), true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $e) {
            return new Response('Invalid JSON: ' . $e->getMessage(), Response::HTTP_BAD_REQUEST);
        }
        $quizRepo = $entityManager->getRepository(Quiz::class);
        return $this->render('election/index.html.twig', [
            'controller_name' => 'ElectionController',
        ]);
    }
}
