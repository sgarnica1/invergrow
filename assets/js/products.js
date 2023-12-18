const templateImage = document.getElementById("template-img");
const gallery = document.querySelectorAll(".prodcut__image-gallery img");

for (let image of gallery) {
  image.addEventListener("click", () => {
    templateImage.src = image.src;
    templateImage.alt = image.alt;
  });
}
