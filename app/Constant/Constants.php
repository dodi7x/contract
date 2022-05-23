<?php

namespace App\Constant;

class Constants
{
    const ROLES  = [1 => 'moderator', 2 => 'user', 0 => 'admin', 3 => "mohamed"];
    const STATUS = [1 => array('Active', 'success'), 0 => array('Blocked', 'danger'), 2 => array('Suspend', 'warning')];
    const LOG    = ['created' => 'success', 'updated' => 'warning', 'deleted' => 'danger'];
}
