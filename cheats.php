<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 08/06/17
 * Time: 01:19
 */

require_once 'myPDO.class.php';
require_once 'database.functions.php';
require_once 'webpage.class.php';
require_once 'navbar.php';
require_once 'footer.php';

$html = new WebPage("Cheats minecraft");

$html->appendCssUrl('materialize/css/materialize.css');

$nav = navbar();

$foot = footer();

$pdo = myPDO::getInstance();

$res = 0;


if (isset($_GET["name"]) && !empty($_GET["name"])){

    $res = getFromName($pdo, $_GET["name"]);

}
elseif (isset($_GET["id"]) && !empty($_GET["id"])){

    $res = getFromVersion($pdo, $_GET["id"]);

}
else{

    $res = getAll($pdo);

}

if(count($res) == 0 || $res == 0){
    $res = getAll($pdo);
}

$tab = '<div class="row"></div>
        <div class="row"></div>
        <div class="row"></div>
            <div class="row container">
                <div class="col l5 offset-l1 m5 s12 input-field">
                    <form action="cheats.php" method="get">
                        <select name="id" class="col l10 m10 s12" id="version">
                            <option value="" disabled selected>Chercher par version</option>
                            <option value="18">1.8</option>
                            <option value="19">1.9</option>
                            <option value="110">1.10</option>
                        </select>
                    </form> 
                </div>
                <div class="col l5 m5 offset-m1 s12">
                    <form action="cheats.php" method="get">
                        <div class="input-field">
                          <input placeholder="Rechercher" id="search" type="search" name="name">
                          <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row">
        <div class="col l8 offset-l2 m12 s12">
        <table class="white"><tr class="blue-grey darken-3 white-text"><th>Nom du cheat</th><th class="center">Lien de téléchargement</th><th class="center">Version</th></tr>';
$compteur = 0;
foreach ($res as $cheat){
    if($compteur%2 == 0)
        $tab .= '<tr><th>'.$cheat->nom.'</th><td class="center"><a href="http://mediafire.com/file/'.$cheat->lien.'">Lien de téléchargement</a></td><td class="center">'.$cheat->v.'</td></tr>';
    else
        $tab .= '<tr class="blue-grey lighten-5"><th>'.$cheat->nom.'</th><td class="center"><a href="http://mediafire.com/file/'.$cheat->lien.'">Lien de téléchargement</a></td><td class="center">'.$cheat->v.'</td></tr>';
    $compteur++;
}

$tab .= '</table></div></div>';
$html->appendContent(navbar().'<main class="blue-grey lighten-4">');
$html->appendContent($tab.'</main>'.footer());

$html->appendJsUrl('https://code.jquery.com/jquery-2.1.1.min.js');
$html->appendJsUrl('materialize/js/materialize.js');
$html->appendContent('<script>$(".button-collapse").sideNav();</script><script type="text/javascript">

  jQuery(function() {
    jQuery("#version").change(function() {
        this.form.submit();
    });
});
</script>');
$html->appendJs('$(document).ready(function() {
    $(\'select\').material_select();
  });');

echo $html->toHTML();