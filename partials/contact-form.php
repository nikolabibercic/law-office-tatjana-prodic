    <!-- contact form -->
    <section class="contactForm container" id="contactFormId">
            <h2>Kontakt</h2>
            <hr>
            <p>Napišite Vaš pravni problem i odgovorićemo Vam u najkraćem roku.</p>
            <form action="files/contact.php" method="POST">
                <div class="input">
                    <input type="email" name="email" placeholder="Email">
                    <input type="text" name="name" placeholder="Ime i prezime">
                </div>
                <textarea name="text" id="" cols="30" rows="10" placeholder="Poruka"></textarea>
                <button>Pošalji</button>
            </form>

            <?php if(isset($_GET['contact']) && $_GET['contact']==true): ?>
                <br><div class="logInSuccess container">Vaša poruka je uspešno poslata.</div>
            <?php endif; ?>
            <?php if(isset($_GET['contact']) && $_GET['contact']==false): ?>
                <br><div class="logInUnsuccess container">Došlo je do greške, Vaša poruka nije poslata!</div>
            <?php endif; ?>
    </section>