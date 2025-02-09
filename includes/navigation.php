<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?= BASE_URL ?>">
            <img src="<?= BASE_URL ?>assets/img/logo.png" alt="RHM CMS" width="180">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link active" href="<?= BASE_URL ?>?controller=client&action=list">Clients</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>?controller=project&action=list">Projects</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>?controller=employee&action=list">Employees</a></a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>?controller=store&action=list">Stores</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>?controller=stock&action=list">Stock</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="<?= BASE_URL ?>?controller=materialrequest&action=list">Material Requests</a>
            </li>
            <?php if (isset($_SESSION['user_id'])): ?>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BASE_URL ?>?controller=auth&action=logout">Logout</a>
                    </li>
                <?php endif; ?>
        </ul>
        </div>
    </div>
</nav> 