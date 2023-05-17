<strong>CPU:</strong>
<ul>
  <li>
    <strong>Brand:</strong> <?= $computer -> cpu -> brand; ?>
  </li>
  <li>
    <strong>Model:</strong> <?= $computer -> cpu -> model; ?>
  </li>
  <li>
    <strong>Physical Cores:</strong> <?= $computer -> cpu -> physicalCores; ?>
  </li>
  <li>
    <strong>Logical Cores:</strong> <?= $computer -> cpu -> logicalCores; ?>
  </li>
  <li>
    <strong>Frequency:</strong> <?= $computer -> cpu -> frequency . "MHz"; ?>
  </li>
</ul>
