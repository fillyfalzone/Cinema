<h1>Exercice Cinéma</h1>
<p>
Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
Les films seront caractérisés par leur titre, leur date de sortie en France, leur durée (en minutes) <br>
ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film <br>
(synopsis) pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre <br>
cinématographique (science-fiction, aventure, action, ...).<br>
Votre application devra recenser également les acteurs de chacun des films. On désire connaître le <br>
nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) <br>
joué par l’acteur dans le(s) film(s) concerné(s).<br>
Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre <br>
en place correctement !<br>
Attention, le rôle (par exemple James Bond) ne doit être instancié <br> qu'une seule fois (dans la mesure 
où ce rôle a été incarné par plusieurs acteurs.)
On doit pouvoir :<br>
Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de 
Batman : Michael Keaton, Val Kilmer, George Clooney, …)<br>
Lister le casting d'un film<br> (dans le film Star Wars Episode IV, Han Solo a été incarné par 
Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)<br>
Lister les films par genre (exemple : le genre SF est associé à X films : Star Wars, Blade Runner, ...)<br>
Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)<br>
Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)
</p>

<?php
    include_once 'Person.php';
    include_once 'Movie.php';
    include_once 'Director.php';
    include_once 'Actor.php';
    include_once 'Role.php';
    include_once 'Casting.php';
    include_once 'Type.php';

    // Réalisateurs
    $director1 = new Director('Steven', 'SPIELBERG','18-12-1946','M');
    $director2 = new Director('Mark', 'HAMILL', '30-07-1970', 'M');

     // Les genres de films
     $type1 = new Type('Science-Fiction');
     $type2 = new Type('Action');
     $type3 = new Type('Aventure');

    //Films
    $movie1 = new Movie("Jupiter", "05-07-1977", 151, $director1, $type1, "Synopsis Jupiter" );

    $movie2 = new Movie("Star Wars Episode IV", "25-05-1977", 121, $director1, $type1, "Synopsis Star Wars Episode IV" );

    $movie3 = new Movie("Inception", "16-07-2010", 148, $director2, $type2, "Synopsis Inception");

    $movie4 = new Movie("Avatar", "25-07-2009", 228, $director2, $type2, "Synopsis Avatar");

    $movie5 = new Movie("Sun Rise", "12-07-2022", 200, $director2, $type3, "Synopsis Sun Rise");


    // Acteurs 
    $actor1 = new Actor('Michael','KEATON','02-12-1985','M');
    $actor2 = new Actor('George','CLOONEY', '23-08-1979', 'M');
    $actor3 = new Actor('Harrison','FORD', '13-09-1973', 'M');
    $actor4 = new Actor('Mark','HAMILL', '30-07-1970', 'M');
    $actor5 = new Actor('Julia', 'ROBERT', '14-08-1988', 'F');
    $actor6 = new Actor('Monica', 'ALVARES', '03-02-1999', 'F');
    $actor7 = new Actor('Leonardo', 'DICAPRIO', '11-11-1974', 'M');

    //Roles 
    $role1 = new Role('Batman');
    $role2 = new Role('Han Solo');
    $role3 = new Role(' Luke Skywalker');
    $role4 = new Role(' Spider Man');
    $role5 = new Role(' Hulk');
    $role6 = new Role('Le Joker');
    $role7 = new Role('Rocky');
    $role8 = new Role('Super Man');

    // Les Castings
    $casting1 = new Casting($movie2, $actor4, $role1);
    $casting2 = new Casting($movie1, $actor1, $role2);
    $casting3 = new Casting($movie3, $actor4, $role5);
    $casting4 = new Casting($movie1, $actor6, $role3);
    $casting5 = new Casting($movie3, $actor7, $role2);
    $casting6 = new Casting($movie1, $actor5, $role1);
    $casting7 = new Casting($movie1, $actor3, $role8);
    $casting8 = new Casting($movie3, $actor2, $role1);
    $casting9 = new Casting($movie1, $actor6, $role5);
    $casting10 = new Casting($movie1, $actor2, $role4);
    $casting11= new Casting($movie3,  $actor2, $role5);

    echo '<strong> Liste des films par genre</strong>';
    $type2->movieByType();
    echo '<br>';
    echo '<br><strong>Liste des acteurs ayant incarnés le meme personage</strong>';
    $role1->roleByActor();
    echo '<br><strong>Les Informations d\'un Film.</strong>';
    $movie1->movieInfos();
    echo '<br>';
    echo '<br><strong>La filmographie d\'un Acteur.</strong>';
    $actor4->filmographie();
    echo '<br>';
    echo '<br><strong>La filmographie d\'un réalisateur.</strong>';

    $director2->filmographie();
    // Casting info avec la méthode magic toString.
    echo $casting1;

?>