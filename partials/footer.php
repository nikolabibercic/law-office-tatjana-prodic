    <!-- map -->
    <section class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2808.9916469530385!2d19.83983091542249!3d45.247961679099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b1014c9f306d5%3A0x22da33789f2bd85!2sDimitrija%20Tucovi%C4%87a%202a%2C%20Novi%20Sad!5e0!3m2!1sen!2srs!4v1616084466269!5m2!1sen!2srs" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </section>

    <!-- footer -->
    <footer>
        <!-- contact info -->
        <section class="contactInfo container">
            <article>
                <h3>Adresa</h3>
                <hr>
                <p>Dimitrija Tucovića 2a</p>
                <p>Novi Sad</p>
            </article>
            <article>
                <h3>Kontakt</h3>
                <hr>
                <p>Telefon: 064/383-7108</p>
                <p>Email: tatjanaglusac1991@gmail.com</p>
            </article>
            <article>
                <h3>Radno vreme</h3>
                <hr>
                <p>Ponedeljak/Petak</p>
                <p>08:00/16:00</p>
            </article>
        </section>
        <ul>
            <li><a href="https://www.facebook.com/advokatprodic"><i class="fab fa-facebook"></i></a></li>
            <li><a href="https://instagram.com/advokatska_kancelarija_prodic?igshid=crop7qcvv9y0"><i class="fab fa-instagram"></i></a></li>
            <li><a href="https://twitter.com/tanjicatajci?lang=en"><i class="fab fa-twitter"></i></a></li>
            <li><a href=""><i class="fab fa-linkedin"></i></a></li>
        </ul>
        
        <?php if(!isset($_SESSION['user'])): ?>
            <p>&copy; Advokatska kancelarija Tatjane Prodić<a href="page-log-in.php"><i class="fas fa-sign-in-alt"></i></a></p>
        <?php else: ?>
            <p>&copy;Advokatska kancelarija Tatjane Prodić<a href="files/log-out.php"><i class="fas fa-sign-in-alt" style="color:green;"></i></a></p>
        <?php endif; ?>     
    </footer>

</body>
</html>