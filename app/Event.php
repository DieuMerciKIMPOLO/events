<?php
// php artisan make:model Event -m (pour creer un model avec ses migrations)
// composer dump-autoload -o (une instruction a executer apres avoir supprimer un fichier des models)
namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //  Ce qu on ne peut pas modifier n importe comment.
    protected $guarded=['id'];
    protected $dates=['start_at'];
    protected $casts =[
     'start_at'=>'datetime',
     'price'=>'integer'
    ];
    public function isFree(){
        return $this->price ==0;
    }
    public function getPriceAttribute(){
        return $this->attributes['price'];
    }
    public function getFakePriceAttribute(){
        // Avec les getters on accede aux attributs en utilisant
        // $this->attributes, et getFakePriceAttribute correspond
        // A l attribut fake_price, qui est ici un attribut virtuel
        //Pour acceder a celui ci lors de requetes sur notre modele
        // Il faut utiliser  la propriete
        // protected $append['fake_price'] 
        return $this->attributes['price'] +100;
    }
    public function setPriceattribute(){
        dd("Fff");
    }
}
