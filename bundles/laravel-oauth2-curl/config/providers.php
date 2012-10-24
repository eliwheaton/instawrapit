<?php
/*
|--------------------------------------------------------------------------
| Providers Config
|--------------------------------------------------------------------------
|
| This file should contain a list of providers you wish to support
| including all their necessary OAuth2 data to make API calls.
|
*/
return array(
	/*
	|--------------------------------------------------------------------------
	| Provider Name
	|--------------------------------------------------------------------------
	|
	| Unique provider name.
	|
	*/
	'instagram' => array(
		/*
		|--------------------------------------------------------------------------
		| Client ID
		|--------------------------------------------------------------------------
		|
		| Unique client ID string generated when registering new app with provider.
		|
		*/
		'client_id' => '82c447ba039b4677a84d00adb63f87b8',
		/*
		|--------------------------------------------------------------------------
		| Client Secret
		|--------------------------------------------------------------------------
		|
		| Unique client secret string generated when registering new app with
		| provider.
		|
		*/
		'client_secret' => '74adf338547a4c688e6702e52bf72063',
		/*
		|--------------------------------------------------------------------------
		| Redirect URI
		|--------------------------------------------------------------------------
		|
		| URI to redirect after user has granted/denied permissions to your app,
		| keep in mind that some providers need that this matches the same redirect
		| URI you used when you registered the app.
		|
		*/
		'redirect_uri' => URL::to('oauth2/instagram'),
		/*
		|--------------------------------------------------------------------------
		| Authorization Endpoint
		|--------------------------------------------------------------------------
		|
		| The authorization endpoint is the URL used to interact directly with
		| resource owners, authenticate them, and obtains their authorization.
		| This is usually displayed in the provider's API documentation.
		|
		*/
		'authorization_endpoint' => 'https://api.instagram.com/oauth/authorize',
		/*
		|--------------------------------------------------------------------------
		| Token Endpoint
		|--------------------------------------------------------------------------
		| 
		| The token endpoint is the URL used by the client to obtain an access
		| token and it's used with most authorization requests. This is usually
		| displayed in the provider's API documentation.
		|
		*/
		'token_endpoint' => 'https://api.instagram.com/oauth/access_token',
		/*
		|--------------------------------------------------------------------------
		| Scopes (Optional)
		|--------------------------------------------------------------------------
		| 
		| Scopes let you specify exactly what type of access you need. This will be
		| displayed to the user on the authorize form. Keep in mind that some
		| providers use different scope separators. It can be removed or left blank
		| if only basic account access is needed.
		|
		*/
		'scopes' => 'likes comments'
	),

);
