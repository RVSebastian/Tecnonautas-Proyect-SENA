<script>
var loader = document.querySelector(".loader")
window.addEventListener("load", vanish)

function vanish() {
    loader.classList.add("disppear");
}
</script>

<script>
ScrollReveal().reveal('', {
    distance: '400%',
    origin: 'left',
    opacity: null,
    desktop: true,
    mobile: true,
    opacity: 0.8,
    duration: 2000

});
ScrollReveal().reveal('', {
    distance: '150%',
    origin: 'right',
    opacity: null,
    delay: 400,
    desktop: true,
    mobile: false,
    
});
ScrollReveal().reveal('', {
    distance: '150%',
    origin: 'bottom',
    opacity: null,
    delay: 400,
    desktop: true,
});
ScrollReveal().reveal('.disqus_thread', {
    distance: '150%',
    origin: 'bottom',
    opacity: null,
    delay: 400,
    desktop: true,
    mobile: false,
});
</script>
<script>
ClassicEditor
    .create(document.querySelector('#article'), {
        // ...
    })
    .then(editor => {
        const toolbarElement = editor.ui.view.toolbar.element;
        editor.on('change:isReadOnly', (evt, propertyName, isReadOnly) => {
            if (isReadOnly) {
                toolbarElement.style.display = 'none';
            } else {
                toolbarElement.style.display = 'none';
            }
        });
    })
    .catch(error => {
        console.log(error);
    });
ClassicEditor
    .create(document.querySelector('#blog'), {
        toolbar: ['']

    })
    .then(editor => {
        console.log(editor);
        editor.isReadOnly = true;


    }).catch(error => {
        console.error(error);
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
< /> <
script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
integrity = "sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
crossorigin = "anonymous" >
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
</script>
<script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>

<script src="./index.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/[version.number]/[distribution]/ckeditor.js"></script>
</body>

</html>