const handlePhone = (event) => {
    let input = event.target
    input.value = phoneMask(input.value)
  }
  
  const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
  }

  const itensPerguntasERespostas = document.querySelectorAll(".item");

itensPerguntasERespostas.forEach(function (item){
    item.addEventListener("click", function (){
        const itemAtivoAtual = document.querySelector(".ativo");

        if(itemAtivoAtual){
            itemAtivoAtual.classList.remove("ativo");
        }

        item.classList.add("ativo");
    });
});

