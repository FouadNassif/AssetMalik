async function postData(url, requestData) {
    const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
    return fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': token
        },
        body: JSON.stringify(requestData)
    })
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .catch(error => {
            console.error('There was a problem with the fetch operation:', error);
        });
}

function addFavoriteItem(item_id, user_id) {
    let SVGICON = item_id.querySelector("img");
    if (SVGICON.src.includes("Favorites")) {
        deleteFavoriteItem(item_id, user_id);
        return
    }
    let ButtonValue = item_id.value;
    const url = '/api/addFavoriteItem';
    const requestData = {
        item_id: ButtonValue,
        user_id: user_id
    };

    postData(url, requestData)
        .then(data => {
            if (data.success) {
                let img = document.querySelector(`#favoriteImg_${ButtonValue}`);
                if (img) {
                    img.src = img.getAttribute('data-favorite');
                }
            }
        });
}

function deleteFavoriteItem(item_id, user_id) {
    let ButtonValue = item_id.value;
    const url = '/api/deleteFavoriteItem';
    const requestData = {
        item_id: ButtonValue,
        user_id: user_id
    };

    postData(url, requestData)
        .then(data => {
            if (data.success == "true") {
                let img = item_id.querySelector("img");
                img.src = img.getAttribute('data-unfavorite');
            }
        });
}

function addToCart(item_id, user_id, quantity, price) {
    console.log(item_id, user_id, price, quantity)
    let ButtonValue = item_id.value;
    const url = '/api/deleteFavoriteItem';
    const requestData = {
        item_id: ButtonValue,
        user_id: user_id
    };

    postData(url, requestData)
        .then(data => {
            if (data.success == "true") {
                let img = item_id.querySelector("img");
                img.src = img.getAttribute('data-unfavorite');
            }
        });
}
function closeItemDes() {
    document.getElementById('itemDes').style.display = 'none'
}

function likeReview(id) {
    
    const url = '/api/likeReview';
    const requestData = {
        review_id: id,
    };
    postData(url, requestData)
        .then(data => {
            if (data.success == "true") {
                document.getElementById("reviewLikes").textContent = data.likes
            }
        });
}











// function showDesItem(id) {
//     document.getElementById('itemDes').style.display = 'block';
//     const quantityInput = document.getElementById('quantity').value = 0;

//     const url = '/api/getItem';
//     fetch(url, {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'Accept': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
//                     'content')
//             },
//             body: JSON.stringify({
//                 item_id: id,
//             })
//         })
//         .then(response => {
//             if (!response.ok) {
//                 throw new Error('Network response was not ok');
//             }
//             return response.json();

//         })
//         .then(data => {
//             let itemData = [];
//             for (let i of data.item) {
//                 itemData.push(i);
//             }
//             let item = itemData[0]
//             document.getElementById("item_name").textContent = item.name
//             document.getElementById("item_des").textContent = item.description
//             document.getElementById("item_price").textContent = item.price
//             document.getElementById("item_quan").textContent = item.quantity
//             document.getElementById("favBut").value = item.id
//             document.getElementById('favoriteImg').alt = item.id
//         })
//         .catch(error => {
//             console.error('There was a problem with the fetch operation:', error);
//         });
// }