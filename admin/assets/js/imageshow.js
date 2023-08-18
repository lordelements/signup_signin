
// profile 
const image = document.getElementById("img"),
        img_file = document.getElementById("img-file");

        img_file.addEventListener("change", (e) => {
        e.preventDefault();
        img.src = URL.createObjectURL(img_file.files[0]);
        });