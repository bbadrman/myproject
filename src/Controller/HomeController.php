<?php

namespace App\Controller;
use App\Repository\SkillRepository;
use App\Repository\ProjectRepository;
use App\Repository\AboutRepository;
use App\Repository\TestimonialRepository;
use App\Repository\ResumeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ProjectRepository $projectRepository, 
        SkillRepository $skillRepository,
        AboutRepository $aboutRepository,
        TestimonialRepository $testimonialRepository,
        ResumeRepository $resumeRepository
    ): Response
    {
        return $this->render('home/index.html.twig', [
            'projects' => $projectRepository->findAll(),
            'skills' => $skillRepository->findAll(),
            'about' => $aboutRepository->findOneBy([]),
            'testimonials' => $testimonialRepository->findAll(),
            'resumes' => $resumeRepository->findAll(),
        ]);
    }
}
