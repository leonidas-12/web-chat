
/*----------------------------------------chat-menu-----------------------------------------------*/
let menuItems = document.querySelectorAll(".menu-items");

function hover(){
    menuItems.forEach((all)=>{
        all.classList.remove("menu-items-click");
        this.classList.add("menu-items-click");
    })
}

menuItems.forEach((all)=>{
    all.addEventListener("click", hover);
})

/*------------------------------------------sign in page-------------------------------------------- */

function eye() {

    let show_eye = document.getElementById("password-show");
    let hide_eye = document.getElementById("hide-password");
    let pass_input = document.getElementById("pass[type='password']");

    /* display the password after taping a first charactere*/
    try {
        pass_input.addEventListener("input", (e)=>{
        show_eye.style.display = "flex";
        if (e.currentTarget.value == 0) {
            show_eye.style.display = "none";
        }})

        /* show password */
        show_eye.addEventListener("click", ()=>{
        pass_input.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "flex";
        hide_eye.style.marginRight = "0.8rem"
        });
        /* hide password */
        hide_eye.addEventListener("click", ()=>{
        pass_input.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
        });  
    } catch (pass_input) {
        console.error("pass is null");
    }

}

eye();

/*------------------------------------------chat-------------------------------------------- */

const user_content = document.getElementById("search-user-content");
const user_input = document.getElementById("search-user-input");

const get_user = async search_text =>{
    const response = await fetch("/messagerie/search.php");
    const all_data = await response.json();

    let matches = all_data.filter(data =>{
    const regex = new RegExp(`^${search_text}`, 'gi');
    return data.firstname.match(regex) || data.lastname.match(regex);
    });


    if(search_text.length < 1){
        user_content.innerHTML = "";
        return matches = [] ;
    }

    display(matches);
}; 

let a = [] === 0;

const display = matches =>{
    if(matches !=a){
         const html = matches.map(user=>`
                <div class="user-contact">
                    <div id="circle"></div>
                        <ul>
                            <li>${user.firstname} </li>
                            <li>${user.lastname} </li> 
                        </ul>
                    </div>`    
                ).join("");
        user_content.innerHTML = html;
    }else{
        user_content.innerHTML = `<h1>aucun utilisateur trouvé<h1>`;
    }                
}


user_input.addEventListener("input", () => get_user(user_input.value));
