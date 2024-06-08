const quantityInput = document.getElementById('quantity');

    function increment() {
        const quantityValue = document.getElementById("item_quan");
        if (parseInt(quantityValue.textContent) > quantityInput.value) {
            quantityInput.value = parseInt(quantityInput.value) + 1;
        }
    }

    function decrement() {
        var currentQuantity = parseInt(quantityInput.value);
        if (currentQuantity > 1) {
            quantityInput.value = currentQuantity - 1;
        }
    }

    function likeReview(review_id) {
        let img = document.getElementById("likeSVG");
        if (img.src.includes('Upvoted')) {
            console.log("W")
            const url = '/api/removeLike';
            const requestData = {
                review_id: review_id,
            };
            postData(url, requestData)
                .then(data => {
                    if (data.success == "true") {
                        document.getElementById("reviewLikes").textContent = data.likes
                        img.src = img.getAttribute('data-unlike');
                    }
                });
            return
        }
        const url = '/api/likeReview';
        const requestData = {
            review_id: review_id,
        };
        postData(url, requestData)
            .then(data => {
                if (data.success == "true") {
                    document.getElementById("reviewLikes").textContent = data.likes
                    img.src = img.getAttribute('data-like');
                }
            });
    }

    let itemData = document.getElementById("itemData");
    let reviewsSection = document.getElementById("reviewsSection");
    let desBut = document.getElementById('desBut');
    let revBut = document.getElementById('revBut');

    function showItemDescription() {
        itemData.style.display = "block";
        reviewsSection.style.display = "none";
    }

    function showItemReviews() {
        itemData.style.display = "none";
        reviewsSection.style.display = "block";
    }