<div class="col">
  <div class="card h-100">
    <div class="card-header text-center">
      <h4 class="mb-0 text-success">
        <?= $computer -> brand . ": " . $computer -> model; ?>
      </h4>
    </div>
    <div class="card-body">
      <p class="mb-0">
        <strong>Type:</strong> <?= $computer -> getDeviceType($computer) ?>
      </p>
      <hr>
      <?php
        include __DIR__ . "/motherboard.php";
        echo "<hr>";
        include __DIR__ . "/ram.php";
        echo "<hr>";
        include __DIR__ . "/cpu.php";
        echo "<hr>";
        include __DIR__ . "/gpu.php";
        echo "<hr>";
        include __DIR__ . "/storage.php";
        echo "<hr>";
        include __DIR__ . "/powerSource.php";
        if($computer instanceof Desktop) {
          echo "<hr>";
          include __DIR__ . "/monitor.php";
          echo "<hr>";
          include __DIR__ . "/keyboard.php";
          echo "<hr>";
          include __DIR__ . "/mouse.php";
        }
      ?>
    </div>
  </div>
  <!-- /.card -->
</div>
<!-- /.col -->
