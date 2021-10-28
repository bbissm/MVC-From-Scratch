window.onload = function () {
        alert();

    const slider = document.getElementById("myRange");
    const output = document.getElementById("demo");
    const posts = document.querySelectorAll(".geschmackContainer");
    const resetRange = document.getElementById("resetRange");
    const ratingSelect = document.getElementById("ratingSelect");

    const filter = {"rating": 0, "geschmack": 0};

    console.log(ratingSelect);


    // Function Filter
    const filterEntry = function(){
        posts.forEach(post => {
            console.log(filter);
            post.classList.remove("is-hidden");

            //Filter Geschmack
            let geschmack = parseInt(post.dataset.geschmack);
            if(filter.geschmack !== 0 && filter.geschmack !== geschmack) {
                post.classList.add("is-hidden");
            }
            //Filter Rating
            let rating = parseInt(post.dataset.rating);
            if(filter.rating !== 0 && filter.rating !== rating){
                post.classList.add("is-hidden");
            }
        });
    };
    // Update the current slider value (each time you drag the slider handle)
    slider.oninput = function() {
        if(this.value !== 0){
            output.innerHTML = this.value;
        }
        filter.geschmack = parseInt(this.value);
        filterEntry();

    }
    ratingSelect.addEventListener("change", function(){
        filter.rating = parseInt(this.value);
        filterEntry();
    });



    resetRange.addEventListener("click", function(){
        output.innerHTML = "";
        slider.value = 0;
        filter.geschmack = 0;
    });

}

function vueJS() {
    const test = document.getElementById("test");
    if(test){
        //var vue = new Vue({
            //el: '#test',
            //data: {
                //firstname: '',
                //lastname: ''
            //}//,
            // methods: {
            // 	write: function() {
            // 		return this.firstname+" "+this.lastname;
            // 	}
            // }
        //})
    }

}



$(document).ready(function(){
    var accordions = bulmaAccordion.attach(); // accordions now contains an array of all Accordion instances
    vueJS();


});