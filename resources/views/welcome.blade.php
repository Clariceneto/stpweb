<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bem-vindo</title>
<style>
    * { margin:0; padding:0; box-sizing:border-box; }

    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background: linear-gradient(135deg, #e0d9c6, #f5f5dc);
    }

    /* Conteúdo Welcome */
    #welcome-content {
        text-align: center;
    }

    #welcome-content h1 {
        font-size: 3rem;
        color: #6b4e31;
        margin-bottom: 1rem;
    }

    #welcome-content p {
        font-size: 1.2rem;
        color: #4b3f2f;
    }

    #welcome-content button {
        margin-top: 2rem;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        background: #d6c8a1;
        color: #3e2f1c;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        transition: transform 0.2s, background 0.2s;
    }

    #welcome-content button:hover {
        transform: scale(1.05);
        background: #f0e6c5;
    }
</style>
</head>
<body>

<!-- Conteúdo Welcome -->
<div id="welcome-content">
    <h1>Bem-vindo ao Projeto!</h1>
    <p>Esta é a nova página inicial personalizada. Tudo está pronto para você explorar.</p>
    <button id="start-btn">Começar</button>
</div>

<script>
document.getElementById('start-btn').addEventListener('click', () => {
    // Chama o loader existente do seu projeto
    if(typeof showLoader === 'function') {
        showLoader(4000, () => {
            // Redireciona após o loader
            window.location.href = '/pagina-do-projeto'; // substitua pela rota real
        });
    } else {
        // fallback se o loader não existir
        window.location.href = '/pagina-do-projeto';
    }
});
</script>

</body>
</html>