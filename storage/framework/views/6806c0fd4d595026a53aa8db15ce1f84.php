<style>
  .card {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 20px rgba(0,0,0,0.15);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    background: #fff;
    display: flex;
    flex-direction: column;
    max-width: 350px;
    margin: 1rem auto;
    cursor: pointer;
  }
  .card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.3);
  }
  .card-img-top {
    width: 100%;
    height: 220px;
    object-fit: cover;
    position: relative;
  }
  .card-img-top::after {
    content: "";
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.2) 0%, rgba(0,0,0,0.7) 100%);
    pointer-events: none;
  }
  .card-body {
    padding: 1rem 1.5rem;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }
  .card-title a {
    font-size: 1.4rem;
    font-weight: 700;
    color: #2c3e50;
    text-decoration: none;
    transition: color 0.3s ease;
  }
  .card-title a:hover {
    color: #3498db;
  }
  .card-text {
    color: #7f8c8d;
    font-size: 1rem;
    margin: 0.5rem 0 1rem 0;
  }
  .price {
    font-size: 1.3rem;
    font-weight: 800;
    color: #2980b9;
    border-top: 1px solid #ecf0f1;
    padding-top: 0.8rem;
  }
</style>

<div class="card" onclick="location.href='<?php echo e(route('property.show', ['slug'=> $property->getSlug(), 'property'=> $property->id])); ?>'">
  <?php
    $pic = $property->pictures()->first();
  ?>
  <img src="<?php echo e($pic ? Storage::url($pic->path) : asset('storage/images/202405260901img3.png')); ?>" class="card-img-top" alt="<?php echo e($property->title); ?> image">

  <div class="card-body">
    <h5 class="card-title">
      <a href="<?php echo e(route('property.show', ['slug'=> $property->getSlug(), 'property'=> $property->id])); ?>"><?php echo e($property->title); ?></a>
    </h5>
    <p class="card-text">
      <?php echo e($property->surface); ?> m² - <?php echo e($property->city); ?> (<?php echo e($property->postal_code); ?>)
    </p>
    <div class="price"><?php echo e(number_format(num: $property->price, decimals: 2, thousands_separator: ' ')); ?> DH</div>
  </div>
</div>
<?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/property/card.blade.php ENDPATH**/ ?>