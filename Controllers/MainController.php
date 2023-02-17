<?php 
namespace App\Controllers;

use App\Models\AssurenceModel;
use App\Models\UsersModel;

class MainController extends Controller
{
    public function index(){

      $this->isConnect();     
        $assurence= new AssurenceModel;

        $assurence= $assurence->findAll();
   
        $this->render('main/index',compact('assurence'), 'Home');
    }




    public function invoice($id_ass, $id_user){
          $this->isConnect();
          
          $assurence= new AssurenceModel;
          $assurence= $assurence->find($id_ass);

          $user = new UsersModel;

          $user=$user->find($_SESSION['user-test-covid']['id']);

          $this->render('main/Invoice', compact('assurence', 'user'), 'Paiement');


    }








    public function paiementstrip(int $id){
      $this->isConnect();
      
      $assurence= new AssurenceModel;

      $assurence= $assurence->find($id);



    

        /**
         * 100= price_1LtgqXFB3xzlxTulDW2xD8s4
         * 
         * 1500= price_1LtgYlFB3xzlxTulvNSEaSwa
         * 20= price_1LtgrmFB3xzlxTul8X5tEbHB
         * 
         */
               
        \Stripe\Stripe::setApiKey('sk_test_51JuBdwFB3xzlxTulf8h70nwb59SZxLwtSs03X80DGWlXRlA2aqr4HXXB4PIdbg4ZhQfiVNVbjsuwwiFsDha6UXHC00kAEdIGv8');
      

        $intent = \Stripe\PaymentIntent::create([
          'amount' => $assurence->montant*100, // Le prix doit être transmis en centimes
          'currency' => 'usd',
      ]);
      
      $this->render('main/paiement', compact('intent', 'assurence'), 'Paiement');
    
    }












    public function isConnect(){
      if(!isset($_SESSION['user-test-covid'])){
          header('location:'.URLROOT.'login');
          die;
      }

      if($_SESSION['user-test-covid']['role']=='Admin'){
          header('location:'.URLROOT.'admin');
          die;
      }

      return true;
  }
    
}
