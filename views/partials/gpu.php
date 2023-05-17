<strong>GPU:</strong>
<ul>
  <li>
    <strong>Brand:</strong> <?= $computer -> gpu -> brand; ?>
  </li>
  <li>
    <strong>Model:</strong> <?= $computer -> gpu -> model; ?>
  </li>
  <li>
    <strong>Frequency:</strong> <?= $computer -> gpu -> frequency . "MHz"; ?>
  </li>
  <li>
    <strong>Reserved Memory:</strong> <?= $computer -> gpu -> reservedMemory . "GB"; ?>
  </li>
</ul>
