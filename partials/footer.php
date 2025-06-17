<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-socials">
                <?php if (!empty($social_links['linkedin'])) : ?>
                    <a href="<?php echo htmlspecialchars($social_links['linkedin']); ?>" target="_blank" rel="noopener noreferrer">LinkedIn</a>
                <?php endif; ?>
                <?php if (!empty($social_links['github'])) : ?>
                    <a href="<?php echo htmlspecialchars($social_links['github']); ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
                <?php endif; ?>
                <?php if (!empty($social_links['twitter'])) : ?>
                    <a href="<?php echo htmlspecialchars($social_links['twitter']); ?>" target="_blank" rel="noopener noreferrer">Twitter</a>
                <?php endif; ?>
            </div>
            <p>&copy; <?php echo date("Y"); ?> <?php echo htmlspecialchars($your_name); ?>. All Rights Reserved.</p>
        </div>
    </div>
</footer>