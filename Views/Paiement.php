<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank-document </title>
    <link href="<?=URLROOT  ?>assets/paiment.css" />
    <link href="<?= URLROOT ?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= URLROOT ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

</head>
<body>
<?= $contenu ?>

<script src="<?= URLROOT ?>assets/jquery/jquery-3.4.1.min.js"></script>
<script src="https://js.stripe.com/v3/"></script>



<script>
 window.onload = () => {
    // On instancie Stripe et on lui passe notre clé publique
let stripe = Stripe('pk_test_51JuBdwFB3xzlxTulXGzUPHlInaOS5NT2YTWoxQHjqkMTwKrJ6Ju8nl4ekdcBD0Z8gR7Xd9Ucj02OW9Q9Ryp607EM000QmXqubv');

// Initialise les éléments du formulaire
let elements = stripe.elements();
// Définit la redirection en cas de succès du paiement
// Récupère l'élément qui contiendra le nom du titulaire de la carte
let cardholderName = document.getElementById('cardholder-name');
// Récupère l'élement button
let cardButton = document.getElementById('card-button');
// Récupère l'attribut data-secret du bouton
let clientSecret = cardButton.dataset.secret;
// Crée les éléments de carte et les stocke dans la variable card
let card = elements.create("card");

card.mount("#card-element")




//On gere la saisie 

card.addEventListener("change", (event)=>{
    let dispayError= document.getElementById('card-errors')
    

    if(event.error){
        dispayError.textContent= event.error.message;
    }else{
        dispayError.textContent= ""; 
    }


    //exemple de carte 
    // pas des solde: 4000 0000 0000 9995
    // avec solde infinie: 4242 4242 4242 42424

    //On gere le paiement

    cardButton.addEventListener('click', ()=>{


        cardButton.textContent='Sading please waite...';
           stripe.handleCardPayment(
               clientSecret, card, {
                payment_method_data:{
                    billing_details:{
                        name: cardholderName.value
                    }
                }
               }
           ).
           then((result)=>{
            cardButton.textContent='Valider le paiement';
                     if(result.error){
                        document.getElementById('errors').innerText=result.error.message;
                     }else{
                       

                        $.ajax({
              url: '<?= URLROOT ?>admin/savepaiement',
              type:'POST',
              data:{ id_client:<?= $_SESSION['user-test-covid']['id']  ?>, id_assuren: <?= $assurence->id  ?>, mthode: 'Bank'},
              dataType:'JSON',
              success: function(data){
                   if(data.error){
                      
                   }else{
                    console.log(result)
                    alert('votre paiement a ete effectue avec succes')
                       document.location.href="<?= URLROOT ?>main/invoice/"+ <?= $assurence->id  ?>+"/"+<?= $_SESSION['user-test-covid']['id']  ?>;
                   
                   }
              }
        })
                     
                     }
           })

        
        
    })
})


}








</script>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://demos.codexworld.com/includes/js/bootstrap.js"></script>

<!-- html2canvas library -->
<script src="<?= URLROOT ?>assets/js/html2canvas.min.js"></script>
<script src="<?= URLROOT ?>assets/js/jspdf.umd.js"></script>

<script>
    window.jsPDF = window.jspdf.jsPDF;

         function Convert_HTML_To_PDF() {
           
	var doc = new jsPDF();
	
	// Source HTMLElement or a string containing HTML.
	var elementHTML = document.querySelector("#contentToPrint");

	doc.html(elementHTML, {
		callback: function(doc) {
			// Save the PDF
			doc.save('sonas_document.pdf');
		},
		margin: [10, 10, 10, 10],
		autoPaging: 'text',
		x: 0,
		y: 0,
		width: 190, // Target width in the PDF document
		windowWidth: 675 // Window width in CSS pixels
	});
}

    </script>
</body>
</html>