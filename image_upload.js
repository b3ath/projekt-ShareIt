function addImage() {
    const imageList = document.getElementById('image-galery');
    const imageUpload = document.getElementById('imageinput');
    const files = imageUpload.files;

    if (files.length === 0) {
        alert("Please select an image file.");
        return;
    }

    const file = files[0];
    const reader = new FileReader();

    reader.onload = function(e) {
        const newLi = document.createElement('li');
        const newImg = document.createElement('img');
        newImg.src = e.target.result;
        newImg.alt = '';

        const overlayDiv = document.createElement('div');
        overlayDiv.className = 'overlay';
        const span = document.createElement('span');
        span.textContent = 'Image title';
        overlayDiv.appendChild(span);

        newLi.appendChild(newImg);
        newLi.appendChild(overlayDiv);
        imageList.appendChild(newLi);
    };

    reader.readAsDataURL(file);
}   