<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('App.Models.Message.{id}', function ($user, $id) {
    return $user->id === (int) $id;
});
