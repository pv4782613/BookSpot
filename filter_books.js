//BCA Books
let products={
    data:[
        {
        productName:"PYTHON",
        category:"BCA",
        image:"images/python.jpg",
        rating:"4.5",
		a1:"display_book.php"
        },
        {
            productName:"Core JAVA",
            category:"BCA",
            image:"images/java.jpg",
            rating:"3.2"
        },
        {
            productName:"Object Oriented SE",
            category:"BCA",
            image:"images/oose.jpg",
            rating:"4.2"
        },

        {
            productName:"Cyber Security",
            category:"BCA",
            image:"images/cs.jpg",
            rating:"4.9"
        },
        {
            productName:"Data Structure",
            category:"BCA",
            image:"images/data_structure.jpg",
            rating:"4.9"
        },
        {
           productName:"DBMS",
            category:"BCA",
            image:"images/dbms.jpg",
            rating:"4.9"
        },
        {
            productName:"Software Engineering",
            category:"BCA",
            image:"images/SE.jpg",
            rating:"4.9"
        },
        {
            productName:"PHP",
            category:"BCA",
            image:"images/php1.jpg",
            rating:"4.9"
        },
        {
            productName:"Digital Marketing",
            category:"BCA",
            image:"images/digital_marketing.jpg",
            rating:"4.9"
        },
        {
			productName:"Mongo DB",
            category:"BCA",
            image:"images/mongo_db.jpg",
            rating:"4.9"
        },
        {
            productName:"Internet of Things",
            category:"BCA",
            image:"images/iot.jpg",
            rating:"4.9"
        },
        {
            productName:"Advanced Web Technology",
            category:"BCA",
            image:"images/web.jpg",
            rating:"4.9"
        },
    ],
};


for(let i of products.data)
{
	//Creating element div (card) through js 
    let card=document.createElement("div");

    card.classList.add("card",i.category,"hide");

	//Creating element div (imgContainer) through js
    let imgContainer=document.createElement("div");

    imgContainer.classList.add("image-container");

	//Creating element img through js
    let image=document.createElement("img");

    image.setAttribute("src",i.image);

    imgContainer.appendChild(image);

    card.appendChild(imgContainer);

	//Creating element div (container) through js
    let container=document.createElement("div");
    container.classList.add("container");

	//Creating element h5 through js
    let name=document.createElement("h5");
    name.classList.add("product-name");
    name.innerText=i.productName.toUpperCase();
    container.appendChild(name);

    //Creating element h4 through js
    let rating=document.createElement("h4");
    
    rating.innerText=i.rating+"*";
    container.appendChild(rating);
	
	//Creating element a through js
	let a1 = document.createElement("a");
    a1.setAttribute("href", i.a1);
    a1.setAttribute("target", "_blank");
    a1.innerText = "View More";
    container.appendChild(a1);
	

    card.appendChild(container);
    document.getElementById("products").appendChild(card);
}







function filterProducts(value)
{
    let buttons=document.querySelectorAll(".button-value");
    buttons.forEach(button=>{
         if(value.toUpperCase()==button.innerText.toUpperCase())
        {
            button.classList.add("active");
        }
        else
        {
            button.classList.remove("active");
        }
		});

    //

    let elements=document.querySelectorAll(".card");
//
    elements.forEach((element)=>{
    if(value=='All')
    {
        element.classList.remove("hide");
    }
    else
	{
        if(element.classList.contains(value)){
            element.classList.remove("hide");
        }
        else{
            element.classList.add("hide");
        }
    }
});
}



//Search button
document.getElementById("search").addEventListener("click",()=>{
    let searchInput=document.getElementById("search-input").value;
    let elements=document.querySelectorAll(".product-name");
    let cards=document.querySelectorAll(".card");

    elements.forEach((element,index)=>{
        if(element.innerText.includes(searchInput.toUpperCase())){
            cards[index].classList.remove("hide");
        }
        else
        {
            cards[index].classList.add("hide");
        }
    });

});


window.onload = () => {
    filterProducts("All");
};


