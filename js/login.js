var working = false;
$('.login').on('submit', function(e) {
    e.preventDefault();
    if (working) return;
    working = true;
    var $this = $(this),
      $state = $this.find('button > .state');
    $this.addClass('loading');
    $state.html('Authentifizierung');

    setTimeout(function () {
        $this.addClass('ok');
        $state.html('Willkommen beim LernTreff');
        setTimeout(function() {
            $state.html('Log in');
            $this.removeClass('ok loading');
            window.location.href = './startseite.html';
            working = false;
        }, 4000);
    }, 3000);
});
