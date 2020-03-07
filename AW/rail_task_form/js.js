const jobNameInput = document.querySelector( "input.job-name" );
const form = document.querySelector( "form" );
let dateTime = new Date( Date.now() );

if (jobNameInput.value != null) {
  jobNameInput.value = "JOB#" + dateTime.toISOString();
}
form.addEventListener("reset", () => {
    setTimeout( () => {
      jobNameInput.value = "JOB#" + dateTime.toISOString();
    }, 1)
  }
);
form.addEventListener("submit", () => {
    if ( jobNameInput.value == "JOB#" + dateTime.toISOString() )
    console.info("pole nazwy nie zostalo zmienione, podmieniamy zawartosc na date i czas zatwierdzenia");
    submitDateTime = new Date( Date.now() );
    jobNameInput.value = "JOB#" + submitDateTime.toISOString();
  }
);
