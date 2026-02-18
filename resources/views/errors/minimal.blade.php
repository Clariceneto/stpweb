<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<title>Erro {{ $exception->getStatusCode() ?? 500 }}</title>

<style>
:root {
    --bg: #0f172a;
    --primary: #38bdf8;
    --danger: #ef4444;
    --warning: #f59e0b;
}

* { margin: 0; padding: 0; box-sizing: border-box; }

body {
    height: 100vh;
    background: radial-gradient(circle at top, #1e293b, var(--bg));
    font-family: 'Segoe UI', system-ui;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.container {
    text-align: center;
    z-index: 2;
}

.code {
    font-size: 140px;
    font-weight: 900;
    letter-spacing: 10px;
    position: relative;
    animation: glitch 2s infinite;
}

.message {
    font-size: 28px;
    margin-bottom: 10px;
}

.desc {
    color: #cbd5f5;
    margin-bottom: 30px;
}

.btn {
    padding: 14px 30px;
    background: var(--primary);
    color: #000;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: .3s;
}

.btn:hover {
    transform: scale(1.05);
}

.particles span {
    position: absolute;
    width: 4px;
    height: 4px;
    background: white;
    opacity: .2;
    animation: float 10s linear infinite;
}

@keyframes float {
    from { transform: translateY(100vh); }
    to { transform: translateY(-100vh); }
}

@keyframes glitch {
    0% { text-shadow: 2px 0 red, -2px 0 cyan; }
    50% { text-shadow: -2px 0 red, 2px 0 cyan; }
    100% { text-shadow: 2px 0 red, -2px 0 cyan; }
}
</style>
</head>
<body>

 @include('components.loading')


<div class="particles" id="particles"></div>

<div class="container">
    <div class="code" id="code"></div>
    <div class="message" id="title"></div>
    <div class="desc" id="desc"></div>
    <a href="{{ url('/') }}" class="btn">Voltar ao início</a>
</div>

<script>
const status = {{ $exception->getStatusCode() ?? 500 }};

const errors = {
    404: {
        title: "Página não encontrada",
        desc: "Esta rota não existe neste universo digital."
    },
    403: {
        title: "Acesso negado",
        desc: "Não tens permissão para atravessar este portal."
    },
    500: {
        title: "Erro interno",
        desc: "O servidor entrou numa realidade alternativa."
    }
};

const data = errors[status] || {
    title: "Erro inesperado",
    desc: "Algo saiu completamente fora da matrix."
};

document.getElementById("code").innerText = status;
document.getElementById("title").innerText = data.title;
document.getElementById("desc").innerText = data.desc;

// partículas
const particles = document.getElementById("particles");
for (let i = 0; i < 80; i++) {
    const p = document.createElement("span");
    p.style.left = Math.random() * 100 + "vw";
    p.style.animationDuration = 5 + Math.random() * 10 + "s";
    particles.appendChild(p);
}
</script>

</body>
</html>