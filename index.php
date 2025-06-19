<?php
// Include the data and language logic
require_once 'config/data.php';
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($current_lang); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($text['site_title']); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($text['site_description']); ?>">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">

    <?php include 'partials/header.php'; ?>

    <main>
        <!-- Hero Section -->
        <section id="hero" class="hero container">
            <div class="hero-content">

                <h1 class="hero-title">
                    <span class="hero-subtitle"><?php echo htmlspecialchars($text['hero_greeting']); ?></span>
                    <?php echo htmlspecialchars($text['your_job_title']); ?>
                </h1>
                <p class="hero-text"><?php echo htmlspecialchars($text['site_description']); ?></p>
                <a href="#projects" class="btn btn-primary"><?php echo htmlspecialchars($text['hero_button']); ?></a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about container">
            <h2 class="section-title"><?php echo htmlspecialchars($text['about_title']); ?></h2>
            <div class="about-content">
                <div class="about-image">
                    <img src="<?php echo htmlspecialchars($your_profile_image); ?>" alt="Profile picture of <?php echo htmlspecialchars($your_name); ?>">
                </div>
                <div class="about-text">
                    <p><?php echo nl2br(htmlspecialchars($text['about_me_text'])); ?></p>
                    <div class="contact-info">
                        <p><strong><?php echo htmlspecialchars($text['contact_email']); ?>:</strong> <?php echo htmlspecialchars($your_email); ?></p>
                        <p><strong><?php echo htmlspecialchars($text['contact_location']); ?>:</strong> <?php echo htmlspecialchars($your_location); ?></p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Skills Section -->
        <section id="skills" class="skills container">
            <h2 class="section-title"><?php echo htmlspecialchars($text['skills_title']); ?></h2>
            <div class="skills-grid">
                <?php foreach ($skills as $skill): ?>
                    <div class="skill-card">
                        <h3 class="skill-name"><?php echo htmlspecialchars($skill['name']); ?></h3>
                        <div class="skill-bar">
                            <div class="skill-level" style="width: <?php echo $skill['level']; ?>%;"></div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Experience Section -->
        <section id="experience" class="experience container">
            <h2 class="section-title"><?php echo htmlspecialchars($text['experience_title']); ?></h2>
            <div class="timeline">
                <?php foreach ($text['experience'] as $job): ?>
                    <div class="timeline-item">
                        <div class="timeline-content">
                            <h3><?php echo htmlspecialchars($job['job_title']); ?></h3>
                            <p class="company"><?php echo htmlspecialchars($job['company']); ?> | <?php echo htmlspecialchars($job['period']); ?></p>
                            <p><?php echo htmlspecialchars($job['description']); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>


        <!-- Projects Section -->
        <section id="projects" class="projects container">
            <h2 class="section-title"><?php echo htmlspecialchars($text['projects_title']); ?></h2>
            <div class="projects-grid">
                <?php foreach ($projects as $project): ?>
                    <div class="project-card">
                        <div class="project-image">
                            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
                        </div>
                        <div class="project-content">
                            <h3 class="project-title"><?php echo htmlspecialchars($project['title']); ?></h3>
                            <p class="project-description"><?php echo htmlspecialchars($project['description']); ?></p>
                            <div class="project-tags">
                                <?php foreach ($project['tags'] as $tag): ?>
                                    <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                                <?php endforeach; ?>
                            </div>
                            <div class="project-links">
                                <?php if (isset($project['detail_page']) && $project['detail_page']): ?>
                                    <a href="<?php echo get_lang_url('project-detail.php?slug=' . htmlspecialchars($project['slug'])); ?>" class="btn btn-secondary"><?php echo htmlspecialchars($text['project_btn_details']); ?></a>
                                <?php else : ?>
                                    <a href="<?php echo htmlspecialchars($project['live_url']); ?>" class="btn btn-secondary" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars($text['project_btn_demo']); ?></a>
                                <?php endif; ?>
                                <?php if (!empty($project['code_url'])): ?>
                                <a href="<?php echo htmlspecialchars($project['code_url']); ?>" class="btn btn-outline" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars($text['project_btn_code']); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

    </main>

    <?php include 'partials/footer.php'; ?>

    <script src="https://kit.fontawesome.com/f81b4bdbf1.js" crossorigin="anonymous"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>