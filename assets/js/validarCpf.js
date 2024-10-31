// Função para validar CPF
function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, ''); // Remove caracteres não numéricos

    if (cpf == '' || cpf.length != 11) {
        alert("CPF inválido");
        document.getElementById('cpf1').value = ""; // Limpa o campo CPF
        return false;
    }

    // Verifica se todos os dígitos são iguais
    if (/^(\d)\1+$/.test(cpf)) {
        alert("CPF inválido");