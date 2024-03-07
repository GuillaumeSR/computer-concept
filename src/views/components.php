<div class="container">
<div class="list-group">
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Processeur</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Ventirad</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Carte Mère</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Mémoire Vive</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Carte Graphique</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">SSD/HDD</button>
  <button type="button" class="list-group-item list-group-item-action" data-bs-toggle="modal" data-bs-target="#exampleModal">Boîtier</button>
</div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifier</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <ul class="list-group">
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="firstRadio" checked>
            <label class="form-check-label" for="firstRadio">Premier choix</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="secondRadio">
            <label class="form-check-label" for="secondRadio">Deuxième choix</label>
          </li>
          <li class="list-group-item">
            <input class="form-check-input me-1" type="radio" name="listGroupRadio" value="" id="thirdRadio">
            <label class="form-check-label" for="thirdRadio">Troisième choix</label>
          </li>
        </ul>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Sauvegarder</button>
      </div>
    </div>
  </div>
</div>