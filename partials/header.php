<header class="site-header">
    <div class="container header-container">
        <div class="logo">
            <a href="index.php"><?php echo htmlspecialchars($your_name); ?></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php#about"><?php echo htmlspecialchars($text['nav_about']); ?></a></li>
                <li><a href="index.php#skills"><?php echo htmlspecialchars($text['nav_skills']); ?></a></li>
                <li><a href="index.php#experience"><?php echo htmlspecialchars($text['nav_experience']); ?></a></li>
                <li><a href="index.php#projects"><?php echo htmlspecialchars($text['nav_projects']); ?></a></li>
                <li><a href="<?php echo htmlspecialchars($text['resume_url'])?>"><?php echo htmlspecialchars($text['nav_resume']); ?><i class="fa-solid fa-download"></i></i></a></li>
            </ul>
        </nav>
        <div class="header-controls">
            <div class="lang-switcher">
                <a href="?lang=fr" class="<?php echo ($current_lang === 'fr') ? 'active' : ''; ?>">FR</a>
                <span>|</span>
                <a href="?lang=en" class="<?php echo ($current_lang === 'en') ? 'active' : ''; ?>">EN</a>
                <span>|</span>
                <a href="?lang=de" class="<?php echo ($current_lang === 'de') ? 'active' : ''; ?>">DE</a>
            </div>
            <button id="menu-toggle" class="menu-toggle">
                <span class="menu-icon"></span>
            </button>
        </div>
    </div>
</header>