<?php

namespace Terminal;

use Elegance\MxCmd;

abstract class MxLogo extends MxCmd
{
    protected static function execute()
    {
        self::show("#@@.   ,@@* /@@  %@&       #@@@@@@@. #@@.   ,@@  #@@@@@@\\");
        self::show("#@@&   @@@*  %@#,@@        #@&   &@. #@@&   @@@  #@&  \&@\\");
        self::show("#@@@, /@@@*   @@@@,        #@&   ,,  #@@@, /@@@  #@&   &@%");
        self::show("#@%@@.@&&@*   .@@#     @@  #@&       #@%@@.@&&@  #@&   &@%");
        self::show("#@%*@@@.&@*   @@@@,   @@@@ #@&       #@%*@@@.&@  #@&   &@%");
        self::show("#@% @@% &@*  %@%,@@    @@  #@&   &@. #@% @@& &@  #@&   &@%");
        self::show("#@% *@. &@* *@@  %@%       #@&,,,&@. #@% *@. &@  #@&,,/@@%");
        self::show("#@%     &@*.@@*   @@/      \@@@@@@@  #@%     &@  #@@@@@&/");
    }
}