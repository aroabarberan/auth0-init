// use Auth0\SDK\JWTVerifier;
// use Auth0\SDK\Helpers\Cache\FileSystemCacheHandler;

// $verifier = new JWTVerifier([
//     'valid_audiences' => ['https://recipes/api'],
//     'authorized_iss' => ['https://yashirotests.auth0.com'],
//     // 'cache' => new FileSystemCacheHandler() // This parameter is optional. By default no cache is used to fetch the JSON Web Keys.
// ]);

// $decoded = $verifier->verifyAndDecode(
//     'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImtpZCI6Ik5rSTNRall3TWpBelJVRTRSakl6T0VSRlFVSkZORVk1UmpCRE5FUTRNemxCTWpFd01ESTJPQSJ9.eyJpc3MiOiJodHRwczovL3lhc2hpcm90ZXN0cy5hdXRoMC5jb20vIiwic3ViIjoiN0pZaHNlSGw3anJnaWp6eWpqeGFmQ1BVb1VXemRUYkNAY2xpZW50cyIsImF1ZCI6Imh0dHBzOi8vcmVjaXBlcy9hcGkiLCJpYXQiOjE1MzU5MDQyMjAsImV4cCI6MTUzNTk5MDYyMCwiYXpwIjoiN0pZaHNlSGw3anJnaWp6eWpqeGFmQ1BVb1VXemRUYkMiLCJndHkiOiJjbGllbnQtY3JlZGVudGlhbHMifQ.i2hdNFCixX1R9q20zlqki1nq0PGToajgGCVfD-nB4wcGzLUiVkr0uOockXZk1Cd_kAkDdB9qhdWZXX2cPKNIAhn09UUPvhKys5cGWXqOOJRvdxzqjSBhB0g8L15IqT6qAkpsAqCK8MQLfhNVg3CSvIz3ghttPeUmUOBHv382Y-zFAuHo1G-Z5qXdvSV_0TBQMaqKwdJdTxYmaYsqUsMeiWLfr9UPYMPy_4tRDJkl9ImkhBRS9aS087SDztvLL9vE3pUSL_JzyGTMQUxXbaNa7uTTQKfd7WpRmTCp0fDjg-n1lPf1RU13d_fm5GoqFV2P0O5B7f58eaKtnDjy8f6lgw'
// );


@extends('layouts.app')

@section('content')
<!-- <script src="https://cdn.auth0.com/js/auth0/9.0.0/auth0.min.js"></script> -->
<script type="text/javascript">
    var webAuth = new auth0.WebAuth({
        domain: 'yashirotests.auth0.com',
        clientID: 'tu0M25HoEgZwKlRv6icIdknMW75JrJRs'
    });

    function signin() {
        webAuth.authorize({
            responseType: "code",
            redirectUri: 'https://localhost:3010/api/auth0/callback'
        });
    }
</script>
<button onclick="window.signin();">Login</button>
@endsection