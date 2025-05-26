<main>
    <section id="about">
        <h2>About Me</h2>
        <p>I am a BSIT student currently studying at <?php echo $university; ?></p>
    </section>

    <section id="hobbies">
        <h2>Hobbies</h2>
        <ul>
            <?php foreach ($hobbies as $hobby): ?>
                <li><?php echo htmlspecialchars($hobby); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <section id="favorites">
        <h2>Favorites</h2>
        <ul>
        <?php foreach ($favorites as $key => $value): ?>
            <li><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
        <?php endforeach; ?>
        </ul>
    </section>
    <section id="contact">
        <h2>Contact Me</h2>
        <ul>
            <li>📧 <strong>Email: </strong> allenjherussantiago@gmail.com </li>
            <li>📞 <strong>Phone: </strong> +63 920 210 5915 </li>
        </ul>
    </section>

</main>