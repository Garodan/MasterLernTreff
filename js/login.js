var working = false;
$('.login').on('submit', function (e) {
    e.preventDefault();
    if (working) return;
    working = true;
    var $this = $(this),
      $state = $this.find('button > .state');
    $this.addClass('loading');
    $state.html('Authentifizierung');

    var username = new FormData();
    username.append('name', document.getElementById("username").value);
    var password = new FormData();
    password.append('password', document.getElementById("passwd").value);
    var action = new FormData();
    action.append('action', 'login');

    var xhr = new XMLHttpRequest();
    xhr.open('POST', "https://webmail.stud.hwr-berlin.de/ajax/login?action=login", true);
    xhr.send(username, password, action);
    xhr.onreadystatechange = processRequest;
    function processRequest(e) {
        //alert(xhr.responseText);
        var response = JSON.parse(xhr.responseText);
        //alert(response.session);
    }

    if (response.session.length > 1)
    {
        setTimeout(function () {
            $this.addClass('ok');
            $state.html('Willkommen beim LernTreff - Sie werden weitergeleitet...');
            setTimeout(function () {
                $state.html('Log in');
                $this.removeClass('ok loading');
                window.location.href = 'index.html'
                working = false;
            }, 4000);
        }, 3000);
    }
    else
    {
        alert("falsches pw");
    }
});
