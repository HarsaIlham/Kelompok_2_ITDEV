document.addEventListener("DOMContentLoaded", function () {
    console.log("halaman sudah di load");
    getProduct();
})

function getProduct(){
    fetch('https://dummyjson.com/products/category/mens-shirts')
    .then(response => response.json())
    .then(data => {var container = document.querySelector('#product_container');
        data.products.forEach(product => {
            product.description = shortText(product.description,70);
            product.title = shortText(product.title,20);
            container.insertAdjacentHTML('beforeend',
                `<div class="card">
                    <div class="card_image">
                        <img src="${product.thumbnail}"
                        alt="product_image">
                    </div>
                    <section>
                        <header>
                            <p class="fwbold">${product.title}</p>
                        </header>
                        <p>${product.description}</p>
                        <button class="bg_red p-2 text_black fwbold border-radius box-shadow" onclick="window.location.href='http://localhost/KELOMPOK_2-main/app/views/details/details.php'">DETAILS</button>
                    </section>
                </div>`
            );
        });
    })
}

function shortText(text, maxLength) {
    if (text.length > maxLength) {
        return text.substring(0, maxLength) + ' ...';
    } else {
        return text;
    }
}
