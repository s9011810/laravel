<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Theater_Member extends Authenticatable
{
    public $table = 'theater_member';
    protected $guarded = ['id'];
    protected $fillable = ['User_Id','User_Name','User_Phone','User_Email','User_Address','User_Password'
        ,'Admin_Movie','Admin_Member','Admin_Order','Admin_Theater'];
    protected $hidden = ['User_Password','remember_token'];
    public function getAuthPassword(){//overwrite Auth getAuthPassword
        return $this->User_Password;
    }
}
