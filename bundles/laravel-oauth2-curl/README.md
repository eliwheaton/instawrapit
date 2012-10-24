## Laravel Bundle for OAuth 2.0

This bundle allows OAuth 2.0 authentication in [Laravel](https://github.com/laravel/laravel)
applications with multiple providers using CURL. It is based in the [PHP-OAuth](https://github.com/adoy/PHP-OAuth2)
library developed by Charron Pierrick.

### Authors

- Charron Pierrick
- Berejeb Anis
- Javier Villanueva

### How do I install it?

1. Run `git clone https://github.com/javiervd/laravel-oauth2-curl` in your bundles folder.
2. Add `laravel-oauth2-curl` to your `bundles.php` file array.
3. You can add `auto => true` to make the bundle load automatically on every route or controller/action.
4. You can add `handles => 'yourhandle'` to use the built in authentication route.

### How can I use it?

You should start by adding you providers information inside the `config/providers.php` file, you
can use the Instagram example values as a template, feel free to add as many as you want including:

- Facebook
- Foursquare
- GitHub
- Google
- PayPal
- Instagram
- Soundcloud
- Windows Live
- YouTube

The bundle comes with a built in authentication route you can use, it also uses the IoC container
to register an instance of the OAuth2 Client so you don't have to create a new one every time you
need it, these are both optional though, you can write your own functions to handle these requests
if you know what you're doing.

Anyways, let's try to authenticate a user using Facebook assuming you're using the built in route
and IoC container:

1. Create a new array key inside the `config/providers.php` file called `facebook` and fill it
with the required data.
2. Display a link in your site pointing to the built in `(:bundle)/(:any)` route so users can 
grant premissions to your app, assuming you named the bundle handle `oauth2` the link should 
point to `/oauth2/facebook`.
3. You may want to edit [this part](https://github.com/javiervd/laravel-oauth2-curl/blob/master/routes.php#L49)
to handle users grating permission or [this part](https://github.com/javiervd/laravel-oauth2-curl/blob/master/routes.php#L62)
to handle users denying premissions.
4. If the user granted permissions the access token should be available in session and you can
make api requests in your routes/controllers like so:

        Route::get('user', function()
        {
            $client = IoC::resolve('oauth2-client', array('facebook'));

            $response = $client->fetch('https://graph.facebook.com/me');

            var_dump($response);
        });


### How can I add a new Grant Type? 

Simply write a new class in the namespace OAuth2\GrantType. You can place the class file under GrantType. 
Here is an example:

    namespace OAuth2\GrantType;

    /**
     * MyCustomGrantType Grant Type 
     */
    class MyCustomGrantType implements IGrantType
    {
        /**
         * Defines the Grant Type
         * 
         * @var string  Defaults to 'my_custom_grant_type'. 
         */
        const GRANT_TYPE = 'my_custom_grant_type';

        /**
         * Adds a specific Handling of the parameters
         * 
         * @return array of Specific parameters to be sent.
         * @param  mixed  $parameters the parameters array (passed by reference)
         */
        public function validateParameters(&$parameters)
        {
            if (!isset($parameters['first_mandatory_parameter']))
            {
                throw new \Exception('The \'first_mandatory_parameter\' parameter must be defined for the Password grant type');
            }
            elseif (!isset($parameters['second_mandatory_parameter']))
            {
                throw new \Exception('The \'seconde_mandatory_parameter\' parameter must be defined for the Password grant type');
            }
        }
    }

Call the OAuth client getAccessToken with the grantType you defined in the GRANT_TYPE constant as following:

    $response = $client->getAccessToken(
        Config::get('laravel-oauth2-curl::providers.' . $provider . '.token_endpoint'),
        'my_custom_grant_type',
        $params
    );

### License

This Code is released under the GNU LGPL

Please do not change the header of the file(s).

This library is free software; you can redistribute it and/or modify it 
under the terms of the GNU Lesser General Public License as published 
by the Free Software Foundation; either version 2 of the License, or 
(at your option) any later version.

This library is distributed in the hope that it will be useful, but 
WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY 
or FITNESS FOR A PARTICULAR PURPOSE.

See the GNU Lesser General Public License for more details.