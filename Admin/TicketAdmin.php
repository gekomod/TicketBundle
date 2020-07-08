<?php

declare(strict_types=1);

namespace Gekomod\TicketBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class TicketAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
     	$datagridMapper
            ->add('title')
            ->add('category')
            ->add('priority')
            ->add('is_solved')
            ->add('user');
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
     	$listMapper
            ->add('title')
            ->add('category')
            ->add('priority')
            ->add('is_solved')
            ->add('user')
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
     	$formMapper
            ->add('title')
            ->add('category')
            ->add('priority')
            ->add('is_solved')
            ->add('user')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
     	$showMapper
            ->add('title')
            ->add('category')
            ->add('priority')
            ->add('is_solved')
            ->add('user')
            ;
    }
}