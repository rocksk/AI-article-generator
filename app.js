
document.addEventListener('DOMContentLoaded', () => {
    const generatorForm = document.getElementById('generator-form');
    const generateBtn = document.getElementById('generate-btn');
    const spinner = document.querySelector('.spinner-border');
    const outputDiv = document.getElementById('ai-article-content');

    // Action buttons elements
    const actionButtonsDiv = document.getElementById('action-buttons');
    const copyBtn = document.getElementById('copy-btn');
    const downloadBtn = document.getElementById('download-btn');

    // Handle the main form submission
    generatorForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        generateBtn.disabled = true;
        spinner.classList.remove('d-none');
        actionButtonsDiv.classList.add('d-none');

        outputDiv.innerHTML = "Generating, please wait...";

        const contentTopic = document.getElementById('Topicfield').value;

        try {
            const response = await fetch('generator.php', {
                method: 'POST',
                headers: {'Content-Type': 'application/json'},
                body: JSON.stringify({topic: contentTopic})
            });
        
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }

            const result = await response.json();

            if (result.success) {
                outputDiv.innerHTML = result.text;
                actionButtonsDiv.classList.remove('d-none');
            } else {
                outputDiv.innerText = `Error: ${result.message}`;
            }

        } catch (error) { 
            console.error("Error: ", error);
            outputDiv.innerText = "An error occurred while communicating with server";
        } finally {
            generateBtn.disabled = false; // Fixed: was ariaDisabled
            spinner.classList.add('d-none');
        }
    });

    copyBtn.addEventListener('click', () => {
        const textCopy = outputDiv.innerText;
        navigator.clipboard.writeText(textCopy).then(() => {
            copyBtn.innerText = 'Copied!';

            setTimeout(() => {
                copyBtn.innerHTML = '<i class="bi bi-clipboard"></i> Copy Text';
            }, 2000);
        }).catch(err => {
            console.error('Failed to copy text: ', err);
            alert('Failed to copy text. Please try again.');
        });
    });

    downloadBtn.addEventListener('click', () => {
        const textToDownload = outputDiv.innerText;
        const Article_page = document.getElementById('Topicfield').value.replace(/[^a-z0-9]/gi,'_');

        const filename = `Article_about_${Article_page}.txt`;

        const blob = new Blob([textToDownload], {type: 'text/plain'});

        const a = document.createElement('a');
        a.href = URL.createObjectURL(blob);
        a.download = filename;

        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a);
    });
});