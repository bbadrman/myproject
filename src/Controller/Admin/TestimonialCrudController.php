<?php

namespace App\Controller\Admin;

use App\Entity\Testimonial;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class TestimonialCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Testimonial::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('name', 'Client Name'),
            TextField::new('profession', 'Profession / Role'),
            TextareaField::new('content', 'Comment / Quote'),
            ImageField::new('image')
                ->setBasePath('assets/img/testimonials')
                ->setUploadDir('public/assets/img/testimonials')
                ->setRequired(false),
        ];
    }
}
