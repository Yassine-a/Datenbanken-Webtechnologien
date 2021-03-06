<div class="container">
    <?php session_start();?>
    <header class="row-12">
        <nav class="navbar navbar-expand navbar-light bg-light">
            <div class="col-2">
                <a class="navbar-brand">e-Mensa</a>
            </div>
            <div class="col-6">
                <ul class="navbar-nav">
                    <li class="nav-item <?php if($_SERVER['REQUEST_URI']=='/M3/start.php') { ?> active<?php   }  ?>">
                        <a class="nav-link" href="start.php">Start</a>
                    </li>
                    <li class="nav-item<?php if(substr($_SERVER['REQUEST_URI'],0,12)=='/M3/Produkte') { ?> active<?php   }  ?>">
                        <a class="nav-link" href="Produkte.php">Mahlzeiten</a>
                    </li>
                    <li class="nav-item<?php if($_SERVER['REQUEST_URI']=='/M2/bestellungen.php') { ?> active<?php   }  ?>">
                        <a class="nav-link" href="#">Bestellung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://fh-Aachen.de" target="_blank">FH-Aachen</a>
                    </li>
                </ul>
            </div>
            <?php
            ?>

            <form class="w-100" action="http://www.google.de/search" method="get" target="_blank">
                <div class="input-group">
                    <input type="hidden" name="as_sitesearch" value="www.fh-aachen.de" />
                    <input type="text" class="form-control" placeholder="Suche" name="q">
                    <button class="btn btn-outline-secondary" type="submit">GO</button>
                </div>
            </form>

        </nav>
    </header>

</div>