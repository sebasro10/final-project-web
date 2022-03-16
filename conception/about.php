<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Description of the project</h1>

    <div>
        Une entreprise souhaite faciliter la gestion des frais de mission de ses salariées en déplacement.
        Elle décide de réaliser un site web leur permettant de s’authentifier et d’enregistrer, au fil de l’eau,
        les dépenses qu’ils réalisent. Elle communique ci-dessous, le CDCF de son projet. <br><br>
    </div>
    Le site Web à réaliser permet aux salariés de s’authentifier avec leur mail professionnel et un mot
    de passe fort de 8 caractères minimum comportant des majuscules, des minuscules, des chiffres et des caractères spéciaux.
    Une page d’inscription leur permet de s’enregistrer sur le site en précisant, leur nom, prénom, leur numéro de téléphone
    et leur service de rattachement. <br><br>

    <div>

    </div>
    La page d’accueil permet de s’authentifier ou de s’inscrire. Après authentification, le salarié accède directement
    à une page affichant le solde du portefeuille de la dernière mission en cours, la liste des opérations enregistrées pour
    cette mission et un formulaire lui permettant de saisir un frais de mission ou une opération de crédit pour alimenter son
    portefeuille. Les informations à saisir pour un frais de mission sont : la date du frais initialisée par défaut à la date du jour,
    le type de frais à saisir ou à sélectionner à partir d’une arborescence de nomenclature de frais, un libellé de frais, le montant de
    frais et optionnellement un moyen pour télécharger la preuve du frais (facture, ticket de caisse, etc.). Pour une opération de crédit,
    les informations à saisir sont la date, une description de l’opération et le montant du crédit. <br><br>

    <div>
        La liste des opérations à afficher sera sous forme de tableau semblable à l’exemple ci-dessous : <br><br>
    </div>


    <div>
        <img src="../conception/compt.png" width="1000" alt="">
    </div>



    <div>
        Une mission est définie par son lieu, sa date de début et de fin, une description et la devise monétaire utilisée.
        Le salarié peut saisir une nouvelle mission, visualiser ses anciennes missions, modifier celles qui ne sont pas clôturées.
        Il peut supprimer une mission annulée mais pas celles qui ont eu lieu ou en cours.<br><br>

    </div>

    <div>
        L’entreprise souhaite disposer d’une interface graphique permettant à chaque salarié de gérer (CRUD) ses missions selon les
        règles précédemment édictées ainsi qu’une interface propre à la direction permettant de voir toutes les missions en appliquant
        un filtre sur les salariées et/ou le statut des missions.<br><br>

    </div>

    <div>
        L’entreprise souhaite aussi disposer d’une interface pour gérer la nomenclature de type de dépenses sous forme hiérarchique.
        Cette nomenclature est partagée par tous ses salariés.<br><br>

    </div>

    <div>
        Optionnellement, l’entreprise souhaite avoir des interfaces pour visualiser le bilan des dépenses par salarié, par service,
        par année ou par type de dépense. Elle vous laisse l’entière responsabilité de proposer des solutions de visualisation.<br><br>

    </div>











</body>

</html>