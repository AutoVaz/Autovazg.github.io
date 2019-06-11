<style>
  .my-btn {
      background: #b8e9c0;
      border: 2px solid #6384b3;
      padding: 5px 10px;
      font-size: 22px;
  }
</style>
<section class="dis1">
		  	<div class="container">
		  		<div class="row">
					<div class="col-md-8">
						<div class="hgroup">
							<h1 class="h1">Көлік бөлшектерін іздеу</h1>
							<h2 class="h2">Қажетты бөлшекті енгізіңіз</h2>
							<div class="input-group inpt-search-home"><form action="find.php" method="post">
							  <input type="text" class="form-control" name="what">
							  <input type="submit" value="Іздеу" class="my-btn"></form>
							</div><!-- /input-group -->
						</div>
					</div>
		  		</div>
		  	</div>
		  </section>


 <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel" tkey="result_search">Результаты поиска</h4>
      </div>
      <div id="result" class="modal-body result">
        <p class="status-message" tkey="not_parametres">Нет билетов с такими параметрами</p>
          <table class="table table-bordered result-search">
              <thead>
              <tr>
                  <th>Откуда</th>
                  <th>Куда</th>
                  <th>Въезд</th>
                  <th>Отъезд</th>
                  <th tkey="summa">Цена</th>
                  <th tkey="event">Действие</th>
              </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" tkey="close">Закрыть</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>

<?php include("profile-modal.php");?>