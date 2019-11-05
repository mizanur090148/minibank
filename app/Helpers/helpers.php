<?php

/**
 * Define system constants
 */
define('S_SAVE', 'Successfully created');
define('E_SAVE', 'Not successfully created');
define('S_DELETE', 'Successfully deleted');
define('E_DELETE', 'Not successfully deleted');
define('S_UPDATE', 'Successfully updated');
define('E_UPDATE', 'Not successfully updated');
define('USER', 0);
define('ADMIN', 1);
define('SUPER_ADMIN', 2);
define('OWN', 0);
define('OTHERS', 1);

/*
* Get Current user object
*/
function currentUser()
{
    if (Auth::check())
    {
        return Auth::user();
    }
    return null;
}

/*
* return user id of current user
*/
function userId()
{
    if (Auth::check())
    {
        return Auth::user()->id;
    }
    return null;
}
