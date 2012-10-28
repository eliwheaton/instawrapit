<?php
// Sample route to handle authentication requests,
// you can use this by adding a handle in your
// bundles.php file or create your own.
Route::get('(:bundle)/(:any)', function($provider)
{

    $client = IoC::resolve('oauth2-client', array($provider));

    // User granted permissions.
    if ( $code = Input::get('code') ) {
        
        // Request access token if it's not available in session.
        if ( !Session::has('oauth2-access-token-' . $provider) ) {

            $params = array(
                'code'         => $code,
                'redirect_uri' => Config::get('laravel-oauth2-curl::providers.' . $provider . '.redirect_uri')
            );

            $response = $client->getAccessToken(
                Config::get('laravel-oauth2-curl::providers.' . $provider . '.token_endpoint'),
                'authorization_code',
                $params
            );

            // Some providers return the access token data in an array
            // and others as parameters in a string so we have to
            // take that into account.
            if ( is_array($response['result']) ) {

                $access_token = $response['result']['access_token'];

            } elseif ( is_string($response['result']) ) {

                parse_str($response['result'], $info);
                $access_token = $info['access_token'];

            }

            Session::put('oauth2-access-token-' . $provider, $access_token);

        }

        // ************* EDIT THIS TO YOUR NEEDS *************
        // I'm redirecting the authenticated user to the
        // "user" route but if you want to add them to your DB
        // and other magic this is the place to do it.
        return Redirect::to('home');

    // User denied permissions, returns the following parameters:
    // 
    // error             : access_denied
    // error_reason      : user_denied
    // error_description : The user denied your request
    } elseif (Input::has('error')) {

        // ************* EDIT THIS TO YOUR NEEDS *************
        // I'm redirecting users that have denied permissions
        // to the root route with flash data about the error
        // description, feel free to change it as you wish.
        return Redirect::to('/')->with('oauth2_error_description', Input::get('error_description'));

    // No parameters set, redirect to provider's auth URI
    // to ask for permissions.
    } else {

        $extra_parameters = array();

        if ( Config::get('laravel-oauth2-curl::providers.' . $provider . '.scopes') ) {
            $extra_parameters['scope'] = Config::get('laravel-oauth2-curl::providers.' . $provider . '.scopes');
        }

        $auth_url = $client->getAuthenticationUrl(
            Config::get('laravel-oauth2-curl::providers.' . $provider . '.authorization_endpoint'),
            Config::get('laravel-oauth2-curl::providers.' . $provider . '.redirect_uri'),
            $extra_parameters
        );

        return Redirect::to($auth_url);

    }

});
