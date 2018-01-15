// init a 'global closure'

(function() {
    let container = document.querySelector('.tx_enenos_slider');
    
    
    let properties = {
        duration: 5,
        type: ''
    };
    // Let's start this party if its here ;) 
    if (container !== 'undefined'){
        let slides = document.querySelector('.tx_enenos_slider .slides');
        if (!checkCount(slides)) 
            return;
        
            
    } else {
        return; 
    }
    


    function checkCount(slides) {
        if (slides.children.length > 10) 
            return false;
    }
})();