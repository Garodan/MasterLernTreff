<header>
    <div class="navbar-wrapper">
        <div class="container-fluid">
            <nav class="navbar navbar-fixed-top">
                <div class="container">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="startseite.php">LernTreff</a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Forum <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class=" dropdown">
                                        <a href="forumerstellen.php">Forumsbeitrag erstellen</a>
                                    </li>
                                    <li><a href="forumliste.php">Forumsbeiträge</a></li>
                                </ul>
                            </li>
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Treffen <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li class=" dropdown">
                                        <a href="treffenerstellen.php">Neues Treffen erstellen</a>
                                    </li>
                                    <li><a href="treffenliste.php">Liste der Treffen</a></li>
                                </ul>
                            </li>
                            <li><a href="kalender/demos/theme.php">Kalender</a></li>
                        </ul>
                        <ul class="nav navbar-nav pull-right">
                            <li class=" dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Eingeloggt als <?php echo($_SESSION["name"]); ?> <span class="caret"></span></a>
                                <ul class="dropdown-menu">

                                    <li><a href="#">Mein Profil</a></li>
                                </ul>
                            </li>
                            <li class=""><a href="index.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
