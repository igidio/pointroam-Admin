<?php

use Illuminate\Support\Facades\Broadcast;

//Broadcast::channel('messages.{id}', function ($user, $id) {
Broadcast::channel('messages.{id}', function ($user, $id) {
    //dd($user,$id);
    return $user->id === $id;
});
