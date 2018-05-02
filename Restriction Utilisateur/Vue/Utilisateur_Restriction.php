<style>
    .Utilisateur{
        box-shadow : 1 ;
        display:grid;
        margin :auto;
        margin-top:2%;
        padding:2%;
        grid-template-rows:10% 40% 50%;
        background-color: lightgrey;
    }
    .nom{
        margin:auto;
        grid-row:1;
    }
    .Photo{
        margin:auto;
        margin-top: 5%;
        margin-bottom:5% ;
        grid-row:2;
    }
    .Formulaire_Restriction{
        grid-row: 3;
        display:flex;
        flex-direction: column;
    }
    .Restriction{
        margin-top: 2%;
    }
    .bouton{
        margin-top:3%;
        border:none;
        background-color: white;
        border: 1px lightgrey solid;

    }
    .bouton:hover{
        background-color: rgb(44,78,120);
        border: 1px black solid;
        color:white;
    }
</style>

<div class="Utilisateur">
    <p class="nom"> Utilisateur 1</p>
    <img class="Photo" src="../Ressources/Logo_Utilisateur.png" alt="Logo Utilisateur" >
    <form class="Formulaire_Restriction" method="post" action="Restriction_Utilisateur.php">
        <label class="Restriction"> <input type="checkbox"/> Interdire l'ajout </label>
        <label class="Restriction"> <input type="checkbox"/> Interdire la supression</label>
        <label class="Restriction"> <input type="checkbox"/> Interdire la modification</label>
        <input type="submit" title ="Changements" class="bouton" value="Valider les changements" />
    </form>
</div>