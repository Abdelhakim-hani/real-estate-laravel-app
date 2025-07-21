<?php $__env->startSection('title', 'Dashboard'); ?>
<!-- FontAwesome for icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet" />
<!-- Bootstrap CSS (optional but recommended for responsiveness) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

<?php $__env->startSection('content'); ?>
<style>
  /* Elegant background accent */
  .header-bg {
    position: relative;
    background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%);
    border-radius: 1rem;
    color: white;
    padding: 2rem 3rem;
    margin-bottom: 3rem;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(13, 148, 136, 0.3);
  }
  .header-bg::after {
    content: "";
    position: absolute;
    width: 180px;
    height: 180px;
    background: rgba(255, 255, 255, 0.15);
    border-radius: 50%;
    top: -60px;
    right: -60px;
    filter: blur(45px);
    pointer-events: none;
  }

  /* Cards */
  .stat-card {
    background: white;
    border-radius: 1rem;
    box-shadow: 0 4px 18px rgba(0,0,0,0.1);
    padding: 1.8rem 2.2rem;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    cursor: default;
  }
  .stat-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  }
  .stat-icon {
    font-size: 2.8rem;
    color: #0d9488;
    margin-right: 1.5rem;
  }
  .stat-title {
    font-weight: 600;
    font-size: 1.1rem;
    color: #374151;
  }
  .stat-value {
    font-weight: 700;
    font-size: 2.8rem;
    color: #0f766e;
  }

  /* Recent activities */
  .activity-list {
    list-style: none;
    padding: 0;
    margin-top: 1rem;
  }
  .activity-item {
    background: #f9fafb;
    border-radius: 0.75rem;
    padding: 1rem 1.5rem;
    margin-bottom: 1rem;
    border-left: 4px solid #14b8a6;
    color: #4b5563;
    font-weight: 500;
    transition: background-color 0.3s ease;
  }
  .activity-item:hover {
    background-color: #e0f2f1;
    color: #0d9488;
  }
</style>

<div class="container my-5">

  <!-- Header -->
  <section class="header-bg mb-5">
    <h1 class="display-5 fw-bold">Welcome back, Hani</h1>
    <p class="lead opacity-75 mt-2">Here's a quick overview of your real estate dashboard today.</p>
  </section>

  <!-- Stats Cards -->
  <div class="row g-4 mb-5">

    <div class="col-md-4">
      <div class="stat-card d-flex align-items-center">
        <i class="fas fa-building stat-icon"></i>
        <div>
          <div class="stat-title">Total Properties</div>
          <div class="stat-value">120</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-card d-flex align-items-center">
        <i class="fas fa-home stat-icon"></i>
        <div>
          <div class="stat-title">Active Listings</div>
          <div class="stat-value">85</div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="stat-card d-flex align-items-center">
        <i class="fas fa-users stat-icon"></i>
        <div>
          <div class="stat-title">Registered Users</div>
          <div class="stat-value">240</div>
        </div>
      </div>
    </div>

  </div>

  <!-- Recent Activity -->
  <section>
    <h3 class="fw-semibold mb-3" style="color:#0d9488;">Recent Activity</h3>
    <ul class="activity-list">
      <li class="activity-item">New property "Modern Villa" was added 2 hours ago.</li>
      <li class="activity-item">User "johndoe" registered yesterday.</li>
      <li class="activity-item">Property "Downtown Apartment" marked as sold.</li>
      <li class="activity-item">Price updated for "Cozy Cottage" listing.</li>
    </ul>
  </section>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\PRO\Downloads\Agence-Immobiliere-main\Agence-Immobiliere-main\resources\views/admin/home.blade.php ENDPATH**/ ?>