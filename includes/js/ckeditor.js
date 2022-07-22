ClassicEditor
    .create(document.querySelector('#article'))
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });