<?php
namespace magicT\AdminBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('magic_t_admin');
        
        $rootNode
            ->children()
                ->scalarNode('sitenaam')->defaultValue('Dashboard')->end()
                ->scalarNode('logo')->defaultValue('img/logo.png')->end()
                ->booleanNode('showmega')->defaultValue(false)->end()
                ->booleanNode('showmeertalig')->defaultValue(false)->end()
                ->booleanNode('showuser')->defaultValue(true)->end()
                ->booleanNode('shownotifications')->defaultValue(false)->end()
                ->booleanNode('showmessages')->defaultValue(false)->end()
                ->booleanNode('showchat')->defaultValue(false)->end()
                ->booleanNode('showsearch')->defaultValue(false)->end()

            ->end()
            ;
        
        return $treeBuilder;
    }
}
?>