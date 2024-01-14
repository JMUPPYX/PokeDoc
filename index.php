
  <?php include "utilities_php/header.php"; ?>
        
        <main>
  <!-- slider -->
          <section class="d-flex justify-content-center pt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide w-50" data-bs-ride="carousel">
              <div class="carousel-inner">
                <!-- pour la bucle ne pas prendre la div avec la classe active pour le slider sinon elle tourne pas et la classe active ne peut pas s'incrementer aux éléments qui suivent -->
                  <div class="carousel-item active">
                      <img src="slider/medecin2.jpg" class="d-block w-100 img-fluide" alt="...">
                  </div>
                  <?php include "data_php/carrouselboucle.php";?>
                </div> 
            </div>
          </section>
        </main>
  <!--footer -->
    <?php include "utilities_php/footer.php";?>

  
 


