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

// NUM CAMERE
const roomNum = document.getElementById('room_num')
if( roomNum ) {
   roomNum.addEventListener("change", roomNumValidation);
}

function roomNumValidation() {
   const roomNumValue = roomNum.value.trim()

   const error = document.getElementById('room-num-error')
   let errorMessage = ''
   error.className = 'alert alert-danger'
   roomNum.parentElement.append(error)

   if( !roomNumValue instanceof Number ) {
      errorMessage = 'Il numero di camere deve essere un numero'
      setErrorFor(roomNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(roomNumValue < 1) {
      errorMessage = 'Il numero di camere deve essere almeno 1'
      setErrorFor(roomNum)
      error.innerHTML = errorMessage
      // console.log(errorMessage)
   } else if(roomNumValue > 15) {
      errorMessage = 'Il numero di camere deve essere al massimo 15'
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

// ERROR/SUCCESS CLASSES
function setErrorFor(input) {
   input.className = 'form-control is-invalid'
}

function setSuccessFor(input) {
   input.className = 'form-control is-valid'
}