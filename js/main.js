function envio_php(caminho, dados, metodo = 'POST') {
    return new Promise((resolve, reject) => {
        const xhr = new XMLHttpRequest();
        xhr.open(metodo, caminho, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onload = function () {
            if (xhr.status === 200) {
                resolve(xhr.responseText);
            } else {
                reject(`Erro na requisição: ${xhr.status}`);
            }
        };

        xhr.onerror = function () {
            reject('Erro de conexão.');
        };

        const jsonData = JSON.stringify(dados);
        xhr.send(jsonData);
    });
}


class cesta {
    constructor() {
        
    }
    actualizar(){

    }

    async adicionar(id) {
        var dados = {
            id:id
        };
        
        const resposta = await envio_php("src/cesta_process.php?adicionar", dados); 
        if (resposta) {
            this.actualizar();
        }else{
            return false;
        }

        return true;
    }
    async retirar(id) {
        var dados = {
            id:id
        };
        
        const resposta = await envio_php("src/cesta_process.php?retirar", dados); 
        if (resposta) {
            this.actualizar();
        }else{
            return false;
        }

        return true;
    }
    async pegar(numero = false) {
        var dados = null;
        const resposta = await envio_php("src/cesta_process.php?pegar", dados); 
        if (numero) {
            if (dados = resposta) {
                this.actualizar();
            }else{
                return false;
            }

            div = window.document.querySelector("#cesta_produtos");
            div.innerHTML = "";

            dados.forEach(element => {
                var nome = element['nome'];
                var qtd = element['qtd'];
                var img = element['img'];

               var html = `<div class='conteiner produto'>
                    <div class='row'>
                        <div class='col'>
                            <img src='`+img+`' alt=''>
                        </div>
                        <div class='col'>
                            <div class='row nome'>Nome: `+nome+`</div>
                            <div class="row qtd">QTD: `+qtd+`</div>
                        </div>
                    </div>
                </div>`; 
                div.innerHTML += html;
            });

        }else{
            const resposta = await envio_php("src/cesta_process.php?pegar_qtd", dados); 
            if (resposta) {
                this.actualizar();
            }else{
                return false;
            }
        }
        return false;
    }
}