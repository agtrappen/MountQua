<?php require APPROOT . '/views/inc/header.php'; ?>
<header>
  <div class="overlay"></div>
  <img src="<?php echo URLROOT; ?>/public/img/141253.jpg"></img>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-4">Zoektermen zonder resultaat</h1>
      </div>
    </div>
  </div>
</header>

<div class="container">
  <div class="row">
    <?php
    if ($data['deleted'] === true) {
    ?>
      <div class="alert alert-success col-lg-12" role="alert">
        De zoekopdracht is verwijderd.
      </div>
    <?php
    } elseif ($data['deleted'] === false) {
    ?>
      <div class="alert alert-warning col-lg-12" role="alert">
        De zoekopdracht is niet verwijderd.
      </div>
    <?php
    }
    ?>
  </div>
  <div class="row">
    <div class="table-responsive">
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Zoekopdracht</th>
            <th scope="col">Acties</th>
          </tr>
        </thead>
        <tbody>
          <?php
          foreach ($data['queries'] as $query) {
          ?>
            <tr>
              <th scope="row"><?= $query->QueryID ?></th>
              <td><?= $query->Query ?></td>
              <td><a href="<?= '?delete=' . $query->QueryID ?>">Verwijder <i class="fa fa-times" aria-hidden="true"></i></a></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div> <?php require APPROOT . '/views/inc/footer.php'; ?>