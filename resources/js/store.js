import Vue from 'vue';

// Inserire qui variabili da passare ai componenti
const state = Vue.observable(
   {
      bannerText: ['Enjoy', 'your', 'trip']
   }
);

export default state;

// Submit function
const createSubmit = document.getElementById('create-submit')

if( createSubmit ) {
   createSubmit.addEventListener("click", function(e) {

      if( !titleValidation() ) { // validazioni NON a buon fine
         console.log('prevent')
         e.preventDefault()
      } else { // validazioni a buon fine
         console.log(' notprevent')
      }
      // createSubmit.unbind().submit()
   })
}

// TITOLO
const title = document.getElementById('title')
if( title ) {
   title.addEventListener("change", titleValidation);
}

function titleValidation() {
   const titleValue = title.value.trim()

   const error = document.getElementById('title-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   title.parentElement.append(error)

   if( !titleValue instanceof String ) {
      errorMessage = 'Il titolo deve essere una stringa'
      setErrorFor(title)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(titleValue.length < 5) {
      errorMessage = 'Il titolo deve essere di almeno 5 caratteri'
      setErrorFor(title)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(titleValue.length > 255) {
      errorMessage = 'Il titolo deve essere al massimo di 255 caratteri'
      setErrorFor(title)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(title)
      // console.log("success")
      return true
   }

   return false
}

function setErrorFor(input) {
   input.className = 'form-control is-invalid'
}

function setSuccessFor(input) {
   input.className = 'form-control is-valid'
}


// APPUNTI MICA ----

// animazione componente SectionVue, che ovviamente qui da errori quindi ggwp 

// export function thumbAnimation(){
//    let tl = gsap.timeline({default: {duration: 3}});

//    tl.to('.card', {borderTopColor: '#bad', delay: 0.3})
//    .to('.card', {borderRightColor: '#bad'}, '-=0.2')
//    .to('.card', {borderBottomColor: '#bad'}, '-=0.2')
//    .to('.card', {borderLeftColor: '#bad'}, '-=0.2')

//    // animation for img-wrapper 
//    gsap.fromTo('.img-wrapper', {height: 0, backgroundColor: 'transparent'}, {delay: 1, duration: 1, height: '500px', backgroundColor: '#bad'})

//    // animation
//    gsap.to('.img', {delay: 2, duration: 0.5, opacity: 1})
// }