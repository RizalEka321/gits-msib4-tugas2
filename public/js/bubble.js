let canvasKita = document.getElementById("canvas2");
canvasKita.width = 400;
canvasKita.height = 200;
let ctx = canvasKita.getContext("2d");

let canvasW = canvas2.width;
let canvasH = canvas2.height;

function bulat(x, y, r, w, kanan, kiri, atas, bawah) {
    this.x = x;
    this.y = y;
    this.r = r;
    this.w = w;
    this.kanan = kanan;
    this.kiri = kiri;
    this.atas = atas;
    this.bawah = bawah;

    this.render = function () {
        ctx.fillStyle = this.w;
        ctx.beginPath();
        ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
        ctx.fill();

        if (this.kanan) {
            this.x++;
        }
        if (this.kiri) {
            this.x--;
        }
        if (this.bawah) {
            this.y++;
        }
        if (this.atas) {
            this.y--;
        }
        if (this.x + this.r > canvasW) {
            this.kanan = false;
            this.kiri = true;
        } else if (this.x - this.r < 0) {
            this.kanan = true;
            this.kiri = false;
        }
        if (this.y + this.r > canvasH) {
            this.bawah = false;
            this.atas = true;
        } else if (this.y - this.r < 0) {
            this.bawah = true;
            this.atas = false;
        }
    }
}

let bulat1 = new bulat(100, 100, 30, 'white', true, false, false, true);
let bulat2 = new bulat(300, 500, 30, '#18d26e', false, true, true, false);
let bulat3 = new bulat(400, 400, 30, 'white', true, false, true, false);
let bulat4 = new bulat(500, 70, 30, '#18d26e', false, false, true, false);
let bulat5 = new bulat(280, 300, 30, 'white', true, false, true, false);
let bulat6 = new bulat(430, 400, 30, '#18d26e', true, true, true, false);

function animasi() {
    ctx.save();
    ctx.clearRect(0, 0, canvasW, canvasH);

    ctx.globalAlpha = 0.7;
    bulat1.render();
    bulat2.render();
    bulat3.render();
    bulat4.render();
    bulat5.render();
    bulat6.render();

    ctx.restore();
}

setInterval(animasi, 10);