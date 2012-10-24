<?php
// Register OAuth2 namespace in autoloader
Autoloader::namespaces(array(
    'OAuth2' => __DIR__ . '/libraries'
));

// Register OAuth2\Client instance in IoC container, this allows
// you to use it in any route or controller without creating a
// new instance every time like so:
//
//     Route::get('user', function()
//     {
//         $client = IoC::resolve('oauth2-client', array('facebook'));
//         $response = $client->fetch('https://graph.facebook.com/me');
//         var_dump($response);
//     });
//     
IoC::singleton('oauth2-client', function($provider)
{
    // Get provider specific values from config file
    $client = new OAuth2\Client(
        Config::get('laravel-oauth2-curl::providers.' . $provider[0] . '.client_id'),
        Config::get('laravel-oauth2-curl::providers.' . $provider[0] . '.client_secret')
    );

    // Set Access token if it already exists
    if (Session::has('oauth2-access-token-' . $provider[0])) {
        $client->setAccessToken(Session::get('oauth2-access-token-' . $provider[0]));
    }

    return $client;

});