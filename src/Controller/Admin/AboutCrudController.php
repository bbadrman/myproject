<?php

namespace App\Controller\Admin;

use App\Entity\About;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class AboutCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return About::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title', 'Title (e.g. Back-End & Developer PHP)'),
            TextField::new('subtitle', 'Subtitle (Italic text)'),
            TextareaField::new('description', 'Description (Bio)'),
            ImageField::new('image')
                ->setBasePath('assets/img')
                ->setUploadDir('public/assets/img')
                ->setRequired(false),
            DateField::new('birthday'),
            TextField::new('website'),
            TextField::new('phone'),
            TextField::new('city'),
            IntegerField::new('age'),
            TextField::new('degree'),
            TextField::new('email'),
            TextField::new('freelance'),
        ];
    }
}
