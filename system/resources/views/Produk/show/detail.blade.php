<p>
    {{$Produk->harga}} |
    Stok : {{$Produk->stock}} |
    Berat : {{$Produk->berat}} Kg <br>
    Tanggal Produksi : {{$Produk->created_at->format("d M Y")}} <br>
    Seller : {{$Produk->seller->user_name}} 
</p>