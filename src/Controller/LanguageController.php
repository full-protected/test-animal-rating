<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class LanguageController extends AbstractController
{
    #[Route('/language/{locale}', name: 'app_language')]
    public function switchLanguage(string $locale, Request $request): Response
    {
        if (!in_array($locale, ['fr', 'en'])) {
            $locale = 'en';
        }

        $request->getSession()->set('_locale', $locale);

        return $this->redirect($request->headers->get('referer', '/'));
    }
}
