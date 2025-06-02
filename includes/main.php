<main>
    <!-- About Section -->

    <section id="about">
        <h2>About Me</h2>
        <p>I am a BSIT student currently studying at <?php echo $university; ?></p>
        <p> My height and weight are <?php echo $height; ?> meters and <?php echo $weight; ?> kg, respectively.</p>
        <p>
            <?php 
                if ($isAvailable) {
                    echo "I am available for work.";
                } else {
                    echo "I am not available for work at the moment.";
                }
            ?>
        </p>
    </section>
    
    <!-- Hobbies Section -->
    <section id="hobbies">
        <h2>Hobbies</h2>
        <ul>
            <?php foreach ($hobbies as $hobby): ?>
                <li><?php echo htmlspecialchars($hobby); ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
    
    <!-- Favorites Section -->
    <section id="favorites">
        <h2>Favorites</h2>
        <ul>
        <?php foreach ($favorites as $key => $value): ?>
            <li><strong><?php echo htmlspecialchars($key); ?>:</strong> <?php echo htmlspecialchars($value); ?></li>
        <?php endforeach; ?>
        </ul>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <h2>Skills & Technologies</h2>
            <ul>
                <?php foreach ($skills as $skill): ?>
                    <li><?php echo htmlspecialchars($skill); ?></li>
                <?php endforeach; ?>
            </ul>
    </section>
    
    <!-- PHP Case Sensitivity Section -->
    <section id="casesensitive">
        <h2>PHP Case Sensitivity Showcase</h2>

            <?php
                // Case-sensitive variable names
                echo "<p>Variable \$Name: " . $Name . "</p>";
                echo "<p>Variable \$name: " . $name . "</p>";
            ?>
    </section>
    
    <!-- Contact Section -->
    <section id="contact">
        <h2>Contact Me</h2>
        <ul>
            <li>📧 <strong>Email: </strong> <a href="mailto:allenjherussantiago@gmail.com?subject=Hello&body=I visited your portfolio!">allenjherussantiago@gmail.com</a></li>
            <li>📞 <strong>Phone: </strong> <a href="tel:+639202105915">+63 920 210 5915</a></li>
        </ul>
    </section>

</main>