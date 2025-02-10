const body = document.querySelector("body"),
    sidebar = body.querySelector(".sidebar"),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    });

    modeSwitch.addEventListener("click", () => {
        body.classList.toggle("dark");

        if(body.classList.contains("dark")) {
            modeText.innerText = "Light Mode";
        } else {
            modeText.innerText = "Dark Mode";
        }
    });
// Esconder e mostrar o conteúdo
// Seleciona os links e as seções de conteúdo
const homeLink = document.getElementById('homeLink');
const usersLink = document.getElementById('usersLink');
const consultasLink = document.getElementById('consultasLink');

const homeContent = document.getElementById('homeContent');
const usersContent = document.getElementById('usersContent');
const consultasContent = document.getElementById('consultasContent');

// Função para ocultar todas as seções
function hideAllSections() {
    homeContent.classList.add('hidden');
    usersContent.classList.add('hidden');
    consultasContent.classList.add('hidden');
}

// Evento para exibir a Home
homeLink.addEventListener('click', (e) => {
    e.preventDefault(); // Evita o comportamento padrão do link
    hideAllSections(); // Oculta todas as seções
    homeContent.classList.remove('hidden'); // Exibe a Home
});

// Evento para exibir Usuários
usersLink.addEventListener('click', (e) => {
    e.preventDefault();
    hideAllSections();
    usersContent.classList.remove('hidden');
});

// Evento para exibir Consultas
consultasLink.addEventListener('click', (e) => {
    e.preventDefault();
    hideAllSections();
    consultasContent.classList.remove('hidden');
});

// Adiciona a classe .active ao link clicado
homeLink.addEventListener('click', () => {
    homeLink.classList.add('active');
    usersLink.classList.remove('active');
    consultasLink.classList.remove('active');
});

usersLink.addEventListener('click', () => {
    usersLink.classList.add('active');
    homeLink.classList.remove('active');
    consultasLink.classList.remove('active');
});

consultasLink.addEventListener('click', () => {
    consultasLink.classList.add('active');
    homeLink.classList.remove('active');
    usersLink.classList.remove('active');
});