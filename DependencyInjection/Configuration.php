<?php

namespace Ftrrtf\RollbarBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * @return \Symfony\Component\Config\Definition\Builder\TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('ftrrtf_rollbar');

        $rootNode
            ->children()
                ->scalarNode('access_token')->isRequired()->end()
                ->scalarNode('host')->defaultNull()->end()
                ->scalarNode('git_branch_auto_detect')->defaultTrue()->end()
                ->scalarNode('branch')->defaultValue('master')->end()
                ->scalarNode('root_dir')->defaultValue('%kernel.root_dir%/../')->end()
                ->scalarNode('environment')->defaultValue('unknown')->end()
            ->end();


        return $treeBuilder;
    }
}
