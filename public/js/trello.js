/**
 * Created by user on 19/11/2015.
 */

/* Tarefas da API do trello -  ainda em desenvolvimento
- ver usuário trello
- ver quadros
- ver lista
-ver cartão


Agendar (criar acartão)
- escolher quadro, escolher lista.
* name:
* desc:
* pos:
* due: (data)
* idList: (lista de destino)
*
*
* OU usar o web hook  - me parece mais simples e funcional


 */


function criar_quadro(nome, descr) {
   // TODO veriicar antes se está logado
   // não tenho a rotina ainda

    Trello.addCard({
        name: nome,
        desc: descr,
        pos: 'top'



    })
}