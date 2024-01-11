
  <?php include "include/header.php"; ?>
        

    <body>
        <main>
  <!-- slider -->
          <section class="d-flex justify-content-center pt-5">
            <div id="carouselExampleSlidesOnly" class="carousel slide w-50" data-bs-ride="carousel">
              <div class="carousel-inner">
                <!-- pour la bucle ne pas prendre la div avec la classe active pour le slider sinon elle tourne pas et la classe active ne peut pas s'incrementer aux éléments qui suivent -->
                  <div class="carousel-item active">
                      <img src="slider/medecin2.jpg" class="d-block w-100 img-fluide" alt="...">
                  </div>
                  <?php include "include/carrouselboucle.php";?>
                </div> 
            </div>
          </section>
        </main>
  <!--footer -->
      <?php include "include/footer.php";?>

      <!-- lien bootstrap -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
      </script>
  </body>
</html>

