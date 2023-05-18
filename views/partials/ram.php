<strong>RAM:</strong>
<ul>
  <li>
    <strong>Brand:</strong> <?= $computer -> ram -> brand; ?>
  </li>
  <li>
    <strong>Model:</strong> <?= $computer -> ram -> model; ?>
  </li>
  <li>
    <strong>Type:</strong> <?= $computer -> ram -> type; ?>
  </li>
  <li>
    <strong>Banks:</strong> <?= $computer -> ram -> banks; ?>
  </li>
  <li>
    <strong>Frequency:</strong> <?= $computer -> ram -> getFrequency() . "MHz"; ?>
  </li>
  <li>
    <strong>Capacity per bank:</strong> <?= $computer -> ram -> gbPerBank . "GB"; ?>
  </li>
  <li>
    <strong>Latency:</strong> <?= "CL" . $computer -> ram -> latency; ?>
  </li>
</ul>
