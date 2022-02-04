// Deklarasi Gambar Manusia, Virus, Skor, Latar Belakang, dan Efek Suara
const manusia = document.querySelectorAll('.manusia');
const virus = document.querySelectorAll('.virus');
const papanSkor = document.querySelector('.papan-skor');
const pop = document.querySelector('#pop');
const getScore = document.querySelector("#form-submit");

let manusiaSebelumnya;
let selesai;
let skor;

// Fungsi Random Manusia
function randomManusia(manusia) {
    const t = Math.floor(Math.random() * manusia.length);
    const tRandom = manusia[t];
    if (tRandom == manusiaSebelumnya) {
        randomManusia(manusia);
    }
    manusiaSebelumnya = tRandom;
    return tRandom;
}

// Fungsi Random Waktu
function randomWaktu (min, max) {
    return Math.round(Math.random() * (max - min) + min);
}

// Fungsi Munculkan Virus
function munculkanVirus() {
    const tRandom = randomManusia(manusia);
    const wRandom = randomWaktu(300, 1000);
    tRandom.classList.add('muncul');

    setTimeout(() => {
        tRandom.classList.remove('muncul');
        if(!selesai) {
            munculkanVirus();
        } 
    }, wRandom);
}

// Fungsi Mulai
function mulai() {
    selesai = false;
    skor = 0;
    papanSkor.textContent = 0;
    munculkanVirus();
    setTimeout(() => {
        selesai = true;
    }, 30000);
}

// Fungsi Pukul
function pukul() {
    skor++;
    this.parentNode.className = 'manusia';
    papanSkor.textContent = skor;
    pop.play()
}

virus.forEach(t => {
    t.addEventListener('click', pukul);
});

getScore.addEventListener('click', () => {
    nilai = document.getElementsByClassName("papan-skor");
    let inputNilai = document.getElementById("score");
    inputNilai.value = nilai[0].innerHTML;
});