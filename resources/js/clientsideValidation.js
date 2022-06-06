// Submit function
const houseSubmit = document.getElementById('house-submit')

if( houseSubmit ) {
   houseSubmit.addEventListener("click", function(e) {

      if( // validazioni NON a buon fine
         !titleValidation() ||
         !roomNumValidation() ||
         !bedsNumValidation() ||
         !toiletsNumValidation() ||
         !squareMetersValidation() ||
         !imageValidation() ||
         !costValidation()
      ) { 
         console.log('PREVENT')
         e.preventDefault()
      } else { // validazioni a buon fine
         console.log('SUBMIT')
      }
      // houseSubmit.unbind().submit()
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
   } else if(titleValue.length < 5 || titleValue.length > 255) {
      errorMessage = 'Il titolo deve avere un numero di caratteri compreso tra 5 e 255'
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

// NUM CAMERE
const roomNum = document.getElementById('room_num')
if( roomNum ) {
   roomNum.addEventListener("change", roomNumValidation);
}

function roomNumValidation() {
   const roomNumValue = roomNum.value.trim()

   const error = document.getElementById('room_num-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   roomNum.parentElement.append(error)

   if( !roomNumValue instanceof Number ) {
      errorMessage = 'Il numero di camere deve essere un numero'
      setErrorFor(roomNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(roomNumValue < 1 || roomNumValue > 15) {
      errorMessage = 'Il numero di camere deve essere compreso tra 1 e 15'
      setErrorFor(roomNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(roomNum)
      // console.log("success")
      return true
   }

   return false
}

// POSTI LETTO
const bedsNum = document.getElementById('beds_num')
if( bedsNum ) {
   bedsNum.addEventListener("change", bedsNumValidation);
}

function bedsNumValidation() {
   const bedsNumValue = bedsNum.value.trim()

   const error = document.getElementById('beds_num-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   bedsNum.parentElement.append(error)

   if( !bedsNumValue instanceof Number ) {
      errorMessage = 'Il numero di posti letto deve essere una numero'
      setErrorFor(bedsNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(bedsNumValue < 1 || bedsNumValue > 30) {
      errorMessage = 'Il numero di posti letto deve compreso tra 1 e 30'
      setErrorFor(bedsNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(bedsNum)
      // console.log("success")
      return true
   }

   return false
}

// BAGNI
const toiletsNum = document.getElementById('toilets_num')
if( toiletsNum ) {
   toiletsNum.addEventListener("change", toiletsNumValidation);
}

function toiletsNumValidation() {
   const toiletsNumValue = toiletsNum.value.trim()

   const error = document.getElementById('toilets_num-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   toiletsNum.parentElement.append(error)

   if( !toiletsNumValue instanceof Number ) {
      errorMessage = 'Il numero di bagni deve essere una numero'
      setErrorFor(toiletsNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(toiletsNumValue < 1 || toiletsNumValue > 15) {
      errorMessage = 'Il numero di bagni deve essere compreso tra 1 e 15'
      setErrorFor(toiletsNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(toiletsNum)
      // console.log("success")
      return true
   }

   return false
}

// METRI QUADRI
const squareMeters = document.getElementById('square_meters')
if( squareMeters ) {
   squareMeters.addEventListener("change", squareMetersValidation);
}

function squareMetersValidation() {
   const squareMetersValue = squareMeters.value.trim()

   const error = document.getElementById('square_meters-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   squareMeters.parentElement.append(error)

   if( !squareMetersValue instanceof Number ) {
      errorMessage = 'Il numero metri quadri deve essere una numero'
      setErrorFor(squareMeters)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(squareMetersValue < 20 || squareMetersValue > 300) {
      errorMessage = 'Il numero metri quadri deve essere compreso tra 20 e 300'
      setErrorFor(squareMeters)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(squareMeters)
      // console.log("success")
      return true
   }

   return false
}

// IMMAGINE
const image = document.getElementById('image')
if( image ) {
   image.addEventListener("change", imageValidation);
}

function imageValidation() {
   const imageValue = image.value.trim()

   const error = document.getElementById('image-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   image.parentElement.append(error)

   if( !imageValue instanceof String ) {
      errorMessage = "L'url dell'immagine deve essere una stringa"
      setErrorFor(image)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if( imageValue.indexOf('http://') !== 0 && imageValue.indexOf('https://') !== 0 ) {
      errorMessage = 'Non hai inserito un url'
      setErrorFor(image)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(image)
      // console.log("success")
      return true
   }

   return false
}

// COSTO PER NOTTE
const cost = document.getElementById('cost_per_night')
if( cost ) {
   cost.addEventListener("change", costValidation);
}

function costValidation() {
   let costValue = Math.round(cost.value.trim() * 100) / 100

   const error = document.getElementById('cost_per_night-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   cost.parentElement.append(error)

   if( !costValue instanceof Number ) {
      errorMessage = "Il costo per notte deve essere un numero"
      setErrorFor(cost)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(costValue < 10 || costValue > 1000) {
      errorMessage = 'Il costo per notte deve essere compreso tra 10 e 1000'
      setErrorFor(squareMeters)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else {
      error.className = ''
      error.innerHTML = ''
      setSuccessFor(cost)
      // console.log("success")
      return true
   }

   return false
}

// ERROR/SUCCESS CLASSES
function setErrorFor(input) {
   input.className = 'form-control is-invalid'
}

// [TODO] manca validazione position_id, user_id, service, is_visible

function setSuccessFor(input) {
   input.className = 'form-control is-valid'
}