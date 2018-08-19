<?php
if(!function_exists('format_price')){
    function format_price($event){
        if($event->isFree()){
            return '<strong>Gratuit</strong>';
        }else{
            return $event->price .'euros';
        }
    }
}