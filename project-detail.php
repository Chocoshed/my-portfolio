<?php
// Include the data file to get access to the $projects array
require_once 'config/data.php';
require_once 'vendor/autoload.php';

// Initialize Parsedown
$parsedown = new Parsedown();
// For security, enable safe mode to prevent XSS
$parsedown->setSafeMode(true);

// Get the project slug from the URL (e.g., project-detail.php?slug=e-commerce-platform)
$project_slug = isset($_GET['slug']) ? $_GET['slug'] : '';
$current_project = null;

// Find the project with the matching slug from our data
foreach ($projects as $project) {
    if (isset($project['slug']) && $project['slug'] === $project_slug) {
        $current_project = $project;
        break;
    }
}

// Set the page title based on whether a project was found
if ($current_project === null) {
    // A project with the given slug was not found
    $page_title = "Project Not Found";
} else {
    $page_title = htmlspecialchars($current_project['title']) . " - " . htmlspecialchars($your_name);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;900&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-100 font-sans">

    <?php include 'partials/header.php'; ?>

    <main>
        <?php if ($current_project): // Check if a project was found 
        ?>
            <section class="project-detail container">

                <!-- Link to go back to the main projects section -->
                <a href="index.php#projects" class="back-link">&larr; Back to All Projects</a>

                <h1 class="project-detail-title"><?php echo htmlspecialchars($current_project['title']); ?></h1>

                <div class="project-detail-tags">
                    <?php foreach ($current_project['tags'] as $tag): ?>
                        <span class="tag"><?php echo htmlspecialchars($tag); ?></span>
                    <?php endforeach; ?>
                </div>

                <div class="project-detail-content">
                    <?php echo $parsedown->text($current_project['detailed_description']); ?>
                </div>

                <!-- Links to the live demo and source code -->
                <div class="project-links-detail">
                    <a href="<?php echo htmlspecialchars($current_project['live_url']); ?>" class="btn btn-primary" target="_blank" rel="noopener noreferrer">Live Demo</a>
                    <a href="<?php echo htmlspecialchars($current_project['code_url']); ?>" class="btn btn-outline" target="_blank" rel="noopener noreferrer">View Code</a>
                </div>

                <!-- Screenshot gallery -->
                <div class="project-gallery">
                    <h2 class="section-title">Screenshots</h2>
                    <div class="gallery-grid" id="gallery-grid">
                        <?php if (!empty($current_project['images'])): ?>
                            <?php foreach ($current_project['images'] as $image): ?>
                                <div class="gallery-item">
                                    <img src="<?php echo htmlspecialchars($image); ?>" alt="Screenshot of <?php echo htmlspecialchars($current_project['title']); ?>">
                                </div>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <p>No screenshots are available for this project.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
        <?php else: // If no project was found, show an error message 
        ?>
            <section class="container" style="text-align: center; padding: 10rem 1.5rem;">
                <h1 class="project-detail-title">404 - Project Not Found</h1>
                <p style="margin-bottom: 2rem;">Sorry, the project you are looking for does not exist.</p>
                <a href="index.php#projects" class="btn btn-primary">Return to Portfolio</a>
            </section>
        <?php endif; ?>

        <!-- The Modal -->
        <div id="myModal" class="modal">
            <span class="close">×</span>
            <img class="modal-content" id="img01">
        </div>
    </main>

    <?php include 'partials/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>

</html>