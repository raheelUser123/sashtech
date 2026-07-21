<?php $pageTitle='Creative Portfolio | Sash Tech';$pageDescription='Explore selected illustration, animation, video, web and digital growth work from Sash Tech.';include 'includes/header.php';

// Dynamically fetch portfolio items from folders
$basePath = __DIR__ . '/assets/images/portfolio/';
$categories = [
    '2d-models' => ['folder' => '2d models', 'title' => '2D Models'],
    '3d-models' => ['folder' => '3d models', 'title' => '3D Models'],
    'gif-animations' => ['folder' => 'GIF and animations', 'title' => 'GIF & Animations'],
    'illustration' => ['folder' => 'Illustration', 'title' => 'Illustration'],
    'logo-designs' => ['folder' => 'Logo and designs', 'title' => 'Logo & Designs'],
    'youtube' => ['folder' => 'YouTube', 'title' => 'YouTube']
];

reset($categories);
$defaultCategory = key($categories);

$items = [];
foreach ($categories as $catId => $info) {
    $folderName = $info['folder'];
    $dir = $basePath . $folderName;
    if (!is_dir($dir)) continue;

    // Check nested directory (handles both nested and flat folder structures)
    $nestedDir = $dir . '/' . $folderName;
    $searchDir = is_dir($nestedDir) ? $nestedDir : $dir;

    $files = scandir($searchDir);
    if ($files === false) continue;

    foreach ($files as $file) {
        if ($file === '.' || $file === '..') continue;
        if ($file === 'IMG_1253.webp') continue; // Skip duplicate version of the dog logo

        $filePath = $searchDir . '/' . $file;
        if (is_dir($filePath)) continue;

        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, ['webp', 'png', 'jpg', 'jpeg', 'gif', 'mp4', 'mov', 'webm'])) {
            $webPath = str_replace(__DIR__ . '/', '', $filePath);
            $webPath = str_replace('\\', '/', $webPath);

            $type = in_array($ext, ['mp4', 'mov', 'webm']) ? 'video' : 'image';
            
            // Format a human-readable title from the filename
            $name = pathinfo($file, PATHINFO_FILENAME);
            $name = preg_replace('/[_-]/', ' ', $name);
            $name = ucwords(trim($name));
            if (strlen($name) > 30 || preg_match('/^[a-f0-9]{8}-[a-f0-9]{4}-/', $file)) {
                $name = $info['title'] . ' Asset';
            }

            $items[] = [
                'category' => $catId,
                'file' => $webPath,
                'name' => $name,
                'type' => $type
            ];
        }
    }
}
?>

<section class="page-hero">
    <div class="container">
        <div class="breadcrumbs"><a href="index.php">Home</a> / Portfolio</div>
        <span class="eyebrow">PORTFOLIO</span>
        <h1>Work designed to be seen, understood and remembered.</h1>
        <p>Explore our latest projects across design, dynamic 2D/3D modeling, illustration, and animation.</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="filters">
            <?php foreach ($categories as $catId => $info): ?>
                <button class="filter-btn <?= $catId === $defaultCategory ? 'active' : '' ?>" data-filter="<?=e($catId)?>"><?=e($info['title'])?></button>
            <?php endforeach; ?>
        </div>

        <div class="portfolio-grid">
            <?php foreach ($items as $item): ?>
                <article class="project-card reveal" data-category="<?=e($item['category'])?>">
                    <div class="project-media">
                        <?php if ($item['type'] === 'video'): ?>
                            <video autoplay loop muted playsinline>
                                <source src="<?=e($item['file'])?>" type="video/mp4">
                                <source src="<?=e($item['file'])?>" type="video/quicktime">
                                Your browser does not support the video tag.
                            </video>
                        <?php else: ?>
                            <img src="<?=e($item['file'])?>" alt="<?=e($item['name'])?>" loading="lazy">
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="pagination" id="portfolioPagination"></div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const itemsPerPage = 15;
    let currentPage = 1;
    let activeFilter = '<?= e($defaultCategory) ?>';

    const grid = document.querySelector('.portfolio-grid');
    const cards = Array.from(grid.querySelectorAll('.project-card'));
    const paginationContainer = document.getElementById('portfolioPagination');
    const filterButtons = document.querySelectorAll('.filter-btn');

    function updatePortfolio() {
        // 1. Filter cards
        const filteredCards = cards.filter(card => {
            return activeFilter === 'all' || card.dataset.category === activeFilter;
        });

        // 2. Hide all cards
        cards.forEach(card => card.style.display = 'none');

        // 3. Calculate pagination details
        const totalItems = filteredCards.length;
        const totalPages = Math.ceil(totalItems / itemsPerPage) || 1;

        // Ensure current page is within bounds
        if (currentPage > totalPages) currentPage = totalPages;
        if (currentPage < 1) currentPage = 1;

        // 4. Show cards for the current page
        const startIdx = (currentPage - 1) * itemsPerPage;
        const endIdx = startIdx + itemsPerPage;

        filteredCards.forEach((card, idx) => {
            if (idx >= startIdx && idx < endIdx) {
                card.style.display = '';
            }
        });

        // 5. Render pagination controls
        renderPagination(totalPages);
    }

    function renderPagination(totalPages) {
        paginationContainer.innerHTML = '';
        if (totalPages <= 1) return; // No pagination

        // Previous Button
        const prevBtn = document.createElement('button');
        prevBtn.innerHTML = '←';
        prevBtn.disabled = currentPage === 1;
        prevBtn.addEventListener('click', () => {
            currentPage--;
            updatePortfolio();
            scrollToPortfolio();
        });
        paginationContainer.appendChild(prevBtn);

        // Page Number Buttons
        for (let i = 1; i <= totalPages; i++) {
            const pageBtn = document.createElement('button');
            pageBtn.textContent = i;
            if (i === currentPage) {
                pageBtn.classList.add('active');
            }
            pageBtn.addEventListener('click', () => {
                currentPage = i;
                updatePortfolio();
                scrollToPortfolio();
            });
            paginationContainer.appendChild(pageBtn);
        }

        // Next Button
        const nextBtn = document.createElement('button');
        nextBtn.innerHTML = '→';
        nextBtn.disabled = currentPage === totalPages;
        nextBtn.addEventListener('click', () => {
            currentPage++;
            updatePortfolio();
            scrollToPortfolio();
        });
        paginationContainer.appendChild(nextBtn);
    }

    function scrollToPortfolio() {
        const rect = grid.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        window.scrollTo({
            top: rect.top + scrollTop - 120,
            behavior: 'smooth'
        });
    }

    // Override default filter behavior from main.js
    filterButtons.forEach(button => {
        const clone = button.cloneNode(true);
        button.replaceWith(clone);
    });

    // Re-select and add new paginated listeners
    const newFilterButtons = document.querySelectorAll('.filter-btn');
    newFilterButtons.forEach(button => {
        button.addEventListener('click', () => {
            newFilterButtons.forEach(btn => btn.classList.remove('active'));
            button.classList.add('active');
            activeFilter = button.dataset.filter || 'all';
            currentPage = 1; // Reset to page 1 on filter change
            updatePortfolio();
        });
    });

    // Initial load
    updatePortfolio();
});
</script>

<?php include 'includes/footer.php'; ?>
