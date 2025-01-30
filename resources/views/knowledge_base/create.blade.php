<!DOCTYPE html>
<html lang="en">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable {
    min-height: 500px;
}
    </style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('knowledge_base.store') }}" method="POST">
        @csrf
        <label for="">Title</label>
        <input type="text" name="title">
        <label for="">Category</label>
        <input type="text" name="category" required>
        <textarea name="content" id="editor"></textarea>
        <button type="submit">Simpan</button>
    </form>


    <script>
        ClassicEditor
    .create(document.querySelector('#editor'), {


        ckfinder:{
            uploadUrl:"{{ route('upload.image',['_token'=>csrf_token()]) }}"
        }

    })

    .catch(error => {
        console.error(error);
    });

    </script>
</body>
</html>
