@extends('master')
@section('body')
<section id="home" class="hero-section layout-1 has-overlay overlay-gradient">
    <div class="container">
        <br />
        <br />
        <br />
        <br />
<h1>Menampilkan PDF di Laravel</h1>

    <!-- Metode 1: Menggunakan PDF.js -->
    <h2>Metode 1: Menggunakan PDF.js</h2>
    <div id="pdf-container"></div>

    <style>
        #pdf-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: auto;
            max-width: 70%;
        }

        #pdf-container canvas {
            max-width: 70%;
            height: auto;
            margin-bottom: 20px;
        }
    </style>

    <script>
        const url = "{{ asset('doc.pdf') }}";
        const loadingTask = pdfjsLib.getDocument(url);
        loadingTask.promise.then(pdf => {
            for (let pageNum = 1; pageNum <= Math.min(pdf.numPages, 5); pageNum++) {
                pdf.getPage(pageNum).then(page => {
                    const scale = 1.5;
                    const viewport = page.getViewport({ scale: scale });

                    const canvas = document.createElement('canvas');
                    const wrapper = document.createElement('div');
                    wrapper.appendChild(canvas);
                    wrapper.style.textAlign = "center";

                    document.getElementById('pdf-container').appendChild(wrapper);

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
</div>
<br /><br /><br />

<!-- Shape Bottom -->

</section>
@endsection

