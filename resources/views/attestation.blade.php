<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/p/attestation.css')}}">
    <title>attestation</title>
</head>
<body>
 <img src="{{asset('css/p/att.jpg')}}" alt="att" width="1300" >
    <div class="head">
        ENTREPRISE NATIONALE DE GRANDS TRAVAUX PETROLIERS
    </div>
    <div class="att">ATTESTATION DE STAGE</div>

    <div class="L1">Je soussigné <strong>M</strong><i class="ell">elle</i> <strong>{{$id->name}}</strong> <strong>{{$id->pre_name}}</strong> ,Chef de service Formation & recrutement à l'Entreprise Nationale de Grand Traveux Pétroliers, sise</div>
    <div class="lieu">Réghaia  -Alger  -Algérie, atteste que :</div>
    
    <div class="m">Monsieur : <strong>{{$stc->nom}}</strong>  <strong>{{$stc->prenom}}</strong></div>
    <div class="d">Date & Lieu de naissance : <strong>{{$stc->date_naissence}}</strong> <strong>{{$stc->lieu_naissence}}</strong></div>
    <div class="e">Etudiant (e) au niveau de : <strong>{{$stc->niveau_scolaire}}</strong></div>

    <div class="af">A effectué un stage Pratique au niveau de la direction <strong>{{$stc->direction}}</strong> Spécialité <strong>{{$stc->diplome}}</strong> en</div>
    <div class="du_au"><strong>{{$stc->specialite}}</strong> du <strong>{{$stc->periode_de_stage_du}}</strong> au <strong>{{$stc->periode_de_stage_au}}</strong></div>

    <div class="afe">Cette attestation est délivrée, à la demande de l'intéressé(e). pour servire et valoire ce que de droit</div>
    
    <div class="fin">Le chef de de service Formation & Recrutement</div>
</body>
</html>