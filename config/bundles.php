<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\UX\StimulusBundle\StimulusBundle::class => ['all' => true],
    Symfony\UX\Turbo\TurboBundle::class => ['all' => true],
    Twig\Extra\TwigExtraBundle\TwigExtraBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Doctrine\Bundle\FixturesBundle\DoctrineFixturesBundle::class => ['prod' => true, 'dev' => true, 'test' => true],
    Symfony\UX\Chartjs\ChartjsBundle::class => ['all' => true],
    SpomkyLabs\PwaBundle\SpomkyLabsPwaBundle::class => ['all' => true],
    Survos\CoreBundle\SurvosCoreBundle::class => ['all' => true],
    Survos\PwaExtraBundle\SurvosPwaExtraBundle::class => ['all' => true],
    Survos\DeploymentBundle\SurvosDeploymentBundle::class => ['dev' => true, 'test' => true],
    Symfony\UX\TwigComponent\TwigComponentBundle::class => ['all' => true],
    Presta\SitemapBundle\PrestaSitemapBundle::class => ['all' => true],
    Survos\CommandBundle\SurvosCommandBundle::class => ['all' => true],
    Sentry\SentryBundle\SentryBundle::class => ['prod' => true],
    Meilisearch\Bundle\MeilisearchBundle::class => ['all' => true],
    Schranz\Search\Integration\Symfony\SearchBundle::class => ['all' => true],
];
