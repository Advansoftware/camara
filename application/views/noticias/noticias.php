<?php $this->load->helper("paginacao");?>

<div class="container clearfix mb-5">
      <h1 class="display-4 text-center">Notícias</h1>
  <div class="row">

    <div class="col-md-10">
      <div class="row w-100 mx-auto">

        <div class="card w-100">
          <div class="card-header text-center">
            <h5>Mais Notícias</h5>
          </div>
          <div class="card-body">
            <div id="accordion" role="tablist">
              <?php
			  foreach($noticias as $noticia => $info) :
				  $collapse = "collapse";
          if ($info['id'] == $noticia_id) {
            $collapse = "collapse show";
          }

          $titulo = $info['titulo'];
				  $id = $info['id'];
				  $noticia = $info['texto'];
				  $data = $info['data'];
				  $mes = date( 'm', strtotime($data));
				  $ano = date( 'Y', strtotime($data));
				  $facebook = $info['url_facebook'];
          $imagem = (!empty($info['foto'])) ? "<img class='img-fluid' src=".base_url()."content/noticias/destaque/".str_replace(' ','_',$info['foto']).">" : null;
			  ?>
                  <div class="card">
                    <div class="card-header" role="tab" id="headingOne<?= $id ?>">
                      <h5 class="mb-0">
                        <a data-toggle="collapse" href="#collapseOne<?= $id ?>" aria-expanded="true" aria-controls="collapseOne<?= $id ?>">
                           <?= $titulo ?>
                        </a>
                      </h5>
                    </div>
                    <div id="collapseOne<?=$id ?>" class="<?php echo $collapse; ?>" role="tabpanel" aria-labelledby="headingOne<?= $id ?>" data-parent="#accordion">
                        <div class="card-body text-justify">
							<?= $imagem ?> <br/>
							<?= $noticia ?>
                        </div>
						<?php if($facebook) : ?>
						<div class="card-footer">
							<a class="btn btn-facebook text-white" href="<?=$facebook?>" target="_blank">Comentar noticia no Facebook.<a>
						</div>
						<?php endif; ?>
                      </div>
                    </div>

              <?php endforeach;?>
            </div><?php paginacao::get_paginacao($paginacao, $controller); ?>
          </div>
          


