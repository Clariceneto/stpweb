# STP Web Project

Projeto web desenvolvido com **Laravel**, incluindo melhorias de experiência do usuário, interfaces dinâmicas e páginas de erro personalizadas.

---

## Funcionalidades Implementadas

### 1. Página de Boas-Vindas (Welcome)
- Layout inicial totalmente personalizável.
- Integração com **loader animado** antes de acessar o restante do projeto.
- Design moderno e responsivo.

### 2. Loader Animado
- Loader com a letra "W" pulsando como um coração.
- Opções de loader com imagem personalizada.
- Suporte a cores, bordas suaves e efeitos dinâmicos.
- Transparente, permitindo manter o fundo da página visível.
- Delay configurável (atualmente 4 segundos) antes de prosseguir.
- Aparece ao clicar em links ou enviar formulários, melhorando UX.

### 3. Página de Erro Dinâmica
- Página única para todos os erros HTTP (`403`, `404`, `500` etc.).
- Efeitos animados:
  - Números de erro caindo como uma casa desmoronando.
  - Efeito reverso: números quebrados voltam a se formar.
- Fundo com partículas flutuantes para maior dinamismo.
- Mensagens personalizadas de acordo com o código de erro.

### 4. Integração e Reutilização
- Loader e página de erro podem ser facilmente aplicados em outros projetos.
- Componentes separados (`@include('components.loading')`) para modularidade.

---

## Como Usar

1. Clonar o repositório:

```bash
git clone https://github.com/Clariceneto/stpweb.git
cd stpweb

Instalar dependências do Laravel:

composer install
npm install
npm run dev

Configurar ambiente:

cp .env.example .env
php artisan key:generate

Rodar o servidor:

php artisan serve

Abrir o navegador em http://127.0.0.1:8000.

Estrutura de Arquivos Relevante
app/
├─ Http/
│  └─ Controllers/
resources/
├─ views/
│  ├─ welcome.blade.php      # Página de boas-vindas
│  ├─ errors/                # Página de erro dinâmica
│  │  └─ error.blade.php
│  └─ components/
│     └─ loading.blade.php   # Loader animado
public/
├─ css/
├─ js/
├─ images/
│  └─ loading.jpeg           # Loader com imagem
Notas

As páginas de erro e o loader são dinâmicos, podendo ser reutilizados em outros projetos Laravel.

Todos os efeitos foram feitos com HTML, CSS moderno (keyframes, gradientes, sombras) e JavaScript.

Loader suporta cores, transparência e efeitos suaves, melhorando a experiência do usuário.
