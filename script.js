const text = "Hi!";
    let index = 0;
    let direction = 1; // 1 untuk maju, -1 untuk mundur
    const typingSpeed = 200; // Kecepatan dalam milidetik

    const typingTextElement = document.getElementById("Hi");

    setInterval(() => {
      // Tampilkan teks sesuai index saat ini
      typingTextElement.textContent = text.slice(0, index);

      // Jika mencapai akhir teks, balik arah
      if (index === text.length) direction = -1;
      // Jika kembali ke awal, ubah arah ke maju
      else if (index === 0) direction = 1;

      // Perbarui index sesuai arah
      index += direction;
    }, typingSpeed);