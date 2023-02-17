
    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Prix</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row col-12">


        <?php $display=100; foreach($assurence as $lis): ?>

          <div class="col-4 mb-3" data-aos="fade-up" data-aos-delay="<?= $display ?>">
            <div class="box">
              <h3><?= $lis->nom_assurence ?></h3>
              <h4><sup>$</sup><?= $lis->montant ?>,00<span>pour <?= $lis->validite ?> </span></h4>
              <ul>
                <li><i class="bx bx-check"></i> <?= $lis->eheance ?></li>
                <li><i class="bx bx-check"></i> <?= $lis->description ?></li>
              </ul>
              <a href="<?= URLROOT ?>main/paiementstrip/<?= $lis->id ?>" class="buy-btn">Payer maintenant</a>
            </div>
          </div>

          <?php $display+=100; endforeach ?>


        </div>

      </div>
    </section><!-- End Pricing Section -->