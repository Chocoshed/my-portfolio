<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="<?php echo get_lang_url('index.php'); ?>"><?php echo htmlspecialchars($your_name); ?></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="<?php echo get_lang_url('index.php#about'); ?>"><?php echo htmlspecialchars($text['nav_about']); ?></a></li>
                <li><a href="<?php echo get_lang_url('index.php#skills'); ?>"><?php echo htmlspecialchars($text['nav_skills']); ?></a></li>
                <li><a href="<?php echo get_lang_url('index.php#experience'); ?>"><?php echo htmlspecialchars($text['nav_experience']); ?></a></li>
                <li><a href="<?php echo get_lang_url('index.php#projects'); ?>"><?php echo htmlspecialchars($text['nav_projects']); ?></a></li>
                <li><a href="<?php echo get_lang_url($text['resume_url']); ?>" target="_blank" rel="noopener noreferrer"><i class="fa-solid fa-download"></i> <?php echo htmlspecialchars($text['nav_resume']); ?></a></li>
                <li>
                    <div class="lang-switcher">
                        <a href="<?php echo get_lang_url($_SERVER['REQUEST_URI'], 'fr'); ?>" class="<?php echo ($current_lang === 'fr') ? 'active' : ''; ?>">FR</a>
                        <span>|</span>
                        <a href="<?php echo get_lang_url($_SERVER['REQUEST_URI'], 'en'); ?>" class="<?php echo ($current_lang === 'en') ? 'active' : ''; ?>">EN</a>
                        <span>|</span>
                        <a href="<?php echo get_lang_url($_SERVER['REQUEST_URI'], 'de'); ?>" class="<?php echo ($current_lang === 'de') ? 'active' : ''; ?>">DE</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div class="header-controls">
            <button id="menu-toggle" class="menu-toggle">
                <span class="menu-icon"></span>
            </button>
        </div>
    </div>
</header>