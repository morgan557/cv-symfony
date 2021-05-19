<?php

namespace App\Controller\Admin;

 use App\Entity\ProffesionnalExperience;
use App\Entity\Hobbies;
use App\Entity\Education;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class adminController extends AbstractDashboardController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return parent::index();
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Projet Cv');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('education', 'fas fa-list', Education::class);
         yield MenuItem::linkToCrud('Hobbies', 'fas fa-list', Hobbies::class);
         yield MenuItem::linkToCrud('ProffessionnalExperience', 'fas fa-list', ProffesionnalExperience::class);
    }
}
