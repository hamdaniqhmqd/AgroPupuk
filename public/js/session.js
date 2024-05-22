window.addEventListener('beforeunload', function (e) {
    navigator.sendBeacon('/logout_session', new URLSearchParams({
        _token: '{{ csrf_token() }}'
    }));
});
