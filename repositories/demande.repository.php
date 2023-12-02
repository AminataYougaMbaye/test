<?php
   //definir un tableau de 5  demandes
     //une demande est caracterise
        //numero, chaine genere aleatoirement
         //date 
         //Etat(Encours,Accepte,Refuse)
         //Type (Suspension ou Annulation)
         //motif
         //etudiant (matricule,nom,prenom,
                //dateNaiss(Date php),
                //classe(filiere,niveau,code))

// fonction qui retourne le tableau de demande
// fonction qui retourne le tableau de demande par type
// fonction qui retourne le tableau de demande par etat


//definir un tableau de 5  demandes
$tab1 = [
   "numero"=> "00",
   "date"=> "yyyy",
   "Etat"=>[
      "Encours",
      "Accepter",
      "Refuser"
   ],
   "Type"=>[
      "Suspension",
      "Annulation"
   ],
   "Motif"=>"",
   "etudiant"=>[
      "matricule"=>"A01",
      "nom"=>"Diallo",
      "prenom"=>"Fatou",
      "dateNaiss"=> date("d-m-Y"),
      "classe"=>[
         "filiere"=>"GLRS",
         "niveau"=>"licence1",
         "code"=>"0000",
      ]
   ]

      ];
$tab2 = [
   "numero"=> "00",
   "date"=> "yyyy",
   "Etat"=>[
      "Encours",
      "Accepter",
      "Refuser"
   ],
   "Type"=>[
      "Suspension",
      "Annulation"
   ],
   "Motif"=>"",
   "etudiant"=>[
      "matricule"=>"A01",
      "nom"=>"Diallo",
      "prenom"=>"Fatou",
      "dateNaiss"=> date("d-m-Y"),
      "classe"=>[
         "filiere"=>"GLRS",
         "niveau"=>"licence1",
         "code"=>"0000",
      ]
   ]

      ];
$tab3 = [
   "numero"=> "00",
   "date"=> "yyyy",
   "Etat"=>[
      "Encours",
      "Accepter",
      "Refuser"
   ],
   "Type"=>[
      "Suspension",
      "Annulation"
   ],
   "Motif"=>"",
   "etudiant"=>[
      "matricule"=>"A01",
      "nom"=>"Diallo",
      "prenom"=>"Fatou",
      "dateNaiss"=> date("d-m-Y"),
      "classe"=>[
         "filiere"=>"GLRS",
         "niveau"=>"licence1",
         "code"=>"0000",
      ]
   ]

      ];
$tab4 = [
   "numero"=> "00",
   "date"=> "yyyy",
   "Etat"=>[
      "Encours",
      "Accepter",
      "Refuser"
   ],
   "Type"=>[
      "Suspension",
      "Annulation"
   ],
   "Motif"=>"",
   "etudiant"=>[
      "matricule"=>"A01",
      "nom"=>"Diallo",
      "prenom"=>"Fatou",
      "dateNaiss"=> date("d-m-Y"),
      "classe"=>[
         "filiere"=>"GLRS",
         "niveau"=>"licence1",
         "code"=>"0000",
      ]
      ]
      ];
$tab5 = [
   "numero"=> "00",
   "date"=> "yyyy",
   "Etat"=>[
      "Encours",
      "Accepter",
      "Refuser"
   ],
   "Type"=>[
      "Suspension",
      "Annulation"
   ],
   "Motif"=>"",
   "etudiant"=>[
      "matricule"=>"A01",
      "nom"=>"Diallo",
      "prenom"=>"Fatou",
      "dateNaiss"=> date("d-m-Y"),
      "classe"=>[
         "filiere"=>"GLRS",
         "niveau"=>"licence1",
         "code"=>"0000",
      ]
   ]
      ];      
      


// fonction qui retourne le tableau de demande

// function showTab(array $tab ):void{
//    foreach ($tab as  $value) {
//       if (is_array ($value)) {
//          foreach($value as $tab1){
//             if (is_array ($tab1)){
//                foreach($tab1 as $tab2){
//                   echo($tab2);
//                }
//             }else{
//                echo($tab1);
//             }
//          }
//       }else {
//          echo($value);
//       }
//     }
// }
// fonction qui retourne le tableau de demande par type

$tableau=[$tab1,$tab2,$tab3,$tab4,$tab5];
function Lister_tab($tab){
   $numero =$tab["numero"];
   $date =$tab["date"];
   $etat =$tab["etat"];
   $type =$tab["type"];
   $matricule =$tab["etudiant"]["matricule"];
   $nom =$tab["etudiant"]["nom"];
   $naissance =$tab["naissance"];
   $classe =$tab["classe"];
   $niveau =$tab["niveau"];



}


?>