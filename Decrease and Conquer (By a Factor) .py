def cari_cabe_busuk(cabe, kiri=0, kanan=None):
    if kanan is None:
        kanan = len(cabe) - 1

    # Basis: jika tinggal satu elemen
    if kiri == kanan:
        if cabe[kiri] == 0:
            return kiri  # ditemukan
        else:
            return -1  # tidak ditemukan

    # Bagi dua
    tengah = (kiri + kanan) // 2

    # Periksa bagian kiri terlebih dahulu
    if 0 in cabe[kiri:tengah + 1]:
        return cari_cabe_busuk(cabe, kiri, tengah)
    else:
        return cari_cabe_busuk(cabe, tengah + 1, kanan)

# Contoh data
data_cabe = [1, 1, 1, 1, 0, 1, 1, 1]
index_cabe_busuk = cari_cabe_busuk(data_cabe)
print("Cabe busuk ditemukan di indeks:", index_cabe_busuk)
