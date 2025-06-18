<?php require_once 'app/views/templates/header.php'; ?>

<div class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">

                <!-- ✅ Check if username exists -->
                <?php if (isset($data['username'])): ?>
                    <h1>Welcome, <?= htmlspecialchars($data['username']); ?>!</h1>
                <?php else: ?>
                    <h1>Welcome, Guest!</h1>
                <?php endif; ?>

                <p class="lead"><?= date("F jS, Y"); ?></p>

                <!-- ✅ Debug: print session values -->
                <pre><?php print_r($_SESSION); ?></pre>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <p><a href="/logout">Click here to logout</a></p>
        </div>
    </div>
</div>

<?php require_once 'app/views/templates/footer.php'; ?>
