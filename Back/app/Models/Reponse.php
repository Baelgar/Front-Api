<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Reponse extends Model {
    protected $fillable = ['reponse','id_user','id_post','date_reponse'];
    protected $primaryKey = 'id_reponse';
}
?>
