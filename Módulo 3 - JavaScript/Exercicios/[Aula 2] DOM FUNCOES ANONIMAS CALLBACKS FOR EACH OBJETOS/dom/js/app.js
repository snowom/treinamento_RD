window.onload = function() {
    /*getElementById*/
    //  let headerElement = document.getElementById('header');
    //  console.log(headerElement);
    //  let titulo = document.getElementById('titulo');
    //  titulo.style.backgroundColor = 'red';

    /*querySelector*/
    //  let section = document.querySelector('.section');
    //  console.log(section);
    //  let articleSelector = document.querySelector('.article');
    //  articleSelector.style.color = 'purple';
    //  console.log(articleSelector);

     /*querySelector*/
    //  let articleAll = document.querySelectorAll('.article');
    // articleAll.forEach(function(value) {
    //     value.style.backgroundColor = 'blue';
    // });
    // console.log(articleAll);

    //  for (let i = 0; i < article.length; i++) {
    //      articleAll[i].style.backgroundColor = 'blue';
    //  }
    
    /*atributos*/
    let headerElement = document.getElementById('header');
    let imgElement = document.getElementById('img-teste');
    let article = document.getElementById("article-teste");

    /*retorna uma lista de atributos*/
    // console.log(headerElement.attributes);

    /*retorna o atributo e seu valor*/
    // console.log(imgElement.attributes.src);

        /*getAttribute - retorna apenas o valor do atributo*/
        // console.log(imgElement.getAttribute("src"));

        /*setAttribute*/
        // article.setAttribute('class', 'corinthians');

        /* adiciona classe quando ja existe o atributo class*/
        // article.classList.add("maisumaclass");

        /* remove classe quando ja existe o atributo class*/
        // articleteste.classList.remove("corinthians")

        /*hasAttribute*/
        // console.log(article.hasAttribute("src")); //false
        // console.log(article.hasAttribute("class")); //true

        /*removeAttribute*/
        // article.removeAttribute("class")


    /*estilos*/
    // let styleArticle = article.style
    // styleArticle.fontFamily = "Arial";
    // styleArticle.fontSize = "20px";
    // styleArticle.fontWeight = "bold";

    /*createElement*/
    // let btn = document.createElement("button");
    /*createTextNode*/
    // let texto = document.createTextNode("Olá, sou um texto");

    /*appendChild*/
    // let li = document.createElement("li");
    // let textoLi = document.createTextNode("Item lista");
    // li.appendChild(textoLi);

    // let lista = document.getElementById("minhaLista");
    // lista.appendChild(li);

    /*textContent - retorna o texto*/
    document.getElementById("titulo").textContent;

    /*textContent - altera o texto*/
    document.getElementById("titulo").textContent = "titulo modificado";

    /*innerHTML*/
    let lista = document.getElementById("minhaLista");
    lista.innerHTML = "<li>Item lista por innerHTML</li>";

    /*removeChild*/
    let elementoPai = document.querySelector(".section");
    let elementoFilho = elementoPai.children.item(0);
    elementoPai.removeChild(elementoFilho);
};

