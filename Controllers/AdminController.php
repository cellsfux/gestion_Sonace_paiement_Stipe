<?php 

namespace App\Controllers;

use App\Models\AssurenceModel;
use App\Models\SouscriptionModel;
use App\Models\UsersModel;

class AdminCOntroller extends Controller
{
    public function index(){
         $this->isConnect();
        $assurance= new AssurenceModel;
        $assurance=$assurance->findAll();

        $user= new UsersModel;
        $user=$user->find($_SESSION['user-test-covid']['id']);

        $this->render('admin/index',compact('assurance', 'user'), 'Home');
    }

    public function deleteass(int $id){
        $this->isConnect();
        $assurance= new AssurenceModel;
        $assurance=$assurance->delete($id);
        header('Location:'.URLROOT.'admin');
    }


    public function saveass(){
    $libele= strip_tags($_POST['libele']);
    $desc= strip_tags($_POST['description']);
    $montant= strip_tags($_POST['montant']);
    $validite= strip_tags($_POST['validite']);
    $echeance= strip_tags($_POST['echeanse']);

    $donnee= new AssurenceModel;
   $assurance=$donnee
   ->setMontant($montant)
   ->setEheance($echeance)
   ->setDescription($desc)
   ->setNomAssurence($libele)
   ->setValidite($validite);

   $save= $donnee->create($assurance);

   if(!$save){
    echo json_encode(['message'=>"Error server", 'error'=>true]);
   die;
   }

   echo json_encode(['message'=>"Vous avec Ajoute avec succes une assurence"]);
   die;



    }





    public function updateass(){
        $libele= strip_tags($_POST['libele']);
        $desc= strip_tags($_POST['description']);
        $montant= strip_tags($_POST['montant']);
        $validite= strip_tags($_POST['validite']);
        $echeance= strip_tags($_POST['echeanse']);
        $id= $_POST['id'];
    
        $donnee= new AssurenceModel;
       $assurance=$donnee
       ->setMontant($montant)
       ->setEheance($echeance)
       ->setDescription($desc)
       ->setNomAssurence($libele)
       ->setValidite($validite);
    
       $save= $donnee->update($id, $assurance);
    
       if(!$save){
        echo json_encode(['message'=>"Error server", 'error'=>true]);
       die;
       }
    
       echo json_encode(['message'=>"Les modifications ont ete apportees avec succes"]);
       die;
    
    
    
        }



        public function savepaiement(){
           //{"id_client":"1","id_assuren":"1","mthode":"Bank"}

           $paiement=new  SouscriptionModel;
           $paiement=$paiement
           ->setIdAssurence($_POST['id_assuren'])
           ->setIdClient($_POST['id_client'])
           ->setModePaiement($_POST['mthode']);
           $paiement=$paiement->create($paiement);

    
           echo json_encode('it okey');
           
        }





        public function user(){
            $this->isConnect();
            $users= new UsersModel;
            $liste= $users->findAll();
            $user= $users->find($_SESSION['user-test-covid']['id']);
            $this->render('admin/user', compact('user', 'liste'), 'Home');
        }

        
        public function deleuser(int $id){
            $this->isConnect();
            $users= new UsersModel;
            $userx=$users->find($id);

            if($userx->roles=='Admin'){
                header('location:'.URLROOT.'admin/user');
                die;
            }
            $user=$users->delete($id);
            header('location:'.URLROOT.'admin/user');
                die;
        }





        public function souscription(){
            $this->isConnect();

            $users= new UsersModel;
            $liste= $users->findAll();
            $user= $users->find($_SESSION['user-test-covid']['id']);

           $assurance= new AssurenceModel;

            $souscription= new SouscriptionModel;
            $souscription=$souscription->findAll();


            $html='';
            $i=0;

            foreach($souscription as $lisS){
                $us=$users->find($lisS->id_client);
                $assurances=$assurance->find($lisS->id_assurence);
                if($us && $assurances){
                    $i+=1;
                    $html.='<tr>';
                    $html.='<td>'.$i.' </td>';
                    $html.='<td>'.ucfirst($us->nom).'  '. ucfirst($us->prenom). ' </td>';
                    $html.='<td>'.$lisS->mode_paiement.'</td>';
                    $html.= '<td>'.$assurances->nom_assurence.'</td>';
                    $html.= '<td> $ '.$assurances->montant.',00</td>';
                    $html.='<td>'.$lisS->created_at.'</td>';
                    $html.='</tr>';
                   
                }   
            }

            
            $this->render('admin/souscription', compact('html','user', 'liste'), 'Home');
              
        }








        public function isConnect(){
            if(!isset($_SESSION['user-test-covid'])){
                header('location:'.URLROOT.'login');
                die;
            }
      
            if($_SESSION['user-test-covid']['role']!='Admin'){
                header('location:'.URLROOT);
                die;
            }
      
            return true;
        }
}