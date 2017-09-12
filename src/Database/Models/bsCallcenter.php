<?php

namespace Jvleeuwen\BroadsoftXSI\Database\Models;

use Illuminate\Database\Eloquent\Model;

class bsCallcenter extends Model
{
    
    public function AssignedUsers()
    {
        return $this->hasOne('jvleeuwen\broadsoft\Database\Models\bsUserAssignedCallcenter',
        'serviceUserId', 'userId')->with('bsUser');
    }
}
