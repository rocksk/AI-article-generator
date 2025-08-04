<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Article Generator | AI Powered Article generator with single click</title>
     <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons for the buttons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
body{
    background-color: #e9ecef;
}
.card {
    border: none;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
}

.output-box {
    background-color: #f8f9fa;
    border: 1px solid #dee2e6;
    border-radius: .375rem;
    padding: 2rem;
    min-height: 150px;
    white-space: pre-wrap;
    color: #212529;
    transition: background-color 0.3s ease, border-color 0.3s ease, color 0.3s ease;
}

[data-bs-theme="dark"] .output-box {
    background-color: #212529;
    border: 1px solid #495057;
    color: #f8f9fa;
}

.action-buttons {
    transition: opacity 0.3s ease-in-out;
}
.my-5 {
    margin-top: 5rem !important;
    margin-bottom: 3rem !important;
}
.form-label, span {
    font-size: 23px;
}
p {
    font-size: 18px;
}

.header-title{
    margin-top:15px;
}
</style>
</style>
<body>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) : 'AI Prompts Tools'; ?></title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Your Custom CSS -->
    <link rel="stylesheet" href="/ai-tools/assets/css/main.css">
</head>
<body class="bg-light-subtle">

<header class="py-3 mb-4 border-bottom shadow-sm bg-body-tertiary">
    <div class="container d-flex justify-content-between align-items-center">
        <!-- Back Button -->
        <a href="https://allaiprompts.net/ai-tools/" class="btn btn-outline-secondary">
            <i class="bi bi-arrow-left"></i> Back to Main Site
        </a>

        <!-- Your Logo (Optional) -->
        <a href="/ai-tools/" class="text-dark text-decoration-none">
            <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
        </a>

        <!-- Theme Switcher -->
        <div class="dropdown">
            <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="themeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="bi bi-palette-fill"></i> Theme
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="themeDropdown">
                <li><button class="dropdown-item" type="button" data-bs-theme-value="light"><i class="bi bi-sun-fill me-2"></i>Light</button></li>
                <li><button class="dropdown-item" type="button" data-bs-theme-value="dark"><i class="bi bi-moon-stars-fill me-2"></i>Dark</button></li>
                <li><button class="dropdown-item" type="button" data-bs-theme-value="auto"><i class="bi bi-circle-half me-2"></i>Auto</button></li>
            </ul>
        </div>
    </div>
</header>


<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card p-4 p-md-5">
                <h1 class="text-center mb-4">AI Powered Article Generator</h1>
                <h5>Instantly Generate SEO Articles—Zero Effort, 100% Results!</h5>
                 <p class="text-mute">The ultimate SEO Writing tool that crafts high-quality articles, essays, and SEO-optimized content in seconds - completely FREE! .</p>
                <form id="generator-form">
                    <div class="mb-3">
                        <label for="Topicfield" class="form-label"><b>Enter your Topic or Title</b></label>
                        <input type="text" class="form-control" id="Topicfield" placeholder=" i,e.   How to build website using ai to earn money in 2025" required>
                    </div>
                    <button type="submit" id="generate-btn" class="btn btn-primary w-100 py-2">
                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                        Generate Content
                    </button>
                </form>
                <h2 class="mt-5"> Generated Content Output: </h2>
                <div id="ai-article-content" class="output-box mt-3">
                    Your generated content will appear here...
                </div>
                <!-- Action buttons(Copy and Download) -->
                 <div id="action-buttons" class="mt-3 text-end d-none">
                    <button id="copy-btn" class="btn btn-secondary me-2">
                        <i class="bi bi-clipboard"></i>Copy Text
                    </button>
                    <button id="download-btn" class="btn btn-success">
                        <i class="bi bi-download"></i>Download as .txt</button>
                 </div>
            <h1 class="header-title">AI Powered Article Generator</h1>

            <p>In today's fast-paced digital world, Content Creation is king but crafting high-quality, SEO-optimized articles can be time-consuming and challenging. That’s where our AI-Powered Article Generator comes in a revolutionary tool designed to help bloggers, marketers,researchers,educator,lawyer and businesses generate well-structured, engaging, and search-engine-friendly content with just a single click.</p>

            <h2>How It Works</h2>
            <p>Simply enter your topic or title (e.g., "How to Build a Website Using AI in 2025"), click "Generate Content", and It will create a SEO-friendly article tailored to your needs regardless of your field. It is using a advanced algorithm to generate SEO Friendly content to tailor your need. </p>

            <h2>Why Use an AI Article Generator?</h2>
            <p>Whether you're a content creator, SEO specialist, or business owner, producing fresh and relevant content consistently is crucial for online success. However, writer’s block, research time, and SEO optimization can slow you down. Our AI tool eliminates these hurdles by:

                <li><b>Saving Time </b> – No more hours spent brainstorming or drafting; get a complete article in seconds.</li>
                <li><b>Enhancing SEO </b> – Automatically optimized with relevant keywords, headings, and readability.</li>
                <li><b>Improving Quality </b> – Well-structured, human-like content that engages readers.</li>
                <li><b>Boosting Productivity </b> – Focus on strategy it will do rest for you in a single click</li>
         </p>
            </div>

         

        </div>
    </div>
</div>

<footer class="text-center text-muted py-4">
    <hr>
    <p>© <?php echo date("Y"); ?> AI Tools - Allaiprompts.net</p>
</footer>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Your Custom JS -->
<!-- <script src="/ai-tools/assets/js/main.js?v=1.1"></script>
<script src="/ai-tools/assets/js/ai-about-us.js"></script> -->
</body>
</html>

<script src="app.js"></script>   
<script>
    document.addEventListener('DOMContentLoaded', () => {

    // --- THEME SWITCHER LOGIC ---
    const themeSwitcherTriggers = document.querySelectorAll('[data-bs-theme-value]');
    if (themeSwitcherTriggers.length > 0) {
        const getStoredTheme = () => localStorage.getItem('theme');
        const setStoredTheme = theme => localStorage.setItem('theme', theme);
        const getPreferredTheme = () => getStoredTheme() || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

        const setTheme = theme => {
            const effectiveTheme = (theme === 'auto') ? (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light') : theme;
            document.documentElement.setAttribute('data-bs-theme', effectiveTheme);
        };

        setTheme(getPreferredTheme());

        window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
            if (getStoredTheme() === 'auto') setTheme('auto');
        });

        themeSwitcherTriggers.forEach(toggle => {
            toggle.addEventListener('click', () => {
                const theme = toggle.getAttribute('data-bs-theme-value');
                setStoredTheme(theme);
                setTheme(theme);
            });
        });
    }
});
</script> 
</body>
</html>