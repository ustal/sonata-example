<?php

namespace AppBundle\Admin;

use AppBundle\Entity\Post;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class AdminPost extends AbstractAdmin
{
    /**
     * @inheritDoc
     */
    protected function configureListFields(ListMapper $list)
    {
        /** @noinspection ExceptionsAnnotatingAndHandlingInspection */
        $list
            ->add(
                'title',
                null,
                [
                    'label' => 'post.title',
                ]
            )
            ->add(
                'description',
                null,
                [
                    'label' => 'post.description',
                ]
            );
    }

    /**
     * @return string
     */
    protected function getLocale(): string
    {
        return $this->hasRequest() ? $this->getRequest()->getLocale() : 'ru';
    }

    /**
     * @param DatagridMapper $filter
     * @throws \RuntimeException
     */
    protected function configureDatagridFilters(DatagridMapper $filter)
    {
        $filter
            ->add(
                'title',
                null,
                [
                    'label' => 'post.title',
                ]
            )
            ->add(
                'description',
                null,
                [
                    'label' => 'field.date.created',
                ]
            );
    }

    /**
     * @inheritdoc
     * @throws \RuntimeException
     */
    public function toString($object)
    {
        $result = 'New';

        if ($object instanceof Post) {
            $result = $object->getTitle();
        }

        return $result;
    }

    /**
     * @inheritdoc
     */
    public function configureFormFields(FormMapper $form)
    {
        $form
            ->add(
                'title',
                null,
                [
                    'label' => 'post.title',
                ]
            )
            ->add(
                'description',
                null,
                [
                    'label' => 'post.description',
                ]
            );
    }
}
