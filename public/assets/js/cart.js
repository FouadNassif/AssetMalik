async function deleteItemCart(id) {
    const token = document.querySelector(`meta[name="csrf-token"]`).getAttribute("content");

    const response = await fetch("/cart/deleteItem", {
        method: "POST",
        body: JSON.stringify({
            cartItemId: id,
        }),
        headers: {
            "X-CSRF-TOKEN": token,
            "Content-type": "application/json",
        },
    });

    if (!response.ok) {
        throw new Error("Failed to checkout");
    }

    const deleted = await response.json();
    if (deleted) {
        window.location.href = "/cart";
    }
}