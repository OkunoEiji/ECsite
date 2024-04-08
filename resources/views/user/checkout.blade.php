<p>決済ページへリダイレクトします。</p>
{{-- このコードでスクリプトソースでURLを読み込む --}}
<script src="https://js.stripe.com/v3/"></script>
<script>
    const publicKey = '{{ $publicKey }}'
    const stripe = Stripe(publicKey);
    // "pk_test_51P2HsdP8O8UM4kVhaQFgyNGsbRAtTCMApBgoxvF6dGXQ3oTNusShMFdtz6YzWKfwyxIxLHqiD7m0x5Tm1f11cFJW00jC6FmV0P"

    window.onload = function(){
        stripe.redirectToCheckout({
            sessionId: '{{ $session->id }}'
            }).then(function(result){
                window.location.href='{{ route('user.cart.cancel') }}';
            });
    };

//     function onClick() {
//     stripe.redirectToCheckout({
//         sessionId: '{{ $session->id }}'
//     }).then(function (result) {
//         window.location.href='{{ route('user.cart.cancel') }}';
//     });
// }

</script>
