<?php

namespace SoftUniBlogBundle\Form;

use Doctrine\DBAL\Types\TextType;
use function Sodium\add;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', \Symfony\Component\Form\Extension\Core\Type\TextType::class)
            ->add('content', \Symfony\Component\Form\Extension\Core\Type\TextType::class);

    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array('data_class'=>'SoftUniBlogBundle\Entity\Article',));

    }

    public function getBlockPrefix()
    {
        return 'soft_uni_blog_bundle_article_type';
    }
}
