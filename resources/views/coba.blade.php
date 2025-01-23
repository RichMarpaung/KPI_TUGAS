<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display PDF in Laravel</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.12.313/pdf.min.js"></script>
</head>
<body>
    <h1>Menampilkan PDF di Laravel</h1>

    <!-- Metode 1: Menggunakan PDF.js -->
    <h2>Metode 1: Menggunakan PDF.js</h2>
    <div id="pdf-container"></div>

    <script>
        const url = "{{ asset('doc.pdf') }}";
        const loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(pdf => {
            for (let pageNum = 21; pageNum <= pdf.numPages; pageNum++) {
                pdf.getPage(pageNum).then(page => {
                    const scale = 1.5;
                    const viewport = page.getViewport({ scale: scale });

                    const canvas = document.createElement('canvas');
                    document.getElementById('pdf-container').appendChild(canvas);
                    const context = canvas.getContext('2d');
                    canvas.height = viewport.height;
                    canvas.width = viewport.width;

                    const renderContext = {
                        canvasContext: context,
                        viewport: viewport
                    };
                    page.render(renderContext);
                });
            }
        });
    </script>
</body>
</html>
