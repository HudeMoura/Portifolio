function contar() {
    let ini = document.getElementById('txti')
    let fim = document.getElementById('txtf')
    let passo = document.getElementById('txtp')
    let res = document.getElementById('res')

    
    if (ini.value.length == 0 || fim.value.length == 0 || passo.value.length == 0) {
        res.innerHTML = ("[ERRO] Digite um número!")
        // alert('[ERRO] Faltam dados!')
    } else {
        res.innerHTML = 'Contando: <br>' //br = break row (pular linha)
        let incial = Number(ini.value)
        let final = Number(fim.value)
        let passos = Number(passo.value)
        if (passos <= 0) {
            alert('Passo inválido!')
            passos = 1
        }
        if (incial < final) { //Contagem crescente
            for (let contador = incial; contador <= final; contador += passos) { 
                res.innerHTML += ` ${contador} \u{1F449}`
            }
        } else { //Contagem regressiva
            for (let contador = incial; contador <= final; contador += passos) { 
                res.innerHTML += ` ${contador} \u{1F449}`
            }
        }
        res.innerHTML += `\u{1F3C1}`
    }
}