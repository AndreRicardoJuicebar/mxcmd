# elegance/mxcmd

Abre um projeto Elegance para acesso via terminal

    composer require elegance/mxcmd
    
    php ./vendor/elegance/mxcmd/install

---

### [Documentação](https://github.com/elegancephp/mxcmd/tree/main/.doc)

 - [helper](https://github.com/elegancephp/mxcmd/tree/main/.doc/helper)
    - [commands](https://github.com/elegancephp/mxcmd/tree/main/.doc/helper/commands.md)
    - [config](https://github.com/elegancephp/mxcmd/tree/main/.doc/helper/config.md)
 
---

### Testando

Para testar o funcionamento do **mxcmd**, execute o comando no terminal

    php mx

Se tudo estiver funcionando, uma logo do **MX-CMD** vai aparecer. 

### Executando comandos

Todo comando no terminal deve iniciar com **php mx**

    php mx [comando] [parametros]

Os **comando** é a classe de comando que deve ser executada. 
Se esviter dentro de um namespace, deve-se separar por **.** (ponto)

    php mx [command]

    php mx [namespace].[command]

### Criando comandos

Para um comando funcionar corretamente, crie uma classe com o prefixo **Mx** dentro do namespace **Terminal**

    namespace Terminal;

    use Elegance\MxCmd;

    class MXCommandName extends MxCmd
    {
        protected static function execute()
        {
           Terminal::show('Funciona');
        }
    }

> Você pode criar uma comando automáticamente utilizando o comando **mx create.command**

    mx create.command CommandName
