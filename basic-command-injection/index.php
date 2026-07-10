<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Ürün Detayı</title>
</head>
<body>

    <h1>Lightweight "l33t" Leather Jacket</h1>

    <p>Fiyat: £1337</p>

    <label for="storeId">Mağaza seç:</label>

    <select id="storeId">
        <option value="1">London</option>
        <option value="2">Paris</option>
        <option value="3">Milan</option>
    </select>

    <button id="checkStock">Stok kontrol et</button>

    <p id="stockResult"></p>

    <script>
        document
            .getElementById("checkStock")
            .addEventListener("click", async function () {

                const productId = 1;
                const storeId = document.getElementById("storeId").value;

                const body = new URLSearchParams({
                    productId: productId,
                    storeId: storeId
                });

                const response = await fetch("stock.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded"
                    },
                    body: body
                });

                const result = await response.text();

                document.getElementById("stockResult").textContent = result;
            });
    </script>

</body>
</html>