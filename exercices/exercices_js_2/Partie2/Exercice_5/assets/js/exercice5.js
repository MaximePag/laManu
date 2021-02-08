function changeImage(image){
    image.src = image.src.replace(".jpg", "_2.jpg");
}
function resetImage(image){
    image.src = image.src.replace("_2.jpg", ".jpg");
}