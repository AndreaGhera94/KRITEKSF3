<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'doctrine_migrations.dump_schema_command' shared service.

include_once $this->targetDirs[3].'/vendor/symfony/console/Command/Command.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/AbstractCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/migrations/lib/Doctrine/Migrations/Tools/Console/Command/DumpSchemaCommand.php';
include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-migrations-bundle/Command/MigrationsDumpSchemaDoctrineCommand.php';

$this->services['doctrine_migrations.dump_schema_command'] = $instance = new \Doctrine\Bundle\MigrationsBundle\Command\MigrationsDumpSchemaDoctrineCommand();

$instance->setName('doctrine:migrations:dump-schema');

return $instance;
