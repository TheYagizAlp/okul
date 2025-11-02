let toplamRandevu = 0;

document.getElementById("randevuForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const adSoyad = document.getElementById("adSoyad").value;
  const tc = document.getElementById("tc").value;
  const doktor = document.getElementById("doktor").value;
  const tarih = document.getElementById("tarih").value;
  const saat = document.getElementById("saat").value;

  if (!adSoyad || !tc || !doktor || !tarih || !saat) {
    mesajGoster("Lütfen tüm alanları doldurunuz.", "error");
    return;
  }

  const tbody = document.querySelector("#randevuListesi tbody");
  const newRow = document.createElement("tr");

  newRow.innerHTML = `
    <td>${adSoyad}</td>
    <td>${tc}</td>
    <td>${doktor}</td>
    <td>${tarih}</td>
    <td>${saat}</td>
    <td><button class="sil-btn">Sil</button></td>
  `;

  tbody.appendChild(newRow);
  toplamRandevu++;
  guncelleRandevuSayaci();
  mesajGoster("Randevunuz başarıyla oluşturuldu! ✅", "success");

  this.reset();
});

// Silme işlemi
document.querySelector("#randevuListesi").addEventListener("click", function(e) {
  if (e.target.classList.contains("sil-btn")) {
    e.target.parentElement.parentElement.remove();
    toplamRandevu--;
    guncelleRandevuSayaci();
    mesajGoster("Randevu başarıyla silindi. 🗑️", "success");
  }
});

// Mesaj kutusu (fade efektiyle)
function mesajGoster(mesaj, tip) {
  const mesajKutusu = document.getElementById("mesajKutusu");
  mesajKutusu.textContent = mesaj;
  mesajKutusu.className = tip === "success" ? "success" : "error";
  mesajKutusu.style.display = "block";

  setTimeout(() => (mesajKutusu.style.opacity = 1), 50); // fade in

  setTimeout(() => {
    mesajKutusu.style.opacity = 0; // fade out
    setTimeout(() => {
      mesajKutusu.style.display = "none";
    }, 500);
  }, 2500);
}

// Randevu sayacını güncelleme
function guncelleRandevuSayaci() {
  document.getElementById("randevuSayaci").textContent =
    `Toplam Randevu Sayısı: ${toplamRandevu}`;
}