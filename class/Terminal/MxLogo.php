<?php

namespace Terminal;

use Elegance\MxCmd;

abstract class MxLogo extends MxCmd
{
    protected static function execute()
    {
        MxCmd::show("#@@.   ,@@* /@@  %@&       #@@@@@@@. #@@.   ,@@  #@@@@@@\\");
        MxCmd::show("#@@&   @@@*  %@#,@@        #@&   &@. #@@&   @@@  #@&  \&@\\");
        MxCmd::show("#@@@, /@@@*   @@@@,        #@&   ,,  #@@@, /@@@  #@&   &@%");
        MxCmd::show("#@%@@.@&&@*   .@@#     @@  #@&       #@%@@.@&&@  #@&   &@%");
        MxCmd::show("#@%*@@@.&@*   @@@@,   @@@@ #@&       #@%*@@@.&@  #@&   &@%");
        MxCmd::show("#@% @@% &@*  %@%,@@    @@  #@&   &@. #@% @@& &@  #@&   &@%");
        MxCmd::show("#@% *@. &@* *@@  %@%       #@&,,,&@. #@% *@. &@  #@&,,/@@%");
        MxCmd::show("#@%     &@*.@@*   @@/      \@@@@@@@  #@%     &@  #@@@@@&/");
    }
}
