<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Interface\IOuputData;


class Printer extends IInputData.Write
{
    use Notifiable;

    function Write();

}

