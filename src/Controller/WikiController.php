<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Finder\Finder;

class WikiController extends AbstractController
{
    // Main page
    #[Route('/wiki', name: 'wiki_index')]
    public function index(): Response
    {
        $wikiDir = $this->getParameter('kernel.project_dir') . '/content/wiki';
        $finder = new Finder();
        $finder->files()->in($wikiDir)->name('*.md');
        $pages = [];

        foreach ($finder as $file) {
            $relativePath = $file->getRelativePathname();
            $slug = preg_replace('/\.md$/', '', $relativePath);
            $pages[] = str_replace('\\', '/', $slug);
        }

        return $this->render('wiki/index.html.twig', ['pages' => $pages]);
    }

    // One of the Markdown wiki page
    #[Route('/wiki/{slug}', name: 'wiki_show', requirements: ['slug' => '.+'])]
    public function show(string $slug): Response
    {
        // Make the path to the .md file
        $filePath = $this->getParameter('kernel.project_dir') . '/content/wiki/' . $slug . '.md';

        if (!file_exists($filePath)) {throw $this->createNotFoundException('Cette page wiki n\'existe pas.');}

        $markdownContent = file_get_contents($filePath);
        return $this->render('wiki/show.html.twig', ['slug' => $slug, 'content' => $markdownContent]);
    }
}
