<?php include "objects.php"; ?>

<?php include "partials/header.php"; ?>

    <?php if(isset($_GET['userLogged']) && $_GET['userLogged']==true): ?>
        <div class="logInSuccess container">Log in successful</div>
    <?php endif; ?>
    <?php if(isset($_GET['userLogged']) && $_GET['userLogged']==false): ?>
        <div class="logInUnsuccess container">Log in unsuccessful</div>
    <?php endif; ?>

    <!-- contact form -->
    <section class="logInForm container">
            <h2>Log in</h2>
            <hr>
            <form action="files/log-in.php" method="POST" autocomplete="on">
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <button>Log in</button>
            </form>
    </section>

<?php include "partials/footer.php"; ?>