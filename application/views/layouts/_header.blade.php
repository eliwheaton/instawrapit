<div class="header-wrap">
    <header class="row">
        <div class="logo four columns">
            <h2>Instawrap.it</h2>
        </div>
        <nav class="eight columns top-bar">
            <ul class="right">
               <li>
                    @if ( !Session::has('oauth2-access-token-instagram') )
                        <a href="/oauth2/instagram">Sign in with Instagram</a>
		    @else
 			<a href="#">{{ Session::get('username') }}</a>
		    @endif
                </li>
            </ul>
        </nav>
    </header>
</div>
