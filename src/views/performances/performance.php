<div class="performance">
  <div class="performance-content">
    <img src="/performance_images/<?php echo $this->escape($performance['image_name']) ?>" alt="公演画像">
    <a href="<?php echo $base_url; ?>/performances/<?php echo $this->escape($performance['id']); ?>">
      <?php echo $this->escape($performance['name']) ?>
    </a>
  </div>
</div>