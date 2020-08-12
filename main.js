
function readMore(pages) {
    let dots = document.querySelector(`.media[data-pages="${pages}"] .dots`);
    let moreText = document.querySelector(`.media[data-pages="${pages}"] .more`); 
    let btnText = document.querySelector(`.media[data-pages="${pages}"] .myBtn`);

    if (dots.style.display === "none") {
        dots.style.display = "inline";
        btnText.textContent = "Read more";
        moreText.style.display = "none";
    } else {
        dots.style.display = "none";
        btnText.textContent = "Read less"; 
        moreText.style.display = "inline";
    }
}

