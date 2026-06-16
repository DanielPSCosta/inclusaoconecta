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

    if (localStorage.getItem('app_instalado') === 'true') {
        return;
    }

    e.preventDefault();
    deferredPrompt = e;

    const toast = new bootstrap.Toast(
        document.getElementById('installToast'),
        {
            autohide: false
        }
    );

    toast.show();
});

document.getElementById('btnInstalar').addEventListener('click', async () => {

    if (!deferredPrompt) return;

    deferredPrompt.prompt();

    const { outcome } = await deferredPrompt.userChoice;

    console.log('Resultado:', outcome);

    if (outcome === 'accepted') {

        const toastElement = document.getElementById('installToast');
        const toast = bootstrap.Toast.getInstance(toastElement);

        if (toast) {
            toast.hide();
        }
    }

    deferredPrompt = null;
});

window.addEventListener('appinstalled', () => {

    localStorage.setItem('app_instalado', 'true');

    const toastElement = document.getElementById('installToast');
    const toast = bootstrap.Toast.getInstance(toastElement);

    if (toast) {
        toast.hide();
    }

    console.log('Aplicativo instalado!');
});