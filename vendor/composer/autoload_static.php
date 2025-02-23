<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f903ae7cf2ee651a50e271a7817ccb2
{
    public static $classMap = array (
        'ComposerAutoloaderInit0f903ae7cf2ee651a50e271a7817ccb2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit0f903ae7cf2ee651a50e271a7817ccb2' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'GenFrame\\Database\\Migrations\\PostsTable' => __DIR__ . '/../..' . '/SourceFiles/Root/Database/Migrations/PostsTable.php',
        'Pivot\\Database\\Migrations\\UsersTable' => __DIR__ . '/../..' . '/SourceFiles/Root/Database/Migrations/UsersTable.php',
        'Pivot\\src\\core\\Database' => __DIR__ . '/../..' . '/SourceFiles/Pivot/src/core/database.php',
        'Pivot\\src\\core\\Router' => __DIR__ . '/../..' . '/SourceFiles/Pivot/src/core/router.php',
        'Pivot\\src\\core\\Template' => __DIR__ . '/../..' . '/SourceFiles/Pivot/src/core/template.php',
        'Root\\Database\\Connection' => __DIR__ . '/../..' . '/SourceFiles/Root/Database/Connection.php',
        'Root\\Database\\Database' => __DIR__ . '/../..' . '/SourceFiles/Root/Database/Database.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit0f903ae7cf2ee651a50e271a7817ccb2::$classMap;

        }, null, ClassLoader::class);
    }
}
