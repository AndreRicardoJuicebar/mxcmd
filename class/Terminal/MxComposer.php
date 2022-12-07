<?php

namespace Terminal;

use Elegance\Dir;
use Elegance\MxCmd;

abstract class MxComposer extends MxCmd
{
    protected static function execute()
    {
        $composer = jsonFile('composer');

        $composer['autoload'] = $composer['autoload'] ?? [];
        $composer['autoload']['psr-4'] = $composer['autoload']['psr-4'] ?? [];
        $composer['autoload']['psr-4'][''] = path(env('PATH_CLASS') . '/');

        $autoImport = path(env('PATH_HELPER'));

        $files = [];

        foreach ($composer['autoload']['files'] ?? [] as $file)
            if (substr($file, 0, strlen($autoImport)) != $autoImport)
                $files[] = $file;

        $files = [...$files, ...self::seek_for_file($autoImport)];

        $composer['autoload']['files'] = $files;

        jsonFile('composer', $composer, false);

        MxCmd::show('Arquivo [composer.json] atualizado');

        self::update();
    }

    protected static function update()
    {
        MxCmd::show('------------------------------------------------------------');
        echo shell_exec("composer update");
        MxCmd::show('------------------------------------------------------------');
    }

    protected static function seek_for_file($ref)
    {
        $return = [];

        foreach (Dir::seek_for_dir($ref) as $dir)
            foreach (self::seek_for_file("$ref/$dir") as $file)
                $return[] = path($file);

        foreach (Dir::seek_for_file($ref) as $file)
            $return[] = path("$ref/$file");

        return $return;
    }
}
