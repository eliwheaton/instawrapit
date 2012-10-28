<div class="header-wrap">
    <header class="row">
        <div class="logo four columns">
            <h2>Instawrap.it</h2>
        </div>
        <nav class="eight columns top-bar">
            <ul class="right">
            @if ( !Session::has('oauth2-access-token-instagram') )
                <li>
                    <a href="/oauth2/instagram">Sign in with Instagram</a>
                </li>
            @else
                <li class="has-dropdown">
 			        <a href="#">{{ Session::get('username') }}</a>

                    <ul class="dropdown">
                        <li>
                            <a href="/user/logout">Logout</a>
                        </li>
                    </ul>
                </li>
            @endif
            </ul>
        </nav>
    </header>
</div>
