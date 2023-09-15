
    $(document).ready(function() {
      $('#btn_buscar').click(function() {
        var texto_busqueda = $('#texto_busqueda').val();
        var spinner = $('#spinner');

        spinner.show(); // Mostrar el spinner al iniciar la búsqueda

        setTimeout(function() {
          $.ajax({
            type: 'POST',
            url: 'buscar.php',
            data: { texto_busqueda: texto_busqueda },
            success: function(response) {
              var resultados = JSON.parse(response);
              var noticiasContainer = $('.noticias');
              noticiasContainer.html('');

              if (resultados.length > 0) {
                var row = $('<div class="row"></div>'); // Crear una nueva fila

                resultados.forEach(function(noticia) {
                  var noticiaHTML = `
                    <div class="p-3 col-12 col-md-4 col-lg-4">
                      <div class="card text-center zoom">
                        <img src="./imagenes/${noticia.IMAGENES}" class="card-img-top" width="50" height="300" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">${noticia.TITULO}</h5>
                          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#portfolioModal${noticia.ID}">Leer más</button>
                        </div>
                      </div>
                    </div>
                    <div class="portfolio-modal modal fade modal" id="portfolioModal${noticia.ID}" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="close-modal justify-content-end text-end" data-bs-dismiss="modal"><img src="./imagenes/close-icon.svg" width="50px" height="25px" alt="Close modal" /></div>
                          <div class="container-fluid">
                            <div class="row justify-content-center">
                              <div class="col-lg-12 col-12">
                                <div class="modal-body">
                                  <h2 class="text-uppercase">${noticia.TITULO}</h2>
                                  <p class="item-intro text-muted">${noticia.RESUMEN}</p>
                                  <img class="img-fluid d-block mx-auto imagenes-modal" src="./imagenes/${noticia.IMAGENES}" alt="..." />
                                  <p>${noticia.CONTENIDO}</p>
                                  <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal" type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                  </button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  `;
                  row.append(noticiaHTML); // Agregar la noticia a la fila

                  // Verificar si la fila ya tiene 3 columnas
                  if (row.children().length === 3) {
                    noticiasContainer.append(row); // Agregar la fila completa a las noticias
                    row = $('<div class="row"></div>'); // Crear una nueva fila
                  }
                });

                // Agregar la última fila si no está vacía
                if (row.children().length > 0) {
                  noticiasContainer.append(row);
                }

                $('.modal').modal(); // Inicializar los modales
              } else {
                noticiasContainer.html('<p class="alert alert-danger">No se encontraron resultados.</p>');
              }

              spinner.hide(); // Ocultar el spinner después de mostrar los resultados
            },
            error: function() {
              spinner.hide(); // Ocultar el spinner en caso de error
            }
          });
        }, 1500); // Retraso de 1.5 segundos
        
      });
    });
