<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Interface\IInputData;
use App\Interface\IOuputData;

class Machine 
{
    use Notifiable;

    function Read(){};

    function Write(){};

}
