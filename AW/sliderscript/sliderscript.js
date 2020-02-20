const img_count = 5;
let i = 2;
slider_interval = setInterval(change_image,2000);
function change_image() {
    var img_elem = document.getElementById("main_img");
    var count_elem = document.getElementById("slider_counter");
    img_elem.setAttribute("src",`img/sliderimg${i}.png`);
    img_elem.setAttribute("alt",`Obraz ${i}`);
    i++ < img_count ? null : i=0;
    count_elem.innerHTML = "-".repeat(i-2) + "X" + "-".repeat(img_count+1-i);
}
