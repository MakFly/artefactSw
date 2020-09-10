Fait :
    Partie 1:
    - Création des services relatif à l'algorithme de tri
    - Création dans le menu monsters by artefact l'affichage de tout les monstres dans une "select option"

Non-Fait:
    - gérés les data par paginations par tranche de 12 maximum
    - modal Alert chargement en cours quand on selectionne les champs ??????????


-----------------------
=> 
    idée1 : mettre une barre de chargement du tableau
    idée2 : update le champs rank a chaque sélection de substat et refaire un select pour afficher par rank le monstres

Attention :
=> Crée des méthodes gérant le rank de monstre par attribut

=> 06/09/2020
    => Fait à ce jour
    - ajout d'un beforeSend ( ajax ) pour kill la request précédente quand on sélectionne + de 2 filtres 
    - optimisation de la requête ajax ( 5 sec max pour afficher toute la liste)
    - rajout d'un second filtres 

    => reste à faire à partir du 06/09/2020
    - rajouter les 2 autres filtres à la request ajax + rajouter toutes les autres subsStat dans le manager pour faire le ranking
