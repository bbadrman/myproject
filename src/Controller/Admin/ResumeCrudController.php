<?php

namespace App\Controller\Admin;

use App\Entity\Resume;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ResumeCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Resume::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->hideOnForm(),
            TextField::new('title', 'Title'),
            TextField::new('subtitle', 'Subtitle / Company / School'),
            TextField::new('period', 'Period (e.g. 2018 - 2022)'),
            ChoiceField::new('category')->setChoices([
                'Summary' => 'summary',
                'Education' => 'education',
                'Experience' => 'experience',
            ]),
            TextareaField::new('description', 'Description'),
        ];
    }
}
