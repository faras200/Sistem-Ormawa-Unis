<?php

namespace UniSharp\LaravelFilemanager\Handlers;

class ConfigHandler
{
    public function userField()
    {
        if (auth()->user()->username == 1 || auth()->user()->role == 'operator') {
            return '../';
        } else {
            return auth()->user()->username;
        }
    }
}
