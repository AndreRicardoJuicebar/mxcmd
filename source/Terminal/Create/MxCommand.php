<?php

namespace Terminal\Create;

use Elegance\File;
use Elegance\Import;
use Elegance\MxCmd;
use Exception;

abstract class MxCommand extends MxCmd
{
    protected static function execute($commandName = null)
    {
        if (!$commandName)
            throw new Exception("Informe o nome do comando");

        $tmp = $commandName;
        $tmp = explode('.', $tmp);
        $tmp = array_map(fn ($value) => ucfirst($value), $tmp);

        $class = "Mx" . array_pop($tmp);

        $namespace = implode('\\', $tmp);
        $namespace = trim("Terminal\\$namespace", '\\');

        $filePath = path(
            env('PATH_CLASS'),
            str_replace('\\', '/', $namespace),
            "$class.php"
        );

        if (File::check($filePath))
            throw new Exception("Arquivo [$filePath] já existe");

        $prepare = [
            '[#]',
            'name' => $commandName,
            'class' => $class,
            'namespace' => $namespace,
            'PHP' => '<?php'
        ];

        $base = path(dirname(__DIR__, 3) . '/library/template/mx-create-command.txt');

        $content = Import::content($base, $prepare);

        File::create($filePath, $content);

        MxCmd::show('Comando [[#]] criado com sucesso.', $commandName);
    }
}