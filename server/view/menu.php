<style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
    }
    
    li {
        float: left;
    }
    
    li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
    
    li a:hover {
        background-color: #111;
    }

    .nameUser {
        display: block;
        color: greenyellow;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
    }
</style>

<ul>
    <li><a href="?action=viewCountability">Feuille de comptabilité</a></li>
    <li><a href="?action=viewMissions">Visualisation des Missions</a></li>
    <li><a href="?action=viewCosts">Visualisation des dépenses</a></li>
    <li style="float: right;"><a href="?action=logout">Logout</a></li>
    <li style="float: right;"><div class="nameUser"><?= $_SESSION["name_user"] ?></div></li>
</ul>
