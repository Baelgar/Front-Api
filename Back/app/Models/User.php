<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {


    protected $fillable = ['pseudo','email','mdp','avatar'];
    protected $primaryKey = 'id_user';
    //pour  eviter  la  creation des colonne created_at and updated_at
    public $timestamps = false;
}
?>
