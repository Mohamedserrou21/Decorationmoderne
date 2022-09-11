<?php

namespace App\Controller\Admin;

use App\Repository\ContactRepository;
use App\Entity\Contact;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    /**
     * @var ContactRepository
     */

    protected ContactRepository $contactRepository;
    public function __construct(
        ContactRepository $contactRepository


    ) {
        $this->ContactRepository = $contactRepository;
    }
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {

        return  $this->render('admin/index.html.twig', [
            'countContact' => $this->ContactRepository->countAllContact(),


        ]);
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Decoration Moderne');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Message', 'fas fa-sms', Contact::class);
    }
}
