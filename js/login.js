var working = false;
$('.login').on('submit', function(e) {
    e.preventDefault();
    if (working) return;
    working = true;
    var $this = $(this),
      $state = $this.find('button > .state');
    $this.addClass('loading');
    $state.html('Authentifizierung');
    var result;
    var username = document.getElementById("username").value;
    var password = document.getElementById("passwd").value;
    
	// Simple GET request example:
$http({
  method: 'POST',
  url: 'https://webmail.stud.hwr-berlin.de/ajax/login?action=login'
  data: { name : document.getElementById("username").value 
		  password : document.getElementById("passwd").value	
		  action : 'login'
		}
}).then(function successCallback(response) {
    window.alert("success");
  }, function errorCallback(response) {
    window.alert("error");
  });


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

/*var working = false;
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
    xhr.setRequestHeader("Cache-Control", "no-cache");
    xhr.setRequestHeader("X-Requested-With", "XMLHttpRequest");
    xhr.setRequestHeader("Content-Type", "multipart/form-data");
    xhr.send(username, password, action);
    xhr.onreadystatechange = processRequest;
    function processRequest(e) {
        //alert(xhr.responseText);
        var response = JSON.parse(xhr.responseText);
        //alert(response.session);
    var transfer = window.open();
    transfer.postMessage(username, "https://webmail.stud.hwr-berlin.de/ajax/login?action=login");
    transfer.postMessage(password, "https://webmail.stud.hwr-berlin.de/ajax/login?action=login");
    function receiveMessage(event)
    {
        if (event.origin !== "https://webmail.stud.hwr-berlin.de/ajax/login")
            transfer.close();
            return;
        else alert("hat geklappt");
    }
    transfer.addEventListener("message", receiveMessage, false);

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
});*/
