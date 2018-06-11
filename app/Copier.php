<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Interface\IInputData;

class Scanner extends IInputData.Read
{
    use Notifiable;

    function Read();

}
