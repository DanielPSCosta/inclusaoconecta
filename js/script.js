const TAMANHO_PADRAO = 16;

let tamanho = parseInt(
    localStorage.getItem('fonte') || TAMANHO_PADRAO
);

aplicarFonte();

document.getElementById('aumentar').onclick = () => {
    tamanho += 2;
    aplicarFonte();
};

document.getElementById('diminuir').onclick = () => {
    tamanho -= 2;
    aplicarFonte();
};

document.getElementById('resetar').onclick = () => {
    tamanho = TAMANHO_PADRAO;
    aplicarFonte();
};

function aplicarFonte() {
    tamanho = Math.max(12, Math.min(32, tamanho)); // Limites
    document.documentElement.style.fontSize = tamanho + 'px';
    localStorage.setItem('fonte', tamanho);
}












///////////////////////////////////////////////////////////
// Botão para instalar app que aparece no inicio da tela //
///////////////////////////////////////////////////////////
let deferredPrompt;

window.addEventListener('beforeinstallprompt', (e) => {
    e.preventDefault();

    deferredPrompt = e;

    const modal = new bootstrap.Modal(
        document.getElementById('installModal')
    );

    modal.show();
});

document.getElementById('btnInstalar').addEventListener('click', async () => {

    if (!deferredPrompt) return;

    deferredPrompt.prompt();

    const { outcome } = await deferredPrompt.userChoice;

    console.log(`Resultado da instalação: ${outcome}`);

    if (outcome === 'accepted') {
        const modalElement = document.getElementById('installModal');
        const modal = bootstrap.Modal.getInstance(modalElement);

        if (modal) {
            modal.hide();
        }
    }

    deferredPrompt = null;
});

window.addEventListener('appinstalled', () => {

    console.log('Aplicativo instalado com sucesso!');

    const modalElement = document.getElementById('installModal');
    const modal = bootstrap.Modal.getInstance(modalElement);

    if (modal) {
        modal.hide();
    }

    deferredPrompt = null;
});
