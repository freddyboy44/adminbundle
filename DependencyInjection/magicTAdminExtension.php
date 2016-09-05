<?php

namespace magicT\AdminBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration.
 *
 * @link http://symfony.com/doc/current/cookbook/bundles/extension.html
 */
class magicTAdminExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $processedConfig = $this->processConfiguration( $configuration, $configs );
        
        $container->setParameter( 'magictadmin_sitenaam', $processedConfig[ 'sitenaam']);
        $container->setParameter( 'magictadmin_logo', $processedConfig[ 'logo']);
        $container->setParameter( 'magictadmin_showmega', $processedConfig[ 'showmega']);
        $container->setParameter( 'magictadmin_showmeertalig', $processedConfig[ 'showmeertalig']);
        $container->setParameter( 'magictadmin_showuser', $processedConfig[ 'showuser']);
        $container->setParameter( 'magictadmin_showchat', $processedConfig[ 'showchat']);
        $container->setParameter( 'magictadmin_showsearch', $processedConfig[ 'showsearch']);
        $container->setParameter( 'magictadmin_shownotifications', $processedConfig[ 'shownotifications']);
        $container->setParameter( 'magictadmin_showmessages', $processedConfig[ 'showmessages']);


        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));
        $loader->load('services.yml');
    }
}
